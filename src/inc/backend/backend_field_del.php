<?php
global $jal_db_version;
function backend_field_del() {

  $form_tab =  $_POST['tab'];
    
    

  //Signatur Siegel SICHTBAR und im TEMPLATEXXXXX
  delete_option( 'has_gv_form1SichtbarkeitSignaturSiegelCheckboxID');
  delete_option( 'has_gv_form2SichtbarkeitSignaturSiegelCheckboxID');
  delete_option( 'has_gv_form3SichtbarkeitSignaturSiegelCheckboxID ' );
  delete_option( 'has_gv_form4SichtbarkeitSignaturSiegelCheckboxID' );
  delete_option( 'has_gv_form5SichtbarkeitSignaturSiegelCheckboxID' );



  //Neues Template oder Template bearbeiten
  delete_option( 'has_gv_form1NeuesTemplateOderBearbeitenID' );
  delete_option( 'has_gv_form2NeuesTemplateOderBearbeitenID' );
  delete_option( 'has_gv_form3NeuesTemplateOderBearbeitenID' );
  delete_option( 'has_gv_form4NeuesTemplateOderBearbeitenID' );
  delete_option( 'has_gv_form5NeuesTemplateOderBearbeitenID' );


  //PDF hohe 
  delete_option( 'has_gv_form1PDF_hohe' );
  delete_option( 'has_gv_form2PDF_hohe' );
  delete_option( 'has_gv_form3PDF_hohe' );
  delete_option( 'has_gv_form4PDF_hohe' );
  delete_option( 'has_gv_form5PDF_hohe' );

    //PDF breite
    delete_option( 'has_gv_form1PDF_breite' );
    delete_option( 'has_gv_form2PDF_breite' );
    delete_option( 'has_gv_form3PDF_breite' );
    delete_option( 'has_gv_form4PDF_breite' );
    delete_option( 'has_gv_form5PDF_breite' );




  /////////// SIEGEL DESCRIPTION //////////////////////////////////////////////
  /////////////////////////////////////////////////////////////////////


    //Signatur Siegel Template Name
    delete_option( 'has_gv_form1SiegelTemplatesName' );
    delete_option( 'has_gv_form2Siege2TemplatesName' );
    delete_option( 'has_gv_form3Siege3TemplatesName' );
    delete_option( 'has_gv_form4Siege3TemplatesName');
    delete_option( 'has_gv_form5Siege3TemplatesName');
   //Signatur Siegel Template Author
    delete_option( 'has_gv_form1SiegelTemplatesAuthor' );
    delete_option( 'has_gv_form2Siege2TemplatesAuthor' );
    delete_option( 'has_gv_form3Siege3TemplatesAuthor' );
    delete_option( 'has_gv_form4Siege4TemplatesAuthor');
    delete_option( 'has_gv_form5Siege5TemplatesAuthor' );
   //Signatur Siegel Template Description
    delete_option( 'has_gv_form1SiegelTemplatesDescription');
    delete_option( 'has_gv_form2SiegelTemplatesDescription' );
    delete_option( 'has_gv_form3SiegelTemplatesDescription' );
    delete_option( 'has_gv_form4SiegelTemplatesDescription' );
    delete_option( 'has_gv_form5SiegelTemplatesDescription' );
    
  
//   /////////// SIEGEL  BILD //////////////////////////////////////////////
//   /////////////////////////////////////////////////////////////////////

//   //Signatur Siegel Sichtbarkeit
//   delete_option( 'has_gv_form1SiegelHintergrundBild_Sichtbarkeit', 'has_gv_form1SiegelHintergrundBild_Sichtbarkeit' );
//   delete_option( 'has_gv_form2SiegelHintergrundBild_Sichtbarkeit', 'has_gv_form2SiegelHintergrundBild_Sichtbarkeit' );
//   delete_option( 'has_gv_form3SiegelHintergrundBild_Sichtbarkeit', 'has_gv_form3SiegelHintergrundBild_Sichtbarkeit' );

  
//     //Signatur Siegel Siegel Postition ABSOLUTE RELATIV
//     delete_option( 'has_gv_form1SiegelHintergrundBild_absolut_relative', 'has_gv_form1SiegelHintergrundBild_absolut_relative' );
//     delete_option( 'has_gv_form2SiegelHintergrundBild_absolut_relative', 'has_gv_form2SiegelHintergrundBild_absolut_relative' );
//     delete_option( 'has_gv_form2SiegelHintergrundBild_absolut_relative', 'has_gv_form2SiegelHintergrundBild_absolut_relative' );
  
//     //Signatur Siegel Siegel Bild
//     delete_option( 'has_gv_form1SiegelHintergrundBild', 'has_gv_form1SiegelHintergrundBild' );
//     delete_option( 'has_gv_form1SiegelHintergrundBild', 'has_gv_form1SiegelHintergrundBild' );
//     delete_option( 'has_gv_form3SiegelHintergrundBild', 'has_gv_form3SiegelHintergrundBild' );  
    
//     //Signatur Siegel Siegel Postition 1
//     delete_option( 'has_gv_form1SiegelHintergrundBild_X', 'has_gv_form1SiegelHintergrundBild_X' );
//     delete_option( 'has_gv_form1SiegelHintergrundBild_X', 'has_gv_form1SiegelHintergrundBild_X' );
//     delete_option( 'has_gv_form1SiegelHintergrundBild_H', 'has_gv_form1SiegelHintergrundBild_H' );
//     delete_option( 'has_gv_form1SiegelHintergrundBild_W', 'has_gv_form1SiegelHintergrundBild_W' );
//     delete_option( 'has_gv_form1SiegelHintergrundBild_page', 'has_gv_form1SiegelHintergrundBild_page' );

//     //Signatur Siegel Siegel Postition 2
//     delete_option( 'has_gv_form2SiegelHintergrundBild_X', 'has_gv_form2SiegelHintergrundBild_X' );
//     delete_option( 'has_gv_form2SiegelHintergrundBild_Y', 'has_gv_form2SiegelHintergrundBild_Y' );
//     delete_option( 'has_gv_form2SiegelHintergrundBild_Y', 'has_gv_form2SiegelHintergrundBild_Y' );
//     delete_option( 'has_gv_form2SiegelHintergrundBild_W', 'has_gv_form2SiegelHintergrundBild_W' );
//     delete_option( 'has_gv_form2SiegelHintergrundBild_page', 'has_gv_form2SiegelHintergrundBild_page' );


//     //Signatur Siegel Siegel Postition 3
//     delete_option( 'has_gv_form3SiegelHintergrundBild_X', 'has_gv_form3SiegelHintergrundBild_X' );
//     delete_option( 'has_gv_form3SiegelHintergrundBild_Y', 'has_gv_form3SiegelHintergrundBild_Y' );
//     delete_option( 'has_gv_form3SiegelHintergrundBild_H', 'has_gv_form3SiegelHintergrundBild_H' );
//     delete_option( 'has_gv_form3SiegelHintergrundBild_W', 'has_gv_form3SiegelHintergrundBild_W' );
//     delete_option( 'has_gv_form3SiegelHintergrundBild_page', 'has_gv_form3SiegelHintergrundBild_page' );



  
//   /////////// SIEGEL LABEL SIGNER //////////////////////////////////////
//   /////////////////////////////////////////////////////////////////////


//  //Signatur Name Signator
//  delete_option( 'has_gv_form1SiegelNameSignator', 'has_gv_form1SiegelNameSignator' );
//  delete_option( 'has_gv_form2SiegelNameSignator', 'has_gv_form2SiegelNameSignator' );
//  delete_option( 'has_gv_form3SiegelNameSignator', 'has_gv_form3SiegelNameSignator' );
    
//  //Signatur LABEL SIGNER 1
//  delete_option( 'has_gv_form1SiegelSigner_X', 'has_gv_form1SiegelSigner_X' );
//  delete_option( 'has_gv_form1SiegelSigner_Y', 'has_gv_form1SiegelSigner_Y' );
//  delete_option( 'has_gv_form1SiegelSigner_H', 'has_gv_form1SiegelSigner_H' );
//  delete_option( 'has_gv_form1SiegelSigner_W', 'has_gv_form1SiegelSigner_W' );
//  delete_option( 'has_gv_form1SiegelSigner_center', 'has_gv_form1SiegelSigner_center' );
//  delete_option( 'has_gv_form1SiegelSigner_wrap', 'has_gv_form1SiegelSigner_wrap' );


//  //Signatur LABEL LOCATION 2
//  delete_option( 'has_gv_form2SiegelLocation_X', 'has_gv_form2SiegelLocation_X' );
//  delete_option( 'has_gv_form2SiegelLocation_Y', 'has_gv_form2SiegelLocation_Y' );
//  delete_option( 'has_gv_form2SiegelLocation_H', 'has_gv_form2SiegelLocation_H' );
//  delete_option( 'has_gv_form2SiegelLocation_W', 'has_gv_form2SiegelLocation_W' );
//  delete_option( 'has_gv_form2SiegelLocation_center', 'has_gv_form2SiegelLocation_center' );
//  delete_option( 'has_gv_form2SiegelLocation_wrap', 'has_gv_form2SiegelLocation_wrap' );


//   //Signatur LABEL REASON 3
//   delete_option( 'has_gv_form3SiegelReason_X', 'has_gv_form3SiegelReason_X' );
//   delete_option( 'has_gv_form3SiegelReason_Y', 'has_gv_form3SiegelReason_Y' );
//   delete_option( 'has_gv_form3SiegelReason_H', 'has_gv_form3SiegelReason_H' );
//   delete_option( 'has_gv_form3SiegelReason_W', 'has_gv_form3SiegelReason_W' );
//   delete_option( 'has_gv_form3SiegelReason_center', 'has_gv_form3SiegelReason_center' );
//   delete_option( 'has_gv_form3SiegelReason_wrap', 'has_gv_form3SiegelReason_wrap' );


//   //Signatur LABEL TIMESTAMP 4
//   delete_option( 'has_gv_form4SiegelTimestamp_X', 'has_gv_form4SiegelTimestamp_X' );
//   delete_option( 'has_gv_form4SiegelTimestamp_Y', 'has_gv_form4SiegelTimestamp_Y' );
//   delete_option( 'has_gv_form4SiegelTimestamp_H', 'has_gv_form4SiegelTimestamp_H' );
//   delete_option( 'has_gv_form4SiegelTimestamp_W', 'has_gv_form4SiegelTimestamp_W' );
//   delete_option( 'has_gv_form4SiegelTimestamp_center', 'has_gv_form4SiegelTimestamp_center' );
//   delete_option( 'has_gv_form4SiegelTimestamp_wrap', 'has_gv_form4SiegelTimestamp_wrap' );


//     /////////// SIEGEL LABEL LOCATION //////////////////////////////////////
//   /////////////////////////////////////////////////////////////////////



      
//  //Signatur Siegel Ort
//  delete_option( 'has_gv_form1SiegelOrt', 'has_gv_form1SiegelOrt' );
//  delete_option( 'form_settings_group', 'has_gv_form2SiegelOrt' );
//  delete_option( 'form_settings_group', 'has_gv_form3SiegelOrt' );
    
//  //Signatur LABEL SIGNER 1
//  delete_option( 'has_gv_form1SiegelLocation_X', 'has_gv_form1SiegelLocation_X' );
//  delete_option( 'has_gv_form1SiegelLocation_Y', 'has_gv_form1SiegelLocation_Y' );
//  delete_option( 'has_gv_form1SiegelLocation_H', 'has_gv_form1SiegelLocation_H' );
//  delete_option( 'has_gv_form1SiegelLocation_W', 'has_gv_form1SiegelLocation_W' );
//  delete_option( 'has_gv_form1SiegelLocation_center', 'has_gv_form1SiegelLocation_center' );
//  delete_option( 'has_gv_form1SiegelLocation_wrap', 'has_gv_form1SiegelLocation_wrap' );


//  //Signatur LABEL SIGNER 2
//  delete_option( 'has_gv_form2SiegelLocation_X', 'has_gv_form2SiegelLocation_X' );
//  delete_option( 'has_gv_form2SiegelLocation_Y', 'has_gv_form2SiegelLocation_Y' );
//  delete_option( 'has_gv_form2SiegelLocation_H', 'has_gv_form2SiegelLocation_H' );
//  delete_option( 'has_gv_form2SiegelLocation_W', 'has_gv_form2SiegelLocation_W' );
//  delete_option( 'has_gv_form2SiegelLocation_center', 'has_gv_form2SiegelLocation_center' );
//  delete_option( 'has_gv_form2SiegelLocation_wrap', 'has_gv_form2SiegelLocation_wrap' );


//   //Signatur LABEL SIGNER 3
//   delete_option( 'has_gv_form3SiegelLocation_X', 'has_gv_form3SiegelLocation_X' );
//   delete_option( 'has_gv_form3SiegelLocation_Y', 'has_gv_form3SiegelLocation_Y' );
//   delete_option( 'has_gv_form3SiegelLocation_H', 'has_gv_form3SiegelLocation_H' );
//   delete_option( 'has_gv_form3SiegelLocation_W', 'has_gv_form3SiegelLocation_W' );
//   delete_option( 'has_gv_form3SiegelLocation_center', 'has_gv_form3SiegelLocation_center' );
//   delete_option( 'has_gv_form3SiegelLocation_wrap', 'has_gv_form3SiegelLocation_wrap' );


//   //Signatur LABEL SIGNER 4
//   delete_option( 'has_gv_form4SiegelLocation_X', 'has_gv_form4SiegelLocation_X' );
//   delete_option( 'has_gv_form4SiegelLocation_Y', 'has_gv_form4SiegelLocation_Y' );
//   delete_option( 'has_gv_form4SiegelLocation_H', 'has_gv_form4SiegelLocation_H' );
//   delete_option( 'has_gv_form4SiegelLocation_W', 'has_gv_form4SiegelLocation_W' );
//   delete_option( 'has_gv_form4SiegelLocation_center', 'has_gv_form4SiegelLocation_center' );
//   delete_option( 'has_gv_form4SiegelLocation_wrap', 'has_gv_form4SiegelLocation_wrap' );


//     /////////// SIEGEL LABEL GRUND //////////////////////////////////////
//   /////////////////////////////////////////////////////////////////////
    
//  //Signatur Siegel zusätzliches Grund
//  delete_option( 'has_gv_form1SiegelGrund', 'has_gv_form1SiegelGrund' );
//  delete_option( 'has_gv_form2SiegelGrund', 'has_gv_form2SiegelGrund' );
//  delete_option( 'has_gv_form3SiegelGrund', 'has_gv_form3SiegelGrund' );
    
//  //Signatur LABEL SIGNER 1
//  delete_option( 'has_gv_form1SiegelGrund_X', 'has_gv_form1SiegelGrund_X' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelGrund_Y' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelGrund_H' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelGrund_W' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelGrund_center' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelGrund_wrap' );


//  //Signatur LABEL SIGNER 2
//  delete_option( 'form_settings_group', 'has_gv_form2SiegelGrund_X' );
//  delete_option( 'form_settings_group', 'has_gv_form2SiegelGrund_Y' );
//  delete_option( 'form_settings_group', 'has_gv_form2SiegelGrund_H' );
//  delete_option( 'form_settings_group', 'has_gv_form2SiegelGrund_W' );
//  delete_option( 'form_settings_group', 'has_gv_form2SiegelGrund_center' );
//  delete_option( 'form_settings_group', 'has_gv_form2SiegelGrund_wrap' );


//   //Signatur LABEL SIGNER 3
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelGrund_X' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelGrund_Y' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelGrund_H' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelGrund_W' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelGrund_center' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelGrund_wrap' );


