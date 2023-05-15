<?php

    global $wpdb;

   /*////////////////////////////////////////////////////////////////
  //              WP QUERRYS                                      //
 //                                                              //
////////////////////////////////////////////////////////////////*/


/* ===ALL WORDPRESS SITES=== */
$all_sites = $wpdb->get_results("SELECT  `post_title`, `guid` FROM {$wpdb->prefix}posts WHERE  `post_status` = 'publish' AND `post_type` = 'page' "); 

/* ===ALL WORDPRESS PAGES=== */
$all_posts = $wpdb->get_results("SELECT  `post_title`, `guid` FROM {$wpdb->prefix}posts WHERE  `post_status` = 'publish' AND `post_type` = 'post' "); 

$all_gf_array_meta =  $wpdb->get_results("SELECT `display_meta` FROM `{$wpdb->prefix}gf_form_meta` WHERE json_length(JSON_EXTRACT(display_meta, '$.gfpdf_form_settings')) > 0;");

   /*////////////////////////////////////////////////////////////////
  //              GF QUERRYS                                      //
 //                                                              //
////////////////////////////////////////////////////////////////*/

//$all_gf_array =  $wpdb->get_results("SELECT  * FROM {$wpdb->prefix}gf_form  WHERE `is_active` = 1 AND `is_trash` = 0");

//$all_gf_notifications =  $wpdb->get_results("SELECT  * FROM {$wpdb->prefix}gf_form_meta  WHERE `is_active` = 1 AND `is_trash` = 0");


// $Test_all_gf_array_meta =  $wpdb->get_results("SELECT `display_meta` FROM `wp_gf_form_meta` WHERE json_length(JSON_EXTRACT(display_meta, '$.gfpdf_form_settings')) > 0 AND
// JSON_EXTRACT(display_meta, '$.id') = 4 ");

//echo '<pre style="margin-left:500px">GF Info ' . print_r($Test_all_gf_array_meta); echo ' </pre>';

   /*////////////////////////////////////////////////////////////////
  //              GF QUERRYS                                      //
 //                                                              //
////////////////////////////////////////////////////////////////*/
//$all_gf_array_test =  $wpdb->get_results("SELECT `display_meta` as wooos, JSON_EXTRACT(display_meta, '$.gfpdf_form_settings') as HUUUUUUUUUUUUUUUUUUSNA  FROM `wp_gf_form_meta` WHERE json_length(JSON_EXTRACT(display_meta, '$.gfpdf_form_settings')) > 0 ;");
//$all_gf_array_test =  $wpdb->get_results("SELECT JSON_EXTRACT(display_meta, '$.gfpdf_form_settings') as HUUUUUUUUUUUUUUUUUUSNA  FROM `wp_gf_form_meta` WHERE json_length(JSON_EXTRACT(display_meta, '$.gfpdf_form_settings')) > 0 ;");
//$all_gf_array =  $wpdb->get_results("SELECT `display_meta` FROM `wp_gf_form_meta` WHERE json_length(JSON_EXTRACT(display_meta, '$.gfpdf_form_settings')) > 0 ;");




// foreach($Test_all_gf_array_meta as $value){
//     $all_gf_array_test2 = get_object_vars( $value);
//     foreach($all_gf_array_test2 as $all_gf_array_test3){
//         $newValue  = json_decode( $all_gf_array_test3, true); 
//       //  echo '<pre style="margin-left:500px">GF Info ' . print_r($newValue); echo ' </pre>';
//        // echo '<pre style="margin-left:500px">GF Info ' . print_r($newValue['fields']); echo ' </pre>';
//         //echo '<pre style="margin-left:500px">GF Info ' . print_r($newValue['formId']); echo ' </pre>';

//         $GF_id = $newValue['fields'];
        
//        // $GF_infos =  $wpdb->get_results("SELECT  `is_active`, `is_trash`, `title` FROM {$wpdb->prefix}gf_form WHERE  `id` =  $GF_id"); 
//         foreach($GF_id as $GF_info){
//        // echo $newValue5  = json_decode( $GF_info, true); {Where do you live?:3}
//      //  echo '<pre style="margin-left:500px">GF Info ' . print_r($GF_info['formId']); echo ' </pre>';
//      echo '<pre style="margin-left:500px">GF Info ' . print_r('{'. $GF_info['label'] . ':' .  $GF_info['id'] . '}'); echo ' </pre>';
     
//    //  echo '<pre style="margin-left:500px">GF Info ' . print_r($GF_info['id']); echo ' </pre>';
//      //  echo '<pre style="margin-left:500px">GF Info ' . print_r($GF_info['label']); echo ' </pre>';
//        // echo '<pre style="margin-left:500px">GF ID   ' .$GF_id; echo ' </pre>';
//        // echo '<pre style="margin-left:500px">PDF Key  '; print_r($newValue['gfpdf_form_settings'][key($newValue['gfpdf_form_settings'])]['id']); echo ' </pre>';
//       //  echo '<pre style="margin-left:500px">PDF Info  '; print_r($newValue['gfpdf_form_settings']); echo ' </pre>';
//         }
//     }
// }


   /*////////////////////////////////////////////////////////////////
  //              HAS AJAX REQUESTs                               //
 //                                                              //
////////////////////////////////////////////////////////////////*/



// $templateResult =  HANDYSIGNATUR_PLUGIN_DIR  . '/src/inc/signature/temp/templateForm99.xml';

//    $xml=simplexml_load_file($templateResult) or die("Error: Cannot create object");
   
