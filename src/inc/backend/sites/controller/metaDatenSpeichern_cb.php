<?php

function has_gv_formMetaDatenSpeichern(){
  $form_tab =  $_POST['tab'];
  $name = $_POST['has_gv_formSiegelTemplatesName'];
  $author = $_POST['has_gv_formSiegelTemplatesAuthor'];
  $description = $_POST['has_gv_formSiegelTemplatesDescription'];
  update_option( 'has_gv_'.$form_tab.'SiegelTemplatesName', $_POST['has_gv_formSiegelTemplatesName'] );
  update_option( 'has_gv_'.$form_tab.'SiegelTemplatesAuthor', $_POST['has_gv_formSiegelTemplatesAuthor'] );
  update_option( 'has_gv_'.$form_tab.'SiegelTemplatesDescription', $_POST['has_gv_formSiegelTemplatesDescription'] );


  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formMetaDatenSpeichern', 'has_gv_formMetaDatenSpeichern');
  add_action('wp_ajax_has_gv_formMetaDatenSpeichern', 'has_gv_formMetaDatenSpeichern');