<?php


/* ===Formularauswahl=== */
function has_gv_formID(){
  $form_tab =  $_POST['tab'];
    $PDF_Daten = array();
    global $wpdb;
    $GF_ID = $_POST['has_gv_formID']; 
if($GF_ID == 'keins'){
	update_option( 'has_gv_'.$form_tab.'ID', '' );
	update_option( 'has_gv_'.$form_tab.'_PDF_orientation', '' );
	update_option( 'has_gv_'.$form_tab.'_PDF_pdf_size', '' );
	update_option( 'has_gv_'.$form_tab.'_PDF_font_colour', '' );
	update_option( 'has_gv_'.$form_tab.'_PDF_name', '' );
	update_option( 'has_gv_'.$form_tab.'_PDF_background_color', '' );
	update_option( 'has_gv_'.$form_tab.'_PDF_password', '' );

}
else{
    $all_gf_arrayPHP =  $wpdb->get_results("SELECT `display_meta` FROM `{$wpdb->prefix}gf_form_meta` WHERE json_length(JSON_EXTRACT(display_meta, '$.gfpdf_form_settings')) > 0  AND `form_id` = $GF_ID;");
    $value = json_decode($all_gf_arrayPHP[0]->display_meta,true);

    update_option( 'has_gv_'.$form_tab.'_PDF_name',$value['gfpdf_form_settings'][key($value['gfpdf_form_settings'])]['name'] );
    update_option( 'has_gv_'.$form_tab.'_PDF_filename',$value['gfpdf_form_settings'][key($value['gfpdf_form_settings'])]['filename'] );
    update_option( 'has_gv_'.$form_tab.'_PDF_pdf_size',$value['gfpdf_form_settings'][key($value['gfpdf_form_settings'])]['pdf_size'] );
    update_option( 'has_gv_'.$form_tab.'_PDF_orientation',$value['gfpdf_form_settings'][key($value['gfpdf_form_settings'])]['orientation'] );
    update_option( 'has_gv_'.$form_tab.'_PDF_font_colour',$value['gfpdf_form_settings'][key($value['gfpdf_form_settings'])]['font_colour'] );
    update_option( 'has_gv_'.$form_tab.'_PDF_background_color',$value['gfpdf_form_settings'][key($value['gfpdf_form_settings'])]['background_color'] );
    update_option( 'has_gv_'.$form_tab.'_PDF_password',$value['gfpdf_form_settings'][key($value['gfpdf_form_settings'])]['password'] );
    update_option( 'has_gv_'.$form_tab.'_PDF_key',$value['gfpdf_form_settings'][key($value['gfpdf_form_settings'])]['id'] );
    update_option( 'has_gv_'.$form_tab.'ID', $GF_ID );

    $PDF_bearbeitungsLink = site_url('/') . 'wp-admin/admin.php?page=gf_edit_forms&view=settings&subview=PDF&id='.$GF_ID.'&pid='. get_option( 'has_gv_'.$form_tab.'_PDF_key') .'#/';


    update_option( 'has_gv_'.$form_tab.'_PDF_bearbeiten_link', $PDF_bearbeitungsLink );

    $custom_pdf_size = $value['gfpdf_form_settings'][key($value['gfpdf_form_settings'])]['pdf_size'];

    $orientation =  $value['gfpdf_form_settings'][key($value['gfpdf_form_settings'])]['orientation'];
 
    $hohe_mm ='';
 
    $breite_mm = '';
    
    switch ($custom_pdf_size) {
    case 'A0':
    $hohe_mm =1189;
    $breite_mm =841;
    break;
    case 'A1':
    $hohe_mm =841;
    $breite_mm =594;
    break;
    case 'A2':
    $hohe_mm =594;
    $breite_mm =420;
    break;
    case 'A3':
    $hohe_mm =420;
    $breite_mm =297;
    break;
    case 'A4':
    $hohe_mm =297;
    $breite_mm =210;
    break;
    case 'A5':
    $hohe_mm =210;
    $breite_mm =148;
    break;
    case 'A6':
    $hohe_mm =148;
    $breite_mm =105;
    break;
    case 'A7':
    $hohe_mm =105;
    $breite_mm =74;
    break;
    case 'A8':
    $hohe_mm =74;
    $breite_mm =52;
    break;
    case 'A9':
    $hohe_mm =52;
    $breite_mm =37;
    break;
    case 'A10':
    $hohe_mm =37;
    $breite_mm =26;
    break;
    case 'B0':
    $hohe_mm =1414;
    $breite_mm =1000;
    break;
    case 'B1':
    $hohe_mm =1000;
    $breite_mm =707;
    break;
    case 'B2':
    $hohe_mm =707;
    $breite_mm =500;
    break;
    case 'B3':
    $hohe_mm =500;
    $breite_mm =353;
    break;
    case 'B4':
    $hohe_mm =353;
    $breite_mm =250;
    break;
    case 'B5':
    $hohe_mm =250;
    $breite_mm =176;
    break;
    case 'B6':
    $hohe_mm =176;
    $breite_mm =125;
    break;
    case 'B7':
    $hohe_mm =125;
    $breite_mm =88;
    break;
    case 'B8':
    $hohe_mm =88;
    $breite_mm =62;
    break;
    case 'B9':
    $hohe_mm =62;
    $breite_mm =44;
    break;
    case 'B10':
    $hohe_mm =44;
    $breite_mm =31;
    break;
    case 'C0':
    $hohe_mm =1297;
    $breite_mm =917;
    break;
    case 'C1':
    $hohe_mm =917;
    $breite_mm =648;
    break;
    case 'C2':
    $hohe_mm =648;
    $breite_mm =458;
    break;
    case 'C3':
    $hohe_mm =458;
    $breite_mm =324;
    break;
    case 'C4':
    $hohe_mm =324;
    $breite_mm =229;
    break;
    case 'C5':
    $hohe_mm =229;
    $breite_mm =162;
    break;
    case 'C6':
    $hohe_mm =162;
    $breite_mm =114;
    break;
    case 'C7':
    $hohe_mm =114;
    $breite_mm =81;
    break;
    case 'C8':
    $hohe_mm =81;
    $breite_mm =57;
    break;
    case 'C9':
    $hohe_mm =57;
    $breite_mm =40;
    break;
    case 'C10':
    $hohe_mm =40;
    $breite_mm =28;
    break;
    case 'RA0':
    $hohe_mm =500;
    $breite_mm =300;
    break;
    case 'RA0':
    $hohe_mm =500;
    $breite_mm =300;
    break;
    case 'RA0':
    $hohe_mm =860;
    $breite_mm =1220;
    break;
    case 'RA1':
    $hohe_mm =610;
    $breite_mm =860;
    break;
    case 'RA2':
    $hohe_mm =430;
    $breite_mm =610;
    break;
    case 'RA3':
    $hohe_mm =305;
    $breite_mm =430;
    break;
    case 'RA4':
    $hohe_mm =215;
    $breite_mm =305;
    break;
    case 'SRA0':
    $hohe_mm =900;
    $breite_mm =1280;
    break;
    case 'SRA1':
    $hohe_mm =640;
    $breite_mm =900;
    break;
    case 'SRA2':
    $hohe_mm =450;
    $breite_mm =640;
    break;
    case 'SRA3':
    $hohe_mm =320;
    $breite_mm =450;
    break;
    case 'SRA4':
    $hohe_mm =225;
    $breite_mm =320;
    break;
    }
    
    if($orientation == 'landscape'){
       $zwischenBreite = $breite_mm;
       $breite_mm = $hohe_mm;
       $hohe_mm = $zwischenBreite;
     }
     
 
     $breite_px =ceil( ($breite_mm * 2.8333333333333));
     $hohe_px = ceil(($hohe_mm * 2.8333333333333));
 
   
    update_option( 'has_gv_'.$form_tab.'PDF_hohe', $hohe_px );
    update_option( 'has_gv_'.$form_tab.'PDF_breite', $breite_px );
    update_option( 'has_gv_'.$form_tab.'SignForm', $_POST['has_gv_formID'] );


    $PDF_Daten ['filename'] = get_option( 'has_gv_'.$form_tab.'_PDF_filename' );
    $PDF_Daten ['name'] = get_option( 'has_gv_'.$form_tab.'_PDF_name' );
    $PDF_Daten ['pdf_size'] = get_option( 'has_gv_'.$form_tab.'_PDF_pdf_size');
    $PDF_Daten ['orientation'] = get_option( 'has_gv_'.$form_tab.'_PDF_orientation' );
    $PDF_Daten ['font_colour'] = get_option( 'has_gv_'.$form_tab.'_PDF_font_colour' );
    $PDF_Daten ['background_color'] = get_option( 'has_gv_'.$form_tab.'_PDF_background_color' );
    $PDF_Daten ['PDF_password'] = get_option( 'has_gv_'.$form_tab.'_PDF_password' );
    $PDF_Daten ['formID'] = get_option( 'has_gv_'.$form_tab.'ID' );
    $PDF_Daten ['PDF_hohe'] = get_option( 'has_gv_'.$form_tab.'PDF_hohe' );
    $PDF_Daten ['PDF_breite'] = get_option( 'has_gv_'.$form_tab.'PDF_breite' );
    $PDF_Daten ['PDF_key'] = get_option( 'has_gv_'.$form_tab.'_PDF_key' );
    $PDF_Daten ['PDF_bearbeitungsLink'] = get_option( 'has_gv_'.$form_tab.'_PDF_bearbeiten_Link' );






	global $wpdb;
	$Form_Id = get_option( 'has_gv_'.$form_tab.'ID' );
	$Fields_all_gf_array_meta =  $wpdb->get_results("SELECT `display_meta` FROM `{$wpdb->prefix}gf_form_meta` WHERE json_length(JSON_EXTRACT(display_meta, '$.gfpdf_form_settings')) > 0 AND
        JSON_EXTRACT(display_meta, '$.id') = $Form_Id ");

	//$GF_fields = array();
	foreach($Fields_all_gf_array_meta as $value){
		$all_gf_array_test2 = get_object_vars( $value);
		foreach($all_gf_array_test2 as $all_gf_array_test3){
			$newValue  = json_decode( $all_gf_array_test3, true);
			$GF_id = $newValue['fields'];
			foreach($GF_id as $GF_info){
				$GF_fields .= '<span>{'. $GF_info['label'] . ':' .  $GF_info['id'] . '}</span>';
			}
		}
	}
	update_option( 'has_gv_'.$form_tab.'GF_fields', $GF_fields);
	$PDF_Daten ['GV_Felder'] = $GF_fields;



    wp_send_json_success( $PDF_Daten );
  }
    return true;
    wp_die();
    }
    add_action('wp_ajax_nopriv_has_gv_formID', 'has_gv_formID');
    add_action('wp_ajax_has_gv_formID', 'has_gv_formID');