//   //Signatur LABEL SIGNER 4
//   delete_option( 'form_settings_group', 'has_gv_form4SiegelGrund_X' );
//   delete_option( 'form_settings_group', 'has_gv_form4SiegelGrund_Y' );
//   delete_option( 'form_settings_group', 'has_gv_form4SiegelGrund_H' );
//   delete_option( 'form_settings_group', 'has_gv_form4SiegelGrund_W' );
//   delete_option( 'form_settings_group', 'has_gv_form4SiegelGrund_center' );
//   delete_option( 'form_settings_group', 'has_gv_form4SiegelGrund_wrap' );


// ///////////  LABEL COLOR ///////////////////////////////////
// /////////////////////////////////////////////////////////////////////

// delete_option( 'form_settings_group', 'has_SIGNATROR_has_gv_LABEL_BG_color1' );
// delete_option( 'form_settings_group', 'has_SIGNATOR_has_gv_LABEL_Font_color1' );

// delete_option( 'form_settings_group', 'has_ORT_has_gv_LABEL_BG_color1' );
// delete_option( 'form_settings_group', 'has_ORT_has_gv_LABEL_Font_color1' );

// delete_option( 'form_settings_group', 'has_GRUND_has_gv_LABEL_BG_color1' );
// delete_option( 'form_settings_group', 'has_GRUND_has_gv_LABEL_Font_color1' );

