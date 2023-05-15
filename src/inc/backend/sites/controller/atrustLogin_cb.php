<?php



 function atrustLogin(){
    $form_tab =  $_POST['tab'];
	 $Atrust_Login = array();
    
  update_option( 'has_gv_'.$form_tab.'_atrust_CustomLogo', $_POST['atrust_login_image'] );
  update_option( 'has_gv_'.$form_tab.'_atrust_CustomText', $_POST['atrust_login_text'] );
	 update_option( 'has_gv_'.$form_tab.'_atrust_CustomColor', $_POST['atrust_login_color'] );



	 $Atrust_Login ['color'] = get_option( 'has_gv_'.$form_tab.'_atrust_CustomColor' );
	 $Atrust_Login ['image'] = get_option( 'has_gv_'.$form_tab.'_atrust_CustomLogo' );
	 $Atrust_Login ['text'] = get_option( 'has_gv_'.$form_tab.'_atrust_CustomText' );
	 wp_send_json_success( $Atrust_Login );
  return true;
  wp_die();
  }
 // add_action('wp_ajax_nopriv_has_gv_formAtrustSpeichern', 'has_gv_formAtrustSpeichern');
  add_action('wp_ajax_atrustLogin', 'atrustLogin');