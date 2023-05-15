<?php ?>

<script type="text/javascript" >


function has_gv_formAtrustSpeichernf()
{  
  var tab = jQuery("#formular_tab_ID").val();
   var atrust_server = jQuery("#has_gv_form_atrust_serveraddresse").val();
   var atrust_key = jQuery("#has_gv_form_atrust_apikey").val();



// alert(atrust_server);



  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
    
      data: {
        action: "has_gv_formAtrustSpeichern",

        'has_gv_form_atrust_serveraddresse':atrust_server,
        'has_gv_form_atrust_apikey':atrust_key,
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
        M.toast({html: 'Atrust gespeichert'})
      },
    });

    } 




</script>


