<?php



 function has_gv_formAtrustSpeichern(){
   
    
  update_option( 'has_gv_form_atrust_serveraddresse', $_POST['has_gv_form_atrust_serveraddresse'] );
  update_option( 'has_gv_form_atrust_apikey', $_POST['has_gv_form_atrust_apikey'] );




  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formAtrustSpeichern', 'has_gv_formAtrustSpeichern');
  add_action('wp_ajax_has_gv_formAtrustSpeichern', 'has_gv_formAtrustSpeichern');