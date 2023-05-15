<?php


function textfeldSignatorSpeichern(){
  $form_tab =  $_POST['tab'];
    $textfeldColor = array();
    $tab =  $_POST['tab'];
    $has_gv_formLabelSignerBGcolor =  $_POST['has_gv_formLabelSignerBGcolor'];
    $has_gv_formLabelSignerFcolor =  $_POST['has_gv_formLabelSignerFcolor'];
    $has_gv_formLabelInputSigner =  $_POST['has_gv_formLabelInputSigner'];

    update_option( 'has_gv_'.$form_tab.'LabelSignerBGcolor', $has_gv_formLabelSignerBGcolor );
    update_option( 'has_gv_'.$form_tab.'LabelSignerFcolor',  $has_gv_formLabelSignerFcolor );
    update_option( 'has_gv_'.$form_tab.'LabelInputSigner',  $has_gv_formLabelInputSigner );

    $textfeldColor ['has_gv_formLabelSignerBGcolor'] = $has_gv_formLabelSignerBGcolor;
    $textfeldColor ['has_gv_formLabelSignerFcolor'] = $has_gv_formLabelSignerFcolor;
    $textfeldColor ['has_gv_formLabelInputSigner'] = $has_gv_formLabelInputSigner;
    $textfeldColor ['tab'] = $tab;
   


    wp_send_json_success( $textfeldColor );
    return true;
    wp_die();
  }
 // add_action('wp_ajax_nopriv_textfeldSignatorSpeichern', 'textfeldSignatorSpeichern');
  add_action('wp_ajax_textfeldSignatorSpeichern', 'textfeldSignatorSpeichern');



 function textfeldSignator(){
  $form_tab =  $_POST['tab'];
    $textfeldSignator = array();
   
    $has_gv_formLabelInputSigner =  $_POST['has_gv_formLabelInputSigner'];


    update_option( 'has_gv_'.$form_tab.'LabelInputSigner', $has_gv_formLabelInputSigner );

    $textfeldSignator ['inputTexfeld'] = $has_gv_formLabelInputSigner;


    wp_send_json_success( $textfeldSignator );
    return true;
    wp_die();
  }
  //add_action('wp_ajax_nopriv_textfeldSignator', 'textfeldSignator');
  add_action('wp_ajax_textfeldSignator', 'textfeldSignator');




  function has_gv_formLabelSignerCENTER(){
    $form_tab =  $_POST['tab'];
    $ausrichtung = array();
    $rahmenSignator =  $_POST['rahmenSignator'];
    $has_gv_formLabelSignerCENTER =  $_POST['has_gv_formLabelSignerCENTER'];

    update_option( 'has_gv_'.$form_tab.'LabelSignerCENTER', $has_gv_formLabelSignerCENTER );
    update_option( 'has_gv_'.$form_tab.'LabelSignerWRAP', $rahmenSignator );


    $ausrichtung = $has_gv_formLabelSignerCENTER;

    wp_send_json_success( $ausrichtung );
    return true;
    wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formLabelSignerCENTER', 'has_gv_formLabelSignerCENTER');
  add_action('wp_ajax_has_gv_formLabelSignerCENTER', 'has_gv_formLabelSignerCENTER');




  
    /* ===Siegel Hauptbild=== */
function has_gv_formLabelInputSignerRange(){
  $form_tab =  $_POST['tab'];
  $RangeData = array();
  $X_siegel = $_POST['X_siegel'];
  $Y_siegel = $_POST['Y_siegel'];
  $pdf_hohe = $_POST['pdf_hohe'];
  $pdf_breite = $_POST['pdf_breite'];
  $Y_siegel2 = $_POST['Y_siegel2'];
  $X_siegel2 = $_POST['X_siegel2'];

	$textfeld_hohe = $_POST['textfeld_hohe'];
	$textfeld_breite = $_POST['textfeld_breite'];

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
	$RangeData ['Y_siegel2'] = $Y_siegel2;
	$RangeData ['X_siegel2'] = $X_siegel2;


//
//  update_option( 'has_gv_'.$form_tab.'LabelSignerPositionMARGIN_LEFT', $X_siegel );
//  update_option( 'has_gv_'.$form_tab.'LabelSignerPositionMARGIN_TOP', $Y_siegel );
//  update_option( 'has_gv_'.$form_tab.'LabelSignerX', $X_siegel );
//  update_option( 'has_gv_'.$form_tab.'LabelSignerY', $Y_siegel );
//  update_option( 'has_gv_'.$form_tab.'LabelSignerW',  $temp_W );
//  update_option( 'has_gv_'.$form_tab.'LabelSignerH', $temp_H );
  
  //update_option( 'has_gv_form1SiegelPositionPage',   $X_siegel );

  wp_send_json_success( $RangeData );
  return true;
  wp_die();
  }
//  add_action('wp_ajax_nopriv_has_gv_form1LabelInputSignerRange', 'has_gv_form1LabelInputSignerRange');
  add_action('wp_ajax_has_gv_formLabelInputSignerRange', 'has_gv_formLabelInputSignerRange');
     