// //

// delete_option( 'form_settings_group', 'has_SIGNATROR_has_gv_LABEL_BG_color2' );
// delete_option( 'form_settings_group', 'has_SIGNATOR_has_gv_LABEL_Font_color2' );

// delete_option( 'form_settings_group', 'has_ORT_has_gv_LABEL_BG_color2' );
// delete_option( 'form_settings_group', 'has_ORT_has_gv_LABEL_Font_color2' );

// delete_option( 'form_settings_group', 'has_GRUND_has_gv_LABEL_BG_color2' );
// delete_option( 'form_settings_group', 'has_GRUND_has_gv_LABEL_Font_color2' );

// //

// delete_option( 'form_settings_group', 'has_SIGNATROR_has_gv_LABEL_BG_color3' );
// delete_option( 'form_settings_group', 'has_SIGNATOR_has_gv_LABEL_Font_color3' );

// delete_option( 'form_settings_group', 'has_ORT_has_gv_LABEL_BG_color3' );
// delete_option( 'form_settings_group', 'has_ORT_has_gv_LABEL_Font_color3' );

// delete_option( 'form_settings_group', 'has_GRUND_has_gv_LABEL_BG_color3' );
// delete_option( 'form_settings_group', 'has_GRUND_has_gv_LABEL_Font_color3' );


