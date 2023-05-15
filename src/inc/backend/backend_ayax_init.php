<?php
   /*////////////////////////////////////////////////////////////////
  //       HAS AJAX REQUESTs JAVASCRIPT  FUNCTIONs                //
 //                                                              //
////////////////////////////////////////////////////////////////*/

//add_action( 'admin_footer', 'my_action_javascript' ); 
function my_action_javascript() { ?>

   <?php  include 'sites/controller/ftpConnection_js.php'; ?>
  <?php  include 'sites/controller/ftpConnection2_js.php'; ?>
  <?php  include 'sites/controller/siegelTemp_loschen_js.php'; ?>
  <?php  include 'sites/controller/atrustSpeichern_js.php'; ?>
  <?php  include 'sites/controller/dateiNameSpeichern_js.php'; ?>
  <?php  include 'sites/controller/formAuswahl_js.php'; ?>
  <?php  include 'sites/controller/ftpSpeichern_js.php'; ?>
  <?php  include 'sites/controller/ftpSpeichern2_js.php'; ?>
  <?php  include 'sites/controller/metaDatenSpeichern_js.php'; ?>
  <?php  include 'sites/controller/pdfVorlageSpeichern_js.php'; ?>
  <?php  include 'sites/controller/sichtbarkeitDateiname_js.php'; ?>
  <?php  include 'sites/controller/sichtbarkeitFormularAuswahl_js.php'; ?>
  <?php  include 'sites/controller/sichtbarkeitAtrust_Login_js.php'; ?>

  <?php  include 'sites/controller/sichtbarkeitPDF_Template_js.php'; ?>
  <?php  include 'sites/controller/sichtbarkeitSiegel_Collaps_Grund_js.php'; ?>
  <?php  include 'sites/controller/sichtbarkeitSiegel_Collaps_Ort_js.php'; ?>
  <?php  include 'sites/controller/sichtbarkeitSiegel_Collaps_Siegel_js.php'; ?>
  <?php  include 'sites/controller/sichtbarkeitSiegel_Collaps_Signator_js.php'; ?>
  <?php  include 'sites/controller/sichtbarkeitSiegel_Collaps_Zeitstempel_js.php'; ?>

  <?php  include 'sites/controller/sichtbarkeitSignaturart_js.php'; ?>
  <?php  include 'sites/controller/sichtbarkeitSignaturSiegel_js.php'; ?>
  <?php  include 'sites/controller/sichtbarkeitWordpressSpeicherpfad_js.php'; ?>
  <?php  include 'sites/controller/sichtbarkeitWordpressWeiterleitung_js.php'; ?>
  <?php  include 'sites/controller/sichtbarkeitZertifikatsdatei_js.php'; ?>
  <?php  include 'sites/controller/siegelNeu_js.php'; ?>
  <?php  include 'sites/controller/siegelSpeichern_js.php'; ?>
  <?php  include 'sites/controller/signaturArtDropDown_js.php'; ?>
  <?php  include 'sites/controller/wpDownloadPfadSpeichern_js.php'; ?>

  <?php  include 'sites/controller/wpWeiterleitungErfolgreichSpeichern_js.php'; ?>
  <?php  include 'sites/controller/wpWeiterleitungErrorSpeichern_js.php'; ?>
  <?php  include 'sites/controller/zertifikatsPfadSpeichern_js.php'; ?>

  <?php  include 'sites/controller/siegelAuswahl_js.php'; ?>
  <?php  include 'sites/controller/textfeldSignator_js.php'; ?>
  <?php  include 'sites/controller/textfeldOrt_js.php'; ?>
  <?php  include 'sites/controller/textfeldZeitstempel_js.php'; ?>
  <?php  include 'sites/controller/textfeldGrund_js.php'; ?>
  <?php  include 'sites/controller/siegelTempErstellen_js.php'; ?>
  <?php  include 'sites/controller/atrustLogin_js.php'; ?>




  <?php

 }

   /*////////////////////////////////////////////////////////////////
  //              HAS AJAX REQUESTs PHP FUNCTIONs                 //
 //                                                              //
////////////////////////////////////////////////////////////////*/

include 'sites/controller/ftpConnection_cb.php';
include 'sites/controller/ftpConnection2_cb.php';
include 'sites/controller/siegelTemp_loschen_cb.php';
  include('sites/controller/atrustSpeichern_cb.php');
 include('sites/controller/dateiNameSpeichern_cb.php');
 include('sites/controller/formAuswahl_cb.php');
include('sites/controller/ftpSpeichern_cb.php');
include('sites/controller/ftpSpeichern2_cb.php');
 include('sites/controller/metaDatenSpeichern_cb.php');
 include('sites/controller/pdfVorlageSpeichern_cb.php');
 include('sites/controller/sichtbarkeitDateiname_cb.php');
  include('sites/controller/sichtbarkeitFormularAuswahl_cb.php');

include('sites/controller/sichtbarkeitAtrust_Login_cb.php');
  include('sites/controller/sichtbarkeitPDF_Template_cb.php');
 include('sites/controller/sichtbarkeitSiegel_Collaps_Grund_cb.php');
  include('sites/controller/sichtbarkeitSiegel_Collaps_Ort_cb.php');
  include('sites/controller/sichtbarkeitSiegel_Collaps_Siegel_cb.php');
 include('sites/controller/sichtbarkeitSiegel_Collaps_Signator_cb.php');
 include('sites/controller/sichtbarkeitSiegel_Collaps_Zeitstempel_cb.php');

  include('sites/controller/sichtbarkeitSignaturart_cb.php');
  include('sites/controller/sichtbarkeitSignaturSiegel_cb.php');
 include('sites/controller/sichtbarkeitWordpressSpeicherpfad_cb.php');
  include('sites/controller/sichtbarkeitWordpressWeiterleitung_cb.php');
 include('sites/controller/sichtbarkeitZertifikatsdatei_cb.php');
  include('sites/controller/siegelNeu_cb.php');
 include('sites/controller/siegelSpeichern_cb.php');
  include('sites/controller/signaturArtDropDown_cb.php');
 include('sites/controller/wpDownloadPfadSpeichern_cb.php');

 include('sites/controller/wpWeiterleitungErfolgreichSpeichern_cb.php');
  include('sites/controller/wpWeiterleitungErrorSpeichern_cb.php');
  include('sites/controller/zertifikatsPfadSpeichern_cb.php');

  include('sites/controller/siegelAuswahl_cb.php');
  include('sites/controller/textfeldSignator_cb.php');
  include('sites/controller/textfeldOrt_cb.php');
  include('sites/controller/textfeldGrund_cb.php');
  include('sites/controller/textfeldZeitstempel_cb.php');
  include ('sites/controller/siegelTempErstellen_cb.php');
include ('sites/controller/atrustLogin_cb.php');

