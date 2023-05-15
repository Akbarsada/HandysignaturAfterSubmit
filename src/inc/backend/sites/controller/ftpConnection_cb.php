<?php

function has_gv_formFTPConnection(){
  $form_tab =  $_POST['tab'];
  $FTP_Daten = array();



  $FTP_Connection = $_POST['has_gv_formFTP_Connection'];


  update_option( 'has_gv_'.$form_tab.'pdfFTP_Conection', $_POST['has_gv_formFTP_Connection'] );



  // Zusatz Bild Postion 
 
  $FTP_Daten ['FTP_Connection'] = get_option( 'has_gv_'.$form_tab.'pdfFTP_Conection' );



  wp_send_json_success( $FTP_Daten );
  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formFTPSpeichern', 'has_gv_formFTPSpeichern');
  add_action('wp_ajax_has_gv_formFTPConnection', 'has_gv_formFTPConnection');
     