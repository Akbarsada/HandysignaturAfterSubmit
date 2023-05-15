<?php

 /* ===Formularauswahl Sichtbarkeit=== */
 function has_gv_formSichtbarkeitFormularAuswahlCheckboxID(){
   $form_tab =  $_POST['tab'];
    $dateiname_sichtbar = $_POST['has_gv_formSichtbarkeitFormularAuswahlCheckboxID'];
   
    update_option( 'has_gv_'.$form_tab.'SichtbarkeitFormularAuswahlCheckboxID', $_POST['has_gv_formSichtbarkeitFormularAuswahlCheckboxID'] );
    return true;
    wp_die();
    }
    add_action('wp_ajax_nopriv_has_gv_formSichtbarkeitFormularAuswahlCheckboxID', 'has_gv_formSichtbarkeitFormularAuswahlCheckboxID');
    add_action('wp_ajax_has_gv_formSichtbarkeitFormularAuswahlCheckboxID', 'has_gv_formSichtbarkeitFormularAuswahlCheckboxID');