//     echo '<pre>'; print_r($xml); echo '</pre>';
//    // echo '<br>-----------------Description--------------------------------<br>';
   
   // $author_array = get_object_vars($xml->Description[0]['author']); 
   
   // echo $Description_author = $author_array[0];
   
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_name_array = get_object_vars($xml->Description[0]['name']); 
   
   // echo $Description_siegel_name = $siegel_name_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_beschreibung_array = get_object_vars($xml->Description[0]['description']); 
   
   // echo $Description_siegel_beschreibung = $siegel_beschreibung_array[0];
   
   // echo '<br>------------------POSITION-----------------------------<br>';
   
   
   // $siegel_Position_type_array = get_object_vars($xml->Position[0]['type']); 
   
   // echo $Position_siegel_type = $siegel_Position_type_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Position_X_array = get_object_vars($xml->Position[0]['x']); 
   
   // echo $Position_siegel_X = $siegel_Position_X_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Position_Y_array = get_object_vars($xml->Position[0]['y']); 
   
   // echo $Position_siegel_Y = $siegel_Position_Y_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   
   // $siegel_Position_W_array = get_object_vars($xml->Position[0]['w']); 
   
   // echo $Position_siegel_W = $siegel_Position_W_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Position_H_array = get_object_vars($xml->Position[0]['h']); 
   
   // echo $Position_siegel_H = $siegel_Position_H_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Position_page_array = get_object_vars($xml->Position[0]['page']); 
   
   // echo $Position_siegel_page = $siegel_Position_page_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_B64bgImage_array = get_object_vars($xml->B64bgImage[0]); 
   
   // echo $B64bgImage_siegel = $siegel_B64bgImage_array[0];
   
   // echo '<br>--------------------Label Signer------------------------------<br>';
   
   
   // $siegel_Fields_Label_signer_type_array = get_object_vars($xml->Fields->Label[0]['type']); 
   
   // echo $siegel_Fields_Label_signer_type = $siegel_Fields_Label_signer_type_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_signer_x_array = get_object_vars($xml->Fields->Label[0]['x']); 
   
   // echo $siegel_Fields_Label_signer_x = $siegel_Fields_Label_signer_x_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_signer_y_array = get_object_vars($xml->Fields->Label[0]['y']); 
   
   // echo $siegel_Fields_Label_signer_y = $siegel_Fields_Label_signer_y_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_signer_w_array = get_object_vars($xml->Fields->Label[0]['w']); 
   
   // echo $siegel_Fields_Label_signer_w = $siegel_Fields_Label_signer_w_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_signer_h_array = get_object_vars($xml->Fields->Label[0]['h']); 
   
   // echo $siegel_Fields_Label_signer_h = $siegel_Fields_Label_signer_h_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_signer_center_array = get_object_vars($xml->Fields->Label[0]['center']); 
   
   // echo $siegel_Fields_Label_signer_center = $siegel_Fields_Label_signer_center_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_signer_wrap_array = get_object_vars($xml->Fields->Label[0]['wrap']); 
   
   // echo $siegel_Fields_Label_signer_wrap = $siegel_Fields_Label_signer_wrap_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_signer_fgColor_array = get_object_vars($xml->Fields->Label[0]['fgColor']); 
   
   // echo $siegel_Fields_Label_signer_fgColor = $siegel_Fields_Label_signer_fgColor_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_signer_bgColor_array = get_object_vars($xml->Fields->Label[0]['bgColor']); 
   
   // echo $siegel_Fields_Label_signer_bgColor = $siegel_Fields_Label_signer_bgColor_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   
   
   // echo '<br>--------------------Label Timestamp------------------------------<br>';
   
   
   // $siegel_Fields_Label_timestamp_type_array = get_object_vars($xml->Fields->Label[1]['type']); 
   
   // echo $siegel_Fields_Label_timestamp_type = $siegel_Fields_Label_timestamp_type_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_timestamp_x_array = get_object_vars($xml->Fields->Label[1]['x']); 
   
   // echo $siegel_Fields_Label_timestamp_x = $siegel_Fields_Label_timestamp_x_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_timestamp_y_array = get_object_vars($xml->Fields->Label[1]['y']); 
   
   // echo $siegel_Fields_Label_timestamp_y = $siegel_Fields_Label_timestamp_y_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_timestamp_w_array = get_object_vars($xml->Fields->Label[1]['w']); 
   
   // echo $siegel_Fields_Label_timestamp_w = $siegel_Fields_Label_timestamp_w_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_timestamp_h_array = get_object_vars($xml->Fields->Label[1]['h']); 
   
   // echo $siegel_Fields_Label_timestamp_h = $siegel_Fields_Label_timestamp_h_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_timestamp_center_array = get_object_vars($xml->Fields->Label[1]['center']); 
   
   // echo $siegel_Fields_Label_timestamp_center = $siegel_Fields_Label_timestamp_center_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_timestamp_wrap_array = get_object_vars($xml->Fields->Label[1]['wrap']); 
   
   // echo $siegel_Fields_Label_timestamp_wrap = $siegel_Fields_Label_timestamp_wrap_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_timestamp_fgColor_array = get_object_vars($xml->Fields->Label[0]['fgColor']); 
   
   // echo $siegel_Fields_Label_timestamp_fgColor = $siegel_Fields_Label_timestamp_fgColor_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';
   
   // $siegel_Fields_Label_timestamp_bgColor_array = get_object_vars($xml->Fields->Label[0]['bgColor']); 
   
   // echo $siegel_Fields_Label_timestamp_bgColor = $siegel_Fields_Label_timestamp_bgColor_array[0];
   
   // echo '<br>--------------------------------------------------------------<br>';



    
