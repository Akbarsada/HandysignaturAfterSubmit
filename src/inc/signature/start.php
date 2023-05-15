<?php
//create PDF
add_action( 'gfpdf_post_save_pdf_'.get_option( 'has_gv_form1ID' ), function( $pdf_path, $filename, $settings, $entry, $form ) {


	/* directory path */
	$copy_to_dir = get_option( 'has_gv_form1pdfWP_Download_Gesamtpfad' ) . '/';

	$copy_to_dirCert = get_option( 'has_gv_form1ZertifikatsDateiGesamtSpeicherPfad' ) . '/';


	/* Create the directory if it doesn't exist */
	if( ! is_dir( $copy_to_dir ) ) {
		wp_mkdir_p( $copy_to_dir );
	}

	if( ! is_dir( $copy_to_dirCert ) ) {
		wp_mkdir_p( $copy_to_dirCert );
	}

	/* Create UIDs for filename */
	$preffix_UID_Auswahl =  get_option( 'has_gv_form1_select_preffix_UID_Auswahl');
	$suffix_UID_Auswahl =  get_option( 'has_gv_form1_select_suffix_UID_Auswahl');


	//preffix UID
	$preffix_UID='';
	switch ($preffix_UID_Auswahl) {
		case 'preffix_UID4':
			$preffix_UID=rand(1000,9999);
			break;
		case 'preffix_UID6':
			$preffix_UID=rand(100000,999999);
			break;
		case 'preffix_UID8':
			$preffix_UID=rand(10000000,99999999);
			break;
	}
//suffix UID
	$suffix_UID='';
	switch ($suffix_UID_Auswahl) {
		case 'suffix_UID4':
			$suffix_UID=rand(1000,9999);
			break;
		case 'suffix_UID6':
			$suffix_UID=rand(100000,999999);
			break;
		case 'suffix_UID8':
			$suffix_UID=rand(10000000,99999999);
			break;
	}
	$filename = substr($filename, 0, -4);

	/* Create filename */
	$has_filename = 	get_option( 'has_gv_form1_preffix1') .$preffix_UID.get_option( 'has_gv_form1_preffix2').$filename.get_option( 'has_gv_form1_suffix1') .$suffix_UID.get_option( 'has_gv_form1_suffix2').'.pdf';

	/* Ensure we get a unique filename for the directory we are copying to */
	$has_filename = wp_unique_filename( $copy_to_dir, $has_filename );

	/* Copy the PDF to the new directory */
	copy( $pdf_path, $copy_to_dir . $has_filename );



require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/client.php');
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/key.php');
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/connect1/connect.php');
//require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/connect1/ftp.php');

}, 10, 5 );




add_action( 'gfpdf_post_save_pdf_'.get_option( 'has_gv_form2ID' ), function( $pdf_path, $filename, $settings, $entry, $form ) {

	/* directory path */
	$copy_to_dir = get_option( 'has_gv_form2pdfWP_Upload_Gesamtpfad' ) . '/';
	$copy_to_dirDown = get_option( 'has_gv_form2pdfWP_Download_Gesamtpfad' ) . '/';
	$copy_to_dirCert = get_option( 'has_gv_form2ZertifikatsDateiOrdnerSpeicherPfad' ) . '/';


	/* Create the directory if it doesn't exist */
	if( ! is_dir( $copy_to_dir ) ) {
		wp_mkdir_p( $copy_to_dir );
	}

	if( ! is_dir( $copy_to_dirDown ) ) {
		wp_mkdir_p( $copy_to_dirDown );
	}

	if( ! is_dir( $copy_to_dirCert ) ) {
		wp_mkdir_p( $copy_to_dirCert );
	}

	/* Create UIDs for filename */
	$preffix_UID_Auswahl =  get_option( 'has_gv_form2_select_preffix_UID_Auswahl');
	$suffix_UID_Auswahl =  get_option( 'has_gv_form2_select_suffix_UID_Auswahl');


	//preffix UID
	$preffix_UID='';
	switch ($preffix_UID_Auswahl) {
		case 'preffix_UID4':
			$preffix_UID=rand(1000,9999);
			break;
		case 'preffix_UID6':
			$preffix_UID=rand(100000,999999);
			break;
		case 'preffix_UID8':
			$preffix_UID=rand(10000000,99999999);
			break;
	}
//suffix UID
	$suffix_UID='';
	switch ($suffix_UID_Auswahl) {
		case 'suffix_UID4':
			$suffix_UID=rand(1000,9999);
			break;
		case 'suffix_UID6':
			$suffix_UID=rand(100000,999999);
			break;
		case 'suffix_UID8':
			$suffix_UID=rand(10000000,99999999);
			break;
	}
	$filename = substr($filename, 0, -4);

	/* Create filename */
	$has_filename = 	get_option( 'has_gv_form2_preffix1') .$preffix_UID.get_option( 'has_gv_form2_preffix2').$filename.get_option( 'has_gv_form2_suffix1') .$suffix_UID.get_option( 'has_gv_form2_suffix2').'.pdf';

	/* Ensure we get a unique filename for the directory we are copying to */
	$has_filename = wp_unique_filename( $copy_to_dir, $has_filename );

	/* Copy the PDF to the new directory */
	copy( $pdf_path, $copy_to_dir . $has_filename );

require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/client.php');
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/key.php');
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/connect2/connect.php');

}, 10, 5 );

