<?php ?>

<script type="text/javascript" >

/* ===Speicherpfad WP Download Speichern=== */
function has_gv_formSpeicherPfadWPDownloadSpeichernf()
{  
  var tab = jQuery("#formular_tab_ID").val();
    
   // alert('hallo welt'); 
   var wp_pfad = jQuery("#has_gv_formpdfWP_Download").val();
   var ordner_pfad = jQuery("#has_gv_formpdfDownload").val();
  // var beschreibung = jQuery("#has_gv_formSiegelTemplatesDescription").val();
   

  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: {
        action: "has_gv_formSpeicherPfadWPDownloadSpeichern",
        has_gv_formpdfDownload: ordner_pfad,
        has_gv_formpdfWP_Download: wp_pfad,
        'tab' : tab
      },
      success: function (data) {
        var json = JSON.stringify(data);
        //console.log(data);
        var myJson = JSON.parse(json);
        //Zertifikat Speicherpfade
        // document.getElementById("has_gv_formZertifikatsDateiWPspeicherPfad").value = myJson.data.wp_pfad;
        // document.getElementById("has_gv_formZertifikatsDateiOrdnerSpeicherPfad").value = myJson.data.ordner_pfad;
         document.getElementById("has_gv_formpdfWP_Download_Gesamtpfad").innerHTML = myJson.data.wp_pfad + '/' + myJson.data.ordner_pfad;


        M.toast({
          html: 'WP Downloadpfad gespeichert'
        })
      },
    });

    } 



</script>


