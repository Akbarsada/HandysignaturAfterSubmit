<?php
$client = new MobSigPdfClient();
$client->SetUrl(get_option( 'has_gv_form_atrust_serveraddresse' ));
$client->SetApiKey(get_option( 'has_gv_form_atrust_apikey' ));