add_action( 'gfpdf_post_save_pdf_'.get_option( 'has_gv_form3ID' ), function( $pdf_path, $filename, $settings, $entry, $form ) {

	/* directory path */
	$copy_to_dir = get_option( 'has_gv_form3pdfWP_Upload_Gesamtpfad' ) . '/';
	$copy_to_dirDown = get_option( 'has_gv_form3pdfWP_Download_Gesamtpfad' ) . '/';
	$copy_to_dirCert = get_option( 'has_gv_form3ZertifikatsDateiOrdnerSpeicherPfad' ) . '/';


	/* Create the directory if it doesn't exist */
	if( ! is_dir( $copy_to_dir ) ) {
		wp_mkdir_p( $copy_to_dir );
	}

	if( ! is_dir( $copy_to_dirDown ) ) {
		wp_mkdir_p( $copy_to_dirDown );
	}

	if( ! is_dir( $copy_to_dirCert ) ) {
		wp_mkdir_p( $copy_to_dirCert );
	}

	/* Create UIDs for filename */
	$preffix_UID_Auswahl =  get_option( 'has_gv_form3_select_preffix_UID_Auswahl');
	$suffix_UID_Auswahl =  get_option( 'has_gv_form3_select_suffix_UID_Auswahl');


	//preffix UID
	$preffix_UID='';
	switch ($preffix_UID_Auswahl) {
		case 'preffix_UID4':
			$preffix_UID=rand(1000,9999);
			break;
		case 'preffix_UID6':
			$preffix_UID=rand(100000,999999);
			break;
		case 'preffix_UID8':
			$preffix_UID=rand(10000000,99999999);
			break;
	}
//suffix UID
	$suffix_UID='';
	switch ($suffix_UID_Auswahl) {
		case 'suffix_UID4':
			$suffix_UID=rand(1000,9999);
			break;
		case 'suffix_UID6':
			$suffix_UID=rand(100000,999999);
			break;
		case 'suffix_UID8':
			$suffix_UID=rand(10000000,99999999);
			break;
	}
	$filename = substr($filename, 0, -4);

	/* Create filename */
	$has_filename = 	get_option( 'has_gv_form3_preffix1') .$preffix_UID.get_option( 'has_gv_form3_preffix2').$filename.get_option( 'has_gv_form3_suffix1') .$suffix_UID.get_option( 'has_gv_form3_suffix2').'.pdf';

	/* Ensure we get a unique filename for the directory we are copying to */
	$has_filename = wp_unique_filename( $copy_to_dir, $has_filename );

	/* Copy the PDF to the new directory */
	copy( $pdf_path, $copy_to_dir . $has_filename );

require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/client.php');
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/key.php');
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/connect3/connect.php');

}, 10, 5 );

