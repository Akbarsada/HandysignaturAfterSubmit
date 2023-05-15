<?php

 /* ===Speicherpfade Wordpress=== */
 function has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID(){
    $form_tab =  $_POST['tab'];
  $dateiname_sichtbar = $_POST['has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID'];
 
  update_option( 'has_gv_'.$form_tab.'sichtbarkeitSpeicherPfadeWPCheckboxID', $_POST['has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID'] );
  return true;
  wp_die();
  }
//  add_action('wp_ajax_nopriv_has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID', 'has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID');
  add_action('wp_ajax_has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID', 'has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID');
