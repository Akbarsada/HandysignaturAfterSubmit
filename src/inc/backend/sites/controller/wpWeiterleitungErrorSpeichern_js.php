<?php ?>

<script type="text/javascript" >


/* ===Weiterleitungspfad WP Error=== */
function has_gv_formWP_Weiterleitung_Errorf()
{  
    
  var tab = jQuery("#formular_tab_ID").val();
   // alert('hallo welt'); 
   var wp_pfad = jQuery("#has_gv_formError").val();
   
  // var beschreibung = jQuery("#has_gv_form1SiegelTemplatesDescription").val();
   

  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: {
        action: "has_gv_formWP_Weiterleitung_Error",
      
        has_gv_formError: wp_pfad,
        'tab' : tab
      },
      success: function (data) {
        var json = JSON.stringify(data);
        console.log(data);
        var myJson = JSON.parse(json);

         document.getElementById("has_gv_formWP_Weiterleitung_Error_Vorschau").innerHTML = myJson.data.wp_pfad;


        M.toast({
          html: 'WP Weiterleitung Error gespeichert'
        })
      },
    });

    } 



</script>


