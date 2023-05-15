<?php


/* ===Siegel Hauptbild=== */
function has_gv_formSiegelHintergrundBild(){
   $form_tab =  $_POST['tab'];
  $Siegel_Speichern = array();
  $SignaturSiegel = $_POST['has_gv_formSiegelImageVorschau'];

  $width_s = intval( $_POST['width'] );
  $height_s = intval( $_POST['height'] );


  $width_10 = ceil($width_s);
  $height_10 = ceil($height_s);

  update_option( 'has_gv_'.$form_tab.'SiegelImage', $_POST['has_gv_formSiegelImageVorschau'] );
  update_option( 'has_gv_'.$form_tab.'SiegelImageHeigth',  ($height_s/2) );
  update_option( 'has_gv_'.$form_tab.'SiegelImageWidth', ($width_s/2) );

  // Zusatz Bild Postion 
  $Siegel_Speichern ['siegel_url'] = get_option( 'has_gv_'.$form_tab.'SiegelImage' );
  $Siegel_Speichern ['has_gv_formSiegelImageHeigth'] = get_option( 'has_gv_'.$form_tab.'SiegelImageHeigth' );
  $Siegel_Speichern ['has_gv_formSiegelImageWidth'] = get_option( 'has_gv_'.$form_tab.'SiegelImageWidth' );

  update_option( 'has_gv_'.$form_tab.'SiegelB64Image',  base64_encode(file_get_contents(get_option( 'has_gv_'.$form_tab.'SiegelImage' ))) ); 


     //PDF höhe - breite
     $Siegel_Speichern ['PDF_hohe'] = get_option( 'has_gv_'.$form_tab.'PDF_hohe' );
     $Siegel_Speichern ['PDF_breite'] = get_option( 'has_gv_'.$form_tab.'PDF_breite' );


  wp_send_json_success( $Siegel_Speichern );
  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formSiegelHintergrundBild', 'has_gv_formSiegelHintergrundBild');
  add_action('wp_ajax_has_gv_formSiegelHintergrundBild', 'has_gv_formSiegelHintergrundBild');
     















/* ===Siegel Hauptbild=== */
function mediaUploadSiegel(){
	$form_tab =  $_POST['tab'];

	update_option( 'has_gv_'.$form_tab.'SiegelImage', $_POST['bild_url'] );
	update_option( 'has_gv_'.$form_tab.'SiegelImageHeigth', (intval( $_POST['bild_hohe'] )) );
	update_option( 'has_gv_'.$form_tab.'SiegelImageWidth', (intval( $_POST['bild_breite'] )) );
	update_option( 'has_gv_'.$form_tab.'SiegelB64Image',  base64_encode(file_get_contents($_POST['bild_url'])));








	$RangeData = array();
	$RangeData ['tab'] = $form_tab;
	$RangeData ['bild_breite'] = $_POST['bild_breite'];
	$RangeData ['bild_hohe'] = $_POST['bild_hohe'];
	$RangeData ['vorschau_bild_breite'] = $_POST['vorschau_bild_breite'];
	$RangeData ['vorschau_bild_hohe'] = $_POST['vorschau_bild_hohe'];
	$RangeData ['attach_bild_breite'] = $_POST['attach_bild_breite'];
	$RangeData ['attach_bild_hohe'] = $_POST['attach_bild_hohe'];
	$RangeData ['pdf_breite'] = $_POST['pdf_breite'];
	$RangeData ['pdf_hohe'] = $_POST['pdf_hohe'];
	$RangeData ['bild_url'] = $_POST['bild_url'];




	wp_send_json_success( $RangeData );
	return true;
	wp_die();
}
//   add_action('wp_ajax_nopriv_has_gv_formSiegelTemplatesAuswahlRange', 'has_gv_formSiegelTemplatesAuswahlRange');
add_action('wp_ajax_mediaUploadSiegel', 'mediaUploadSiegel');






/* ===Siegel Hauptbild=== */
function has_gv_formSiegelTemplatesAuswahlRange(){
	$form_tab =  $_POST['tab'];

	$RangeData = array();
	$X_siegel = $_POST['X_siegel'];
	$Y_siegel = $_POST['Y_siegel'];
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




//	update_option( 'has_gv_'.$form_tab.'SiegelPositionMARGIN_LEFT', $X_siegel );
//	update_option( 'has_gv_'.$form_tab.'SiegelPositionMARGIN_TOP', $Y_siegel );
//	update_option( 'has_gv_'.$form_tab.'SiegelPositionX', $temp_X );
//	update_option( 'has_gv_'.$form_tab.'SiegelPositionY', $temp_Y );
//	update_option( 'has_gv_'.$form_tab.'SiegelPositionW',  $temp_W );
//	update_option( 'has_gv_'.$form_tab.'SiegelPositionH', $temp_H );
//
//	update_option( 'has_gv_'.$form_tab.'SiegelPositionPage', 1 );

	wp_send_json_success( $RangeData );
	return true;
	wp_die();
}
//   add_action('wp_ajax_nopriv_has_gv_formSiegelTemplatesAuswahlRange', 'has_gv_formSiegelTemplatesAuswahlRange');
add_action('wp_ajax_has_gv_formSiegelTemplatesAuswahlRange', 'has_gv_formSiegelTemplatesAuswahlRange');