// /////////// SIEGEL LABEL TIMESTAMP ///////////////////////////////////
// /////////////////////////////////////////////////////////////////////
    
//  //Signatur Siegel Zeitstempel
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelZeit' );
//  delete_option( 'form_settings_group', 'has_gv_form2SiegelZeit' );
//  delete_option( 'form_settings_group', 'has_gv_form3SiegelZeit' );
  
//  //Signatur LABEL SIGNER 1
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_X' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_Y' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_H' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_W' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_center' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_wrap' );


//  //Signatur LABEL SIGNER 2
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_X' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_Y' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_H' );
//  delete_option( 'form_settings_group', 'has_gv_form2SiegelSigner_W' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_center' );
//  delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_wrap' );


//   //Signatur LABEL SIGNER 3
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_X' );
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_Y' );
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_H' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelSigner_W' );
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_center' );
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_wrap' );


//   //Signatur LABEL SIGNER 4
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_X' );
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_Y' );
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_H' );
//   delete_option( 'form_settings_group', 'has_gv_form4SiegelSigner_W' );
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_center' );
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelTime_wrap' );

  
//   /////////// SIEGEL ZUSATZBILD //////////////////////////////////////
//   ///////////////////////////////////////////////////////////////////


//    //Signatur Siegel Siegel Postition ABSOLUTE RELATIV
//    delete_option( 'form_settings_group', 'has_gv_form1SiegelZusatzbild_absolut_relative' );
//    delete_option( 'form_settings_group', 'has_gv_form2SiegelZusatzbild_absolut_relative' );
//    delete_option( 'form_settings_group', 'has_gv_form3SiegelZusatzbild_absolut_relative' );
  
