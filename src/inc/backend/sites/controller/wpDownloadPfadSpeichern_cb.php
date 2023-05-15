<?php


   /* ===Speicherpfad WP Download=== */
   function has_gv_formSpeicherPfadWPDownloadSpeichern(){
    $form_tab =  $_POST['tab'];
    $WP_Download_Speicherpfad = array();
    $wp_pfad = $_POST['has_gv_formpdfWP_Download'];
    $ordner_pfad = $_POST['has_gv_formpdfDownload'];


    switch ( $wp_pfad) {
      case site_url():
       update_option( 'has_gv_'.$form_tab.'pdfWP_Download', ABSPATH );
          break;
      case content_url():
        update_option( 'has_gv_'.$form_tab.'pdfWP_Download', HANDYSIGNATUR_CONTENT .'/' );
          break;
      case plugins_url():
        update_option( 'has_gv_'.$form_tab.'pdfWP_Download', HANDYSIGNATUR_PLUGIN.'/' );
          break;
      case get_template_directory_uri():
        update_option( 'has_gv_'.$form_tab.'pdfWP_Download', HANDYSIGNATUR_THEME.'/' );
          break;
      case  wp_upload_dir()['baseurl']:
        update_option( 'has_gv_'.$form_tab.'pdfWP_Download', HANDYSIGNATUR_UPLOADS.'/' );
          break;
      }


    $gesamt_pfad =  get_option( 'has_gv_'.$form_tab.'pdfWP_Download' )  . $ordner_pfad;
 
    update_option( 'has_gv_'.$form_tab.'pdfWP_Download', $_POST['has_gv_formpdfWP_Download'] );
    update_option( 'has_gv_'.$form_tab.'pdfDownload', $_POST['has_gv_formpdfDownload'] );
    update_option( 'has_gv_'.$form_tab.'pdfWP_Download_Gesamtpfad', $gesamt_pfad );
  
    


    // Zusatz Bild Postion 
    $WP_Download_Speicherpfad ['wp_pfad'] = get_option( 'has_gv_'.$form_tab.'pdfWP_Download' );
    $WP_Download_Speicherpfad ['ordner_pfad'] = get_option( 'has_gv_'.$form_tab.'pdfDownload' );
    $WP_Download_Speicherpfad ['gesamt_pfad'] = get_option( 'has_gv_'.$form_tab.'pdfWP_Download_Gesamtpfad' );

    wp_send_json_success( $WP_Download_Speicherpfad );
    return true;
    wp_die();
    }
  //  add_action('wp_ajax_nopriv_has_gv_formSpeicherPfadWPDownloadSpeichern', 'has_gv_formSpeicherPfadWPDownloadSpeichern');
    add_action('wp_ajax_has_gv_formSpeicherPfadWPDownloadSpeichern', 'has_gv_formSpeicherPfadWPDownloadSpeichern');