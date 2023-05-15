<?php

$finishUrl =  site_url(). '/finish.php'; 

$errorUrl = get_option( 'has_gv_form2Error' );
$handySignaturParameter = "";
$location = "";
$reason = "";
$pdfFile =  $copy_to_dir . $filename;
$pdfFileResult =   get_option( 'has_gv_form2pdfWP_Download_Gesamtpfad' ) . '/' . $filename . '_signed.pdf';
$certificate =    get_option( 'has_gv_form2ZertifikatsDateiOrdnerSpeicherPfad' ) . '/' . $filename . '_signer.cer';

$filesize = filesize($pdfFile);
$fp = fopen($pdfFile, 'rb');
$binary = fread($fp, $filesize);
fclose($fp);
$b64 = base64_encode($binary);

$tempId = get_option( 'has_gv_form2SiegelTemplatesAuswahlID' );

$x0= 150;
$y0= 150;
$x1= 150;
$y1= 80;


$result = $client->StartSignatureTemplateEx($b64,$pdfFile,$finishUrl,$errorUrl,$handySignaturParameter,$tempId, $location, $reason, $x0, $y0, $x1, $y1, $pdfFile);

$client_finish = file_get_contents( 'wp-content/plugins/HandysignaturAfterSubmitReload/src/inc/signature/connect2/finish.php');
$client_file_finish = 'finish.php';
file_put_contents( $client_file_finish , $client_finish);

$weiterleitung_serialized = serialize(get_option( 'has_gv_form2Erfolg' ));
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

$test = 'ttttext';


echo  
 
'<div class="container-fluid" id="content-container">

<div class="row">

    <div class="content col-12" id="content">

        <div class="modal d-block" tabindex="-1" role="dialog" id="login">

            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

                <div class="modal-content">

                    <div class="modal-body text-center" style="background-color:white;">

                   
                        <!-- Logo -->
                        <div id="logo" style="padding-left:43%">
<img src="https://staging-smartenergyconsulting.kinsta.cloud/wp-content/uploads/2021/07/sec-logo-200px.jpg">

</div>

                        <!-- Überschrift -->
                        <div class="row justify-content-center">
                            <h1 class="h2" style="
                            text-align: center;
                        ">Smartenergy Consulting</h1>
                        </div><!-- /.row -->

                        <iframe src="' .$result["HandySignaturUrl"] . '" width="697" height="434" frameborder="0" scrolling="no" title="Login"></iframe><!-- /#selectionArea -->

                    </div><!-- /.modal-body -->

                </div><!-- /.modal-content -->

            </div><!-- /.modal-dialog -->

        </div><!-- /.modal -->

    </div><!-- /#content -->

</div><!-- /.row -->

</div>';


readline();

