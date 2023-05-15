<?php

//Template Insert

function PDF_temp(){
   $form_tab =  $_POST['tab'];

$content_pdfTemp = implode("",explode("\\",$_POST['temp_content']));
	$content_pdfTemp = str_replace('\\','', $_POST['temp_content']);

   update_option( 'has_gv_'.$form_tab.'temp_content', $content_pdfTemp );
   $editor_datein ['content_editor'] = get_option( 'has_gv_'.$form_tab.'temp_content' );



	$client_file_finish = HANDYSIGNATUR_PLUGIN_DIR . 'TEMPLATE_UPLOAD/PDF_temp_'.$form_tab.'.php';


	//check if Folder ist writable 777
	if (  !is_writable(dirname($client_file_finish))) {

		$editor_datein ['infos'] ='Das Verzeichnis TEMPLATE_UPLOAD' . ' braucht Schreibrechte, nähere Infos auf www.handysignatur-after-submit.at/wiki';
		$editor_datein ['erfolg'] ='PDF Template wurde nicht erstelt';


	} else {

		$pdf_tmp = get_option('has_gv_'.$form_tab.'_PDF_name');
		$client_finish = "<?php
/**
     * Template Name: PDF Template für $pdf_tmp
     * Version: 1.0
     * Description:
    
     * Required PDF Version: 4.0
     * Tags:
     */
?>" .get_option( 'has_gv_'.$form_tab.'temp_content' );

		file_put_contents( $client_file_finish , $client_finish);

		$editor_datein ['erfolg'] ='PDF Template wurde erstelt';
		$editor_datein ['infos'] =0;
	}


	wp_send_json_success( $editor_datein );
   return true;
   wp_die();
   }
   add_action('wp_ajax_PDF_temp', 'PDF_temp');