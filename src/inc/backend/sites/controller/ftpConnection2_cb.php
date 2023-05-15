<?php

function has_gv_formFTP2Connection(){
  $form_tab =  $_POST['tab'];
  $FTP_Daten = array();



  $FTP_Connection = $_POST['has_gv_formFTP2_Connection'];


  update_option( 'has_gv_'.$form_tab.'pdfFTP2_Conection', $_POST['has_gv_formFTP2_Connection'] );



  // Zusatz Bild Postion 
 
  $FTP_Daten ['FTP_Connection'] = get_option( 'has_gv_'.$form_tab.'pdfFTP2_Conection' );



  wp_send_json_success( $FTP_Daten );
  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formFTPSpeichern', 'has_gv_formFTPSpeichern');
  add_action('wp_ajax_has_gv_formFTP2Connection', 'has_gv_formFTP2Connection');
     