<?php
class MobSigPdfClient {
    public $soap_url;
    public $apikey;
    public $targetNamespace;
    private const SoapBody = "<soap:Envelope xmlns:soap='http://www.w3.org/2003/05/soap-envelope' xmlns:pdf='http://www.a-trust.at/mobile/pdf'><soap:Header><ns2:Action xmlns:ns2='http://www.w3.org/2005/08/addressing'></ns2:Action></soap:Header><soap:Body></soap:Body></soap:Envelope>";

    function __construct() {
        $this->soap_url = 'https://handy-signatur.at/demosignaturbox/intern/HandySignaturPdf.svc';
        $this->apikey = '';
        $this->targetNamespace = 'https://www.a-trust.at/mobile/pdf';
    }

    public function SetApiKey($key) {
        $this->apikey = $key;
    }

    public function SetUrl($url) {
        $this->soap_url = $url;
    }

    public function StartSignatureTemplateEx($DocumentData, $DocumentName, $RedirectURL, $ErrorURL, $HandySignaturParameter, $SigTemplateId, $Location, $Reason, $X0, $Y0, $X1, $Y1) {
        $options = 0;
        $doc = new DOMDocument();
        $doc->loadXML(self::SoapBody,$options);
        $action = $doc->getElementsByTagNameNS("http://www.w3.org/2005/08/addressing","Action")[0];
        $action->textContent ='http://www.a-trust.at/mobile/pdf/IHandySignaturPdf/StartSignatureTemplateEx';

        $body = $doc->getElementsByTagNameNS("http://www.w3.org/2003/05/soap-envelope","Body")[0];
        $actionElement = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','StartSignatureTemplateEx');
        $body->appendChild($actionElement);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','APIKey',$this->apikey);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','DocumentData',$DocumentData);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','DocumentName',$DocumentName);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','RedirectURL',$RedirectURL);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','ErrorURL',$ErrorURL);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','HandySignaturParameter',$HandySignaturParameter);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','SigTemplateId',$SigTemplateId);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','Location',$Location);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','Reason',$Reason);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','X0',$X0);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','Y0',$Y0);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','X1',$X1);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','Y1',$Y1);
        $actionElement->appendChild($p);

        $req = $doc->saveXML();
        $result = $this->SendAndReceive($req);

        $doc = new DOMDocument();
        $doc->loadXML($result,$options);

        $resultCode = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","StartSignatureTemplateExResult")[0]->textContent;
        $ticket = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","Ticket")[0]->textContent;
        $url = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","HandySignaturUrl")[0]->textContent;

        return array('StartSignatureTemplateExResult' => $resultCode,
            'Ticket' => $ticket,
            'HandySignaturUrl' => $url);
    }


    public function EndSignature($Ticket) {
        $options = 0;
        $doc = new DOMDocument();
        $doc->loadXML(self::SoapBody,$options);
        $action = $doc->getElementsByTagNameNS("http://www.w3.org/2005/08/addressing","Action")[0];
        $action->textContent ='http://www.a-trust.at/mobile/pdf/IHandySignaturPdf/EndSignature';

        $body = $doc->getElementsByTagNameNS("http://www.w3.org/2003/05/soap-envelope","Body")[0];
        $actionElement = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','EndSignature');
        $body->appendChild($actionElement);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','APIKey',$this->apikey);
        $actionElement->appendChild($p);

        $p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','Ticket',$Ticket);
        $actionElement->appendChild($p);

        $req = $doc->saveXML();
        $result = $this->SendAndReceive($req);

        $doc = new DOMDocument();
        $doc->loadXML($result,$options);

        //var_dump($result);

        $resultCode = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","EndSignatureResult")[0]->textContent;
        $DocumentName = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","DocumentName")[0]->textContent;
        $DocumentData = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","DocumentData")[0]->textContent;
        $CertificateB64 = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","CertificateB64")[0]->textContent;


        return array('EndSignatureResult' => $resultCode,
            'DocumentName' => $DocumentName,
            'CertificateB64' => $CertificateB64,
            'DocumentData' => $DocumentData);

    }




    public function GetTemplate( $TemplateData) {		
		$options = 0;
		$doc = new DOMDocument();
		$doc->loadXML(self::SoapBody,$options);
		$action = $doc->getElementsByTagNameNS("http://www.w3.org/2005/08/addressing","Action")[0];
		$action->textContent ='http://www.a-trust.at/mobile/pdf/IHandySignaturPdf/GetTemplate';

		$body = $doc->getElementsByTagNameNS("http://www.w3.org/2003/05/soap-envelope","Body")[0];				
		$actionElement = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','GetTemplate');
		$body->appendChild($actionElement);
		
		$p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','APIKey',$this->apikey);
		$actionElement->appendChild($p);
		
		$p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','SigTemplateId', $TemplateData);
		$actionElement->appendChild($p);
       // var_dump($doc);
  
		$req = $doc->saveXML();		
		//var_dump($req);
		$result = $this->SendAndReceive($req);				
		//var_dump($result);
      
		$doc = new DOMDocument();
		$doc->loadXML($result,$options);

		$resultCode = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","GetTemplateResult")[0]->textContent;
       

        $TemplateData = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","TemplateData")[0]->textContent;
       




        return array('GetTemplateResult' => $resultCode,
       
       
        'TemplateData' => $TemplateData);



      
     
		
	}




    public function UploadTemplate($TemplateData) {		
		$options = 0;
		$doc = new DOMDocument();
		$doc->loadXML(self::SoapBody,$options);
		$action = $doc->getElementsByTagNameNS("http://www.w3.org/2005/08/addressing","Action")[0];
		$action->textContent ='http://www.a-trust.at/mobile/pdf/IHandySignaturPdf/UploadTemplate';

		$body = $doc->getElementsByTagNameNS("http://www.w3.org/2003/05/soap-envelope","Body")[0];				
		$actionElement = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','UploadTemplate');
		$body->appendChild($actionElement);
		
		$p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','APIKey',$this->apikey);
		$actionElement->appendChild($p);
		
		$p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','TemplateData', $TemplateData);
		$actionElement->appendChild($p);
				
		$req = $doc->saveXML();		
		//var_dump($req);
		$result = $this->SendAndReceive($req);				
		//var_dump($result);
		
		$doc = new DOMDocument();
		$doc->loadXML($result,$options);
		
		$resultCode = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","UploadTemplateResult")[0]->textContent;
		$tempalteId = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","SigTemplateId")[0]->textContent;
		
		return $tempalteId;	
	}

    public function DeleteTemplate( $TemplateData) {		
		$options = 0;
		$doc = new DOMDocument();
		$doc->loadXML(self::SoapBody,$options);
		$action = $doc->getElementsByTagNameNS("http://www.w3.org/2005/08/addressing","Action")[0];
		$action->textContent ='http://www.a-trust.at/mobile/pdf/IHandySignaturPdf/DeleteTemplate';

		$body = $doc->getElementsByTagNameNS("http://www.w3.org/2003/05/soap-envelope","Body")[0];				
		$actionElement = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','DeleteTemplate');
		$body->appendChild($actionElement);
		
		$p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','APIKey',$this->apikey);
		$actionElement->appendChild($p);
		
		$p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','SigTemplateId', $TemplateData);
		$actionElement->appendChild($p);
       // var_dump($doc);
  
		$req = $doc->saveXML();		
		//var_dump($req);
		$result = $this->SendAndReceive($req);				
		//var_dump($result);
      
		$doc = new DOMDocument();
		$doc->loadXML($result,$options);

		$resultCode = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","DeleteTemplateResult")[0]->textContent;
       

         var_dump($resultCode);
     //   var_dump($tempalteId);
		$tempalteId = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","SigTemplateId")[0]->textContent;
     
		return $tempalteId;	
	}




   
    public function ListTemplate($TemplateData) {		
		$options = 0;
		$doc = new DOMDocument();
		$doc->loadXML(self::SoapBody,$options);
		$action = $doc->getElementsByTagNameNS("http://www.w3.org/2005/08/addressing","Action")[0];
		$action->textContent ='http://www.a-trust.at/mobile/pdf/IHandySignaturPdf/ListTemplate';

		$body = $doc->getElementsByTagNameNS("http://www.w3.org/2003/05/soap-envelope","Body")[0];				
		$actionElement = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','ListTemplate');
		$body->appendChild($actionElement);
		
		$p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','APIKey',$this->apikey);
		$actionElement->appendChild($p);
		
		$p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','TemplateData', $TemplateData);
		$actionElement->appendChild($p);
				
		$req = $doc->saveXML();		
		//var_dump($req);
		$result = $this->SendAndReceive($req);				
		//var_dump($result);
		
		$doc = new DOMDocument();
		$doc->loadXML($result,$options);
		
		$resultCode = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","ListTemplateResult")[0]->textContent;
		$tempalteId = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","list")[0]->textContent;
		
		return $tempalteId;	
	}



    public function ReplaceTemplate($TemplateData) {		
		$options = 0;
		$doc = new DOMDocument();
		$doc->loadXML(self::SoapBody,$options);
		$action = $doc->getElementsByTagNameNS("http://www.w3.org/2005/08/addressing","Action")[0];
		$action->textContent ='http://www.a-trust.at/mobile/pdf/IHandySignaturPdf/ReplaceTemplate';

		$body = $doc->getElementsByTagNameNS("http://www.w3.org/2003/05/soap-envelope","Body")[0];				
		$actionElement = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','ReplaceTemplate');
		$body->appendChild($actionElement);
		
		$p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','APIKey',$this->apikey);
		$actionElement->appendChild($p);
		
		$p = $doc->createElementNS('http://www.a-trust.at/mobile/pdf','TemplateData', $TemplateData);
		$actionElement->appendChild($p);
				
		$req = $doc->saveXML();		
		//var_dump($req);
		$result = $this->SendAndReceive($req);				
		//var_dump($result);
		
		$doc = new DOMDocument();
		$doc->loadXML($result,$options);
		
		$resultCode = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","ReplaceTemplateResult")[0]->textContent;
		$tempalteId = $doc->getElementsByTagNameNS("http://www.a-trust.at/mobile/pdf","SigTemplate-Id")[0]->textContent;
		
		return $tempalteId;	
	}

    private function SendAndReceive($req) {
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/soap+xml;charset=UTF-8\r\n",
                'method'  => 'POST',
                'content' => $req,
            ),
        );


        $context  = stream_context_create($options);
        $result = file_get_contents($this->soap_url, false, $context);
        return $result;
    }
}


