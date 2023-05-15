<?php ?>

<script type="text/javascript" >


/* ===Pfade Zertifikat Speichern=== */
function has_gv_formZertifikatsPfadSpeichernf()
{  
    
  var tab = jQuery("#formular_tab_ID").val();
   // alert('hallo welt'); 
   var wp_pfad = jQuery("#has_gv_formZertifikatsDateiWPspeicherPfad").val();
   var ordner_pfad = jQuery("#has_gv_formZertifikatsDateiOrdnerSpeicherPfad").val();
  // var beschreibung = jQuery("#has_gv_form1SiegelTemplatesDescription").val();
   

  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: {
        action: "has_gv_formZertifikatsPfadSpeichern",
        has_gv_formZertifikatsDateiOrdnerSpeicherPfad: ordner_pfad,
        has_gv_formZertifikatsDateiWPspeicherPfad: wp_pfad,
        'tab' : tab
      },
      success: function (data) {
        var json = JSON.stringify(data);
        console.log(data);
        var myJson = JSON.parse(json);
        //Zertifikat Speicherpfade
       // document.getElementById("has_gv_formZertifikatsDateiWPspeicherPfad").value = myJson.data.wp_pfad;
       // document.getElementById("has_gv_formZertifikatsDateiOrdnerSpeicherPfad").value = myJson.data.ordner_pfad;
        document.getElementById("has_gv_formZertifikatsDateiGesamtSpeicherPfad").innerHTML = myJson.data.wp_pfad + '/' + myJson.data.ordner_pfad;


        M.toast({
          html: 'Zertifikats Pfad gespeichert'
        })
      },
    });

    } 



</script>


