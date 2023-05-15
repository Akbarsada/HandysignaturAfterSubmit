<?php 
//insert scripts and styles
function backend_style_init() { 


   /////////////////////////////////////////////////////////////////
  //               STYLES                                        //
 //                                                             //
/////////////////////////////////////////////////////////////////

//css main style
wp_enqueue_style('has_css_main_style',  '/wp-content/plugins/HandysignaturAfterSubmitReload/src/assets/css/main.css');
wp_enqueue_style('has_css_main_style');
//css custom style
wp_enqueue_style('has_css_custom_style',  '/wp-content/plugins/HandysignaturAfterSubmitReload/src/assets/css/custom.css');
wp_enqueue_style('has_css_custom_style');



   /////////////////////////////////////////////////////////////////
  //               MEDIA                                         //
 //                                                             //
/////////////////////////////////////////////////////////////////

wp_enqueue_media();


   /////////////////////////////////////////////////////////////////
  //               COLOR PICKER                                  //
 //                                                             //
/////////////////////////////////////////////////////////////////

//colorpicker
wp_enqueue_style( 'wp-color-picker' );
 wp_enqueue_script( 'my-script-handle',  plugins_url('color.js', __FILE__ ), array( 'wp-color-picker' ), false, true );


   /////////////////////////////////////////////////////////////////
  //               GOOGLE FONTS                                  //
 //                                                             //
/////////////////////////////////////////////////////////////////

wp_register_style('has_icon_script', 'https://fonts.googleapis.com/icon?family=Material+Icons');
wp_enqueue_style('has_icon_script');


wp_register_style('has_google_icon_script', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200');
wp_enqueue_style('has_google_icon_script');




   /////////////////////////////////////////////////////////////////
  //               SCRIPTS                                       //
 //                                                             //
/////////////////////////////////////////////////////////////////

//js main script
wp_register_script('has_js_main_script',   '/wp-content/plugins/HandysignaturAfterSubmitReload/src/assets/js/main.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('has_js_main_script');
//js custom script
wp_register_script('has_js_custom_script', '/wp-content/plugins/HandysignaturAfterSubmitReload/src/assets/js/custom.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('has_js_custom_script');


// //jquery
// wp_register_script('has_js_admin', WP_PLUGIN_URL . '/HandysignaturAfterSubmit/asset/js/has.admin.js', array('jquery'), '1.0.0', true);
// wp_enqueue_script('has_js_admin');




}