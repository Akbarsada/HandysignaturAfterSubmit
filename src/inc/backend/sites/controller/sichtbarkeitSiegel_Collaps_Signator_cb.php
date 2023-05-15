<?php

        /* ===Signator sichtbarkeit=== */
        function has_gv_formSignatorSichtbarkeitCheckboxID(){
          $CheckboxData = array();
            $form_tab =  $_POST['tab'];
            $sichtbarkeitSiegel = $_POST['has_gv_formSignatorSichtbarkeitCheckboxID'];
         
            update_option( 'has_gv_'.$form_tab.'SignatorSichtbarkeitCheckboxID', $sichtbarkeitSiegel);

            $CheckboxData ['CheckboxData'] = $sichtbarkeitSiegel;
            wp_send_json_success( $CheckboxData );
            return true;
            wp_die();
            }
          //  add_action('wp_ajax_nopriv_has_gv_formSignatorSichtbarkeitCheckboxID', 'has_gv_formSignatorSichtbarkeitCheckboxID');
            add_action('wp_ajax_has_gv_formSignatorSichtbarkeitCheckboxID', 'has_gv_formSignatorSichtbarkeitCheckboxID');