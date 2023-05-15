<?php
/* ===Grund sichtbarkeit=== */
function has_gv_formZeitstempelSichtbarkeitCheckboxID(){
    $CheckboxData = array();
    $form_tab =  $_POST['tab'];
    $sichtbarkeitSiegel = $_POST['has_gv_formZeitstempelSichtbarkeitCheckboxID'];
 
    update_option( 'has_gv_'.$form_tab.'ZeitstempelSichtbarkeitCheckboxID', $_POST['has_gv_formZeitstempelSichtbarkeitCheckboxID'] );

    $CheckboxData ['CheckboxData'] = $sichtbarkeitSiegel;
    wp_send_json_success( $CheckboxData );
    return true;
    wp_die();
    }
   // add_action('wp_ajax_nopriv_has_gv_formZeitstempelSichtbarkeitCheckboxID', 'has_gv_formZeitstempelSichtbarkeitCheckboxID');
    add_action('wp_ajax_has_gv_formZeitstempelSichtbarkeitCheckboxID', 'has_gv_formZeitstempelSichtbarkeitCheckboxID');