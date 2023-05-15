<?php


function textfeldOrtSpeichern(){
  $form_tab =  $_POST['tab'];
    $textfeldColor = array();
    $tab =  $_POST['tab'];
    $has_gv_formLabelLocationBGcolor =  $_POST['has_gv_formLabelLocationBGcolor'];
    $has_gv_formLabelLocationFcolor =  $_POST['has_gv_formLabelLocationFcolor'];
    $has_gv_form1LabelInputLocation =  $_POST['has_gv_formLabelInputLocation'];

    update_option( 'has_gv_'.$form_tab.'LabelLocationBGcolor', $has_gv_formLabelLocationBGcolor );
    update_option( 'has_gv_'.$form_tab.'LabelLocationFcolor',  $has_gv_formLabelLocationFcolor );
    update_option( 'has_gv_'.$form_tab.'LabelInputLocation',  $has_gv_form1LabelInputLocation );

    $textfeldColor ['has_gv_formLabelLocationBGcolor'] = $has_gv_formLabelLocationBGcolor;
    $textfeldColor ['has_gv_formLabelLocationFcolor'] = $has_gv_formLabelLocationFcolor;
    $textfeldColor ['has_gv_formLabelInputLocation'] = $has_gv_formLabelInputLocation;
    $textfeldColor ['tab'] = $tab;
   


    wp_send_json_success( $textfeldColor );
    return true;
    wp_die();
  }
//  add_action('wp_ajax_nopriv_textfeldOrtSpeichern', 'textfeldOrtSpeichern');
  add_action('wp_ajax_textfeldOrtSpeichern', 'textfeldOrtSpeichern');



 function textfeldOrt(){
  $form_tab =  $_POST['tab'];
    $textfeldOrt = array();
   
    $has_gv_formLabelInputLocation =  $_POST['has_gv_formLabelInputLocation'];


    update_option( 'has_gv_'.$form_tab.'LabelInputLocation', $has_gv_formLabelInputLocation );


    $textfeldOrt  ['inputTexfeld']  = $has_gv_formLabelInputLocation;


    wp_send_json_success( $textfeldOrt );
    return true;
    wp_die();
  }
 // add_action('wp_ajax_nopriv_textfeldOrt', 'textfeldOrt');
  add_action('wp_ajax_textfeldOrt', 'textfeldOrt');




  function has_gv_formLabelLocationCENTER(){
    $form_tab =  $_POST['tab'];
    $rahmenOrt =  $_POST['rahmenOrt'];
    $ausrichtung = array();
   
    $has_gv_formLabelLocationCENTER =  $_POST['has_gv_formLabelLocationCENTER'];

    update_option( 'has_gv_'.$form_tab.'LabelLocationCENTER', $has_gv_formLabelLocationCENTER );
    update_option( 'has_gv_'.$form_tab.'LabelLocationWRAP', $rahmenOrt );

    $ausrichtung  ['ausrichtung'] = $has_gv_formLabelLocationCENTER;
    $ausrichtung  ['rahmenOrt']  = $rahmenOrt;
    $ausrichtung  ['form_tab']  = $form_tab;


    wp_send_json_success( $ausrichtung );
    return true;
    wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formLabelLocationCENTER', 'has_gv_formLabelLocationCENTER');
  add_action('wp_ajax_has_gv_formLabelLocationCENTER', 'has_gv_formLabelLocationCENTER');

      /* ===Siegel Hauptbild=== */
function has_gv_formLabelInputOrtRange(){
  $form_tab =  $_POST['tab'];
  $RangeData = array();
  $X_siegel = $_POST['X_siegel'];
  $Y_siegel = $_POST['Y_siegel'];
  $pdf_hohe = $_POST['pdf_hohe'];
  $pdf_breite = $_POST['pdf_breite'];
  $textfeld_hohe = $_POST['textfeld_hohe'];
  $textfeld_breite = $_POST['textfeld_breite'];
  $bildbreite = $_POST['bildbreite'];
  $bildhohe = $_POST['bildhohe'];


$lucke_hohe = $pdf_hohe - $textfeld_hohe;
$lucke_breite = $pdf_breite - $textfeld_breite;

  $temp_X = $X_siegel;
  $temp_Y = $lucke_hohe - $Y_siegel;
  $temp_W = $textfeld_breite + $temp_X;
  $temp_H = $textfeld_hohe + $temp_Y;
  


  $RangeData ['temp_X'] = intval($temp_X);
  $RangeData ['temp_Y'] = intval($temp_Y);
  $RangeData ['temp_W'] = intval($temp_W);
  $RangeData ['temp_H'] = intval($temp_H);


  $RangeData ['X_siegel'] = $X_siegel;
  $RangeData ['Y_siegel'] = $Y_siegel;
  $RangeData ['pdf_hohe'] = $pdf_hohe;
  $RangeData ['pdf_breite'] = $pdf_breite;
  $RangeData ['textfeld_hohe'] = $textfeld_hohe;
  $RangeData ['textfeld_breite'] = $textfeld_breite;

  $RangeData ['bildbreite'] = $bildbreite;
  $RangeData ['bildhohe'] = $bildhohe;




  update_option( 'has_gv_'.$form_tab.'LabelLocationPositionMARGIN_LEFT', $X_siegel );
  update_option( 'has_gv_'.$form_tab.'LabelLocationPositionMARGIN_TOP', $Y_siegel );
  update_option( 'has_gv_'.$form_tab.'LabelLocationX', intval($X_siegel) );
  update_option( 'has_gv_'.$form_tab.'LabelLocationY', intval($Y_siegel) );
  update_option( 'has_gv_'.$form_tab.'LabelLocationW', (intval($X_siegel) + intval($textfeld_breite)));
  update_option( 'has_gv_'.$form_tab.'LabelLocationH', (intval($Y_siegel) + intval($textfeld_hohe)));
  
  //update_option( 'has_gv_form1SiegelPositionPage',   $X_siegel );

  wp_send_json_success( $RangeData );
  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formLabelInputOrtRange', 'has_gv_formLabelInputOrtRange');
  add_action('wp_ajax_has_gv_formLabelInputOrtRange', 'has_gv_formLabelInputOrtRange');