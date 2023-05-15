<?php
global $jal_db_version;
function backend_field_init() {


  
  //Signatur Siegel SICHTBAR und im TEMPLATEXXXXX
  add_option( 'has_gv_form1_PDF_name' );

  add_option( 'has_gv_form1_PDF_key' );
  add_option( 'has_gv_form1_PDF_bearbeiten_Link' );
  add_option( 'has_gv_form1_PDF_pdf_size' );
  add_option( 'has_gv_form1_PDF_orientation' );
  add_option( 'has_gv_form1_PDF_font_colour' );
  add_option( 'has_gv_form1_PDF_background_color' );
  add_option( 'has_gv_form1_PDF_password' );
  //PDF hohe 
  add_option( 'has_gv_form1PDF_hohe', 249);
  add_option( 'has_gv_form2PDF_hohe', 249);
  add_option( 'has_gv_form3PDF_hohe', 249);
  add_option( 'has_gv_form4PDF_hohe', 249);
  add_option( 'has_gv_form5PDF_hohe', 249);

  //PDF breite
  add_option( 'has_gv_form1PDF_breite', 175 );
  add_option( 'has_gv_form2PDF_breite', 175 );
  add_option( 'has_gv_form3PDF_breite', 175 );
  add_option( 'has_gv_form4PDF_breite', 175 );
  add_option( 'has_gv_form5PDF_breite', 175 );



  //SIGNATURSIEGEL hohe
  add_option( 'has_gv_form1SignaturSiegel_hohe' );
  add_option( 'has_gv_form2SignaturSiegel_hohe' );
  add_option( 'has_gv_form3SignaturSiegel_hohe' );
  add_option( 'has_gv_form4SignaturSiegel_hohe' );
  add_option( 'has_gv_form5SignaturSiegel_hohe' );

    //SIGNATURSIEGEL breite
    add_option( 'has_gv_form1SignaturSiegel_breite' );
    add_option( 'has_gv_form2SignaturSiegel_breite' );
    add_option( 'has_gv_form3SignaturSiegel_breite' );
    add_option( 'has_gv_form4SignaturSiegel_breite' );
    add_option( 'has_gv_form5SignaturSiegel_breite' );





  //Signatur Siegel SICHTBAR und im TEMPLATEXXXXX
  add_option( 'has_gv_form1SichtbarkeitSignaturSiegelCheckboxID' );
  add_option( 'has_gv_form2SichtbarkeitSignaturSiegelCheckboxID' );
  add_option( 'has_gv_form3SichtbarkeitSignaturSiegelCheckboxID ' );
  add_option( 'has_gv_form4SichtbarkeitSignaturSiegelCheckboxID' );
  add_option( 'has_gv_form5SichtbarkeitSignaturSiegelCheckboxID' );



  //Neues Template oder Template bearbeiten
  add_option( 'has_gv_form1NeuesTemplateOderBearbeitenID' );
  add_option( 'has_gv_form2NeuesTemplateOderBearbeitenID' );
  add_option( 'has_gv_form3NeuesTemplateOderBearbeitenID' );
  add_option( 'has_gv_form4NeuesTemplateOderBearbeitenID' );
  add_option( 'has_gv_form5NeuesTemplateOderBearbeitenID' );

  //Neues Template oder Template bearbeiten
  add_option( 'has_gv_form1GF_fields' );
  add_option( 'has_gv_form2GF_fields' );
  add_option( 'has_gv_form3GF_fields' );
  add_option( 'has_gv_form4GF_fields' );
  add_option( 'has_gv_form5GF_fields' );



  /////////// SIEGEL DESCRIPTION //////////////////////////////////////////////
  /////////////////////////////////////////////////////////////////////


    //Signatur Siegel Template Name
    add_option( 'has_gv_form1SiegelTemplatesName' );
    add_option( 'has_gv_form2Siege2TemplatesName' );
    add_option( 'has_gv_form3Siege3TemplatesName' );
    add_option( 'has_gv_form4Siege3TemplatesName' );
    add_option( 'has_gv_form5Siege3TemplatesName' );
   //Signatur Siegel Template Author
    add_option( 'has_gv_form1SiegelTemplatesAuthor' );
    add_option( 'has_gv_form2Siege2TemplatesAuthor' );
    add_option( 'has_gv_form3Siege3TemplatesAuthor' );
    add_option( 'has_gv_form4Siege4TemplatesAuthor' );
    add_option( 'has_gv_form5Siege5TemplatesAuthor' );
   //Signatur Siegel Template Description
    add_option( 'has_gv_form1SiegelTemplatesDescription' );
    add_option( 'has_gv_form2SiegelTemplatesDescription' );
    add_option( 'has_gv_form3SiegelTemplatesDescription' );
    add_option( 'has_gv_form4SiegelTemplatesDescription' );
    add_option( 'has_gv_form5SiegelTemplatesDescription' );
    


   /*////////////////////////////////////////////////////////////////
  //             SIEGEL  BILD                                     //
 //                                                              //
////////////////////////////////////////////////////////////////*/

  //Signatur Siegel Sichtbarkeit
  add_option( 'has_gv_form1SiegelHintergrundBild_Sichtbarkeit' );
  add_option( 'has_gv_form2SiegelHintergrundBild_Sichtbarkeit' );
  add_option( 'has_gv_form3SiegelHintergrundBild_Sichtbarkeit' );

  
    //Signatur Siegel Siegel Postition ABSOLUTE RELATIV
    add_option( 'has_gv_form1SiegelHintergrundBild_absolut_relative' );
    add_option( 'has_gv_form2SiegelHintergrundBild_absolut_relative' );
    add_option( 'has_gv_form3SiegelHintergrundBild_absolut_relative' );
  
    //Signatur Siegel Siegel Bild
    add_option( 'has_gv_form1SiegelHintergrundBild' );
    add_option( 'has_gv_form1SiegelHintergrundBild' );
    add_option( 'has_gv_form3SiegelHintergrundBild' );  

    //Signatur Siegel Hintergrund Bild B64
    add_option( 'has_gv_form1SiegelHintergrundBildB64' );
    add_option( 'has_gv_form2SiegelHintergrundBildB64' );
    add_option( 'has_gv_form3SiegelHintergrundBildB64' );

    //Signatur Siegel Hintergrund hohe breite
    add_option( 'has_gv_form1SiegelHintergrundHohe', 50 );
    add_option( 'has_gv_form1SiegelHintergrundBreite', 50);

    add_option( 'has_gv_form2SiegelHintergrundHohe' , 50);
    add_option( 'has_gv_form2SiegelHintergrundBreite', 50);

    add_option( 'has_gv_form3SiegelHintergrundHohe', 50 );
    add_option( 'has_gv_form3SiegelHintergrundBreite', 50);

    add_option( 'has_gv_form4SiegelHintergrundHohe', 50 );
    add_option( 'has_gv_form4SiegelHintergrundBreite', 50);

    add_option( 'has_gv_form5SiegelHintergrundHohe', 50 );
    add_option( 'has_gv_form5SiegelHintergrundBreite', 50);

    
    //Signatur Siegel Siegel Postition 1
    add_option( 'has_gv_form1SiegelHintergrundBild_X' );
    add_option( 'has_gv_form1SiegelHintergrundBild_Y' );
    add_option( 'has_gv_form1SiegelHintergrundBild_H' );
    add_option( 'has_gv_form1SiegelHintergrundBild_W' );
    add_option( 'has_gv_form1SiegelHintergrundBild_page' );

    //Signatur Siegel Siegel Postition 2
    add_option( 'has_gv_form2SiegelHintergrundBild_X' );
    add_option( 'has_gv_form2SiegelHintergrundBild_Y' );
    add_option( 'has_gv_form2SiegelHintergrundBild_Y' );
    add_option( 'has_gv_form2SiegelHintergrundBild_W' );
    add_option( 'has_gv_form2SiegelHintergrundBild_page' );


    //Signatur Siegel Siegel Postition 3
    add_option( 'has_gv_form3SiegelHintergrundBild_X' );
    add_option( 'has_gv_form3SiegelHintergrundBild_Y' );
    add_option( 'has_gv_form3SiegelHintergrundBild_H' );
    add_option( 'has_gv_form3SiegelHintergrundBild_W' );
    add_option( 'has_gv_form3SiegelHintergrundBild_page' );


   /*////////////////////////////////////////////////////////////////
  //            PDF Template                                      //
 //                                                              //
////////////////////////////////////////////////////////////////*/

    //PDF Template Sichtbarkeit
    add_option( 'has_gv_form1SichtbarkeitPDF_TemplateCheckboxID' );
    add_option( 'has_gv_form2SichtbarkeitPDF_TemplateCheckboxID' );
    add_option( 'has_gv_form3SichtbarkeitPDF_TemplateCheckboxID' );
    add_option( 'has_gv_form4SichtbarkeitPDF_TemplateCheckboxID' );
    add_option( 'has_gv_form5SichtbarkeitPDF_TemplateCheckboxID' );

   /*////////////////////////////////////////////////////////////////
  //            ZUSATZ BILD                                       //
 //                                                              //
////////////////////////////////////////////////////////////////*/


   //Signatur Siegel Siegel Postition ABSOLUTE RELATIV
   add_option( 'has_gv_form1SiegelZusatzbild_absolut_relative' );
   add_option( 'has_gv_form2SiegelZusatzbild_absolut_relative' );
   add_option( 'has_gv_form3SiegelZusatzbild_absolut_relative' );
  
  //Signatur Siegel zusätzliches Bild
  add_option( 'has_gv_form1SiegelZusatzBild' );
  add_option( 'has_gv_form2SiegelZusatzBild' );
  add_option( 'has_gv_form3SiegelZusatzBild' );

  //Signatur Siegel zusätzliches B64Bild
  add_option( 'has_gv_form1SiegelZusatzBildB64Format' );
  add_option( 'has_gv_form2SiegelZusatzBildB64Format' );
  add_option( 'has_gv_form3SiegelZusatzBildB64Format' );



  //Signatur Siegel checkbox Hintergrund Bild
  add_option( 'chekbox_hintergrundbild1' );
  add_option( 'chekbox_hintergrundbild2' );
  add_option( 'chekbox_hintergrundbild3' );


  //Signatur Siegel Hintergrund Bild
  add_option( 'has_gv_form1SiegelHintergrundBildB64' );
  add_option( 'has_gv_form2SiegelHintergrundBildB64' );
  add_option( 'has_gv_form3SiegelHintergrundBildB64' );

    //Signatur Siegel Hintergrund hohe breite
    add_option( 'has_gv_form1SiegelZusatzbildHohe', 50 );
    add_option( 'has_gv_form1SiegelZusatzbildBreite', 50);

    add_option( 'has_gv_form2SiegelZusatzbildHohe', 50 );
    add_option( 'has_gv_form2SiegelZusatzbildBreite', 50);

    add_option( 'has_gv_form3SiegelZusatzbildHohe', 50 );
    add_option( 'has_gv_form3SiegelZusatzbildBreite', 50);

    add_option( 'has_gv_form4SiegelZusatzbildHohe', 50 );
    add_option( 'has_gv_form4SiegelZusatzbildBreite', 50);

    add_option( 'has_gv_form5SiegelZusatzbildHohe', 50 );
    add_option( 'has_gv_form5SiegelZusatzbildBreite', 50);


  //Signatur ZUSATZBILD POSITION 1

  add_option( 'has_gv_form1SiegelZusatzBild_X' );
  add_option( 'has_gv_form1SiegelZusatzBild_Y' );
  add_option( 'has_gv_form1SiegelZusatzBild_H' );
  add_option( 'has_gv_form1SiegelZusatzBild_W' );
  add_option( 'has_gv_form1SiegelZusatzBild_page' );

  //Signatur ZUSATZBILD POSITION 2

    add_option( 'has_gv_form2SiegelZusatzBild_X' );
    add_option( 'has_gv_form2SiegelZusatzBild_Y' );
    add_option( 'has_gv_form2SiegelZusatzBild_H' );
    add_option( 'has_gv_form2SiegelZusatzBild_W' );
    add_option( 'has_gv_form2SiegelZusatzBild_page' );

  //Signatur ZUSATZBILD POSITION 3

  add_option( 'has_gv_form3SiegelZusatzBild_X' );
  add_option( 'has_gv_form3SiegelZusatzBild_Y' );
  add_option( 'has_gv_form3SiegelZusatzBild_H' );
  add_option( 'has_gv_form3SiegelZusatzBild_W' );
  add_option( 'has_gv_form3SiegelZusatzBild_page' );



   /*////////////////////////////////////////////////////////////////
  //          ENDE ZUSATZ BILD                                    //
 //                                                              //
////////////////////////////////////////////////////////////////*/

   /*////////////////////////////////////////////////////////////////
  //               SICHTBARKEITEN                                 //
 //                                                              //
////////////////////////////////////////////////////////////////*/


//Hauptsiegel
add_option( 'has_gv_form1HauptsiegelSichtbarkeitCheckboxID' );
add_option( 'has_gv_form1HauptsiegelSichtbarkeitCheckboxID' );
add_option( 'has_gv_form1HauptsiegelSichtbarkeitCheckboxID' );
add_option( 'has_gv_form1HauptsiegelSichtbarkeitCheckboxID' );
add_option( 'has_gv_form1HauptsiegelSichtbarkeitCheckboxID' );

//Zusatzsiegel
add_option( 'has_gv_form1ZusatzbildSichtbarkeitCheckboxID' );
add_option( 'has_gv_form2ZusatzbildSichtbarkeitCheckboxID' );
add_option( 'has_gv_form3ZusatzbildSichtbarkeitCheckboxID' );
add_option( 'has_gv_form4ZusatzbildSichtbarkeitCheckboxID' );
add_option( 'has_gv_form5ZusatzbildSichtbarkeitCheckboxID' );

//Signator
add_option( 'has_gv_form1SignatorSichtbarkeitCheckboxID' );
add_option( 'has_gv_form2SignatorSichtbarkeitCheckboxID' );
add_option( 'has_gv_form3SignatorSichtbarkeitCheckboxID' );
add_option( 'has_gv_form4SignatorSichtbarkeitCheckboxID' );
add_option( 'has_gv_form5SignatorSichtbarkeitCheckboxID' );

//Ort
add_option( 'has_gv_form1OrtSichtbarkeitCheckboxID' );
add_option( 'has_gv_form2OrtSichtbarkeitCheckboxID' );
add_option( 'has_gv_form3OrtSichtbarkeitCheckboxID' );
add_option( 'has_gv_form4OrtSichtbarkeitCheckboxID' );
add_option( 'has_gv_form5OrtSichtbarkeitCheckboxID' );

//Grund
add_option( 'has_gv_form1GrundSichtbarkeitCheckboxID' );
add_option( 'has_gv_form2GrundSichtbarkeitCheckboxID' );
add_option( 'has_gv_form3GrundSichtbarkeitCheckboxID' );
add_option( 'has_gv_form4GrundSichtbarkeitCheckboxID' );
add_option( 'has_gv_form5GrundSichtbarkeitCheckboxID' );

//Zeitstempel
add_option( 'has_gv_form1ZeitstempelSichtbarkeitCheckboxID' );
add_option( 'has_gv_form2ZeitstempelSichtbarkeitCheckboxID' );
add_option( 'has_gv_form3ZeitstempelSichtbarkeitCheckboxID' );
add_option( 'has_gv_form4ZeitstempelSichtbarkeitCheckboxID' );
add_option( 'has_gv_form5ZeitstempelSichtbarkeitCheckboxID' );

   /*////////////////////////////////////////////////////////////////
  //          ENDE SICHTBARKEITEN                                 //
 //                                                              //
////////////////////////////////////////////////////////////////*/























































































  /////////// SIEGEL  /////////////////////////////////////////////////////#######################################################################
  /////////////////////////////////////////////////////////////////////////#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################

/*
 * init DB fields SIEGEL
 */


/* ===Siegel URL and SIZE=== */

  //  IMAGE URL  
  add_option( 'has_gv_form1SiegelImage' );
  add_option( 'has_gv_form2SiegelImage' );
  add_option( 'has_gv_form3SiegelImage' );
  add_option( 'has_gv_form4SiegelImage' );
  add_option( 'has_gv_form5SiegelImage' );
  
   //  IMAGE  WIDTH
  add_option( 'has_gv_form1SiegelImageWidth' );
  add_option( 'has_gv_form2SiegelImageWidth' );
  add_option( 'has_gv_form3SiegelImageWidth' );
  add_option( 'has_gv_form4SiegelImageWidth' );
  add_option( 'has_gv_form5SiegelImageWidth' );
  
   //  IMAGE  HEIGTH
   add_option( 'has_gv_form1SiegelImageHeigth' );
   add_option( 'has_gv_form2SiegelImageHeigth' );
   add_option( 'has_gv_form3SiegelImageHeigth' );
   add_option( 'has_gv_form4SiegelImageHeigth' );
   add_option( 'has_gv_form5SiegelImageHeigth' );






/* ===Description=== */

  // Description NAME 
add_option( 'has_gv_form1SiegelDescriptionName' );
add_option( 'has_gv_form2SiegelDescriptionName' );
add_option( 'has_gv_form3SiegelDescriptionName' );
add_option( 'has_gv_form4SiegelDescriptionName' );
add_option( 'has_gv_form5SiegelDescriptionName' );

  // Description AUTHOR 
add_option( 'has_gv_form1SiegelDescriptionAuthor' );
add_option( 'has_gv_form2SiegelDescriptionAuthor' );
add_option( 'has_gv_form3SiegelDescriptionAuthor' );
add_option( 'has_gv_form4SiegelDescriptionAuthor' );
add_option( 'has_gv_form5SiegelDescriptionAuthor' );


  // Description BESCHREIBUNG 
add_option( 'has_gv_form1SiegelDescriptionBeschreibung' );
add_option( 'has_gv_form2SiegelDescriptionBeschreibung' );
add_option( 'has_gv_form3SiegelDescriptionBeschreibung' );
add_option( 'has_gv_form4SiegelDescriptionBeschreibung' );
add_option( 'has_gv_form5SiegelDescriptionBeschreibung' );

/* ===Position=== */

  // Position Siegel TYP  
add_option( 'has_gv_form1SiegelPositionTyp' );
add_option( 'has_gv_form2SiegelPositionTyp' );
add_option( 'has_gv_form3SiegelPositionTyp' );
add_option( 'has_gv_form4SiegelPositionTyp' );
add_option( 'has_gv_form5SiegelPositionTyp' );

  // Position Siegel CSS width  
add_option( 'has_gv_form1SiegelPositionMARGIN_LEFT' );
add_option( 'has_gv_form2SiegelPositionMARGIN_LEFT' );
add_option( 'has_gv_form3SiegelPositionMARGIN_LEFT' );
add_option( 'has_gv_form4SiegelPositionMARGIN_LEFT' );
add_option( 'has_gv_form5SiegelPositionMARGIN_LEFT' );

  // Position Siegel CSS heigth  
add_option( 'has_gv_form1SiegelPositionMARGIN_TOP' );
add_option( 'has_gv_form2SiegelPositionMARGIN_TOP' );
add_option( 'has_gv_form3SiegelPositionMARGIN_TOP' );
add_option( 'has_gv_form4SiegelPositionMARGIN_TOP' );
add_option( 'has_gv_form5SiegelPositionMARGIN_TOP' );

  // Position Siegel X  
add_option( 'has_gv_form1SiegelPositionX' );
add_option( 'has_gv_form2SiegelPositionX' );
add_option( 'has_gv_form3SiegelPositionX' );
add_option( 'has_gv_form4SiegelPositionX' );
add_option( 'has_gv_form5SiegelPositionX' );

  // Position Siegel Y  
add_option( 'has_gv_form1SiegelPositionY' );
add_option( 'has_gv_form2SiegelPositionY' );
add_option( 'has_gv_form3SiegelPositionY' );
add_option( 'has_gv_form4SiegelPositionY' );
add_option( 'has_gv_form5SiegelPositionY' );

  // Position Siegel W  
add_option( 'has_gv_form1SiegelPositionW' );
add_option( 'has_gv_form2SiegelPositionW' );
add_option( 'has_gv_form3SiegelPositionW' );
add_option( 'has_gv_form4SiegelPositionW' );
add_option( 'has_gv_form5SiegelPositionW' );

  // Position Siegel H  
add_option( 'has_gv_form1SiegelPositionH' );
add_option( 'has_gv_form2SiegelPositionH' );
add_option( 'has_gv_form3SiegelPositionH' );
add_option( 'has_gv_form4SiegelPositionH' );
add_option( 'has_gv_form5SiegelPositionH' );

  // Position Siegel PAGE  
add_option( 'has_gv_form1SiegelPositionPage' );
add_option( 'has_gv_form2SiegelPositionPage' );
add_option( 'has_gv_form3SiegelPositionPage' );
add_option( 'has_gv_form4SiegelPositionPage' );
add_option( 'has_gv_form5SiegelPositionPage' );

  // Position Siegel IMAGE B64  
add_option( 'has_gv_form1SiegelB64Image' );
add_option( 'has_gv_form2SiegelB64Image' );
add_option( 'has_gv_form3SiegelB64Image' );
add_option( 'has_gv_form4SiegelB64Image' );
add_option( 'has_gv_form5SiegelB64Image' );



  // Position Siegel PAGE  
add_option( 'has_gv_form1SiegelImage' );
add_option( 'has_gv_form2SiegelImage' );
add_option( 'has_gv_form3SiegelImage' );
add_option( 'has_gv_form4SiegelImage' );
add_option( 'has_gv_form5SiegelImage' );



/* === Label TIMESTAMP=== */

  // Label SIGNATOR TYP 
add_option( 'has_gv_form1LabelTypeTimestamp' , 'timestamp' );
add_option( 'has_gv_form2LabelTypeTimestamp' , 'timestamp' );
add_option( 'has_gv_form3LabelTypeTimestamp' , 'timestamp' );
add_option( 'has_gv_form4LabelTypeTimestamp' , 'timestamp' );
add_option( 'has_gv_form5LabelTypeTimestamp' , 'timestamp' );

  // Label TIMESTAMP X
add_option( 'has_gv_form1LabelTimestampX');
add_option( 'has_gv_form2LabelTimestampX');
add_option( 'has_gv_form3LabelTimestampX');
add_option( 'has_gv_form4LabelTimestampX');
add_option( 'has_gv_form5LabelTimestampX');
  
 // Label TIMESTAMP Y
add_option( 'has_gv_form1LabelTimestampY');
add_option( 'has_gv_form2LabelTimestampY');
add_option( 'has_gv_form3LabelTimestampY');
add_option( 'has_gv_form4LabelTimestampY');
add_option( 'has_gv_form5LabelTimestampY');
  
 // Label TIMESTAMP W
add_option( 'has_gv_form1LabelTimestampW');
add_option( 'has_gv_form2LabelTimestampW');
add_option( 'has_gv_form3LabelTimestampW');
add_option( 'has_gv_form4LabelTimestampW');
add_option( 'has_gv_form5LabelTimestampW');
  
 // Label TIMESTAMP H
add_option( 'has_gv_form1LabelTimestampH');
add_option( 'has_gv_form2LabelTimestampH');
add_option( 'has_gv_form3LabelTimestampH');
add_option( 'has_gv_form4LabelTimestampH');
add_option( 'has_gv_form5LabelTimestampH');
  
 // Label TIMESTAMP CENTER
add_option( 'has_gv_form1LabelTimestampCENTER');
add_option( 'has_gv_form2LabelTimestampCENTER');
add_option( 'has_gv_form3LabelTimestampCENTER');
add_option( 'has_gv_form4LabelTimestampCENTER');
add_option( 'has_gv_form5LabelTimestampCENTER');
  
 // Label TIMESTAMP WRAP
add_option( 'has_gv_form1LabelTimestampWRAP');
add_option( 'has_gv_form2LabelTimestampWRAP');
add_option( 'has_gv_form3LabelTimestampWRAP');
add_option( 'has_gv_form4LabelTimestampWRAP');
add_option( 'has_gv_form5LabelTimestampWRAP');
  
 // Label TIMESTAMP FORNT COLOR
add_option( 'has_gv_form1LabelTimestampFcolor');
add_option( 'has_gv_form2LabelTimestampFcolor');
add_option( 'has_gv_form3LabelTimestampFcolor');
add_option( 'has_gv_form4LabelTimestampFcolor');
add_option( 'has_gv_form5LabelTimestampFcolor');
  
 // Label SIGNATOR FORNT COLOR
add_option( 'has_gv_form1LabelTimestampBGcolor');
add_option( 'has_gv_form2LabelTimestampBGcolor');
add_option( 'has_gv_form3LabelTimestampBGcolor');
add_option( 'has_gv_form4LabelTimestampBGcolor');
add_option( 'has_gv_form5LabelTimestampBGcolor');




//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################









  /////////// ZUSATZBILD///////////////////////////////////////////////////#######################################################################
  /////////////////////////////////////////////////////////////////////////#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################


/*
 * init DB fields ZUSATZBILD
 */


/* ===ZUSATZBILD URL and SIZE=== */

  //  ZUSATZ IMAGE URL  
  add_option( 'has_gv_form1ZUSATZImage' );
  add_option( 'has_gv_form2ZUSATZImage' );
  add_option( 'has_gv_form3ZUSATZImage' );
  add_option( 'has_gv_form4ZUSATZImage' );
  add_option( 'has_gv_form5ZUSATZImage' );
  
   // ZUSATZ IMAGE WIDTH
  add_option( 'has_gv_form1ZUSATZImageWidth' );
  add_option( 'has_gv_form2ZUSATZImageWidth' );
  add_option( 'has_gv_form3ZUSATZImageWidth' );
  add_option( 'has_gv_form4ZUSATZImageWidth' );
  add_option( 'has_gv_form5ZUSATZImageWidth' );
  
   // ZUSATZ IMAGE HEIGTH
   add_option( 'has_gv_form1ZUSATZImageHeigth' );
   add_option( 'has_gv_form2ZUSATZImageHeigth' );
   add_option( 'has_gv_form3ZUSATZImageHeigth' );
   add_option( 'has_gv_form4ZUSATZImageHeigth' );
   add_option( 'has_gv_form5ZUSATZImageHeigth' );


  // Position Siegel CSS width  
  add_option( 'has_gv_form1ZUSATZImagePositionMARGIN_LEFT' );
  add_option( 'has_gv_form2ZUSATZImagePositionMARGIN_LEFT' );
  add_option( 'has_gv_form3ZUSATZImagePositionMARGIN_LEFT' );
  add_option( 'has_gv_form4ZUSATZImagePositionMARGIN_LEFT' );
  add_option( 'has_gv_form5ZUSATZImagePositionMARGIN_LEFT' );
  
    // Position Siegel CSS heigth  
  add_option( 'has_gv_form1ZUSATZImagePositionMARGIN_TOP' );
  add_option( 'has_gv_form2ZUSATZImagePositionMARGIN_TOP' );
  add_option( 'has_gv_form3ZUSATZImagePositionMARGIN_TOP' );
  add_option( 'has_gv_form4ZUSATZImagePositionMARGIN_TOP' );
  add_option( 'has_gv_form5ZUSATZImagePositionMARGIN_TOP' );



  // Position Siegel X  
  add_option( 'has_gv_form1ZUSATZImagePositionX' );
  add_option( 'has_gv_form2ZUSATZImagePositionX' );
  add_option( 'has_gv_form3ZUSATZImagePositionX' );
  add_option( 'has_gv_form4ZUSATZImagePositionX' );
  add_option( 'has_gv_form5ZUSATZImagePositionX' );
  
    // Position Siegel Y  
  add_option( 'has_gv_form1ZUSATZImagePositionY' );
  add_option( 'has_gv_form2ZUSATZImagePositionY' );
  add_option( 'has_gv_form3ZUSATZImagePositionY' );
  add_option( 'has_gv_form4ZUSATZImagePositionY' );
  add_option( 'has_gv_form5ZUSATZImagePositionY' );
  
    // Position Siegel W  
  add_option( 'has_gv_form1ZUSATZImagePositionW' );
  add_option( 'has_gv_form2ZUSATZImagePositionW' );
  add_option( 'has_gv_form3ZUSATZImagePositionW' );
  add_option( 'has_gv_form4ZUSATZImagePositionW' );
  add_option( 'has_gv_form5ZUSATZImagePositionW' );
  
    // Position Siegel H  
  add_option( 'has_gv_form1ZUSATZImagePositionH' );
  add_option( 'has_gv_form2ZUSATZImagePositionH' );
  add_option( 'has_gv_form3ZUSATZImagePositionH' );
  add_option( 'has_gv_form4ZUSATZImagePositionH' );
  add_option( 'has_gv_form5ZUSATZImagePositionH' );
  
    // Position Siegel PAGE  
  add_option( 'has_gv_form1ZUSATZImagePositionPage' );
  add_option( 'has_gv_form2ZUSATZImagePositionPage' );
  add_option( 'has_gv_form3ZUSATZImagePositionPage' );
  add_option( 'has_gv_form4ZUSATZImagePositionPage' );
  add_option( 'has_gv_form5ZUSATZImagePositionPage' );





//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################











  /////////// Textfeld Signator////////////////////////////////////////////#######################################################################
  /////////////////////////////////////////////////////////////////////////#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################



/* === Label SIGNATOR=== */

  // Label SIGNATOR TYP 
  add_option( 'has_gv_form1LabelTypeSigner' , 'signer' );
  add_option( 'has_gv_form2LabelTypeSigner' , 'signer' );
  add_option( 'has_gv_form3LabelTypeSigner' , 'signer' );
  add_option( 'has_gv_form4LabelTypeSigner' , 'signer' );
  add_option( 'has_gv_form5LabelTypeSigner' , 'signer' );

  // Label SIGNATOR  WIDTH
  add_option( 'has_gv_form1LabelSignerWidth' );
  add_option( 'has_gv_form2LabelSignerWidth' );
  add_option( 'has_gv_form3LabelSignerWidth' );
  add_option( 'has_gv_form4LabelSignerWidth' );
  add_option( 'has_gv_form5LabelSignerWidth' );
     
  // Label SIGNATOR HEIGTH
  add_option( 'has_gv_form1LabelSignerHeigth' );
  add_option( 'has_gv_form2LabelSignerHeigth' );
  add_option( 'has_gv_form3LabelSignerHeigth' );
  add_option( 'has_gv_form4LabelSignerHeigth' );
  add_option( 'has_gv_form5LabelSignerHeigth' );
   
  // Position Label SIGNATOR CSS width  
  add_option( 'has_gv_form1LabelSignerPositionMARGIN_LEFT' );
  add_option( 'has_gv_form2LabelSignerPositionMARGIN_LEFT' );
  add_option( 'has_gv_form3LabelSignerPositionMARGIN_LEFT' );
  add_option( 'has_gv_form4LabelSignerPositionMARGIN_LEFT' );
  add_option( 'has_gv_form5LabelSignerPositionMARGIN_LEFT' );
    
  // Position Label SIGNATOR CSS heigth  
  add_option( 'has_gv_form1LabelSignerPositionMARGIN_TOP' );
  add_option( 'has_gv_form2LabelSignerPositionMARGIN_TOP' );
  add_option( 'has_gv_form3LabelSignerPositionMARGIN_TOP' );
  add_option( 'has_gv_form4LabelSignerPositionMARGIN_TOP' );
  add_option( 'has_gv_form5LabelSignerPositionMARGIN_TOP' );




    // Label SIGNATOR X
  add_option( 'has_gv_form1LabelSignerX');
  add_option( 'has_gv_form2LabelSignerX');
  add_option( 'has_gv_form3LabelSignerX');
  add_option( 'has_gv_form4LabelSignerX');
  add_option( 'has_gv_form5LabelSignerX');
  
    // Label SIGNATOR Y
  add_option( 'has_gv_form1LabelSignerY');
  add_option( 'has_gv_form2LabelSignerY');
  add_option( 'has_gv_form3LabelSignerY');
  add_option( 'has_gv_form4LabelSignerY');
  add_option( 'has_gv_form5LabelSignerY');
  
    // Label SIGNATOR W
  add_option( 'has_gv_form1LabelSignerW');
  add_option( 'has_gv_form2LabelSignerW');
  add_option( 'has_gv_form3LabelSignerW');
  add_option( 'has_gv_form4LabelSignerW');
  add_option( 'has_gv_form5LabelSignerW');
  
    // Label SIGNATOR H
  add_option( 'has_gv_form1LabelSignerH');
  add_option( 'has_gv_form2LabelSignerH');
  add_option( 'has_gv_form3LabelSignerH');
  add_option( 'has_gv_form4LabelSignerH');
  add_option( 'has_gv_form5LabelSignerH');
  
    // Label SIGNATOR CENTER
  add_option( 'has_gv_form1LabelSignerCENTER');
  add_option( 'has_gv_form2LabelSignerCENTER');
  add_option( 'has_gv_form3LabelSignerCENTER');
  add_option( 'has_gv_form4LabelSignerCENTER');
  add_option( 'has_gv_form5LabelSignerCENTER');
  
    // Label SIGNATOR WRAP
  add_option( 'has_gv_form1LabelSignerWRAP');
  add_option( 'has_gv_form2LabelSignerWRAP');
  add_option( 'has_gv_form3LabelSignerWRAP');
  add_option( 'has_gv_form4LabelSignerWRAP');
  add_option( 'has_gv_form5LabelSignerWRAP');
  
    // Label SIGNATOR FONT COLOR
  add_option( 'has_gv_form1LabelSignerFcolor');
  add_option( 'has_gv_form2LabelSignerFcolor');
  add_option( 'has_gv_form3LabelSignerFcolor');
  add_option( 'has_gv_form4LabelSignerFcolor');
  add_option( 'has_gv_form5LabelSignerFcolor');
  
    // Label SIGNATOR BG COLOR
  add_option( 'has_gv_form1LabelSignerBGcolor');
  add_option( 'has_gv_form2LabelSignerBGcolor');
  add_option( 'has_gv_form3LabelSignerBGcolor');
  add_option( 'has_gv_form4LabelSignerBGcolor');
  add_option( 'has_gv_form5LabelSignerBGcolor');

 // Label SIGNATOR FORNT COLOR
  add_option( 'has_gv_form1LabelInputSigner');
  add_option( 'has_gv_form2LabelInputSigner');
  add_option( 'has_gv_form3LabelInputSigner');
  add_option( 'has_gv_form4LabelInputSigner');
  add_option( 'has_gv_form5LabelInputSigner');



//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################



  /////////// Textfeld Timestamp///////////////////////////////////////////#######################################################################
  /////////////////////////////////////////////////////////////////////////#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################


/* === Label TIMESTAMP=== */

  // Label SIGNATOR TYP 
  add_option( 'has_gv_form1LabelTypeTimestamp' , 'timestamp' );
  add_option( 'has_gv_form2LabelTypeTimestamp' , 'timestamp' );
  add_option( 'has_gv_form3LabelTypeTimestamp' , 'timestamp' );
  add_option( 'has_gv_form4LabelTypeTimestamp' , 'timestamp' );
  add_option( 'has_gv_form5LabelTypeTimestamp' , 'timestamp' );


    // Label SIGNATOR  WIDTH
    add_option( 'has_gv_form1LabelTimestampWidth' );
    add_option( 'has_gv_form1LabelTimestampWidth' );
    add_option( 'has_gv_form1LabelTimestampWidth' );
    add_option( 'has_gv_form1LabelTimestampWidth' );
    add_option( 'has_gv_form1LabelTimestampWidth' );
       
    // Label SIGNATOR HEIGTH
    add_option( 'has_gv_form1LabelTimestampHeigth' );
    add_option( 'has_gv_form1LabelTimestampHeigth' );
    add_option( 'has_gv_form1LabelTimestampHeigth' );
    add_option( 'has_gv_form1LabelTimestampHeigth' );
    add_option( 'has_gv_form1LabelTimestampHeigth' );
     
    // Position Label SIGNATOR CSS width  
    add_option( 'has_gv_form1LabelTimestampPositionMARGIN_LEFT' );
    add_option( 'has_gv_form1LabelTimestampPositionMARGIN_LEFT' );
    add_option( 'has_gv_form1LabelTimestampPositionMARGIN_LEFT' );
    add_option( 'has_gv_form1LabelTimestampPositionMARGIN_LEFT' );
    add_option( 'has_gv_form1LabelTimestampPositionMARGIN_LEFT' );
      
    // Position Label SIGNATOR CSS heigth  
    add_option( 'has_gv_form1LabelTimestampPositionMARGIN_TOP' );
    add_option( 'has_gv_form1LabelTimestampPositionMARGIN_TOP' );
    add_option( 'has_gv_form1LabelTimestampPositionMARGIN_TOP' );
    add_option( 'has_gv_form1LabelTimestampPositionMARGIN_TOP' );
    add_option( 'has_gv_form1LabelTimestampPositionMARGIN_TOP' );
  
    // Label TIMESTAMP X
  add_option( 'has_gv_form1LabelTimestampX');
  add_option( 'has_gv_form2LabelTimestampX');
  add_option( 'has_gv_form3LabelTimestampX');
  add_option( 'has_gv_form4LabelTimestampX');
  add_option( 'has_gv_form5LabelTimestampX');
    
   // Label TIMESTAMP Y
  add_option( 'has_gv_form1LabelTimestampY');
  add_option( 'has_gv_form2LabelTimestampY');
  add_option( 'has_gv_form3LabelTimestampY');
  add_option( 'has_gv_form4LabelTimestampY');
  add_option( 'has_gv_form5LabelTimestampY');
    
   // Label TIMESTAMP W
  add_option( 'has_gv_form1LabelTimestampW');
  add_option( 'has_gv_form2LabelTimestampW');
  add_option( 'has_gv_form3LabelTimestampW');
  add_option( 'has_gv_form4LabelTimestampW');
  add_option( 'has_gv_form5LabelTimestampW');
    
   // Label TIMESTAMP H
  add_option( 'has_gv_form1LabelTimestampH');
  add_option( 'has_gv_form2LabelTimestampH');
  add_option( 'has_gv_form3LabelTimestampH');
  add_option( 'has_gv_form4LabelTimestampH');
  add_option( 'has_gv_form5LabelTimestampH');
    
   // Label TIMESTAMP CENTER
  add_option( 'has_gv_form1LabelTimestampCENTER');
  add_option( 'has_gv_form2LabelTimestampCENTER');
  add_option( 'has_gv_form3LabelTimestampCENTER');
  add_option( 'has_gv_form4LabelTimestampCENTER');
  add_option( 'has_gv_form5LabelTimestampCENTER');
    
   // Label TIMESTAMP WRAP
  add_option( 'has_gv_form1LabelTimestampWRAP');
  add_option( 'has_gv_form2LabelTimestampWRAP');
  add_option( 'has_gv_form3LabelTimestampWRAP');
  add_option( 'has_gv_form4LabelTimestampWRAP');
  add_option( 'has_gv_form5LabelTimestampWRAP');
    
   // Label TIMESTAMP FORNT COLOR
  add_option( 'has_gv_form1LabelTimestampFcolor');
  add_option( 'has_gv_form2LabelTimestampFcolor');
  add_option( 'has_gv_form3LabelTimestampFcolor');
  add_option( 'has_gv_form4LabelTimestampFcolor');
  add_option( 'has_gv_form5LabelTimestampFcolor');
    
   // Label TIMESTAMP BG COLOR
  add_option( 'has_gv_form1LabelTimestampBGcolor');
  add_option( 'has_gv_form2LabelTimestampBGcolor');
  add_option( 'has_gv_form3LabelTimestampBGcolor');
  add_option( 'has_gv_form4LabelTimestampBGcolor');
  add_option( 'has_gv_form5LabelTimestampBGcolor');


 // Label TIMESTAMP Input
 add_option( 'has_gv_form1LabelInputTimestamp');
 add_option( 'has_gv_form2LabelInputTimestamp');
 add_option( 'has_gv_form3LabelInputTimestamp');
 add_option( 'has_gv_form4LabelInputTimestamp');
 add_option( 'has_gv_form5LabelInputTimestamp');



//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################



  /////////// Textfeld Grund///////////////////////////////////////////////#######################################################################
  /////////////////////////////////////////////////////////////////////////#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################


/* === Label Grund=== */

  // Label GRUND TYP 
  add_option( 'has_gv_form1LabelTypeGrund' , 'reason' );
  add_option( 'has_gv_form2LabelTypeGrund' , 'reason' );
  add_option( 'has_gv_form3LabelTypeGrund' , 'reason' );
  add_option( 'has_gv_form4LabelTypeGrund' , 'reason' );
  add_option( 'has_gv_form5LabelTypeGrund' , 'reason' );


    // Label GRUND  WIDTH
    add_option( 'has_gv_form1LabelGrundWidth' );
    add_option( 'has_gv_form1LabelGrundWidth' );
    add_option( 'has_gv_form1LabelGrundWidth' );
    add_option( 'has_gv_form1LabelGrundWidth' );
    add_option( 'has_gv_form1LabelGrundWidth' );
       
    // Label GRUND HEIGTH
    add_option( 'has_gv_form1LabelGrundHeigth' );
    add_option( 'has_gv_form1LabelGrundHeigth' );
    add_option( 'has_gv_form1LabelGrundHeigth' );
    add_option( 'has_gv_form1LabelGrundHeigth' );
    add_option( 'has_gv_form1LabelGrundHeigth' );
     
    // Position Label GRUND CSS width  
    add_option( 'has_gv_form1LabelGrundPositionMARGIN_LEFT' );
    add_option( 'has_gv_form1LabelGrundPositionMARGIN_LEFT' );
    add_option( 'has_gv_form1LabelGrundPositionMARGIN_LEFT' );
    add_option( 'has_gv_form1LabelGrundPositionMARGIN_LEFT' );
    add_option( 'has_gv_form1LabelGrundPositionMARGIN_LEFT' );
      
    // Position Label GRUND CSS heigth  
    add_option( 'has_gv_form1LabelGrundPositionMARGIN_TOP' );
    add_option( 'has_gv_form1LabelGrundPositionMARGIN_TOP' );
    add_option( 'has_gv_form1LabelGrundPositionMARGIN_TOP' );
    add_option( 'has_gv_form1LabelGrundPositionMARGIN_TOP' );
    add_option( 'has_gv_form1LabelGrundPositionMARGIN_TOP' );
  
  
    // Label GRUND X
  add_option( 'has_gv_form1LabelGrundX');
  add_option( 'has_gv_form2LabelGrundX');
  add_option( 'has_gv_form3LabelGrundX');
  add_option( 'has_gv_form4LabelGrundX');
  add_option( 'has_gv_form5LabelGrundX');
    
   // Label GRUND Y
  add_option( 'has_gv_form1LabelGrundY');
  add_option( 'has_gv_form2LabelGrundY');
  add_option( 'has_gv_form3LabelGrundY');
  add_option( 'has_gv_form4LabelGrundY');
  add_option( 'has_gv_form5LabelGrundY');
    
   // Label GRUND W
  add_option( 'has_gv_form1LabelGrundW');
  add_option( 'has_gv_form2LabelGrundW');
  add_option( 'has_gv_form3LabelGrundW');
  add_option( 'has_gv_form4LabelGrundW');
  add_option( 'has_gv_form5LabelGrundW');
    
   // Label GRUND H
  add_option( 'has_gv_form1LabelGrundH');
  add_option( 'has_gv_form2LabelGrundH');
  add_option( 'has_gv_form3LabelGrundH');
  add_option( 'has_gv_form4LabelGrundH');
  add_option( 'has_gv_form5LabelGrundH');
    
   // Label GRUND CENTER
  add_option( 'has_gv_form1LabelGrundCENTER');
  add_option( 'has_gv_form2LabelGrundCENTER');
  add_option( 'has_gv_form3LabelGrundCENTER');
  add_option( 'has_gv_form4LabelGrundCENTER');
  add_option( 'has_gv_form5LabelGrundCENTER');
    
   // Label GRUND WRAP
  add_option( 'has_gv_form1LabelGrundWRAP');
  add_option( 'has_gv_form2LabelGrundWRAP');
  add_option( 'has_gv_form3LabelGrundWRAP');
  add_option( 'has_gv_form4LabelGrundWRAP');
  add_option( 'has_gv_form5LabelGrundWRAP');
    
   // Label GRUND FORNT COLOR
  add_option( 'has_gv_form1LabelGrundFcolor');
  add_option( 'has_gv_form2LabelGrundFcolor');
  add_option( 'has_gv_form3LabelGrundFcolor');
  add_option( 'has_gv_form4LabelGrundFcolor');
  add_option( 'has_gv_form5LabelGrundFcolor');
    
   // Label GRUND BG COLOR
  add_option( 'has_gv_form1LabelGrundBGcolor');
  add_option( 'has_gv_form2LabelGrundBGcolor');
  add_option( 'has_gv_form3LabelGrundBGcolor');
  add_option( 'has_gv_form4LabelGrundBGcolor');
  add_option( 'has_gv_form5LabelGrundBGcolor');


 // Label GRUND Input
 add_option( 'has_gv_form1LabelInputGrund');
 add_option( 'has_gv_form2LabelInputGrund');
 add_option( 'has_gv_form3LabelInputGrund');
 add_option( 'has_gv_form4LabelInputGrund');
 add_option( 'has_gv_form5LabelInputGrund');



//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################

/////////// Textfeld Location//////////////////////////////////////////////#######################################################################
  /////////////////////////////////////////////////////////////////////////#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################


/* === Label TIMESTAMP=== */

  // Label LOCATION TYP 
  add_option( 'has_gv_form1LabelTypeLocation' , 'location' );
  add_option( 'has_gv_form2LabelTypeLocation' , 'location' );
  add_option( 'has_gv_form3LabelTypeLocation' , 'location' );
  add_option( 'has_gv_form4LabelTypeLocation' , 'location' );
  add_option( 'has_gv_form5LabelTypeLocation' , 'location' );
  


  // Label SIGNATOR  WIDTH
  add_option( 'has_gv_form1LabelLocationWidth' );
  add_option( 'has_gv_form2LabelLocationWidth' );
  add_option( 'has_gv_form3LabelLocationWidth' );
  add_option( 'has_gv_form4LabelLocationWidth' );
  add_option( 'has_gv_form5LabelLocationWidth' );
     
  // Label SIGNATOR HEIGTH
  add_option( 'has_gv_form1LabelLocationHeigth' );
  add_option( 'has_gv_form2LabelLocationHeigth' );
  add_option( 'has_gv_form3LabelLocationHeigth' );
  add_option( 'has_gv_form4LabelLocationHeigth' );
  add_option( 'has_gv_form5LabelLocationHeigth' );
   
  // Position Label SIGNATOR CSS width  
  add_option( 'has_gv_form1LabelLocationPositionMARGIN_LEFT' );
  add_option( 'has_gv_form2LabelLocationPositionMARGIN_LEFT' );
  add_option( 'has_gv_form3LabelLocationPositionMARGIN_LEFT' );
  add_option( 'has_gv_form4LabelLocationPositionMARGIN_LEFT' );
  add_option( 'has_gv_form5LabelLocationPositionMARGIN_LEFT' );
    
  // Position Label SIGNATOR CSS heigth  
  add_option( 'has_gv_form1LabelLocationPositionMARGIN_TOP' );
  add_option( 'has_gv_form2LabelLocationPositionMARGIN_TOP' );
  add_option( 'has_gv_form3LabelLocationPositionMARGIN_TOP' );
  add_option( 'has_gv_form4LabelLocationPositionMARGIN_TOP' );
  add_option( 'has_gv_form5LabelLocationPositionMARGIN_TOP' );






    // Label LOCATION X
  add_option( 'has_gv_form1LabelLocationX');
  add_option( 'has_gv_form2LabelLocationX');
  add_option( 'has_gv_form3LabelLocationX');
  add_option( 'has_gv_form4LabelLocationX');
  add_option( 'has_gv_form5LabelLocationX');
    
   // Label LOCATION Y
  add_option( 'has_gv_form1LabelLocationY');
  add_option( 'has_gv_form2LabelLocationY');
  add_option( 'has_gv_form3LabelLocationY');
  add_option( 'has_gv_form4LabelLocationY');
  add_option( 'has_gv_form5LabelLocationY');
    
   // Label LOCATION W
  add_option( 'has_gv_form1LabelLocationW');
  add_option( 'has_gv_form2LabelLocationW');
  add_option( 'has_gv_form3LabelLocationW');
  add_option( 'has_gv_form4LabelLocationW');
  add_option( 'has_gv_form5LabelLocationW');
    
   // Label LOCATION H
  add_option( 'has_gv_form1LabelLocationH');
  add_option( 'has_gv_form2LabelLocationH');
  add_option( 'has_gv_form3LabelLocationH'); 
  add_option( 'has_gv_form4LabelLocationH');
  add_option( 'has_gv_form5LabelLocationH');
    
   // Label LOCATION CENTER
  add_option( 'has_gv_form1LabelLocationCENTER');
  add_option( 'has_gv_form2LabelLocationCENTER');
  add_option( 'has_gv_form3LabelLocationCENTER');
  add_option( 'has_gv_form4LabelLocationCENTER');
  add_option( 'has_gv_form5LabelLocationCENTER');
    
   // Label LOCATION WRAP
  add_option( 'has_gv_form1LabelLocationWRAP');
  add_option( 'has_gv_form2LabelLocationWRAP');
  add_option( 'has_gv_form3LabelLocationWRAP');
  add_option( 'has_gv_form4LabelLocationWRAP');
  add_option( 'has_gv_form5LabelLocationWRAP');
    
   // Label LOCATION FORNT COLOR
  add_option( 'has_gv_form1LabelLocationFcolor');
  add_option( 'has_gv_form2LabelLocationFcolor');
  add_option( 'has_gv_form3LabelLocationFcolor');
  add_option( 'has_gv_form4LabelLocationFcolor');
  add_option( 'has_gv_form5LabelLocationFcolor');
    
   // Label LOCATION FORNT COLOR
  add_option( 'has_gv_form1LabelLocationBGcolor');
  add_option( 'has_gv_form2LabelLocationBGcolor');
  add_option( 'has_gv_form3LabelLocationBGcolor');
  add_option( 'has_gv_form4LabelLocationBGcolor');
  add_option( 'has_gv_form5LabelLocationBGcolor');

 // Label LOCATION Input
 add_option( 'has_gv_form1LabelInputLocation');
 add_option( 'has_gv_form2LabelInputLocation');
 add_option( 'has_gv_form3LabelInputLocation');
 add_option( 'has_gv_form4LabelInputLocation');
 add_option( 'has_gv_form5LabelInputLocation');




//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################
//#######################################################################//#######################################################################



















































































 /////////// SIEGEL  //////////////////////////////////////####################################################################
  /////////////////////////////////////////////////////////////////////#######################################################################


 //Signatur LABEL SIGNER 1
 add_option( 'has_gv_form1SiegelSigner_X' );
 add_option( 'has_gv_form1SiegelSigner_Y' );
 add_option( 'has_gv_form1SiegelSigner_H' );
 add_option( 'has_gv_form1SiegelSigner_W' );
 add_option( 'has_gv_form1SiegelSigner_center' );
 add_option( 'has_gv_form1SiegelSigner_wrap' );


 //Signatur LABEL LOCATION 2
 add_option( 'has_gv_form2SiegelLocation_X' );
 add_option( 'has_gv_form2SiegelLocation_Y' );
 add_option( 'has_gv_form2SiegelLocation_H' );
 add_option( 'has_gv_form2SiegelLocation_W' );
 add_option( 'has_gv_form2SiegelLocation_center' );
 add_option( 'has_gv_form2SiegelLocation_wrap' );


  //Signatur LABEL REASON 3
  add_option( 'has_gv_form3SiegelReason_X' );
  add_option( 'has_gv_form3SiegelReason_Y' );
  add_option( 'has_gv_form3SiegelReason_H' );
  add_option( 'has_gv_form3SiegelReason_W' );
  add_option( 'has_gv_form3SiegelReason_center' );
  add_option( 'has_gv_form3SiegelReason_wrap' );


  //Signatur LABEL TIMESTAMP 4
  add_option( 'has_gv_form4SiegelTimestamp_X' );
  add_option( 'has_gv_form4SiegelTimestamp_Y' );
  add_option( 'has_gv_form4SiegelTimestamp_H' );
  add_option( 'has_gv_form4SiegelTimestamp_W' );
  add_option( 'has_gv_form4SiegelTimestamp_center' );
  add_option( 'has_gv_form4SiegelTimestamp_wrap' );


    /////////// SIEGEL LABEL LOCATION //////////////////////////////////////
  /////////////////////////////////////////////////////////////////////



      
 //Signatur Siegel Ort
 add_option( 'has_gv_form1SiegelOrt' );
 add_option( 'form_settings_group' );
 add_option( 'form_settings_group' );
    
 //Signatur LABEL SIGNER 1
 add_option( 'has_gv_form1SiegelLocation_X' );
 add_option( 'has_gv_form1SiegelLocation_Y' );
 add_option( 'has_gv_form1SiegelLocation_H' );
 add_option( 'has_gv_form1SiegelLocation_W' );
 add_option( 'has_gv_form1SiegelLocation_center' );
 add_option( 'has_gv_form1SiegelLocation_wrap' );


 //Signatur LABEL SIGNER 2
 add_option( 'has_gv_form2SiegelLocation_X' );
 add_option( 'has_gv_form2SiegelLocation_Y' );
 add_option( 'has_gv_form2SiegelLocation_H' );
 add_option( 'has_gv_form2SiegelLocation_W' );
 add_option( 'has_gv_form2SiegelLocation_center' );
 add_option( 'has_gv_form2SiegelLocation_wrap' );


  //Signatur LABEL SIGNER 3
  add_option( 'has_gv_form3SiegelLocation_X' );
  add_option( 'has_gv_form3SiegelLocation_Y' );
  add_option( 'has_gv_form3SiegelLocation_H' );
  add_option( 'has_gv_form3SiegelLocation_W' );
  add_option( 'has_gv_form3SiegelLocation_center' );
  add_option( 'has_gv_form3SiegelLocation_wrap' );


  //Signatur LABEL SIGNER 4
  add_option( 'has_gv_form4SiegelLocation_X' );
  add_option( 'has_gv_form4SiegelLocation_Y' );
  add_option( 'has_gv_form4SiegelLocation_H' );
  add_option( 'has_gv_form4SiegelLocation_W' );
  add_option( 'has_gv_form4SiegelLocation_center' );
  add_option( 'has_gv_form4SiegelLocation_wrap' );


    /////////// SIEGEL LABEL GRUND //////////////////////////////////////
  /////////////////////////////////////////////////////////////////////
    
 //Signatur Siegel zusätzliches Grund
 add_option( 'has_gv_form1SiegelGrund' );
 add_option( 'has_gv_form2SiegelGrund' );
 add_option( 'has_gv_form3SiegelGrund' );
    
 //Signatur LABEL SIGNER 1
 add_option( 'has_gv_form1SiegelGrund_X' );
 add_option( 'has_gv_form1SiegelGrund_Y' );
 add_option( 'has_gv_form1SiegelGrund_H' );
 add_option( 'has_gv_form1SiegelGrund_W' );
 add_option( 'has_gv_form1SiegelGrund_center' );
 add_option( 'has_gv_form1SiegelGrund_wrap' );


 //Signatur LABEL SIGNER 2
 add_option( 'has_gv_form2SiegelGrund_X' );
 add_option( 'has_gv_form2SiegelGrund_Y' );
 add_option( 'has_gv_form2SiegelGrund_H' );
 add_option( 'has_gv_form2SiegelGrund_W' );
 add_option( 'has_gv_form2SiegelGrund_center' );
 add_option( 'has_gv_form2SiegelGrund_wrap' );


  //Signatur LABEL SIGNER 3
  add_option( 'has_gv_form3SiegelGrund_X' );
  add_option( 'has_gv_form3SiegelGrund_Y' );
  add_option( 'has_gv_form3SiegelGrund_H' );
  add_option( 'has_gv_form3SiegelGrund_W' );
  add_option( 'has_gv_form3SiegelGrund_center' );
  add_option( 'has_gv_form3SiegelGrund_wrap' );


  //Signatur LABEL SIGNER 4
  add_option( 'has_gv_form4SiegelGrund_X' );
  add_option( 'has_gv_form4SiegelGrund_Y' );
  add_option( 'has_gv_form4SiegelGrund_H' );
  add_option( 'has_gv_form4SiegelGrund_W' );
  add_option( 'has_gv_form4SiegelGrund_center' );
  add_option( 'has_gv_form4SiegelGrund_wrap' );


///////////  LABEL COLOR ///////////////////////////////////
/////////////////////////////////////////////////////////////////////

add_option( 'has_SIGNATROR_has_gv_LABEL_BG_color1' );
add_option( 'has_SIGNATOR_has_gv_LABEL_Font_color1' );

add_option( 'has_ORT_has_gv_LABEL_BG_color1' );
add_option( 'has_ORT_has_gv_LABEL_Font_color1' );

add_option( 'has_GRUND_has_gv_LABEL_BG_color1' );
add_option( 'has_GRUND_has_gv_LABEL_Font_color1' );

//

add_option( 'has_SIGNATROR_has_gv_LABEL_BG_color2' );
add_option( 'has_SIGNATOR_has_gv_LABEL_Font_color2' );

add_option( 'has_ORT_has_gv_LABEL_BG_color2' );
add_option( 'has_ORT_has_gv_LABEL_Font_color2' );

add_option( 'has_GRUND_has_gv_LABEL_BG_color2' );
add_option( 'has_GRUND_has_gv_LABEL_Font_color2' );

//

add_option( 'has_SIGNATROR_has_gv_LABEL_BG_color3' );
add_option( 'form_settings_group' );

add_option( 'has_ORT_has_gv_LABEL_BG_color3' );
add_option( 'has_ORT_has_gv_LABEL_Font_color3' );

add_option( 'has_GRUND_has_gv_LABEL_BG_color3' );
add_option( 'has_GRUND_has_gv_LABEL_Font_color3' );


/////////// SIEGEL LABEL TIMESTAMP ///////////////////////////////////
/////////////////////////////////////////////////////////////////////
    
 //Signatur Siegel Zeitstempel
 add_option( 'has_gv_form1SiegelZeit' );
 add_option( 'has_gv_form2SiegelZeit' );
 add_option( 'has_gv_form3SiegelZeit' );
  
 //Signatur LABEL SIGNER 1
 add_option( 'has_gv_form1SiegelTime_X' );
 add_option( 'has_gv_form1SiegelTime_Y' );
 add_option( 'has_gv_form1SiegelTime_H' );
 add_option( 'has_gv_form1SiegelTime_W' );
 add_option( 'has_gv_form1SiegelTime_center' );
 add_option( 'has_gv_form1SiegelTime_wrap' );


 //Signatur LABEL SIGNER 2
 add_option( 'has_gv_form1SiegelTime_X' );
 add_option( 'has_gv_form1SiegelTime_Y' );
 add_option( 'has_gv_form1SiegelTime_H' );
 add_option( 'has_gv_form2SiegelSigner_W' );
 add_option( 'has_gv_form1SiegelTime_center' );
 add_option( 'has_gv_form1SiegelTime_wrap' );


  //Signatur LABEL SIGNER 3
  add_option( 'has_gv_form1SiegelTime_X' );
  add_option( 'has_gv_form1SiegelTime_Y' );
  add_option( 'has_gv_form1SiegelTime_H' );
  add_option( 'has_gv_form3SiegelSigner_W' );
  add_option( 'has_gv_form1SiegelTime_center' );
  add_option( 'has_gv_form1SiegelTime_wrap' );


  //Signatur LABEL SIGNER 4
  add_option( 'has_gv_form1SiegelTime_X' );
  add_option( 'has_gv_form1SiegelTime_Y' );
  add_option( 'has_gv_form1SiegelTime_H' );
  add_option( 'has_gv_form4SiegelSigner_W' );
  add_option( 'has_gv_form1SiegelTime_center' );
  add_option( 'has_gv_form1SiegelTime_wrap' );

  
  

////////////////////////////////////////////////////////////////////
//            Signierformat Felder                               //
//                                                              //
/////////////////////////////////////////////////////////////////
  
  //GV Formular AuswahlXXXXX
  add_option( 'has_gv_form1ID' );
  add_option( 'has_gv_form2ID' );
  add_option( 'has_gv_form3ID' );
  add_option( 'has_gv_form4ID' );
  add_option( 'has_gv_form5ID' );
  //Signatur FormXXXXX
  add_option( 'has_gv_form1SignaturForm', 'has_gv_form1SignaturForm' );
  add_option( 'has_gv_form2SignaturForm', 'has_gv_form2SignaturForm' );
  add_option( 'has_gv_form3SignaturForm', 'has_gv_form3SignaturForm' );
  add_option( 'has_gv_form4SignaturForm', 'has_gv_form4SignaturForm' );
  add_option( 'has_gv_form5SignaturForm', 'has_gv_form5SignaturForm' );
#############################################################################################################

  //Signatur Siegel
  add_option( 'has_gv_form1Siegel', 'has_gv_form1Siegel' );
  add_option( 'has_gv_form2Siegel', 'has_gv_form2Siegel' );
  add_option( 'has_gv_form3Siegel', 'has_gv_form3Siegel' );

  //Signatur Siegel Template
  add_option( 'has_gv_form1SiegelTemplates', 'has_gv_form1SiegelTemplates' );
  add_option( 'has_gv_form2Siege2Templates', 'has_gv_form2Siege2Templates' );
  add_option( 'has_gv_form3Siege3Templates', 'has_gv_form3Siege3Templates' );

  //Signatur Siegel Template Auswahl ID
  add_option( 'has_gv_form1SiegelTemplatesAuswahlID', 'has_gv_form1SiegelTemplatesAuswahlID' );
  add_option( 'has_gv_form2Siege2TemplatesAuswahlID', 'has_gv_form2Siege2TemplatesAuswahlID' );
  add_option( 'has_gv_form3Siege3TemplatesAuswahlID', 'has_gv_form3Siege3TemplatesAuswahlID' );
  add_option( 'has_gv_form4Siege2TemplatesAuswahlID', 'has_gv_form4Siege2TemplatesAuswahlID' );
  add_option( 'has_gv_form5Siege3TemplatesAuswahlID', 'has_gv_form5Siege3TemplatesAuswahlID' );


////////////////////////////////////////////////////////////////////
//            ZERTIFIKAT                                         //
//                                                              //
/////////////////////////////////////////////////////////////////

  //Zertifikats Datei JA / Nein
  add_option( 'has_gv_form1ZertifikatsDateiJaNeinCheckboxID', 'has_gv_form1ZertifikatsDateiJaNeinDB' );
  add_option( 'has_gv_form2ZertifikatsDateiJaNeinCheckboxID', 'has_gv_form2ZertifikatsDateiJaNeinDB' );
  add_option( 'has_gv_form3ZertifikatsDateiJaNeinCheckboxID', 'has_gv_form3ZertifikatsDateiJaNeinDB' );
  add_option( 'has_gv_form4ZertifikatsDateiJaNeinCheckboxID', 'has_gv_form4ZertifikatsDateiJaNeinDB' );
  add_option( 'has_gv_form5ZertifikatsDateiJaNeinCheckboxID', 'has_gv_form5ZertifikatsDateiJaNeinDB' );

  //Zertifikats Datei WP SpeicherPfadDownload
  add_option( 'has_gv_form1ZertifikatsDateiWPspeicherPfad', 'has_gv_form1ZertifikatsDateiWPspeicherPfad' );
  add_option( 'has_gv_form2ZertifikatsDateiWPspeicherPfad', 'has_gv_form1ZertifikatsDateiWPspeicherPfad' );
  add_option( 'has_gv_form3ZertifikatsDateiWPspeicherPfad', 'has_gv_form1ZertifikatsDateiWPspeicherPfad' );

    //Zertifikats Datei Ordner SpeicherPfadDownload
  add_option( 'has_gv_form1ZertifikatsDateiOrdnerSpeicherPfad', 'has_gv_form1ZertifikatsDateiOrdnerSpeicherPfad' );
  add_option( 'has_gv_form2ZertifikatsDateiOrdnerSpeicherPfad', 'has_gv_form2ZertifikatsDateiOrdnerSpeicherPfad' );
  add_option( 'has_gv_form3ZertifikatsDateiOrdnerSpeicherPfad', 'has_gv_form3ZertifikatsDateiOrdnerSpeicherPfad' );

  //Zertifikats Datei Gesamt SpeicherPfadDownload
  add_option( 'has_gv_form1ZertifikatsDateiGesamtSpeicherPfad', 'has_gv_form1ZertifikatsDateiGesamtSpeicherPfad' );
  add_option( 'has_gv_form2ZertifikatsDateiGesamtSpeicherPfad', 'has_gv_form2ZertifikatsDateiGesamtSpeicherPfad' );
  add_option( 'has_gv_form3ZertifikatsDateiGesamtSpeicherPfad', 'has_gv_form3ZertifikatsDateiGesamtSpeicherPfad' );


////////////////////////////////////////////////////////////////////
//            DATEINAME                                          //
//                                                              //
/////////////////////////////////////////////////////////////////

  









//CUSTOM DATEINAME

  add_option( 'has_gv_form1_PDF_filename', 'has_gv_form2CustomDateinameSichtbarkeitDB' );
  add_option( 'has_gv_form2_PDF_filename', 'has_gv_form2CustomDateinameSichtbarkeitDB' );
  add_option( 'has_gv_form3_PDF_filename', 'has_gv_form2CustomDateinameSichtbarkeitDB' );
  add_option( 'has_gv_form4_PDF_filename', 'has_gv_form2CustomDateinameSichtbarkeitDB' );
  add_option( 'has_gv_form5_PDF_filename', 'has_gv_form2CustomDateinameSichtbarkeitDB' );

    //CUSTOM DATEINAME Preffix1
    add_option( 'has_gv_form1_preffix1', 'has_gv_form1Feld1CustomDateinameDB' );
    add_option( 'has_gv_form2_preffix1', 'has_gv_form1Feld1CustomDateinameDB' );
    add_option( 'has_gv_form3_preffix1', 'has_gv_form1Feld1CustomDateinameDB' );
    add_option( 'has_gv_form4_preffix1', 'has_gv_form1Feld1CustomDateinameDB' );
    add_option( 'has_gv_form5_preffix1', 'has_gv_form1Feld1CustomDateinameDB' );
  
    //CUSTOM DATEINAME Preffix2
    add_option( 'has_gv_form1_preffix2', 'has_gv_form1Feld2CustomDateinameDB' );
    add_option( 'has_gv_form2_preffix2', 'has_gv_form1Feld2CustomDateinameDB' );
    add_option( 'has_gv_form3_preffix2', 'has_gv_form1Feld2CustomDateinameDB' );
    add_option( 'has_gv_form4_preffix2', 'has_gv_form1Feld2CustomDateinameDB' );
    add_option( 'has_gv_form5_preffix2', 'has_gv_form1Feld2CustomDateinameDB' );
  
      //CUSTOM DATEINAME PrefixSelectUID
      add_option( 'has_gv_form1_select_preffix_UID', 'has_gv_form1Feld2CustomDateinameDB' );
      add_option( 'has_gv_form2_select_preffix_UID', 'has_gv_form1Feld2CustomDateinameDB' );
      add_option( 'has_gv_form3_select_preffix_UID', 'has_gv_form1Feld2CustomDateinameDB' );
      add_option( 'has_gv_form4_select_preffix_UID', 'has_gv_form1Feld2CustomDateinameDB' );
      add_option( 'has_gv_form5_select_preffix_UID', 'has_gv_form1Feld2CustomDateinameDB' ); 

   //CUSTOM DATEINAME PrefixSelectUID
   add_option( 'has_gv_form1_select_preffix_UID_Auswahl', 'has_gv_form1Feld2CustomDateinameDB' );
   add_option( 'has_gv_form2_select_preffix_UID_Auswahl', 'has_gv_form1Feld2CustomDateinameDB' );
   add_option( 'has_gv_form3_select_preffix_UID_Auswahl', 'has_gv_form1Feld2CustomDateinameDB' );
   add_option( 'has_gv_form4_select_preffix_UID_Auswahl', 'has_gv_form1Feld2CustomDateinameDB' );
   add_option( 'has_gv_form5_select_preffix_UID_Auswahl', 'has_gv_form1Feld2CustomDateinameDB' ); 

//CUSTOM DATEINAME Suffix1
add_option( 'has_gv_form1_suffix1', 'has_gv_form1CustomDateinameDB' );
add_option( 'has_gv_form2_suffix1', 'has_gv_form1CustomDateinameDB' );
add_option( 'has_gv_form3_suffix1', 'has_gv_form1CustomDateinameDB' );
add_option( 'has_gv_form4_suffix1', 'has_gv_form1CustomDateinameDB' );
add_option( 'has_gv_form5_suffix1', 'has_gv_form1CustomDateinameDB' );

//CUSTOM DATEINAME Suffix2
add_option( 'has_gv_form1_suffix2', 'has_gv_form1Feld1CustomDateinameDB' );
add_option( 'has_gv_form2_suffix2', 'has_gv_form1Feld1CustomDateinameDB' );
add_option( 'has_gv_form3_suffix2', 'has_gv_form1Feld1CustomDateinameDB' );
add_option( 'has_gv_form4_suffix2', 'has_gv_form1Feld1CustomDateinameDB' );
add_option( 'has_gv_form5_suffix2', 'has_gv_form1Feld1CustomDateinameDB' );

//CUSTOM DATEINAME SuffixSelectUID
add_option( 'has_gv_form1_select_suffix_UID', 'has_gv_form1Feld2CustomDateinameDB' );
add_option( 'has_gv_form1_select_suffix_UID', 'has_gv_form1Feld2CustomDateinameDB' );
add_option( 'has_gv_form1_select_suffix_UID', 'has_gv_form1Feld2CustomDateinameDB' );
add_option( 'has_gv_form1_select_suffix_UID', 'has_gv_form1Feld2CustomDateinameDB' );
add_option( 'has_gv_form1_select_suffix_UID', 'has_gv_form1Feld2CustomDateinameDB' );

//CUSTOM DATEINAME SuffixSelectUID Auswahl
add_option( 'has_gv_form1_select_suffix_UID_Auswahl', 'has_gv_form1Feld2CustomDateinameDB' );
add_option( 'has_gv_form1_select_suffix_UID_Auswahl', 'has_gv_form1Feld2CustomDateinameDB' );
add_option( 'has_gv_form1_select_suffix_UID_Auswahl', 'has_gv_form1Feld2CustomDateinameDB' );
add_option( 'has_gv_form1_select_suffix_UID_Auswahl', 'has_gv_form1Feld2CustomDateinameDB' );
add_option( 'has_gv_form1_select_suffix_UID_Auswahl', 'has_gv_form1Feld2CustomDateinameDB' );

//CUSTOM DATEINAME Final
add_option( 'has_gv_form1_DateiNameFinal', 'has_gv_form1Feld2CustomDateinameDB' );
add_option( 'has_gv_form2_DateiNameFinal', 'has_gv_form1Feld2CustomDateinameDB' );
add_option( 'has_gv_form3_DateiNameFinal', 'has_gv_form1Feld2CustomDateinameDB' );
add_option( 'has_gv_form4_DateiNameFinal', 'has_gv_form1Feld2CustomDateinameDB' );
add_option( 'has_gv_form5_DateiNameFinal', 'has_gv_form1Feld2CustomDateinameDB' );





////////////////////////////////////////////////////////////////////
//            FTP EXPORT                                         //
//                                                              //
/////////////////////////////////////////////////////////////////

 add_option( 'has_gv_form1pdfFTP_Server_checkedCheckboxID', 'has_gv_form1pdfFTP_Server_checkedDB' );
 add_option( 'has_gv_form2pdfFTP_Server_checkedCheckboxID', 'has_gv_form2pdfFTP_Server_checkedDB' );
 add_option( 'has_gv_form3pdfFTP_Server_checkedCheckboxID', 'has_gv_form3pdfFTP_Server_checkedDB' );
 add_option( 'has_gv_form4pdfFTP_Server_checkedCheckboxID', 'has_gv_form4pdfFTP_Server_checkedDB' );
 add_option( 'has_gv_form5pdfFTP_Server_checkedCheckboxID', 'has_gv_form5pdfFTP_Server_checkedDB' );

  add_option( 'has_gv_form1pdfFTP_Server', 'has_gv_form1pdfFTP_Server' );
  add_option( 'has_gv_form2pdfFTP_Server', 'has_gv_form2pdfFTP_Server' );
  add_option( 'has_gv_form3pdfFTP_Server', 'has_gv_form3pdfFTP_Server' );

  add_option( 'has_gv_form1pdfFTP_Server_User', 'has_gv_form1pdfFTP_Server_User' );
  add_option( 'has_gv_form2pdfFTP_Server_User', 'has_gv_form2pdfFTP_Server_User' );
  add_option( 'has_gv_form3pdfFTP_Server_User', 'has_gv_form3pdfFTP_Server_User' );

  add_option( 'has_gv_form1pdfFTP_Server_Passwort', 'has_gv_form1pdfFTP_Server_Passwort' );
  add_option( 'has_gv_form2pdfFTP_Server_Passwort', 'has_gv_form2pdfFTP_Server_Passwort' );
  add_option( 'has_gv_form3pdfFTP_Server_Passwort', 'has_gv_form3pdfFTP_Server_Passwort' );

  add_option( 'has_gv_form1pdfFTP_Server_Port', 'has_gv_form1pdfFTP_Server_Port' );
  add_option( 'has_gv_form2pdfFTP_Server_Port', 'has_gv_form2pdfFTP_Server_Port' );
  add_option( 'has_gv_form3pdfFTP_Server_Port', 'has_gv_form3pdfFTP_Server_Port' );


  
  /////////// Papierformat //////////////////////////////////////
  ///////////////////////////////////////////////////////////////////

   //Papierformat
   add_option( 'has_gv_form1Papierformat', 'has_gv_form1Papierformat' );
   add_option( 'has_gv_form2Papierformat', 'has_gv_form2Papierformat' );
   add_option( 'has_gv_form3Papierformat', 'has_gv_form3Papierformat' );




//sichtbarkeit Weiterleitung WP
   add_option( 'has_gv_form1sichtbarkeitWeiterleitungsPfadeWPCheckboxID');
   add_option( 'has_gv_form2sichtbarkeitWeiterleitungsPfadeWPCheckboxID');
   add_option( 'has_gv_form3sichtbarkeitWeiterleitungsPfadeWPCheckboxID');
   add_option( 'has_gv_form4sichtbarkeitWeiterleitungsPfadeWPCheckboxID');
   add_option( 'has_gv_form5sichtbarkeitWeiterleitungsPfadeWPCheckboxID');


   //sichtbarkeit Speicherpfade WP
   add_option( 'has_gv_form1sichtbarkeitSpeicherPfadeWPCheckboxID');
   add_option( 'has_gv_form2sichtbarkeitSpeicherPfadeWPCheckboxID');
   add_option( 'has_gv_form3sichtbarkeitSpeicherPfadeWPCheckboxID');
   add_option( 'has_gv_form4sichtbarkeitSpeicherPfadeWPCheckboxID');
   add_option( 'has_gv_form5sichtbarkeitSpeicherPfadeWPCheckboxID');


   //Speicherpfad Wordpress Upload
   add_option( 'has_gv_form1pdfWP_Upload', 'has_gv_form1pdfWP_Upload' );
   add_option( 'has_gv_form2pdfWP_Upload', 'has_gv_form2pdfWP_Upload' );
   add_option( 'has_gv_form3pdfWP_Upload', 'has_gv_form1pdfWP_Upload' );
   add_option( 'has_gv_form4pdfWP_Upload', 'has_gv_form2pdfWP_Upload' );
   add_option( 'has_gv_form5pdfWP_Upload', 'has_gv_form1pdfWP_Upload' );

      //Speicherpfad Wordpress Upload Gesamtpfad
      add_option( 'has_gv_form1pdfWP_Upload_Gesamtpfad', 'has_gv_form1pdfWP_Upload' );
      add_option( 'has_gv_form2pdfWP_Upload_Gesamtpfad', 'has_gv_form2pdfWP_Upload' );
      add_option( 'has_gv_form3pdfWP_Upload_Gesamtpfad', 'has_gv_form1pdfWP_Upload' );
      add_option( 'has_gv_form4pdfWP_Upload_Gesamtpfad', 'has_gv_form2pdfWP_Upload' );
      add_option( 'has_gv_form5pdfWP_Upload_Gesamtpfad', 'has_gv_form1pdfWP_Upload' );



//Speicherpfad Wordpress Download Gesamtpfad
 add_option( 'has_gv_form1pdfWP_Download_Gesamtpfad', 'has_gv_form1pdfWP_Upload' );
 add_option( 'has_gv_form2pdfWP_Download_Gesamtpfad', 'has_gv_form2pdfWP_Upload' );
 add_option( 'has_gv_form3pdfWP_Download_Gesamtpfad', 'has_gv_form1pdfWP_Upload' );
 add_option( 'has_gv_form4pdfWP_Download_Gesamtpfad', 'has_gv_form2pdfWP_Upload' );
 add_option( 'has_gv_form5pdfWP_Download_Gesamtpfad', 'has_gv_form1pdfWP_Upload' );  

 //Speicherpfad Wordpress Download
   add_option( 'has_gv_form1pdfWP_Download', 'has_gv_form1pdfWP_Download' );
   add_option( 'has_gv_form2pdfWP_Download', 'has_gv_form2pdfWP_Download' );
   add_option( 'has_gv_form3pdfWP_Download', 'has_gv_form3pdfWP_Download' );
   add_option( 'has_gv_form4pdfWP_Download', 'has_gv_form1pdfWP_Download' );
   add_option( 'has_gv_form5pdfWP_Download', 'has_gv_form2pdfWP_Download' );

 
  //Speicherpfad Upload
   add_option( 'has_gv_form1pdfUpload', 'has_gv_form1pdfUpload' );
   add_option( 'has_gv_form2pdfUpload', 'has_gv_form2pdfUpload' );
   add_option( 'has_gv_form3pdfUpload', 'has_gv_form3pdfUpload' );
   add_option( 'has_gv_form4pdfUpload', 'has_gv_form3pdfUpload' );
   add_option( 'has_gv_form5pdfUpload', 'has_gv_form3pdfUpload' );

  //Speicherpfad Download
   add_option( 'has_gv_form1pdfUploadGesamtPfad', 'has_gv_form1pdfUploadGesamtPfad' );
   add_option( 'has_gv_form2pdfUploadGesamtPfad', 'has_gv_form2pdfUploadGesamtPfad' );
   add_option( 'has_gv_form3pdfUploadGesamtPfad', 'has_gv_form3pdfUploadGesamtPfad' );

  //Speicherpfad Wordpress Upload
  add_option( 'has_gv_form1pdfDownloadGesamtPfad', 'has_gv_form1pdfDownloadGesamtPfad' );
  add_option( 'has_gv_form1pdfDownloadGesamtPfad', 'has_gv_form1pdfDownloadGesamtPfad' );
  add_option( 'has_gv_form1pdfDownloadGesamtPfad', 'has_gv_form1pdfDownloadGesamtPfad' );



  //Erfolgreich Weiterleitung
   add_option( 'has_gv_form1Erfolg', 'has_gv_form1Erfolg' );
   add_option( 'has_gv_form2Erfolg', 'has_gv_form2Erfolg' );
   add_option( 'has_gv_form3Erfolg', 'has_gv_form3Erfolg' );

  //Error Weiterleitung
   add_option( 'has_gv_form1Error', 'has_gv_form1Error' );
   add_option( 'has_gv_form2Error', 'has_gv_form2Error' );
   add_option( 'has_gv_form3Error', 'has_gv_form3Error' );

///////////////////////////////////////////////////////////////////
//            Lizenz Felder                                     //
//                                                             //
////////////////////////////////////////////////////////////////

  //License KEY
   add_option( 'has_gv_form_license_key_field', 'has_gv_form_license_key_field' );
  //License Mail 
   add_option( 'has_gv_form_license_email_field', 'has_gv_form_license_email_field' );

///////////////////////////////////////////////////////////////////
//            Template Felder                                   //
//                                                             //
////////////////////////////////////////////////////////////////

  //Template
  add_option( 'temp_select_field', 'temp_select_field' );

//////////////////////////////////////////////////////////////////
//            A-Trust Felder                                   //
//                                                            //
/////////////////////////////////////////////////////////////// 

  //A-Trust
  add_option( 'has_gv_form_atrust_serveraddresse', 'has_gv_formatrust_serveraddresse' );   
  add_option( 'has_gv_form_atrust_apikey', 'has_gv_formatrust_apikey' );   
	

//////////////////////////////////////////////////////////////////
//            A-Trust Template Felder                          //
//                                                            //
/////////////////////////////////////////////////////////////// 

//Description Author
add_option( 'has_gv_form1_atrust_Description_author', 'has_gv_formatrust_apikey' );
add_option( 'has_gv_form2_atrust_Description_author', 'has_gv_formatrust_apikey' );  
add_option( 'has_gv_form3_atrust_Description_author', 'has_gv_formatrust_apikey' );  
add_option( 'has_gv_form4_atrust_Description_author', 'has_gv_formatrust_apikey' );  
add_option( 'has_gv_form5_atrust_Description_author', 'has_gv_formatrust_apikey' );  


//Description Author
add_option( 'has_gv_form1_atrust_Description_author', 'has_gv_formatrust_apikey' );
add_option( 'has_gv_form2_atrust_Description_author', 'has_gv_formatrust_apikey' );  
add_option( 'has_gv_form3_atrust_Description_author', 'has_gv_formatrust_apikey' );  
add_option( 'has_gv_form4_atrust_Description_author', 'has_gv_formatrust_apikey' );  
add_option( 'has_gv_form5_atrust_Description_author', 'has_gv_formatrust_apikey' );  
    
   
}