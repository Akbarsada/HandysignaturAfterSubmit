<?php

     /* ===Template PDF Sichtbarkeit=== */
     function has_gv_formSichtbarkeitPDF_TemplateCheckboxID(){
      $form_tab =  $_POST['tab'];
        update_option( 'has_gv_'.$form_tab.'SichtbarkeitPDF_TemplateCheckboxID', $_POST['has_gv_formSichtbarkeitPDF_TemplateCheckboxID'] );
        
        global $wpdb;
        $Form_Id = get_option( 'has_gv_'.$form_tab.'ID' );
        $Fields_all_gf_array_meta =  $wpdb->get_results("SELECT `display_meta` FROM `{$wpdb->prefix}gf_form_meta` WHERE json_length(JSON_EXTRACT(display_meta, '$.gfpdf_form_settings')) > 0 AND
        JSON_EXTRACT(display_meta, '$.id') = $Form_Id ");
      
      //$GF_fields = array();
      foreach($Fields_all_gf_array_meta as $value){
        $all_gf_array_test2 = get_object_vars( $value);
        foreach($all_gf_array_test2 as $all_gf_array_test3){
            $newValue  = json_decode( $all_gf_array_test3, true); 
            $GF_id = $newValue['fields'];
            foreach($GF_id as $GF_info){
              $GF_fields .= '<span>{'. $GF_info['label'] . ':' .  $GF_info['id'] . '}</span>';        
            }
        }
      }
      update_option( 'has_gv_'.$form_tab.'GF_fields', $GF_fields);
      wp_send_json_success( $GF_fields );
        return true;
        wp_die();
        }
        add_action('wp_ajax_nopriv_has_gv_formSichtbarkeitPDF_TemplateCheckboxID', 'has_gv_formSichtbarkeitPDF_TemplateCheckboxID');
        add_action('wp_ajax_has_gv_formSichtbarkeitPDF_TemplateCheckboxID', 'has_gv_formSichtbarkeitPDF_TemplateCheckboxID');