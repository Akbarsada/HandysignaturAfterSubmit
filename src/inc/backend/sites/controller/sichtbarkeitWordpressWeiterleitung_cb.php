<?php

    /* ===Weiterleitung Wordpress=== */
    function has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID(){
        $form_tab =  $_POST['tab'];
        $dateiname_sichtbar = $_POST['has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID'];
       
        update_option( 'has_gv_'.$form_tab.'sichtbarkeitWeiterleitungsPfadeWPCheckboxID', $_POST['has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID'] );
        return true;
        wp_die();
        }
       // add_action('wp_ajax_nopriv_has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID', 'has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID');
        add_action('wp_ajax_has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID', 'has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID');
    

        
