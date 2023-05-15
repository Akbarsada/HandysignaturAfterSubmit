<?php ?>

<script type="text/javascript" >


/* ===FTP speichern=== */
function has_gv_formFTPConnectionf(){
  
   var tab = jQuery("#formular_tab_ID").val();
   var FTP_Connection = jQuery("#has_gv_formFTP_Connection").val();
   if(jQuery("#has_gv_formFTP_Connection").is(':checked')){FTP_Connection = "ftp"}else{FTP_Connection = "nicht_ftp"}

  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
    
      data: {
        action: "has_gv_formFTPConnection",

        'has_gv_formFTP_Connection':FTP_Connection,
        'tab' : tab

      },
      success: function (data) {
        var json = JSON.stringify(data);
        var myJson = JSON.parse(json);
        console.log(myJson);

            if(myJson.data.FTP_Connection == 'nicht_ftp'){

                M.toast({html: 'FTP Connection deaktiviert'})
            }
            else{
               
                M.toast({html: 'FTP Connection aktiviert'})

            }



      },
    });

    }








document.addEventListener('DOMContentLoaded', function(event){




    //FTP Sichtbarkeit
    jQuery(function () {
        jQuery("#has_gv_formFTP_Connection").click(function () {
            if (jQuery(this).is(":checked")) {
                jQuery("#sichtbarkeitFTP_doc").show(600);

            } else {
                jQuery("#sichtbarkeitFTP_doc").hide(600);

            }
        });
    });



//FTP Export Sichtbarkeit
    var sichtbarkeitFTP_doc = document.getElementById("sichtbarkeitFTP_doc");
    var has_gv_formFTP_Connection = document.getElementById("has_gv_formFTP_Connection");
    sichtbarkeitFTP_doc.style.display = has_gv_formFTP_Connection.checked ? "block" : "none";
});







</script>


