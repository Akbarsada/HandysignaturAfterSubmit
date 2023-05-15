<?php



   /* ===WP Weiterleitung Erfolg=== */
   function has_gv_formWP_Weiterleitung_Erfolg(){
      $form_tab =  $_POST['tab'];

      $wp_pfad = $_POST['has_gv_formErfolg'];
      
  
  
   
      update_option( 'has_gv_'.$form_tab.'Erfolg', $_POST['has_gv_formErfolg'] );
  
      
  
  
      // Zusatz Bild Postion 
      $WP_Weiterleitung_Erfolg ['wp_pfad'] = get_option( 'has_gv_'.$form_tab.'Erfolg' );
  
  
      wp_send_json_success( $WP_Weiterleitung_Erfolg );
      return true;
      wp_die();
      }
    //  add_action('wp_ajax_nopriv_has_gv_formWP_Weiterleitung_Erfolg', 'has_gv_formWP_Weiterleitung_Erfolg');
      add_action('wp_ajax_has_gv_formWP_Weiterleitung_Erfolg', 'has_gv_formWP_Weiterleitung_Erfolg');