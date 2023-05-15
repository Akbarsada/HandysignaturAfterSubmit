<?php 


    /* ===Siegel Einstellungen sichtbarkeit=== */
    function has_gv_formSichtbarkeitSignaturSiegelCheckboxID(){
        $form_tab =  $_POST['tab'];
      
        include(HANDYSIGNATUR_PLUGIN_DIR  . '/src/inc/signature/client.php');
        $client = new MobSigPdfClient();
        $client->SetUrl(get_option( 'has_gv_form_atrust_serveraddresse' ));
        $client->SetApiKey(get_option( 'has_gv_form_atrust_apikey' )); 
        $tempalteAuflistung =  $client->ListTemplate(get_option( 'has_gv_form_atrust_apikey' ));
        $sichtbarkeitSiegel = $_POST['has_gv_formSichtbarkeitSignaturSiegelCheckboxID'];
      
        update_option( 'has_gv_form_SiegelTemplates', $tempalteAuflistung );
        update_option( 'has_gv_'.$form_tab.'SichtbarkeitSignaturSiegelCheckboxID', $_POST['has_gv_formSichtbarkeitSignaturSiegelCheckboxID'] );
      
        return true;
        wp_die();
        }
     //   add_action('wp_ajax_nopriv_has_gv_formSichtbarkeitSignaturSiegelCheckboxID', 'has_gv_formSichtbarkeitSignaturSiegelCheckboxID');
        add_action('wp_ajax_has_gv_formSichtbarkeitSignaturSiegelCheckboxID', 'has_gv_formSichtbarkeitSignaturSiegelCheckboxID');