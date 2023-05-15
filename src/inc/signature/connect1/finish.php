<?php
include 'wp-content/plugins/HandysignaturAfterSubmitReload/src/inc/signature/client.php';


$weiterleitung_serialized = file_get_contents( 'weiterleitung');
$weiterleitung = unserialize($weiterleitung_serialized);

$client_serialized  = file_get_contents('client');
$client = unserialize($client_serialized);

$result_serialized  = file_get_contents('result');
$result = unserialize($result_serialized);

$certificate_serialized  = file_get_contents('certificate');
$certificate = unserialize($certificate_serialized);

$pdfFileResult_serialized  = file_get_contents('pdfFileResult');
$pdfFileResult = unserialize($pdfFileResult_serialized);



$FTP_serveradresse_serialized  = file_get_contents('FTP_Server');
$FTP_Server_file = unserialize($FTP_serveradresse_serialized);

$FTP_benutzer_serialized  = file_get_contents('Server_User');
$Server_User_file = unserialize($FTP_benutzer_serialized);

$FTP_passwort_serialized  = file_get_contents('Server_Passwort');
$Server_Passwort_file = unserialize($FTP_passwort_serialized);

$FTP_port_serialized  = file_get_contents('Server_Port');
$Server_Port_file = unserialize($FTP_port_serialized);

$FTP_Connection_serialized  = file_get_contents('FTP_Conection');
$FTP_Conection_file = unserialize($FTP_Connection_serialized);

$FTP_Folder_serialized  = file_get_contents('FTP_Folder');
$FTP_Folder_file = unserialize($FTP_Folder_serialized);



//

$FTP2_serveradresse_serialized  = file_get_contents('FTP2_Server');
$FTP2_Server_file = unserialize($FTP2_serveradresse_serialized);

$FTP2_benutzer_serialized  = file_get_contents('Server2_User');
$Server2_User_file = unserialize($FTP2_benutzer_serialized);

$FTP2_passwort_serialized  = file_get_contents('Server2_Passwort');
$Server2_Passwort_file = unserialize($FTP2_passwort_serialized);

$FTP2_port_serialized  = file_get_contents('Server2_Port');
$Server2_Port_file = unserialize($FTP2_port_serialized);

$FTP2_Connection_serialized  = file_get_contents('FTP2_Conection');
$FTP2_Conection_file = unserialize($FTP2_Connection_serialized);

$FTP2_Folder_serialized  = file_get_contents('FTP2_Folder');
$FTP2_Folder_file = unserialize($FTP2_Folder_serialized);





$result = $client->EndSignature($result["Ticket"]);

$t = base64_decode($result["CertificateB64"]);
$fp = fopen($certificate, 'wb');
fwrite($fp,$t);
fclose($fp);

$t = base64_decode($result["DocumentData"]);
$fp = fopen($pdfFileResult, 'wb');
fwrite($fp,$t);
fclose($fp);


echo '<script type="text/javascript">window.parent.location.href ="'. $weiterleitung .'"</script>';

if($FTP_Conection_file == 'ftp'){
	$ftp_conn = ftp_connect($FTP_Server_file, $Server_Port_file) or die("Could not connect to $FTP_Server_file");
	$login = ftp_login($ftp_conn, $Server_User_file, $Server_Passwort_file);
	ftp_put($ftp_conn, preg_replace('/\s+/', '',  dirname($FTP_Folder_file,1).PHP_EOL).'/'.preg_replace('/\s+/', '',  basename($pdfFileResult))  , $pdfFileResult, FTP_BINARY);
	ftp_close($ftp_conn);
}

if($FTP2_Conection_file == 'ftp'){
	$ftp_conn = ftp_connect($FTP2_Server_file, $Server2_Port_file) or die("Could not connect to $FTP2_Server_file");
	$login = ftp_login($ftp_conn, $Server2_User_file, $Server2_Passwort_file);
	ftp_put($ftp_conn, preg_replace('/\s+/', '',  dirname($FTP2_Folder_file,1).PHP_EOL).'/'.preg_replace('/\s+/', '',  basename($certificate)), $certificate, FTP_BINARY);
	ftp_close($ftp_conn);
}

unlink('client');
unlink('result');
unlink('certificate');
unlink('pdfFileResult');
unlink('weiterleitung');

unlink('FTP_Server');
unlink('Server_User');
unlink('Server_Passwort');
unlink('FTP_Conection');
unlink('FTP_Folder');
unlink('Server_Port');

unlink('FTP2_Server');
unlink('Server2_User');
unlink('Server2_Passwort');
unlink('FTP2_Conection');
unlink('FTP2_Folder');
unlink('Server2_Port');


unlink(__FILE__);
exit ();
