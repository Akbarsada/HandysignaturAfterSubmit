<?php

    /* ===FTP Wordpress=== */
    function has_gv_formAtrust_Login_checkedCheckboxID(){
        $form_tab =  $_POST['tab'];
        $dateiname_sichtbar = $_POST['has_gv_formAtrust_Login_checkedCheckboxID'];
       
        update_option( 'has_gv_'.$form_tab.'Atrust_Login_checkedCheckboxID', $_POST['has_gv_formAtrust_Login_checkedCheckboxID'] );
        return true;
        wp_die();
        }
      //  add_action('wp_ajax_nopriv_has_gv_formpdfFTP_Server_checkedCheckboxID', 'has_gv_formpdfFTP_Server_checkedCheckboxID');
        add_action('wp_ajax_has_gv_formAtrust_Login_checkedCheckboxID', 'has_gv_formAtrust_Login_checkedCheckboxID');