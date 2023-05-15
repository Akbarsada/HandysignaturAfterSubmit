<?php

            /* ===Siegel sichtbarkeit=== */
            function has_gv_formHauptsiegelSichtbarkeitCheckboxID(){
                $CheckboxData = array();
                $form_tab =  $_POST['tab'];
                $sichtbarkeitSiegel = $_POST['has_gv_formHauptsiegelSichtbarkeitCheckboxID'];
             
                update_option( 'has_gv_'.$form_tab.'HauptsiegelSichtbarkeitCheckboxID', $_POST['has_gv_formHauptsiegelSichtbarkeitCheckboxID'] );

                $CheckboxData ['CheckboxData'] = $sichtbarkeitSiegel;
                wp_send_json_success( $CheckboxData );
                return true;
                wp_die();
                }
             //   add_action('wp_ajax_nopriv_has_gv_formHauptsiegelSichtbarkeitCheckboxID', 'has_gv_formHauptsiegelSichtbarkeitCheckboxID');
                add_action('wp_ajax_has_gv_formHauptsiegelSichtbarkeitCheckboxID', 'has_gv_formHauptsiegelSichtbarkeitCheckboxID');