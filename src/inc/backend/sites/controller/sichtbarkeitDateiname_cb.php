<?php


    /* ===Dateiname Sichtbar=== */
    function has_gv_formCustomDateinameSichtbarkeitCheckboxID(){
      $form_tab =  $_POST['tab'];
      $dateiname_sichtbar = $_POST['has_gv_formCustomDateinameSichtbarkeitCheckboxID'];
   
      update_option( 'has_gv_'.$form_tab.'CustomDateinameSichtbarkeitCheckboxID', $_POST['has_gv_formCustomDateinameSichtbarkeitCheckboxID'] );
      return true;
      wp_die();
      }
     // add_action('wp_ajax_nopriv_has_gv_formCustomDateinameSichtbarkeitCheckboxID', 'has_gv_formCustomDateinameSichtbarkeitCheckboxID');
      add_action('wp_ajax_has_gv_formCustomDateinameSichtbarkeitCheckboxID', 'has_gv_formCustomDateinameSichtbarkeitCheckboxID');

