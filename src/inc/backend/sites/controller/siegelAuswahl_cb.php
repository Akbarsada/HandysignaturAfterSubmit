<?php

/* ===Siegelauswahl=== */
function has_gv_formSiegelTemplatesAuswahlID(){
  $form_tab =  $_POST['tab'];
  
  $Siegel_Einstellungen = array();
  global $wpdb;
  $Siegel = $_POST['has_gv_formSiegelTemplatesAuswahlID'];    


   update_option( 'has_gv_'.$form_tab.'SiegelTemplatesAuswahlID', $Siegel );


   include(HANDYSIGNATUR_PLUGIN_DIR  . '/src/inc/signature/client.php');
   $client = new MobSigPdfClient();
   $client->SetUrl(get_option( 'has_gv_form_atrust_serveraddresse' ));
   $client->SetApiKey(get_option( 'has_gv_form_atrust_apikey' ));






	$templateResult = HANDYSIGNATUR_PLUGIN_DIR  . '/TEMPLATE_UPLOAD/templateFormAuswahl.xml';




//check if Folder ist writable 777
	if (  is_writable(dirname($templateResult))) {


		$templateResult = HANDYSIGNATUR_PLUGIN_DIR  . '/TEMPLATE_UPLOAD/templateFormAuswahl.xml';
		$result = $client->GetTemplate(get_option( 'has_gv_'.$form_tab.'SiegelTemplatesAuswahlID' ));
		$t = base64_decode($result["TemplateData"]);
		$fp = fopen($templateResult, 'wb');
		fwrite($fp,$t);
		fclose($fp);
		$xml=simplexml_load_file($templateResult) or die("Error: Cannot create object");

		// SIEGEL

		//Description
		$author_array = get_object_vars($xml->Description[0]['author']);
		update_option( 'has_gv_'.$form_tab.'SiegelDescriptionAuthor', $author_array[0] );
		$Siegel_Einstellungen ['has_gv_formSiegelDescriptionAuthor'] =  get_option( 'has_gv_'.$form_tab.'SiegelDescriptionAuthor' );

		$siegel_name_array = get_object_vars($xml->Description[0]['name']);
		update_option( 'has_gv_'.$form_tab.'SiegelDescriptionName', $siegel_name_array[0] );
		$Siegel_Einstellungen ['has_gv_formSiegelDescriptionName'] =  get_option( 'has_gv_'.$form_tab.'SiegelDescriptionName' );

		$siegel_beschreibung_array = get_object_vars($xml->Description[0]['description']);
		update_option( 'has_gv_'.$form_tab.'SiegelDescriptionBeschreibung', $siegel_beschreibung_array[0] );
		$Siegel_Einstellungen ['has_gv_formSiegelDescriptionBeschreibung'] =  get_option( 'has_gv_'.$form_tab.'SiegelDescriptionBeschreibung' );


		//Position
		$siegel_Position_type_array = get_object_vars($xml->Position[0]['type']);
		update_option( 'has_gv_'.$form_tab.'SiegelPositionTyp', $siegel_Position_type_array[0] );
		$Siegel_Einstellungen ['has_gv_formSiegelPositionTyp'] =  get_option( 'has_gv_'.$form_tab.'SiegelPositionTyp' );

		$siegel_Position_X_array = get_object_vars($xml->Position[0]['x']);
		update_option( 'has_gv_'.$form_tab.'SiegelPositionX', $siegel_Position_X_array[0] );
		$Siegel_Einstellungen ['has_gv_formSiegelPositionX'] =  get_option( 'has_gv_'.$form_tab.'SiegelPositionX' );

		$siegel_Position_Y_array = get_object_vars($xml->Position[0]['y']);
		update_option( 'has_gv_'.$form_tab.'SiegelPositionY', $siegel_Position_Y_array[0] );
		$Siegel_Einstellungen ['has_gv_formSiegelPositionY'] =  get_option( 'has_gv_'.$form_tab.'SiegelPositionY' );

		$siegel_Position_W_array = get_object_vars($xml->Position[0]['w']);
		update_option( 'has_gv_'.$form_tab.'SiegelPositionW', $siegel_Position_W_array[0] );
		$Siegel_Einstellungen ['has_gv_formSiegelPositionW'] =  get_option( 'has_gv_'.$form_tab.'SiegelPositionW' );

		$siegel_Position_H_array = get_object_vars($xml->Position[0]['h']);
		update_option( 'has_gv_'.$form_tab.'SiegelPositionH', $siegel_Position_H_array[0] );
		$Siegel_Einstellungen ['has_gv_formSiegelPositionH'] =  get_option( 'has_gv_'.$form_tab.'SiegelPositionH' );

		$siegel_Position_page_array = get_object_vars($xml->Position[0]['page']);
		update_option( 'has_gv_'.$form_tab.'SiegelPositionPage', $siegel_Position_page_array[0] );
		$Siegel_Einstellungen ['has_gv_formSiegelPositionPage'] =  get_option( 'has_gv_'.$form_tab.'SiegelPositionPage' );


		//B64 IMAGE
		$siegel_B64bgImage_array = get_object_vars($xml->B64bgImage[0]);
		update_option( 'has_gv_'.$form_tab.'SiegelB64Image', $siegel_B64bgImage_array[0] );
		$Siegel_Einstellungen ['has_gv_formSiegelB64Image'] =  get_option( 'has_gv_'.$form_tab.'SiegelB64Image' );
		//decode B64 IMAGE
		// create an image file
		$uploaddir = wp_upload_dir();
		$uploadfile = $uploaddir['path'] . '/siegel.jpg';
		$siegel_image = fopen($uploadfile, "w+");
		// write the data in image file
		fwrite($siegel_image, base64_decode($siegel_B64bgImage_array[0]));
		// close an open file pointer
		fclose($siegel_image);
		update_option( 'has_gv_'.$form_tab.'SiegelImage', $uploaddir['url'] . '/siegel.jpg' );
		$Siegel_Einstellungen ['has_gv_formSiegelImage'] =  $uploaddir['url'] . '/siegel.jpg';

		//imageSize
		$size = wp_getimagesize(get_option( 'has_gv_'.$form_tab.'SiegelImage' ));
		$Siegel_Einstellungen ['has_gv_formSiegelImageWidth'] =  $size[0];
		update_option( 'has_gv_'.$form_tab.'SiegelImageWidth', $size[0]/2 );
		$Siegel_Einstellungen ['has_gv_formSiegelImageHeigth'] =  $size[1];
		update_option( 'has_gv_'.$form_tab.'SiegelImageHeigth', $size[1]/2 );


		//Label Signator
		$siegel_Fields_Label_signer_type_array = get_object_vars($xml->Fields->Label[0]['type']);
		update_option( 'has_gv_'.$form_tab.'LabelTypeSigner', $siegel_Fields_Label_signer_type_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelTypeSigner'] =  get_option( 'has_gv_'.$form_tab.'LabelTypeSigner' );

		$siegel_Fields_Label_signer_x_array = get_object_vars($xml->Fields->Label[0]['x']);
		update_option( 'has_gv_'.$form_tab.'LabelSignerX', $siegel_Fields_Label_signer_x_array[0] );
		update_option( 'has_gv_'.$form_tab.'LabelSignerPositionMARGIN_LEFT', $siegel_Fields_Label_signer_x_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelSignerX'] =  get_option( 'has_gv_'.$form_tab.'LabelSignerX' );

		$siegel_Fields_Label_signer_y_array = get_object_vars($xml->Fields->Label[0]['y']);
		update_option( 'has_gv_'.$form_tab.'LabelSignerY', $siegel_Fields_Label_signer_y_array[0] );
		update_option( 'has_gv_'.$form_tab.'LabelSignerPositionMARGIN_TOP', $siegel_Fields_Label_signer_y_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelSignerY'] =  get_option( 'has_gv_'.$form_tab.'LabelSignerY' );

		$siegel_Fields_Label_signer_w_array = get_object_vars($xml->Fields->Label[0]['w']);
		update_option( 'has_gv_'.$form_tab.'LabelSignerW', $siegel_Fields_Label_signer_w_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelSignerW'] =  get_option( 'has_gv_'.$form_tab.'LabelSignerW' );

		$siegel_Fields_Label_signer_h_array = get_object_vars($xml->Fields->Label[0]['h']);
		update_option( 'has_gv_'.$form_tab.'LabelSignerH', $siegel_Fields_Label_signer_h_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelSignerH'] =  get_option( 'has_gv_'.$form_tab.'LabelSignerH' );

		$siegel_Fields_Label_signer_center_array = get_object_vars($xml->Fields->Label[0]['center']);
		update_option( 'has_gv_'.$form_tab.'LabelSignerCENTER', $siegel_Fields_Label_signer_center_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelSignerCENTER'] =  get_option( 'has_gv_'.$form_tab.'LabelSignerCENTER' );

		$siegel_Fields_Label_signer_wrap_array = get_object_vars($xml->Fields->Label[0]['wrap']);
		update_option( 'has_gv_'.$form_tab.'LabelSignerWRAP', $siegel_Fields_Label_signer_wrap_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelSignerWRAP'] =  get_option( 'has_gv_'.$form_tab.'LabelSignerWRAP' );

		$siegel_Fields_Label_signer_fgColor_array = get_object_vars($xml->Fields->Label[0]['fgColor']);
		update_option( 'has_gv_'.$form_tab.'LabelSignerFcolor', $siegel_Fields_Label_signer_fgColor_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelSignerFcolor'] =  get_option( 'has_gv_'.$form_tab.'LabelSignerFcolor' );

		$siegel_Fields_Label_signer_bgColor_array = get_object_vars($xml->Fields->Label[0]['bgColor']);
		update_option( 'has_gv_'.$form_tab.'LabelSignerBGcolor', $siegel_Fields_Label_signer_bgColor_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelSignerBGcolor'] =  get_option( 'has_gv_'.$form_tab.'LabelSignerBGcolor' );

		//Label Timestamp

		$siegel_Fields_Label_timestamp_type_array = get_object_vars($xml->Fields->Label[1]['type']);
		update_option( 'has_gv_'.$form_tab.'LabelTypeTimestamp', $siegel_Fields_Label_timestamp_type_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelTypeTimestamp'] =  get_option( 'has_gv_'.$form_tab.'LabelTypeTimestamp' );

		$siegel_Fields_Label_timestamp_x_array = get_object_vars($xml->Fields->Label[1]['x']);
		update_option( 'has_gv_'.$form_tab.'LabelTimestampX', $siegel_Fields_Label_timestamp_x_array[0] );
		update_option( 'has_gv_'.$form_tab.'LabelTimestampPositionMARGIN_LEFT', $siegel_Fields_Label_timestamp_x_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelTimestampX'] =  get_option( 'has_gv_'.$form_tab.'LabelTimestampX' );

		$siegel_Fields_Label_timestamp_y_array = get_object_vars($xml->Fields->Label[1]['y']);
		update_option( 'has_gv_'.$form_tab.'LabelTimestampY', $siegel_Fields_Label_timestamp_y_array[0] );
		update_option( 'has_gv_'.$form_tab.'LabelTimestampPositionMARGIN_TOP', $siegel_Fields_Label_timestamp_y_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelTimestampY'] =  get_option( 'has_gv_'.$form_tab.'LabelTimestampY' );

		$siegel_Fields_Label_timestamp_w_array = get_object_vars($xml->Fields->Label[1]['w']);
		update_option( 'has_gv_'.$form_tab.'LabelTimestampW', $siegel_Fields_Label_timestamp_w_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelTimestampW'] =  get_option( 'has_gv_'.$form_tab.'LabelTimestampW' );

		$siegel_Fields_Label_timestamp_h_array = get_object_vars($xml->Fields->Label[1]['h']);
		update_option( 'has_gv_'.$form_tab.'LabelTimestampH', $siegel_Fields_Label_timestamp_h_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelTimestampH'] =  get_option( 'has_gv_'.$form_tab.'LabelTimestampH' );

		$siegel_Fields_Label_timestamp_center_array = get_object_vars($xml->Fields->Label[1]['center']);
		update_option( 'has_gv_'.$form_tab.'LabelTimestampCENTER', $siegel_Fields_Label_timestamp_center_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelTimestampCENTER'] =  get_option( 'has_gv_'.$form_tab.'LabelTimestampCENTER' );

		$siegel_Fields_Label_timestamp_wrap_array = get_object_vars($xml->Fields->Label[1]['wrap']);
		update_option( 'has_gv_'.$form_tab.'LabelTimestampWRAP', $siegel_Fields_Label_timestamp_wrap_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelTimestampWRAP'] =  get_option( 'has_gv_'.$form_tab.'LabelTimestampWRAP' );

		$siegel_Fields_Label_timestamp_fgColor_array = get_object_vars($xml->Fields->Label[0]['fgColor']);
		update_option( 'has_gv_'.$form_tab.'LabelTimestampFcolor', $siegel_Fields_Label_timestamp_fgColor_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelTimestampFcolor'] =  get_option( 'has_gv_'.$form_tab.'LabelTimestampFcolor' );

		$siegel_Fields_Label_timestamp_bgColor_array = get_object_vars($xml->Fields->Label[0]['bgColor']);
		update_option( 'has_gv_'.$form_tab.'LabelTimestampBGcolor', $siegel_Fields_Label_timestamp_bgColor_array[0] );
		$Siegel_Einstellungen ['has_gv_formLabelTimestampBGcolor'] =  get_option( 'has_gv_'.$form_tab.'LabelTimestampBGcolor' );

		//Siegel Size höhe - breite
		$Siegel_Einstellungen ['siegel_hohe'] =   get_option( 'has_gv_'.$form_tab.'SiegelImageHeigth' );
		$Siegel_Einstellungen ['siegel_breite'] = get_option( 'has_gv_'.$form_tab.'SiegelImageWidth' );

//PDF

		//PDF höhe - breite
		$Siegel_Einstellungen ['PDF_hohe'] = get_option( 'has_gv_'.$form_tab.'PDF_hohe' );
		$Siegel_Einstellungen ['PDF_breite'] = get_option( 'has_gv_'.$form_tab.'PDF_breite' );




// Zusatz Bild hohe breite
		$Siegel_Einstellungen ['zusatz_hohe'] = get_option( 'has_gv_'.$form_tab.'SiegelZusatzbildHohe' );
		$Siegel_Einstellungen ['zusatz_breite'] = get_option( 'has_gv_'.$form_tab.'SiegelZusatzbildBreite' );

// Zusatz Bild Postion
		$Siegel_Einstellungen ['zusatz_pos_x'] = get_option( 'has_gv_'.$form_tab.'SiegelZusatzBild_X' );
		$Siegel_Einstellungen ['zusatz_pos_y'] = get_option( 'has_gv_'.$form_tab.'SiegelZusatzBild_Y' );
		$Siegel_Einstellungen ['zusatz_pos_h'] = get_option( 'has_gv_'.$form_tab.'SiegelZusatzBild_H' );
		$Siegel_Einstellungen ['zusatz_pos_w'] = get_option( 'has_gv_'.$form_tab.'SiegelZusatzBild_W' );
		$Siegel_Einstellungen ['zusatz_page'] = get_option( 'has_gv_'.$form_tab.'SiegelZusatzBild_page' );

		$Siegel_Einstellungen ['infos'] = 0;

	}
else{


	$Siegel_Einstellungen ['infos'] = 1;

}




wp_send_json_success( $Siegel_Einstellungen );
   return true;
   wp_die();
   }
//   add_action('wp_ajax_nopriv_has_gv_formSiegelTemplatesAuswahlID', 'has_gv_formSiegelTemplatesAuswahlID');
   add_action('wp_ajax_has_gv_formSiegelTemplatesAuswahlID', 'has_gv_formSiegelTemplatesAuswahlID');
