<?php
include 'client.php';


$weiterleitung_serialized = file_get_contents( 'entrys/weiterleitung' );
$weiterleitung = unserialize($weiterleitung_serialized);


$client_serialized  = file_get_contents('entrys/client');
$client = unserialize($client_serialized);

$result_serialized  = file_get_contents('entrys/result');
$result = unserialize($result_serialized);

$certificate_serialized  = file_get_contents('entrys/certificate');
$certificate = unserialize($certificate_serialized);

$pdfFileResult_serialized  = file_get_contents('entrys/pdfFileResult');
$pdfFileResult = unserialize($pdfFileResult_serialized);

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

exit ();
