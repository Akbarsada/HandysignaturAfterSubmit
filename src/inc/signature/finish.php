<?php


include 'wp-content/plugins/HandysignaturAfterSubmitReload/src/inc/signature/client.php';

$result_serialized2  = file_get_contents('result');
$result2 = unserialize($result_serialized2);

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


unlink('client');
unlink('result');
unlink('certificate');
unlink('pdfFileResult');
unlink('weiterleitung');
unlink(__FILE__);
exit ();
