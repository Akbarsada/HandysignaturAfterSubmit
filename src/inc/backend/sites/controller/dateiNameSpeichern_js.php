<?php ?>

<script type="text/javascript" >

/* ===Dateiname=== */
function has_gv_formDateiNamenSpeichernf()
{  
  var tab = jQuery("#formular_tab_ID").val();
   var preffix_UID = jQuery("#has_gv_form_select_preffix_UID").val();
   var suffix_UID = jQuery("#has_gv_form_select_suffix_UID").val();
   var preffix1 = jQuery("#has_gv_form_preffix1").val();
   var preffix2 = jQuery("#has_gv_form_preffix2").val();
   var suffix1 = jQuery("#has_gv_form_suffix1").val();
   var suffix2 = jQuery("#has_gv_form_suffix2").val();
   var PDF_filename = jQuery("#has_gv_form_PDF_filename").val();

   let suffix_UID_result;
switch (suffix_UID) {
  case 'suffix_UID4':
    suffix_UID_result = Math.floor(Math.random() * 9999);
    break;
  case 'suffix_UID6':
    suffix_UID_result = Math.floor(Math.random() * 999999);
    break;
  case 'suffix_UID8':
    suffix_UID_result = Math.floor(Math.random() * 99999999);
    break;
}
   
   let preffix_UID_result;
   switch (preffix_UID) {
  case 'preffix_UID4':
    preffix_UID_result = Math.floor(Math.random() * 9999);
    break;
  case 'preffix_UID6':
    preffix_UID_result = Math.floor(Math.random() * 999999);
    break;
  case 'preffix_UID8':
    preffix_UID_result = Math.floor(Math.random() * 99999999);
    break;
}

 



  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
    // datatype: 'json'
      data: {
        action: "has_gv_formDateiNamenSpeichern",

        'has_gv_form_select_preffix_UID_Auswahl':preffix_UID,
        'has_gv_form_select_suffix_UID_Auswahl':suffix_UID,
        'has_gv_form_select_preffix_UID':preffix_UID_result,
        'has_gv_form_select_suffix_UID':suffix_UID_result,
        'preffix1':preffix1,
        'preffix2':preffix2,
        'suffix1':suffix1,
        'suffix2':suffix2,
        'PDF_filename':PDF_filename,
        'tab' : tab
      },
      success: function (data) {
        var json = JSON.stringify(data);
       // console.log(data);
        var myJson = JSON.parse(json);
        //Zertifikat Speicherpfade
        document.getElementById("has_gv_form_PDF_filename").innerHTML = myJson.data.DateiNameVorschau;
        // document.getElementById("has_gv_form1ZertifikatsDateiOrdnerSpeicherPfad").value = myJson.data.ordner_pfad;
        // document.getElementById("has_gv_form1ZertifikatsDateiGesamtSpeicherPfad").innerHTML = myJson.data.gesamt_pfad;
        console.log(json);
            console.log(myJson);
        M.toast({html: 'Zertifikats Pfad gespeichert'})
      },
    });

    } 


</script>


