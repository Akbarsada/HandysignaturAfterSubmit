<?php

/* ===Ort sichtbarkeit=== */
function has_gv_formOrtSichtbarkeitCheckboxID(){
    $CheckboxData = array();
    $form_tab =  $_POST['tab'];
    $sichtbarkeitSiegel = $_POST['has_gv_formOrtSichtbarkeitCheckboxID'];
 
    update_option( 'has_gv_'.$form_tab.'OrtSichtbarkeitCheckboxID', $_POST['has_gv_formOrtSichtbarkeitCheckboxID'] );

    $CheckboxData ['CheckboxData'] = $sichtbarkeitSiegel;
    wp_send_json_success( $CheckboxData );
    return true;
    wp_die();
    }
    add_action('wp_ajax_nopriv_has_gv_formOrtSichtbarkeitCheckboxID', 'has_gv_formOrtSichtbarkeitCheckboxID');
    add_action('wp_ajax_has_gv_formOrtSichtbarkeitCheckboxID', 'has_gv_formOrtSichtbarkeitCheckboxID');