add_action( 'gfpdf_post_save_pdf_'.get_option( 'has_gv_form4ID' ), function( $pdf_path, $filename, $settings, $entry, $form ) {

	/* directory path */
	$copy_to_dir = get_option( 'has_gv_form4pdfWP_Upload_Gesamtpfad' ) . '/';
	$copy_to_dirDown = get_option( 'has_gv_form4pdfWP_Download_Gesamtpfad' ) . '/';
	$copy_to_dirCert = get_option( 'has_gv_form4ZertifikatsDateiOrdnerSpeicherPfad' ) . '/';


	/* Create the directory if it doesn't exist */
	if( ! is_dir( $copy_to_dir ) ) {
		wp_mkdir_p( $copy_to_dir );
	}

	if( ! is_dir( $copy_to_dirDown ) ) {
		wp_mkdir_p( $copy_to_dirDown );
	}

	if( ! is_dir( $copy_to_dirCert ) ) {
		wp_mkdir_p( $copy_to_dirCert );
	}

	/* Create UIDs for filename */
	$preffix_UID_Auswahl =  get_option( 'has_gv_form4_select_preffix_UID_Auswahl');
	$suffix_UID_Auswahl =  get_option( 'has_gv_form4_select_suffix_UID_Auswahl');


	//preffix UID
	$preffix_UID='';
	switch ($preffix_UID_Auswahl) {
		case 'preffix_UID4':
			$preffix_UID=rand(1000,9999);
			break;
		case 'preffix_UID6':
			$preffix_UID=rand(100000,999999);
			break;
		case 'preffix_UID8':
			$preffix_UID=rand(10000000,99999999);
			break;
	}
//suffix UID
	$suffix_UID='';
	switch ($suffix_UID_Auswahl) {
		case 'suffix_UID4':
			$suffix_UID=rand(1000,9999);
			break;
		case 'suffix_UID6':
			$suffix_UID=rand(100000,999999);
			break;
		case 'suffix_UID8':
			$suffix_UID=rand(10000000,99999999);
			break;
	}
	$filename = substr($filename, 0, -4);

	/* Create filename */
	$has_filename = 	get_option( 'has_gv_form4_preffix1') .$preffix_UID.get_option( 'has_gv_form4_preffix2').$filename.get_option( 'has_gv_form4_suffix1') .$suffix_UID.get_option( 'has_gv_form4_suffix2').'.pdf';

	/* Ensure we get a unique filename for the directory we are copying to */
	$has_filename = wp_unique_filename( $copy_to_dir, $has_filename );

	/* Copy the PDF to the new directory */
	copy( $pdf_path, $copy_to_dir . $has_filename );

require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/client.php');
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/key.php');
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/connect4/connect.php');

}, 10, 5 );

add_action( 'gfpdf_post_save_pdf_'.get_option( 'has_gv_form5ID' ), function( $pdf_path, $filename, $settings, $entry, $form ) {

	/* directory path */
	$copy_to_dir = get_option( 'has_gv_form5pdfWP_Upload_Gesamtpfad' ) . '/';
	$copy_to_dirDown = get_option( 'has_gv_form5pdfWP_Download_Gesamtpfad' ) . '/';
	$copy_to_dirCert = get_option( 'has_gv_form5ZertifikatsDateiOrdnerSpeicherPfad' ) . '/';


	/* Create the directory if it doesn't exist */
	if( ! is_dir( $copy_to_dir ) ) {
		wp_mkdir_p( $copy_to_dir );
	}

	if( ! is_dir( $copy_to_dirDown ) ) {
		wp_mkdir_p( $copy_to_dirDown );
	}

	if( ! is_dir( $copy_to_dirCert ) ) {
		wp_mkdir_p( $copy_to_dirCert );
	}

	/* Create UIDs for filename */
	$preffix_UID_Auswahl =  get_option( 'has_gv_form5_select_preffix_UID_Auswahl');
	$suffix_UID_Auswahl =  get_option( 'has_gv_form5_select_suffix_UID_Auswahl');


	//preffix UID
	$preffix_UID='';
	switch ($preffix_UID_Auswahl) {
		case 'preffix_UID4':
			$preffix_UID=rand(1000,9999);
			break;
		case 'preffix_UID6':
			$preffix_UID=rand(100000,999999);
			break;
		case 'preffix_UID8':
			$preffix_UID=rand(10000000,99999999);
			break;
	}
//suffix UID
	$suffix_UID='';
	switch ($suffix_UID_Auswahl) {
		case 'suffix_UID4':
			$suffix_UID=rand(1000,9999);
			break;
		case 'suffix_UID6':
			$suffix_UID=rand(100000,999999);
			break;
		case 'suffix_UID8':
			$suffix_UID=rand(10000000,99999999);
			break;
	}
	$filename = substr($filename, 0, -4);

	/* Create filename */
	$has_filename = 	get_option( 'has_gv_form5_preffix1') .$preffix_UID.get_option( 'has_gv_form5_preffix2').$filename.get_option( 'has_gv_form5_suffix1') .$suffix_UID.get_option( 'has_gv_form5_suffix2').'.pdf';

	/* Ensure we get a unique filename for the directory we are copying to */
	$has_filename = wp_unique_filename( $copy_to_dir, $has_filename );

	/* Copy the PDF to the new directory */
	copy( $pdf_path, $copy_to_dir . $has_filename );

require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/client.php');
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/key.php');
require_once(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/signature/connect5/connect.php');

}, 10, 5 );