<?php

$finishUrl =  site_url(). '/finish.php';

$errorUrl = get_option( 'has_gv_form1Error' );
$handySignaturParameter = "";
$location = "";
$reason = "";
$pdfFile =  $copy_to_dir . $has_filename;

$filesize = filesize($pdfFile);
$fp = fopen($pdfFile, 'rb');
$binary = fread($fp, $filesize);
fclose($fp);
$b64 = base64_encode($binary);

$tempId = get_option( 'has_gv_form1SiegelTemplatesAuswahlID' );

$x0= 150;
$y0= 150;
$x1= 150;
$y1= 80;


$result = $client->StartSignatureTemplateEx($b64,$pdfFile,$finishUrl,$errorUrl,$handySignaturParameter,$tempId, $location, $reason, $x0, $y0, $x1, $y1, $pdfFile);

$pdfFileResult =   get_option( 'has_gv_form1pdfWP_Download_Gesamtpfad' ) . '/' . $has_filename ;
$has_filename = substr($has_filename, 0, -4);
$certificate =    get_option( 'has_gv_form1ZertifikatsDateiGesamtSpeicherPfad' ) . '/' . $has_filename . '.cer';

$folder = get_option( 'has_gv_form1pdfFTP_Folder' ) . '/' . $has_filename ;
$folder2 = get_option( 'has_gv_form1pdfFTP2_Folder' ) . '/' . $has_filename ;

$client_finish = file_get_contents( 'wp-content/plugins/HandysignaturAfterSubmitReload/src/inc/signature/connect1/finish.php');
$client_file_finish = 'finish.php';
file_put_contents( $client_file_finish , $client_finish);

$weiterleitung_serialized = serialize(get_option( 'has_gv_form1Erfolg' ));
$weiterleitung_file =  'weiterleitung';
file_put_contents( $weiterleitung_file , $weiterleitung_serialized);

$client_serialized = serialize($client);
$client_file =  'client';
file_put_contents( $client_file , $client_serialized);

$result_serialized = serialize($result);
$result_file =   'result';
file_put_contents($result_file , $result_serialized);

$certificate_serialized = serialize($certificate);
$certificate_file =  'certificate';
file_put_contents($certificate_file, $certificate_serialized);

$pdfFileResult_serialized = serialize($pdfFileResult);
$pdfFileResult_file =   'pdfFileResult';
file_put_contents($pdfFileResult_file, $pdfFileResult_serialized);

//

$FTP_serveradresse_serialized = serialize(get_option(  'has_gv_form1pdfFTP_Server' ));
$FTP_Server =  'FTP_Server';
file_put_contents( $FTP_Server , $FTP_serveradresse_serialized);

$FTP_benutzer_serialized = serialize(get_option( 'has_gv_form1pdfFTP_Server_User' ));
$Server_User =  'Server_User';
file_put_contents( $Server_User , $FTP_benutzer_serialized);

$FTP_passwort_serialized = serialize(get_option( 'has_gv_form1pdfFTP_Server_Passwort' ));
$Server_Passwort =  'Server_Passwort';
file_put_contents( $Server_Passwort , $FTP_passwort_serialized);

$FTP_port_serialized = serialize(get_option( 'has_gv_form1pdfFTP_Server_Port' ));
$Server_Port =  'Server_Port';
file_put_contents( $Server_Port , $FTP_port_serialized);

$FTP_Connection_serialized = serialize(get_option( 'has_gv_form1pdfFTP_Conection' ));
$FTP_Conection =  'FTP_Conection';
file_put_contents( $FTP_Conection , $FTP_Connection_serialized);

$FTP_Folder_serialized =serialize( $folder);
$FTP_Folder =  'FTP_Folder';
file_put_contents( $FTP_Folder , $FTP_Folder_serialized);

//

$FTP2_serveradresse_serialized = serialize(get_option(  'has_gv_form1pdfFTP2_Server' ));
$FTP2_Server =  'FTP2_Server';
file_put_contents( $FTP2_Server , $FTP2_serveradresse_serialized);

$FTP2_benutzer_serialized = serialize(get_option( 'has_gv_form1pdfFTP2_Server_User' ));
$Server2_User =  'Server2_User';
file_put_contents( $Server2_User , $FTP2_benutzer_serialized);

$FTP2_passwort_serialized = serialize(get_option( 'has_gv_form1pdfFTP2_Server_Passwort' ));
$Server2_Passwort =  'Server2_Passwort';
file_put_contents( $Server2_Passwort , $FTP2_passwort_serialized);

$FTP2_port_serialized = serialize(get_option( 'has_gv_form1pdfFTP2_Server_Port' ));
$Server2_Port =  'Server2_Port';
file_put_contents( $Server2_Port , $FTP2_port_serialized);

$FTP2_Connection_serialized = serialize(get_option( 'has_gv_form1pdfFTP2_Conection' ));
$FTP2_Conection =  'FTP2_Conection';
file_put_contents( $FTP2_Conection , $FTP2_Connection_serialized);

$FTP2_Folder_serialized = serialize($folder2);
$FTP2_Folder =  'FTP2_Folder';
file_put_contents( $FTP2_Folder , $FTP2_Folder_serialized);

echo

	'

<div style="
position:fixed; 
top:0; left:0; bottom:0; right:0; 
width:100%; height:100%; 
border:none; 
margin:0; padding:0; 
overflow:hidden; 
z-index:999999; 
background-color: '.get_option( 'has_gv_form1_atrust_CustomColor' ).';">
 
<div style=" 
  margin: auto;
  width: 60%;
  padding: 10px;" >
 
 <div style=" 
  margin: auto;
  width: 60%;
  padding: 10px;"> 
  <img
   style=" 
  margin-left: auto;
  margin-right: auto;
  display: block;"
    src="'.get_option( 'has_gv_form1_atrust_CustomLogo' ).'">
  </div>
  
  
     <div style=" 
  margin: auto;
  width: 60%;
  padding: 10px;"> 
  <h1 style="text-align: center;">'.get_option( 'has_gv_form1_atrust_CustomText' ).'</h1>
  </div>
  
  
  
  
   <div style=" 
  margin: auto;
  width: 60%;
  padding: 10px;"> 
  <iframe style=" 
  margin: auto;
  padding: 10px;"  src="' .$result["HandySignaturUrl"] . '" width="697" height="434" frameborder="0" scrolling="no" title="Login" allowfullscreen="allowfullscreen" webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
  </div>
  
</div>   
  
  
 </div>
  
  ';


