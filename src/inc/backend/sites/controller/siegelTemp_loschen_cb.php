<?php



 function Delete_TemplateAuswahl(){
    $form_tab =  $_POST['tab'];
    $temp_del = array();


    include(HANDYSIGNATUR_PLUGIN_DIR  . 'src/inc/signature/client.php');
    $client = new MobSigPdfClient();
    $client->SetUrl(get_option( 'has_gv_form_atrust_serveraddresse' ));
    $client->SetApiKey(get_option( 'has_gv_form_atrust_apikey' ));  
    $tempalteId = $client->DeleteTemplate(  get_option( 'has_gv_'.$form_tab.'SiegelTemplatesAuswahlID' ));

    $tempalteAuflistung =  $client->ListTemplate(get_option( 'has_gv_form_atrust_apikey' ));
      // $sichtbarkeitSiegel = $_POST['has_gv_formSichtbarkeitSignaturSiegelCheckboxID'];
      
        update_option( 'has_gv_form_SiegelTemplates', $tempalteAuflistung );
  

      //  $temp_del ['tempalteId'] =HANDYSIGNATUR_PLUGIN_DIR  . 'src/inc/signature/client1/client.php';





      //  wp_send_json_success( $temp_del );

  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formAtrustSpeichern', 'has_gv_formAtrustSpeichern');
  add_action('wp_ajax_Delete_TemplateAuswahl', 'Delete_TemplateAuswahl');