//   //Signatur Siegel zusätzliches Bild
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelZusatzBild' );
//   delete_option( 'form_settings_group', 'has_gv_form2SiegelZusatzBild' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelZusatzBild' );

//   //Signatur Siegel zusätzliches B64Bild
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelZusatzBildB64Format' );
//   delete_option( 'form_settings_group', 'has_gv_form2SiegelZusatzBildB64Format' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelZusatzBildB64Format' );



//   //Signatur Siegel checkbox Hintergrund Bild
//   delete_option( 'form_settings_group', 'chekbox_hintergrundbild1' );
//   delete_option( 'form_settings_group', 'chekbox_hintergrundbild2' );
//   delete_option( 'form_settings_group', 'chekbox_hintergrundbild3' );


//   //Signatur Siegel Hintergrund Bild
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelHintergrundBildB64' );
//   delete_option( 'form_settings_group', 'has_gv_form2SiegelHintergrundBildB64' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelHintergrundBildB64' );


//   //Signatur ZUSATZBILD POSITION 1

//   delete_option( 'form_settings_group', 'has_gv_form1SiegelZusatzBild_X' );
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelZusatzBild_Y' );
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelZusatzBild_H' );
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelZusatzBild_W' );
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelZusatzBild_page' );

//   //Signatur ZUSATZBILD POSITION 2

