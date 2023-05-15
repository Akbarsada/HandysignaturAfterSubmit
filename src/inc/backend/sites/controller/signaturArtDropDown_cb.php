<?php

/* ===Signaturart=== */
function has_gv_formSignaturForm(){
  $form_tab =  $_POST['tab'];
  $name = $_POST['has_gv_formSignaturForm'];
  update_option( 'has_gv_'.$form_tab.'SignaturForm', $_POST['has_gv_formSignaturForm'] );
  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formSignaturForm', 'has_gv_formSignaturForm');
  add_action('wp_ajax_has_gv_formSignaturForm', 'has_gv_formSignaturForm');