<?php


    /* ===Zusatzbild Speichern=== */
    function has_gv_formSiegelZusatzBild(){
      $form_tab =  $_POST['tab'];
      $Siegel_Speichern = array();
      $SignaturSiegel = $_POST['has_gv_formZUSATZImage'];
  
      $width_s = intval( $_POST['width'] );
      $height_s = intval( $_POST['height'] );
  
  
      $width_10 = ceil($width_s);
      $height_10 = ceil($height_s);
  
      update_option( 'has_gv_'.$form_tab.'ZUSATZImage', $_POST['has_gv_formZUSATZImage'] );
      update_option( 'has_gv_'.$form_tab.'ZUSATZImageHeigth',  $height_10 );
      update_option( 'has_gv_'.$form_tab.'ZUSATZImageWidth', $width_10 );
  
      // Zusatz Bild Postion 
      $Siegel_Speichern ['siegel_url'] = get_option( 'has_gv_'.$form_tab.'ZUSATZImage' );
      $Siegel_Speichern ['hohe'] = get_option( 'has_gv_'.$form_tab.'ZUSATZImageHeigth' );
      $Siegel_Speichern ['breite'] = get_option( 'has_gv_'.$form_tab.'ZUSATZImageWidth' );
  
      update_option( 'has_gv_'.$form_tab.'ZUSATZImageB64Image',  base64_encode(file_get_contents(get_option( 'has_gv_'.$form_tab.'ZUSATZImage' ))) ); 
  
      wp_send_json_success( $Siegel_Speichern );
      return true;
      wp_die();
      }
    //  add_action('wp_ajax_nopriv_has_gv_formSiegelZusatzBild', 'has_gv_formSiegelZusatzBild');
      add_action('wp_ajax_has_gv_formSiegelZusatzBild', 'has_gv_formSiegelZusatzBild');
  



          /* ===Siegel Hauptbild=== */
function has_gv_formZusatzbildTemplatesAuswahlRange(){
  $form_tab =  $_POST['tab'];
  $RangeData = array();
  $Y_siegel = $_POST['X_siegel'];
  $X_siegel = $_POST['Y_siegel'];
  $pdf_hohe = $_POST['pdf_hohe'];
  $pdf_breite = $_POST['pdf_breite'];
  $attach_bild_hohe = $_POST['attach_bild_hohe'];
  $attach_bild_breite = $_POST['attach_bild_breite'];

$lucke_hohe = $pdf_hohe - $attach_bild_hohe;
$lucke_breite = $pdf_breite - $attach_bild_breite;

  $temp_X = $X_siegel;
  $temp_Y = $lucke_hohe - $Y_siegel;
  $temp_W = $attach_bild_breite + $temp_X;
  $temp_H = $attach_bild_hohe + $temp_Y;
  


  $RangeData ['temp_X'] = intval($temp_X);
  $RangeData ['temp_Y'] = intval($temp_Y);
  $RangeData ['temp_W'] = intval($temp_W);
  $RangeData ['temp_H'] = intval($temp_H);


  $RangeData ['X_siegel'] = $X_siegel;
  $RangeData ['Y_siegel'] = $Y_siegel;
  $RangeData ['pdf_hohe'] = $pdf_hohe;
  $RangeData ['pdf_breite'] = $pdf_breite;
  $RangeData ['attach_bild_hohe'] = $attach_bild_hohe;
  $RangeData ['attach_bild_breite'] = $attach_bild_breite;




  update_option( 'has_gv_'.$form_tab.'ZUSATZImagePositionMARGIN_LEFT', $Y_siegel );
  update_option( 'has_gv_'.$form_tab.'ZUSATZImagePositionMARGIN_TOP', $X_siegel );
  update_option( 'has_gv_'.$form_tab.'ZUSATZImagePositionX', $temp_X );
  update_option( 'has_gv_'.$form_tab.'ZUSATZImagePositionY', $temp_Y );
  update_option( 'has_gv_'.$form_tab.'ZUSATZImagePositionW',  $temp_W );
  update_option( 'has_gv_'.$form_tab.'ZUSATZImagePositionH', $temp_H );
  
  update_option( 'has_gv_'.$form_tab.'ZUSATZImagePositionPage', 1 );

  wp_send_json_success( $RangeData );
  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formZusatzbildTemplatesAuswahlRange', 'has_gv_formZusatzbildTemplatesAuswahlRange');
  add_action('wp_ajax_has_gv_formZusatzbildTemplatesAuswahlRange', 'has_gv_formZusatzbildTemplatesAuswahlRange');