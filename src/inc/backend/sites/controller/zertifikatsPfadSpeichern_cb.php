<?php

function has_gv_formZertifikatsPfadSpeichern(){
    $form_tab =  $_POST['tab'];
    $Zerts_Pfad = array();
    $wp_pfad = $_POST['has_gv_formZertifikatsDateiWPspeicherPfad'];
    $ordner_pfad = $_POST['has_gv_formZertifikatsDateiOrdnerSpeicherPfad'];

	switch ( $wp_pfad) {
		case site_url():
			update_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad', ABSPATH );
			break;
		case content_url():
			update_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad', HANDYSIGNATUR_CONTENT .'/' );
			break;
		case plugins_url():
			update_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad', HANDYSIGNATUR_PLUGIN.'/' );
			break;
		case get_template_directory_uri():
			update_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad', HANDYSIGNATUR_THEME.'/' );
			break;
		case  wp_upload_dir()['baseurl']:
			update_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad', HANDYSIGNATUR_UPLOADS.'/' );
			break;
	}


    $gesamt_pfad = get_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad' ) . $ordner_pfad;
  
    update_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad', $_POST['has_gv_formZertifikatsDateiWPspeicherPfad'] );
    update_option( 'has_gv_'.$form_tab.'ZertifikatsDateiOrdnerSpeicherPfad', $_POST['has_gv_formZertifikatsDateiOrdnerSpeicherPfad'] );
    update_option( 'has_gv_'.$form_tab.'ZertifikatsDateiGesamtSpeicherPfad', $gesamt_pfad );
  
    
  
  
    // Zusatz Bild Postion 
    $Zerts_Pfad ['wp_pfad'] = get_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad' );
    $Zerts_Pfad ['ordner_pfad'] = get_option( 'has_gv_'.$form_tab.'ZertifikatsDateiOrdnerSpeicherPfad' );
    $Zerts_Pfad ['gesamt_pfad'] = get_option( 'has_gv_'.$form_tab.'ZertifikatsDateiGesamtSpeicherPfad' );
  
    wp_send_json_success( $Zerts_Pfad );
    return true;
    wp_die();
    }
  //  add_action('wp_ajax_nopriv_has_gv_formZertifikatsPfadSpeichern', 'has_gv_formZertifikatsPfadSpeichern');
    add_action('wp_ajax_has_gv_formZertifikatsPfadSpeichern', 'has_gv_formZertifikatsPfadSpeichern');


