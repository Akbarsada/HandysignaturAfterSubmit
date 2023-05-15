<?php



   /* ===WP Weiterleitung Error=== */
   function has_gv_formWP_Weiterleitung_Error(){
    $WP_Weiterleitung_Error = array();
      $form_tab =  $_POST['tab'];
      $wp_pfad = $_POST['has_gv_formError'];
      
  
  
   
      update_option( 'has_gv_'.$form_tab.'Error', $_POST['has_gv_formError'] );
  
      
  
  
      // Zusatz Bild Postion 
      $WP_Weiterleitung_Error ['wp_pfad'] = get_option( 'has_gv_'.$form_tab.'Error' );
  
  
      wp_send_json_success( $WP_Weiterleitung_Error );
      return true;
      wp_die();
      }
    //  add_action('wp_ajax_nopriv_has_gv_formWP_Weiterleitung_Error', 'has_gv_formWP_Weiterleitung_Error');
      add_action('wp_ajax_has_gv_formWP_Weiterleitung_Error', 'has_gv_formWP_Weiterleitung_Error');
  