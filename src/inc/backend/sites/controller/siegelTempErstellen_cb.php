<?php



 function has_gv_formSiegelTempErstellen(){
  $temp_array = array();
    $form_tab =  $_POST['tab'];
    $has_gv_formLabelGrundBGcolor =  $_POST['has_gv_formLabelGrundBGcolor'];
    $has_gv_formLabelGrundFcolor =  $_POST['has_gv_formLabelGrundFcolor'];
    $has_gv_formLabelInputGrund =  $_POST['has_gv_formLabelInputGrund'];
    $has_gv_formLabelLocationBGcolor =  $_POST['has_gv_formLabelLocationBGcolor'];
    $has_gv_formLabelLocationFcolor =  $_POST['has_gv_formLabelLocationFcolor'];
    $has_gv_formLabelInputLocation =  $_POST['has_gv_formLabelInputLocation'];
    $has_gv_formLabelSignerBGcolor =  $_POST['has_gv_formLabelSignerBGcolor'];
    $has_gv_formLabelSignerFcolor =  $_POST['has_gv_formLabelSignerFcolor'];
    $has_gv_formLabelInputSigner =  $_POST['has_gv_formLabelInputSigner'];
    $has_gv_formLabelTimestampBGcolor =  $_POST['has_gv_formLabelTimestampBGcolor'];
    $has_gv_formLabelTimestampFcolor =  $_POST['has_gv_formLabelTimestampFcolor'];
    $has_gv_formLabelInputTimestamp =  $_POST['has_gv_formLabelInputTimestamp'];
    $has_gv_formSiegelTemplatesName =  $_POST['has_gv_formSiegelTemplatesName'];
    $has_gv_formSiegelTemplatesAuthor =  $_POST['has_gv_formSiegelTemplatesAuthor'];
    $has_gv_formSiegelTemplatesDescription =  $_POST['has_gv_formSiegelTemplatesDescription'];

	 $pdf_hohe =  $_POST['pdf_hohe'];
	 $pdf_breite =  $_POST['pdf_breite'];


	 $X_siegelSiegel =  $_POST['X_siegelSiegel'];
	 $Y_siegelSiegel =  $_POST['Y_siegelSiegel'];
	 $attach_bild_breiteSiegel =  $_POST['attach_bild_breiteSiegel'];
	 $attach_bild_hoheSiegel =  $_POST['attach_bild_hoheSiegel'];


	 $bildhoheTime =  $_POST['bildhoheTime'];
	 $bildbreiteTime =  $_POST['bildbreiteTime'];
	 $textfeld_hoheTime =  $_POST['textfeld_hoheTime'];
	 $textfeld_breiteTime =  $_POST['textfeld_breiteTime'];
	 $X_siegelTime =  $_POST['X_siegelTime'];
	 $Y_siegelTime =  $_POST['Y_siegelTime'];

	 $bildhoheSigner =  $_POST['bildhoheSigner'];
	 $bildbreiteSigner =  $_POST['bildbreiteSigner'];
	 $textfeld_hoheSigner =  $_POST['textfeld_hoheSigner'];
	 $textfeld_breiteSigner =  $_POST['textfeld_breiteSigner'];
	 $X_siegelSigner =  $_POST['X_siegelSigner'];
	 $Y_siegelSigner =  $_POST['Y_siegelSigner'];


	 update_option( 'has_gv_'.$form_tab.'SiegelPositionX', $X_siegelSiegel );
	 update_option( 'has_gv_'.$form_tab.'SiegelPositionY', $Y_siegelSiegel );
	 update_option( 'has_gv_'.$form_tab.'SiegelPositionW', $attach_bild_breiteSiegel + $X_siegelSiegel);
	 update_option( 'has_gv_'.$form_tab.'SiegelPositionH', $attach_bild_hoheSiegel + $Y_siegelSiegel );
	 update_option( 'has_gv_'.$form_tab.'SiegelPositionMARGIN_LEFT', $X_siegelSiegel );
	 update_option( 'has_gv_'.$form_tab.'SiegelPositionMARGIN_TOP', $Y_siegelSiegel );

	 update_option( 'has_gv_'.$form_tab.'LabelSignerX', $X_siegelSigner );
	 update_option( 'has_gv_'.$form_tab.'LabelSignerY', $Y_siegelSigner );
	 update_option( 'has_gv_'.$form_tab.'LabelSignerW', $bildbreiteSigner *2 );
	 update_option( 'has_gv_'.$form_tab.'LabelSignerH', $textfeld_hoheSigner );
	 update_option( 'has_gv_'.$form_tab.'LabelSignerPositionMARGIN_LEFT', $X_siegelSigner );
	 update_option( 'has_gv_'.$form_tab.'LabelSignerPositionMARGIN_TOP', $Y_siegelSigner );


	 update_option( 'has_gv_'.$form_tab.'LabelTimestampX', $X_siegelTime );
	 update_option( 'has_gv_'.$form_tab.'LabelTimestampY', $Y_siegelTime );
	 update_option( 'has_gv_'.$form_tab.'LabelTimestampW', $bildbreiteTime*2 );
	 update_option( 'has_gv_'.$form_tab.'LabelTimestampH', $textfeld_hoheTime );
	 update_option( 'has_gv_'.$form_tab.'LabelTimestampPositionMARGIN_LEFT', $X_siegelTime );
	 update_option( 'has_gv_'.$form_tab.'LabelTimestampPositionMARGIN_TOP', $Y_siegelTime );

	 update_option( 'has_gv_'.$form_tab.'SiegelPositionPage', 1 );

	 ////



    update_option( 'has_gv_'.$form_tab.'SiegelTemplatesName', $has_gv_formSiegelTemplatesName );
    update_option( 'has_gv_'.$form_tab.'SiegelTemplatesAuthor', $has_gv_formSiegelTemplatesAuthor );
    update_option( 'has_gv_'.$form_tab.'SiegelTemplatesDescription', $has_gv_formSiegelTemplatesDescription );

    update_option( 'has_gv_'.$form_tab.'LabelGrundBGcolor', $has_gv_formLabelGrundBGcolor );
    update_option( 'has_gv_'.$form_tab.'LabelGrundFcolor',  $has_gv_formLabelGrundFcolor ); 
    update_option( 'has_gv_'.$form_tab.'LabelInputGrund',  $has_gv_formLabelInputGrund );

    update_option( 'has_gv_'.$form_tab.'LabelLocationBGcolor', $has_gv_formLabelLocationBGcolor );
    update_option( 'has_gv_'.$form_tab.'LabelLocationFcolor',  $has_gv_formLabelLocationFcolor );
    update_option( 'has_gv_'.$form_tab.'LabelInputLocation',  $has_gv_formLabelInputLocation );

    update_option( 'has_gv_'.$form_tab.'LabelSignerBGcolor', $has_gv_formLabelSignerBGcolor );
    update_option( 'has_gv_'.$form_tab.'LabelSignerFcolor',  $has_gv_formLabelSignerFcolor );
    update_option( 'has_gv_'.$form_tab.'LabelInputSigner',  $has_gv_formLabelInputSigner );

    update_option( 'has_gv_'.$form_tab.'LabelTimestampBGcolor', $has_gv_formLabelTimestampBGcolor );
    update_option( 'has_gv_'.$form_tab.'LabelTimestampFcolor',  $has_gv_formLabelTimestampFcolor );
    update_option( 'has_gv_'.$form_tab.'LabelInputTimestamp',  $has_gv_formLabelInputTimestamp );
    
    $temp_array ['has_gv_formSiegelTemplatesDescription'] = $has_gv_formSiegelTemplatesDescription;
    $temp_array ['has_gv_formSiegelTemplatesAuthor'] = $has_gv_formSiegelTemplatesAuthor;
    $temp_array ['has_gv_formSiegelTemplatesName'] = $has_gv_formSiegelTemplatesName;

    $temp_array ['has_gv_formLabelTimestampBGcolor'] = $has_gv_formLabelTimestampBGcolor;
    $temp_array ['has_gv_formLabelTimestampFcolor'] = $has_gv_formLabelTimestampFcolor;
    $temp_array ['has_gv_formLabelInputTimestamp'] = $has_gv_formLabelInputTimestamp;

    $temp_array ['has_gv_formLabelSignerBGcolor'] = $has_gv_formLabelSignerBGcolor;
    $temp_array ['has_gv_formLabelSignerFcolor'] = $has_gv_formLabelSignerFcolor;
    $temp_array ['has_gv_formLabelInputSigner'] = $has_gv_formLabelInputSigner;

    $temp_array ['has_gv_formLabelLocationBGcolor'] = $has_gv_formLabelLocationBGcolor;
    $temp_array ['has_gv_formLabelLocationFcolor'] = $has_gv_formLabelLocationFcolor;
    $temp_array ['has_gv_formLabelInputLocation'] = $has_gv_formLabelInputLocation;

    $temp_array ['has_gv_formLabelGrundBGcolor'] = $has_gv_formLabelGrundBGcolor;
    $temp_array ['has_gv_formLabelGrundFcolor'] = $has_gv_formLabelGrundFcolor;
    $temp_array ['has_gv_formLabelInputGrund'] = $has_gv_formLabelInputGrund;


	 $temp_array ['pdf_hohe'] =  $pdf_hohe ;
	 $temp_array ['pdf_breite'] =  $pdf_breite;

	 $temp_array ['bildhoheTime'] =  $bildhoheTime;
	 $temp_array ['bildbreiteTime'] =  $bildbreiteTime;
	 $temp_array ['textfeld_hoheTime'] =  $textfeld_hoheTime ;
	 $temp_array ['textfeld_breiteTime'] =  $textfeld_breiteTime ;
	 $temp_array ['X_siegelTime'] =  $X_siegelTime;
	 $temp_array ['Y_siegelTime'] =  $Y_siegelTime;

	 $temp_array ['bildhoheSigner'] =  $bildhoheSigner;
	 $temp_array ['bildbreiteSigner'] =  $bildbreiteSigner;
	 $temp_array ['textfeld_hoheSigner'] =  $textfeld_hoheSigner;
	 $temp_array ['textfeld_breiteSigner'] =  $textfeld_breiteSigner;
	 $temp_array ['X_siegelSigner'] =  $X_siegelSigner;
	 $temp_array ['Y_siegelSigner'] =  $Y_siegelSigner;

	 $temp_array ['X_siegelSiegel'] =  $X_siegelSiegel;
	 $temp_array ['Y_siegelSiegel'] =  $Y_siegelSiegel;
	 $temp_array ['attach_bild_breiteSiegel'] =  $attach_bild_breiteSiegel;
	 $temp_array ['attach_bild_hoheSiegel'] =  $attach_bild_hoheSiegel;



//erstellen oder bearbeiten
if(get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID') == 'erstellen'){

  $xml_file_name = 'template_'.$form_tab.'.xml';

  $xml = new DomDocument('1.0');
  $xml->encoding = 'utf-8';
  $xml->formatOutput=true;
  
  $SignatureTemplateStyle = $xml->createElement('SignatureTemplateStyle');
  $xml->appendChild($SignatureTemplateStyle);



//Meta Daten
$Description = $xml->createElement('Description');
$Description->setAttribute('author', get_option( 'has_gv_'.$form_tab.'SiegelTemplatesAuthor' ) );
$Description->setAttribute('name', get_option( 'has_gv_'.$form_tab.'SiegelTemplatesName' ));
$Description->setAttribute('description', get_option( 'has_gv_'.$form_tab.'SiegelTemplatesDescription' ) );
$SignatureTemplateStyle->appendChild($Description);

 //Signatursiegel
 if(get_option( 'has_gv_'.$form_tab.'HauptsiegelSichtbarkeitCheckboxID') == 'sichtbar'){
   
  $Position = $xml->createElement('Position');
  $Position->setAttribute('type', 'absolute' );
  $Position->setAttribute('x', get_option( 'has_gv_'.$form_tab.'SiegelPositionX' ));
  $Position->setAttribute('y', get_option( 'has_gv_'.$form_tab.'SiegelPositionY' ) );
  $Position->setAttribute('w', get_option( 'has_gv_'.$form_tab.'SiegelPositionW' ) );
  $Position->setAttribute('h', get_option( 'has_gv_'.$form_tab.'SiegelPositionH' ) );
  $Position->setAttribute('page', get_option( 'has_gv_'.$form_tab.'SiegelPositionPage' ) );
  $SignatureTemplateStyle->appendChild($Position);
  
  $B64bgImage = $xml->createElement('B64bgImage', get_option( 'has_gv_'.$form_tab.'SiegelB64Image' ) );
  $SignatureTemplateStyle->appendChild($B64bgImage);

}//Signatursiegel



$Fields = $xml->createElement('Fields');
$SignatureTemplateStyle->appendChild($Fields);






 //Textfeld Signator
 if(get_option( 'has_gv_'.$form_tab.'SignatorSichtbarkeitCheckboxID') == 'sichtbar'){
  

    //COLORS
  $SchriftFarbeHEX = get_option( 'has_gv_'.$form_tab.'LabelSignerFcolor' );
  list($r, $g, $b) = sscanf($SchriftFarbeHEX, "#%02x%02x%02x");
  $SchriftFarbeRGB = '('.$r.','.$g.','.$b.')';


  $HintergrundFarbeHEX = get_option( 'has_gv_'.$form_tab.'LabelSignerBGcolor' );
  list($r, $g, $b) = sscanf($HintergrundFarbeHEX, "#%02x%02x%02x");
  $HintergrundFarbeRGB = '('.$r.','.$g.','.$b.')';

    //Input Text
  $label1_input_text = get_option( 'has_gv_'.$form_tab.'LabelInputSigner' );
  $location = ' %signer';
  $label1_input_de = $label1_input_text . $location;

  $Label  = $xml->createElement('Label', $label1_input_de);
  $Label ->setAttribute('type', 'dynamic' );
  $Label ->setAttribute('x', get_option( 'has_gv_'.$form_tab.'LabelSignerX' ));
  $Label ->setAttribute('y', get_option( 'has_gv_'.$form_tab.'LabelSignerY' ));
  $Label ->setAttribute('w', get_option( 'has_gv_'.$form_tab.'LabelSignerW' ));
  $Label ->setAttribute('h', get_option( 'has_gv_'.$form_tab.'LabelSignerH' ));
  $Label ->setAttribute('center', 'false');
  $Label ->setAttribute('wrap', get_option( 'has_gv_'.$form_tab.'LabelSignerWRAP' ));
  $Label ->setAttribute('fgColor', $SchriftFarbeRGB);
  $Label ->setAttribute('bgColor', $HintergrundFarbeRGB);
  $Fields->appendChild($Label );

} //Textfeld Signator


 //Textfeld Ort
 if(get_option( 'has_gv_'.$form_tab.'OrtSichtbarkeitCheckboxID') == 'sichtbar'){
  

  //COLORS
$SchriftFarbeHEX = get_option( 'has_gv_'.$form_tab.'LabelLocationFcolor' );
list($r, $g, $b) = sscanf($SchriftFarbeHEX, "#%02x%02x%02x");
$SchriftFarbeRGB = '('.$r.','.$g.','.$b.')';


$HintergrundFarbeHEX = get_option( 'has_gv_'.$form_tab.'LabelLocationBGcolor' );
list($r, $g, $b) = sscanf($HintergrundFarbeHEX, "#%02x%02x%02x");
$HintergrundFarbeRGB = '('.$r.','.$g.','.$b.')';

  //Input Text
$label1_input_text = get_option( 'has_gv_'.$form_tab.'LabelInputLocation' );
$location = ' %location';
$label1_input_de = $label1_input_text . $location;

$Label  = $xml->createElement('Label', $label1_input_de);
$Label ->setAttribute('type', 'dynamic' );
$Label ->setAttribute('x', get_option( 'has_gv_'.$form_tab.'LabelLocationX' ));
$Label ->setAttribute('y', get_option( 'has_gv_'.$form_tab.'LabelLocationY' ));
$Label ->setAttribute('w', get_option( 'has_gv_'.$form_tab.'LabelLocationW' ));
$Label ->setAttribute('h', get_option( 'has_gv_'.$form_tab.'LabelLocationH' ));
$Label ->setAttribute('center', 'false');
$Label ->setAttribute('wrap', get_option( 'has_gv_'.$form_tab.'LabelLocationWRAP' ));
$Label ->setAttribute('fgColor', $SchriftFarbeRGB);
$Label ->setAttribute('bgColor', $HintergrundFarbeRGB);
$Fields->appendChild($Label );

} //Textfeld Ort


 //Textfeld Grund
 if(get_option( 'has_gv_'.$form_tab.'GrundSichtbarkeitCheckboxID') == 'sichtbar'){
  

  //COLORS
$SchriftFarbeHEX = get_option( 'has_gv_'.$form_tab.'LabelGrundFcolor' );
list($r, $g, $b) = sscanf($SchriftFarbeHEX, "#%02x%02x%02x");
$SchriftFarbeRGB = '('.$r.','.$g.','.$b.')';


$HintergrundFarbeHEX = get_option( 'has_gv_'.$form_tab.'LabelGrundBGcolor' );
list($r, $g, $b) = sscanf($HintergrundFarbeHEX, "#%02x%02x%02x");
$HintergrundFarbeRGB = '('.$r.','.$g.','.$b.')';

  //Input Text
$label1_input_text = get_option( 'has_gv_'.$form_tab.'LabelInputGrund' );
$location = ' %reason';
$label1_input_de = $label1_input_text . $location;

$Label  = $xml->createElement('Label', $label1_input_de);
$Label ->setAttribute('type', 'dynamic' );
$Label ->setAttribute('x', get_option( 'has_gv_'.$form_tab.'LabelGrundX' ));
$Label ->setAttribute('y', get_option( 'has_gv_'.$form_tab.'LabelGrundY' ));
$Label ->setAttribute('w', get_option( 'has_gv_'.$form_tab.'LabelGrundW' ));
$Label ->setAttribute('h', get_option( 'has_gv_'.$form_tab.'LabelGrundH' ));
$Label ->setAttribute('center', 'false');
$Label ->setAttribute('wrap', get_option( 'has_gv_'.$form_tab.'LabelGrundWRAP' ));
$Label ->setAttribute('fgColor', $SchriftFarbeRGB);
$Label ->setAttribute('bgColor', $HintergrundFarbeRGB);
$Fields->appendChild($Label );

} //Textfeld Grund


 //Textfeld Zeitstempel
 if(get_option( 'has_gv_'.$form_tab.'ZeitstempelSichtbarkeitCheckboxID') == 'sichtbar'){
  

  //COLORS
$SchriftFarbeHEX = get_option( 'has_gv_'.$form_tab.'LabelTimestampFcolor' );
list($r, $g, $b) = sscanf($SchriftFarbeHEX, "#%02x%02x%02x");
$SchriftFarbeRGB = '('.$r.','.$g.','.$b.')';


$HintergrundFarbeHEX = get_option( 'has_gv_'.$form_tab.'LabelTimestampBGcolor' );
list($r, $g, $b) = sscanf($HintergrundFarbeHEX, "#%02x%02x%02x");
$HintergrundFarbeRGB = '('.$r.','.$g.','.$b.')';

  //Input Text
$label1_input_text = get_option( 'has_gv_'.$form_tab.'LabelInputTimestamp' );
$location = ' %timestamp';
$label1_input_de = $label1_input_text . $location;

$Label  = $xml->createElement('Label', $label1_input_de);
$Label ->setAttribute('type', 'dynamic' );
$Label ->setAttribute('x', get_option( 'has_gv_'.$form_tab.'LabelTimestampX' ) );
$Label ->setAttribute('y', get_option( 'has_gv_'.$form_tab.'LabelTimestampY' ));
$Label ->setAttribute('w', get_option( 'has_gv_'.$form_tab.'LabelTimestampW' ) );
$Label ->setAttribute('h', get_option( 'has_gv_'.$form_tab.'LabelTimestampH' ));
$Label ->setAttribute('center', 'false');
$Label ->setAttribute('wrap', 'false');
$Label ->setAttribute('fgColor', $SchriftFarbeRGB);
$Label ->setAttribute('bgColor', $HintergrundFarbeRGB);
$Fields->appendChild($Label );

} //Textfeld Zeitstempel

	

	$newFileName = HANDYSIGNATUR_PLUGIN_DIR . 'TEMPLATE_UPLOAD/'.$xml_file_name;




//check if Folder ist writable 777
	if ( ! is_writable(dirname($newFileName))) {

		$temp_array ['infos'] =  'Das Verzeichnis TEMPLATE_UPLOAD' . ' braucht Schreibrechte, 777 nähere Infos auf www.handysignatur-after-submit.at/wiki';

		$temp_array ['erfolg'] =$xml_file_name .' wurde nicht erstelt';

	} else {


		$xml->save(HANDYSIGNATUR_PLUGIN_DIR . 'TEMPLATE_UPLOAD/'.$xml_file_name);

		include (HANDYSIGNATUR_PLUGIN_DIR .'/src/inc/signature/client.php');

		include (HANDYSIGNATUR_PLUGIN_DIR .'/src/inc/signature/key.php');

		$template = HANDYSIGNATUR_PLUGIN_DIR . 'TEMPLATE_UPLOAD/'.$xml_file_name;

		$filesize = filesize($template);
		$fp = fopen($template, 'rb');
		$binary = fread($fp, $filesize);
		fclose($fp);
		$b64 = base64_encode($binary);

		$tempalteId = $client->UploadTemplate($b64);

		$temp_array ['erfolg'] =$xml_file_name .' wurde erstelt';
		$temp_array ['infos'] =0;


		$tempalteAuflistung =  $client->ListTemplate(get_option( 'has_gv_form_atrust_apikey' ));

		update_option( 'has_gv_form_SiegelTemplates', $tempalteAuflistung );
		update_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID', 'bearbeiten' );

		unlink(HANDYSIGNATUR_PLUGIN_DIR . 'TEMPLATE_UPLOAD/'.$xml_file_name);
	}



}//erstellen oder bearbeiten



	 $temp_array ['template_id'] = $tempalteId;
  $temp_array ['form_tab'] = $form_tab;
wp_send_json_success( $temp_array );
  return true;
  wp_die();
  }

  add_action('wp_ajax_has_gv_formSiegelTempErstellen', 'has_gv_formSiegelTempErstellen');