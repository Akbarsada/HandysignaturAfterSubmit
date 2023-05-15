<?php

function has_gv_formFTPSpeichern(){
  $form_tab =  $_POST['tab'];
  $FTP_Daten = array();


  $FTP_serveradresse = $_POST['has_gv_formpdfFTP_Server'];
  $FTP_benutzer = $_POST['has_gv_formpdfFTP_Server_User'];
  $FTP_passwort = $_POST['has_gv_formpdfFTP_Server_Passwort'];
  $FTP_port = $_POST['has_gv_formpdfFTP_Server_Port'];
  $FTP_Connection = $_POST['has_gv_formFTP_Connection'];
	$FTP_Folder = $_POST['has_gv_formpdfFTP_Folder'];




  update_option( 'has_gv_'.$form_tab.'pdfFTP_Conection', $_POST['has_gv_formFTP_Connection'] );
  update_option( 'has_gv_'.$form_tab.'pdfFTP_Server', $_POST['has_gv_formpdfFTP_Server'] );
  update_option( 'has_gv_'.$form_tab.'pdfFTP_Server_User', $_POST['has_gv_formpdfFTP_Server_User'] );
  update_option( 'has_gv_'.$form_tab.'pdfFTP_Server_Passwort', $_POST['has_gv_formpdfFTP_Server_Passwort'] );
  update_option( 'has_gv_'.$form_tab.'pdfFTP_Server_Port', $_POST['has_gv_formpdfFTP_Server_Port'] );
  update_option( 'has_gv_'.$form_tab.'pdfFTP_Folder', 	$_POST['has_gv_formpdfFTP_Folder'] );




  // Zusatz Bild Postion 
  $FTP_Daten ['FTP_serveradresse'] = get_option( 'has_gv_'.$form_tab.'pdfFTP_Server' );
  $FTP_Daten ['FTP_benutzer'] = get_option( 'has_gv_'.$form_tab.'pdfFTP_Server_User' );
  $FTP_Daten ['FTP_passwort'] = get_option( 'has_gv_'.$form_tab.'pdfFTP_Server_Passwort' );
  $FTP_Daten ['FTP_port'] = get_option( 'has_gv_'.$form_tab.'pdfFTP_Server_Port' );
  $FTP_Daten ['FTP_Connection'] = get_option( 'has_gv_'.$form_tab.'pdfFTP_Conection' );
	$FTP_Daten ['FTP_Folder'] = get_option( 'has_gv_'.$form_tab.'pdfFTP_Folder' );



  wp_send_json_success( $FTP_Daten );
  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formFTPSpeichern', 'has_gv_formFTPSpeichern');
  add_action('wp_ajax_has_gv_formFTPSpeichern', 'has_gv_formFTPSpeichern');
     