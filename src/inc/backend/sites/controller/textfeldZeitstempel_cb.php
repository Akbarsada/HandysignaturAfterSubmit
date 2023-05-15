<?php


function textfeldZeitstempelSpeichern(){
  $form_tab =  $_POST['tab'];
    $textfeldColor = array();
    $tab =  $_POST['tab'];
    $has_gv_formLabelTimestampBGcolor =  $_POST['has_gv_formLabelTimestampBGcolor'];
    $has_gv_formLabelTimestampFcolor =  $_POST['has_gv_formLabelTimestampFcolor'];
    $has_gv_formLabelInputTimestamp =  $_POST['has_gv_formLabelInputTimestamp'];

    update_option( 'has_gv_'.$form_tab.'LabelTimestampBGcolor', $has_gv_formLabelTimestampBGcolor );
    update_option( 'has_gv_'.$form_tab.'LabelTimestampFcolor',  $has_gv_formLabelTimestampFcolor );
    update_option( 'has_gv_'.$form_tab.'LabelInputTimestamp',  $has_gv_formLabelInputTimestamp );

    $textfeldColor ['has_gv_formLabelTimestampBGcolor'] = $has_gv_formLabelTimestampBGcolor;
    $textfeldColor ['has_gv_formLabelTimestampFcolor'] = $has_gv_formLabelTimestampFcolor;
    $textfeldColor ['has_gv_formLabelInputTimestamp'] = $has_gv_formLabelInputTimestamp;
    $textfeldColor ['tab'] = $tab;
   


    wp_send_json_success( $textfeldColor );
    return true;
    wp_die();
  }
//  add_action('wp_ajax_nopriv_textfeldZeitstempelSpeichern', 'textfeldZeitstempelSpeichern');
  add_action('wp_ajax_textfeldZeitstempelSpeichern', 'textfeldZeitstempelSpeichern');



 function textfeldZeitstempel(){
  $form_tab =  $_POST['tab'];
    $textfeldSignator = array();
   
    $has_gv_formLabelInputTimestamp =  $_POST['has_gv_formLabelInputTimestamp'];
    

    update_option( 'has_gv_'.$form_tab.'LabelInputTimestamp', $has_gv_formLabelInputTimestamp );
   
    $textfeldSignator ['inputTexfeld'] = $has_gv_formLabelInputTimestamp;
     

    wp_send_json_success( $textfeldSignator );
    return true;
    wp_die();
  }
  //add_action('wp_ajax_nopriv_textfeldZeitstempel', 'textfeldZeitstempel');
  add_action('wp_ajax_textfeldZeitstempel', 'textfeldZeitstempel');




  function has_gv_formLabelTimestampCENTER(){
    $form_tab =  $_POST['tab'];
    $rahmenTimestamp =  $_POST['rahmenTimestamp'];
    $ausrichtung = array();
   
    $has_gv_formLabelTimestampCENTER =  $_POST['has_gv_formLabelTimestampCENTER'];

    update_option( 'has_gv_'.$form_tab.'LabelTimestampCENTER', $has_gv_formLabelTimestampCENTER );
    update_option( 'has_gv_'.$form_tab.'LabelTimestampWRAP', $rahmenTimestamp );

    $ausrichtung  ['ausrichtung']  = $has_gv_formLabelTimestampCENTER;
    $ausrichtung  ['rahmenTimestamp']  = $rahmenTimestamp;
    $ausrichtung  ['form_tab']  = $form_tab;

    wp_send_json_success( $ausrichtung );
    return true;
    wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formLabelTimestampCENTER', 'has_gv_formLabelTimestampCENTER');
  add_action('wp_ajax_has_gv_formLabelTimestampCENTER', 'has_gv_formLabelTimestampCENTER');


  
     /* ===Siegel Hauptbild=== */
function has_gv_formLabelInputTimestampRange(){
  $form_tab =  $_POST['tab'];
  $RangeData = array();
  $X_siegel = $_POST['X_siegel'];
  $Y_siegel = $_POST['Y_siegel'];
  $pdf_hohe = $_POST['pdf_hohe'];
  $pdf_breite = $_POST['pdf_breite'];
  $textfeld_hohe = $_POST['textfeld_hohe'];
  $textfeld_breite = $_POST['textfeld_breite'];
	$bildhohe = $_POST['bildhohe'];
	$bildbreite = $_POST['bildbreite'];

$lucke_hohe = $pdf_hohe - $textfeld_hohe;
$lucke_breite = $pdf_breite - $textfeld_breite;

  $temp_X = $X_siegel;
  $temp_Y = $Y_siegel;
  $temp_W = $temp_X;
  $temp_H = $temp_Y;

	$Y_siegel2 = $Y_siegel +0;

  $RangeData ['temp_X'] = intval($temp_X);
  $RangeData ['temp_Y'] = intval($temp_Y);
  $RangeData ['temp_W'] = intval($temp_W);
  $RangeData ['temp_H'] = intval($temp_H);


  $RangeData ['X_siegel'] = $X_siegel;
  $RangeData ['Y_siegel'] = $Y_siegel2;
  $RangeData ['pdf_hohe'] = $pdf_hohe;
  $RangeData ['pdf_breite'] = $pdf_breite;
  $RangeData ['textfeld_hohe'] = $textfeld_hohe;
  $RangeData ['textfeld_breite'] = $textfeld_breite;
	$RangeData ['bildhohe'] = $bildhohe*2;
	$RangeData ['bildbreite'] = $bildbreite*2;


//  update_option( 'has_gv_'.$form_tab.'LabelTimestampPositionMARGIN_LEFT', $X_siegel );
//  update_option( 'has_gv_'.$form_tab.'LabelTimestampPositionMARGIN_TOP', $Y_siegel );
//  update_option( 'has_gv_'.$form_tab.'LabelTimestampX',  $_POST['X_siegel'] );
//  update_option( 'has_gv_'.$form_tab.'LabelTimestampY', 	$_POST['Y_siegel'] );
//  update_option( 'has_gv_'.$form_tab.'LabelTimestampW',   ($_POST['bildbreite']*2));
//  update_option( 'has_gv_'.$form_tab.'LabelTimestampH', $_POST['textfeld_hohe']);
  
  //update_option( 'has_gv_form1SiegelPositionPage',   $X_siegel );

  wp_send_json_success( $RangeData );
  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formLabelInputTimestampRange', 'has_gv_formLabelInputTimestampRange');
  add_action('wp_ajax_has_gv_formLabelInputTimestampRange', 'has_gv_formLabelInputTimestampRange');