//     delete_option( 'form_settings_group', 'has_gv_form2SiegelZusatzBild_X' );
//     delete_option( 'form_settings_group', 'has_gv_form2SiegelZusatzBild_Y' );
//     delete_option( 'form_settings_group', 'has_gv_form2SiegelZusatzBild_H' );
//     delete_option( 'form_settings_group', 'has_gv_form2SiegelZusatzBild_W' );
//     delete_option( 'form_settings_group', 'has_gv_form2SiegelZusatzBild_page' );

//   //Signatur ZUSATZBILD POSITION 3

//   delete_option( 'form_settings_group', 'has_gv_form3SiegelZusatzBild_X' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelZusatzBild_Y' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelZusatzBild_H' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelZusatzBild_W' );
//   delete_option( 'form_settings_group', 'has_gv_form3SiegelZusatzBild_page' );




// ////////////////////////////////////////////////////////////////////
// //            Signierformat Felder                               //
// //                                                              //
// /////////////////////////////////////////////////////////////////
  
//   //GV Formular AuswahlXXXXX
//   delete_option( 'form_settings_group', 'has_gv_form1ID' );
//   delete_option( 'form_settings_group', 'has_gv_form2ID' );
//   delete_option( 'form_settings_group', 'has_gv_form3ID' );
//   delete_option( 'form_settings_group', 'has_gv_form4ID' );
//   delete_option( 'form_settings_group', 'has_gv_form5ID' );
//   //Signatur FormXXXXX
//   delete_option( 'form_settings_group', 'has_gv_form1SignaturForm' );
//   delete_option( 'form_settings_group', 'has_gv_form2SignaturForm' );
//   delete_option( 'form_settings_group', 'has_gv_form3SignaturForm' );
//   delete_option( 'form_settings_group', 'has_gv_form4SignaturForm' );
//   delete_option( 'form_settings_group', 'has_gv_form5SignaturForm' );
// #############################################################################################################

//   //Signatur Siegel
//   delete_option( 'form_settings_group', 'has_gv_form1Siegel' );
//   delete_option( 'form_settings_group', 'has_gv_form2Siegel' );
//   delete_option( 'form_settings_group', 'has_gv_form3Siegel' );

//   //Signatur Siegel Template
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelTemplates' );
//   delete_option( 'form_settings_group', 'has_gv_form2Siege2Templates' );
//   delete_option( 'form_settings_group', 'has_gv_form3Siege3Templates' );

//   //Signatur Siegel Template Auswahl ID
//   delete_option( 'form_settings_group', 'has_gv_form1SiegelTemplatesAuswahlID' );
//   delete_option( 'form_settings_group', 'has_gv_form2Siege2TemplatesAuswahlID' );
//   delete_option( 'form_settings_group', 'has_gv_form3Siege3TemplatesAuswahlID' );
//   delete_option( 'form_settings_group', 'has_gv_form4Siege2TemplatesAuswahlID' );
//   delete_option( 'form_settings_group', 'has_gv_form5Siege3TemplatesAuswahlID' );


// ////////////////////////////////////////////////////////////////////
// //            ZERTIFIKAT                                         //
// //                                                              //
// /////////////////////////////////////////////////////////////////

//   //Zertifikats Datei JA / Nein
//   delete_option( 'form_settings_group', 'has_gv_form1ZertifikatsDateiJaNeinDB' );
//   delete_option( 'form_settings_group', 'has_gv_form2ZertifikatsDateiJaNeinDB' );
//   delete_option( 'form_settings_group', 'has_gv_form3ZertifikatsDateiJaNeinDB' );
//   delete_option( 'form_settings_group', 'has_gv_form4ZertifikatsDateiJaNeinDB' );
//   delete_option( 'form_settings_group', 'has_gv_form5ZertifikatsDateiJaNeinDB' );

