<?php


function textfeldGrundSpeichern(){
  $form_tab =  $_POST['tab'];

    $textfeldColor = array();
    $form_tab =  $_POST['tab'];
    $has_gv_formLabelGrundBGcolor =  $_POST['has_gv_formLabelGrundBGcolor'];
    $has_gv_formLabelGrundFcolor =  $_POST['has_gv_formLabelGrundFcolor'];
    $has_gv_formLabelInputGrund =  $_POST['has_gv_formLabelInputGrund'];

    update_option( 'has_gv_'.$form_tab.'LabelGrundBGcolor', $has_gv_formLabelGrundBGcolor );
    update_option( 'has_gv_'.$form_tab.'LabelGrundFcolor',  $has_gv_formLabelGrundFcolor ); 
    update_option( 'has_gv_'.$form_tab.'LabelInputGrund',  $has_gv_formLabelInputGrund );

    $textfeldColor ['has_gv_formLabelGrundBGcolor'] = $has_gv_formLabelGrundBGcolor;
    $textfeldColor ['has_gv_formLabelGrundFcolor'] = $has_gv_formLabelGrundFcolor;
    $textfeldColor ['has_gv_formLabelInputGrund'] = $has_gv_formLabelInputGrund;
    $textfeldColor ['form_tab'] = $form_tab;
   


    wp_send_json_success( $textfeldColor );
    return true;
    wp_die();
  }
//  add_action('wp_ajax_nopriv_textfeldGrundSpeichern', 'textfeldGrundSpeichern');
  add_action('wp_ajax_textfeldGrundSpeichern', 'textfeldGrundSpeichern');



 function textfeldGrund(){
  $form_tab =  $_POST['tab'];
    $textfeldGrund = array();
   
    $has_gv_formLabelInputGrund =  $_POST['has_gv_formLabelInputGrund'];
  

    update_option( 'has_gv_'.$form_tab.'LabelInputGrund', $has_gv_formLabelInputGrund );

    $textfeldGrund ['inputTexfeld'] = $has_gv_formLabelInputGrund;


    wp_send_json_success( $textfeldGrund );
    return true;
    wp_die();
  }
 // add_action('wp_ajax_nopriv_textfeldGrund', 'textfeldGrund');
  add_action('wp_ajax_textfeldGrund', 'textfeldGrund');




  function has_gv_formLabelGrundCENTER(){
    $form_tab =  $_POST['tab'];
    $rahmenGrund =  $_POST['rahmenGrund'];
    $ausrichtung = array();
   
    $has_gv_formLabelGrundCENTER =  $_POST['has_gv_formLabelGrundCENTER'];

    update_option( 'has_gv_'.$form_tab.'LabelGrundCENTER', $has_gv_formLabelGrundCENTER );
    update_option( 'has_gv_'.$form_tab.'LabelGrundWRAP', $rahmenGrund );

    $ausrichtung  ['ausrichtung'] = $has_gv_formLabelGrundCENTER;
    $ausrichtung  ['rahmenTimestamp']  = $rahmenGrund;
    $ausrichtung  ['form_tab']  = $form_tab;

    wp_send_json_success( $ausrichtung );
    return true;
    wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formLabelGrundCENTER', 'has_gv_formLabelGrundCENTER');
  add_action('wp_ajax_has_gv_formLabelGrundCENTER', 'has_gv_formLabelGrundCENTER');



  
  
    /* ===Siegel Hauptbild=== */
function has_gv_formLabelInputGrundRange(){
  $form_tab =  $_POST['tab'];
  $RangeData = array();
  $X_siegel = $_POST['X_siegel'];
  $Y_siegel = $_POST['Y_siegel'];
  $pdf_hohe = $_POST['pdf_hohe'];
  $pdf_breite = $_POST['pdf_breite'];
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




  update_option( 'has_gv_'.$form_tab.'LabelGrundPositionMARGIN_LEFT', $X_siegel );
  update_option( 'has_gv_'.$form_tab.'LabelGrundPositionMARGIN_TOP', $Y_siegel );
  update_option( 'has_gv_'.$form_tab.'LabelGrundX', $temp_X );
  update_option( 'has_gv_'.$form_tab.'LabelGrundY', $temp_Y );
  update_option( 'has_gv_'.$form_tab.'LabelGrundW',  $temp_W );
  update_option( 'has_gv_'.$form_tab.'LabelGrundH', $temp_H );
  
  //update_option( 'has_gv_form1SiegelPositionPage',   $X_siegel );

  wp_send_json_success( $RangeData );
  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formLabelInputGrundRange', 'has_gv_formLabelInputGrundRange');
  add_action('wp_ajax_has_gv_formLabelInputGrundRange', 'has_gv_formLabelInputGrundRange');
     