<?php

/* ===Zertifikatsdatei=== */
function has_gv_formZertifikatsDateiJaNeinCheckboxID(){
  $form_tab =  $_POST['tab'];
 
  $sichtbarkeitSiegel = $_POST['has_gv_formZertifikatsDateiJaNeinCheckboxID'];

  update_option( 'has_gv_'.$form_tab.'ZertifikatsDateiJaNeinCheckboxID', $_POST['has_gv_formZertifikatsDateiJaNeinCheckboxID'] );
  return true;
  wp_die();
  }
//  add_action('wp_ajax_nopriv_has_gv_formZertifikatsDateiJaNeinCheckboxID', 'has_gv_formZertifikatsDateiJaNeinCheckboxID');
  add_action('wp_ajax_has_gv_formZertifikatsDateiJaNeinCheckboxID', 'has_gv_formZertifikatsDateiJaNeinCheckboxID');