//   //Zertifikats Datei WP SpeicherPfadDownload
//   delete_option( 'form_settings_group', 'has_gv_form1ZertifikatsDateiWPspeicherPfad' );
//   delete_option( 'form_settings_group', 'has_gv_form1ZertifikatsDateiWPspeicherPfad' );
//   delete_option( 'form_settings_group', 'has_gv_form1ZertifikatsDateiWPspeicherPfad' );

//     //Zertifikats Datei Ordner SpeicherPfadDownload
//   delete_option( 'form_settings_group', 'has_gv_form1ZertifikatsDateiOrdnerSpeicherPfad' );
//   delete_option( 'form_settings_group', 'has_gv_form2ZertifikatsDateiOrdnerSpeicherPfad' );
//   delete_option( 'form_settings_group', 'has_gv_form3ZertifikatsDateiOrdnerSpeicherPfad' );

//   //Zertifikats Datei Gesamt SpeicherPfadDownload
//   delete_option( 'form_settings_group', 'has_gv_form1ZertifikatsDateiGesamtSpeicherPfad' );
//   delete_option( 'form_settings_group', 'has_gv_form2ZertifikatsDateiGesamtSpeicherPfad' );
//   delete_option( 'form_settings_group', 'has_gv_form3ZertifikatsDateiGesamtSpeicherPfad' );


// ////////////////////////////////////////////////////////////////////
// //            DATEINAME                                          //
// //                                                              //
// /////////////////////////////////////////////////////////////////

//   //CUSTOM DATEINAME
//   delete_option( 'form_settings_group', 'has_gv_form1CustomDateinameSichtbarkeitDB' );
//   delete_option( 'form_settings_group', 'has_gv_form2CustomDateinameSichtbarkeitDB' );
//   delete_option( 'form_settings_group', 'has_gv_form3CustomDateinameSichtbarkeitDB' );
//   delete_option( 'form_settings_group', 'has_gv_form4CustomDateinameSichtbarkeitDB' );
//   delete_option( 'form_settings_group', 'has_gv_form5CustomDateinameSichtbarkeitDB' );


//   //CUSTOM DATEINAME
//   delete_option( 'form_settings_group', 'has_gv_form1CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form2CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form3CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form4CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form5CustomDateinameDB' );

//   //CUSTOM DATEINAME Feld 1
//   delete_option( 'form_settings_group', 'has_gv_form1Feld1CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form2Feld1CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form3Feld1CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form4Feld1CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form5Feld1CustomDateinameDB' );

//   //CUSTOM DATEINAME Feld 2
//   delete_option( 'form_settings_group', 'has_gv_form1Feld2CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form2Feld2CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form3Feld2CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form4Feld2CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form5Feld2CustomDateinameDB' );  

//   //CUSTOM DATEINAME Feld 3
//   delete_option( 'form_settings_group', 'has_gv_form1Feld3CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form2Feld3CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form3Feld3CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form4Feld3CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form5Feld3CustomDateinameDB' );
    
//   //CUSTOM DATEINAME Feld 4
//   delete_option( 'form_settings_group', 'has_gv_form1Feld4CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form2Feld4CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form3Feld4CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form4Feld4CustomDateinameDB' );
//   delete_option( 'form_settings_group', 'has_gv_form5Feld4CustomDateinameDB' );    



// ////////////////////////////////////////////////////////////////////
// //            FTP EXPORT                                         //
// //                                                              //
// /////////////////////////////////////////////////////////////////

//  delete_option( 'form_settings_group', 'has_gv_form1pdfFTP_Server_checkedDB' );
//  delete_option( 'form_settings_group', 'has_gv_form2pdfFTP_Server_checkedDB' );
//  delete_option( 'form_settings_group', 'has_gv_form3pdfFTP_Server_checkedDB' );
//  delete_option( 'form_settings_group', 'has_gv_form4pdfFTP_Server_checkedDB' );
//  delete_option( 'form_settings_group', 'has_gv_form5pdfFTP_Server_checkedDB' );

//   delete_option( 'form_settings_group', 'has_gv_form1pdfFTP_Server' );
//   delete_option( 'form_settings_group', 'has_gv_form2pdfFTP_Server' );
//   delete_option( 'form_settings_group', 'has_gv_form3pdfFTP_Server' );

//   delete_option( 'form_settings_group', 'has_gv_form1pdfFTP_Server_User' );
//   delete_option( 'form_settings_group', 'has_gv_form2pdfFTP_Server_User' );
//   delete_option( 'form_settings_group', 'has_gv_form3pdfFTP_Server_User' );

