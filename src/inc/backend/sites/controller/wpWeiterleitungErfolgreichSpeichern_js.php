<?php ?>

<script type="text/javascript" >

/* ===Weiterleitungspfad WP Erfolgreich=== */
function has_gv_formWP_Weiterleitung_Erfolgf()
{  
  var tab = jQuery("#formular_tab_ID").val();
    
   // alert('hallo welt'); 
   var wp_pfad = jQuery("#has_gv_formErfolg").val();
   
  // var beschreibung = jQuery("#has_gv_form1SiegelTemplatesDescription").val();
   

  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: {
        action: "has_gv_formWP_Weiterleitung_Erfolg",
      
        has_gv_formErfolg: wp_pfad,
        'tab' : tab
      },
      success: function (data) {
        var json = JSON.stringify(data);
        console.log(data);
        var myJson = JSON.parse(json);

         document.getElementById("has_gv_formWP_Weiterleitung_Erfolg_Vorschau").innerHTML = myJson.data.wp_pfad;


        M.toast({
          html: 'WP Weiterleitung Erfolg gespeichert'
        })
      },
    });

    } 


</script>


