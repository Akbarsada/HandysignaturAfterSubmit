<?php


    /* ===Zusatzbild sichtbarkeit=== */
    function has_gv_formZusatzbildSichtbarkeitCheckboxID(){
        $CheckboxData = array();
        $form_tab =  $_POST['tab'];
        $sichtbarkeitSiegel = $_POST['has_gv_formZusatzbildSichtbarkeitCheckboxID'];
     
        update_option( 'has_gv_'.$form_tab.'ZusatzbildSichtbarkeitCheckboxID', $_POST['has_gv_formZusatzbildSichtbarkeitCheckboxID'] );

        $CheckboxData ['CheckboxData'] = $sichtbarkeitSiegel;
        wp_send_json_success( $CheckboxData );
        return true;
        wp_die();
        }
     //   add_action('wp_ajax_nopriv_has_gv_formZusatzbildSichtbarkeitCheckboxID', 'has_gv_formZusatzbildSichtbarkeitCheckboxID');
        add_action('wp_ajax_has_gv_formZusatzbildSichtbarkeitCheckboxID', 'has_gv_formZusatzbildSichtbarkeitCheckboxID');