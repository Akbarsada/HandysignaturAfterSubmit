<?php

    /* ===Sigantaurart Sichtbarkeit=== */
    function has_gv_formSichtbarkeitSignaturArtCheckboxID(){
        $form_tab =  $_POST['tab'];
        $dateiname_sichtbar = $_POST['has_gv_formSichtbarkeitSignaturArtCheckboxID'];
       
        update_option( 'has_gv_'.$form_tab.'SichtbarkeitSignaturArtCheckboxID', $_POST['has_gv_formSichtbarkeitSignaturArtCheckboxID'] );
        return true;
        wp_die();
        }
      //  add_action('wp_ajax_nopriv_has_gv_formSichtbarkeitSignaturArtCheckboxID', 'has_gv_formSichtbarkeitSignaturArtCheckboxID');
        add_action('wp_ajax_has_gv_formSichtbarkeitSignaturArtCheckboxID', 'has_gv_formSichtbarkeitSignaturArtCheckboxID');