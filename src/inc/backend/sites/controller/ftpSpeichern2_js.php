<?php ?>

<script type="text/javascript" >


/* ===FTP speichern=== */
function has_gv_formFTP2Speichernf(){
  
  var tab = jQuery("#formular_tab_ID").val();



   
  var FTP_serveradresse = jQuery("#has_gv_formpdfFTP2_Server").val();
   var FTP_benutzer = jQuery("#has_gv_formpdfFTP2_Server_User2").val();
   var FTP_passwort = jQuery("#has_gv_formpdfFTP2_Server_Passwort2").val();
   var FTP_port = jQuery("#has_gv_formpdfFTP2_Server_Port2").val();
   var FTP_Connection = jQuery("#has_gv_formFTP2_Connection").val();
    var FTP_Folder = jQuery("#has_gv_formpdfFTP2_Folder").val();
   if(jQuery("#has_gv_formFTP2_Connection").is(':checked')){FTP_Connection = "ftp"}else{FTP_Connection = "nicht_ftp"}


// console.log(FTP_Connection);



  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
    
      data: {
        action: "has_gv_formFTP2Speichern",
          'has_gv_formpdfFTP2_Folder':FTP_Folder,
        'has_gv_formpdfFTP2_Server':FTP_serveradresse,
        'has_gv_formpdfFTP2_Server_User':FTP_benutzer,
        'has_gv_formpdfFTP2_Server_Passwort':FTP_passwort,
        'has_gv_formpdfFTP2_Server_Port':FTP_port,
        'has_gv_formFTP2_Connection':FTP_Connection,
        'tab' : tab

      },
      success: function (data) {
        var json = JSON.stringify(data);
       // console.log(data);
        var myJson = JSON.parse(json);
        //Zertifikat Speicherpfade
       // document.getElementById("has_gv_form1_PDF_filename").innerHTML = myJson.data.DateiNameVorschau;
        // document.getElementById("has_gv_form1ZertifikatsDateiOrdnerSpeicherPfad").value = myJson.data.ordner_pfad;
        // document.getElementById("has_gv_form1ZertifikatsDateiGesamtSpeicherPfad").innerHTML = myJson.data.gesamt_pfad;
        console.log(json);
            console.log(myJson);
        M.toast({html: 'FTP CER gespeichert'})
      },
    });

    } 





</script>


