<?php ?>

<script type="text/javascript" >


/* ===FTP speichern=== */
function has_gv_formFTP2Connectionf(){
  
   var tab = jQuery("#formular_tab_ID").val();
   var FTP_Connection = jQuery("#has_gv_formFTP2_Connection").val();
   if(jQuery("#has_gv_formFTP2_Connection").is(':checked')){FTP_Connection = "ftp"}else{FTP_Connection = "nicht_ftp"}

  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
    
      data: {
        action: "has_gv_formFTP2Connection",

        'has_gv_formFTP2_Connection':FTP_Connection,
        'tab' : tab

      },
      success: function (data) {
        var json = JSON.stringify(data);
        var myJson = JSON.parse(json);
        console.log(myJson);

            if(myJson.data.FTP_Connection == 'nicht_ftp'){

                M.toast({html: 'FTP Connection CER deaktiviert'})
            }
            else{

                M.toast({html: 'FTP Connection CER aktiviert'})

            }



      },
    });

    }




document.addEventListener('DOMContentLoaded', function(event){

//FTP Sichtbarkeit
jQuery(function () {
    jQuery("#has_gv_formFTP2_Connection").click(function () {
        if (jQuery(this).is(":checked")) {
            jQuery("#sichtbarkeitFTP_cert").show(600);

        } else {
            jQuery("#sichtbarkeitFTP_cert").hide(600);

        }
    });
});



//FTP Export Sichtbarkeit
var sichtbarkeitFTP_cert = document.getElementById("sichtbarkeitFTP_cert");
var has_gv_formFTP2_Connection = document.getElementById("has_gv_formFTP2_Connection");
sichtbarkeitFTP_cert.style.display = has_gv_formFTP2_Connection.checked ? "block" : "none";
});




</script>