//   delete_option( 'form_settings_group', 'has_gv_form1pdfFTP_Server_Passwort' );
//   delete_option( 'form_settings_group', 'has_gv_form2pdfFTP_Server_Passwort' );
//   delete_option( 'form_settings_group', 'has_gv_form3pdfFTP_Server_Passwort' );

//   delete_option( 'form_settings_group', 'has_gv_form1pdfFTP_Server_Port' );
//   delete_option( 'form_settings_group', 'has_gv_form2pdfFTP_Server_Port' );
//   delete_option( 'form_settings_group', 'has_gv_form3pdfFTP_Server_Port' );
















  
//   /////////// Papierformat //////////////////////////////////////
//   ///////////////////////////////////////////////////////////////////

//    //Papierformat
//    delete_option( 'form_settings_group', 'has_gv_form1Papierformat' );
//    delete_option( 'form_settings_group', 'has_gv_form2Papierformat' );
//    delete_option( 'form_settings_group', 'has_gv_form3Papierformat' );






//    //Speicherpfad Wordpress Upload
//    delete_option( 'form_settings_group', 'has_gv_form1pdfWP_Upload' );
//    delete_option( 'form_settings_group', 'has_gv_form2pdfWP_Upload' );
//    delete_option( 'form_settings_group', 'has_gv_form3pdfWP_Upload' );

//   //Speicherpfad Wordpress Download
//    delete_option( 'form_settings_group', 'has_gv_form1pdfWP_Download' );
//    delete_option( 'form_settings_group', 'has_gv_form2pdfWP_Download' );
//    delete_option( 'form_settings_group', 'has_gv_form3pdfWP_Download' );
 
//   //Speicherpfad Upload
//    delete_option( 'form_settings_group', 'has_gv_form1pdfUpload' );
//    delete_option( 'form_settings_group', 'has_gv_form2pdfUpload' );
//    delete_option( 'form_settings_group', 'has_gv_form3pdfUpload' );

//   //Speicherpfad Download
//    delete_option( 'form_settings_group', 'has_gv_form1pdfUploadGesamtPfad' );
//    delete_option( 'form_settings_group', 'has_gv_form2pdfUploadGesamtPfad' );
//    delete_option( 'form_settings_group', 'has_gv_form3pdfUploadGesamtPfad' );

//   //Speicherpfad Wordpress Upload
//   delete_option( 'form_settings_group', 'has_gv_form1pdfDownloadGesamtPfad' );
//   delete_option( 'form_settings_group', 'has_gv_form1pdfDownloadGesamtPfad' );
//   delete_option( 'form_settings_group', 'has_gv_form1pdfDownloadGesamtPfad' );



//   //Erfolgreich Weiterleitung
//    delete_option( 'form_settings_group', 'has_gv_form1Erfolg' );
//    delete_option( 'form_settings_group', 'has_gv_form2Erfolg' );
//    delete_option( 'form_settings_group', 'has_gv_form3Erfolg' );

//   //Error Weiterleitung
//    delete_option( 'form_settings_group', 'has_gv_form1Error' );
//    delete_option( 'form_settings_group', 'has_gv_form2Error' );
//    delete_option( 'form_settings_group', 'has_gv_form3Error' );

// ///////////////////////////////////////////////////////////////////
// //            Lizenz Felder                                     //
// //                                                             //
// ////////////////////////////////////////////////////////////////




//   //License KEY
//    delete_option( 'license-settings-group', 'license-key-field' );
//   //License Mail 
//    delete_option( 'license-settings-group', 'license-email-field' );

// ///////////////////////////////////////////////////////////////////
// //            Template Felder                                   //
// //                                                             //
// ////////////////////////////////////////////////////////////////

//   //Template
//   delete_option( 'temp-settings-group', 'temp-select-field' );

// //////////////////////////////////////////////////////////////////
// //            A-Trust Felder                                   //
// //                                                            //
// /////////////////////////////////////////////////////////////// 

//   //A-Trust
//   delete_option( 'atrust-settings-group', 'atrust_serveraddresse' );   
//   delete_option( 'atrust-settings-group', 'atrust_apikey' );   
	
    
    
    
    
   
}