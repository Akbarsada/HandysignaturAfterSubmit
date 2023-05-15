<?php ?>

<script type="text/javascript" >
/* ===Signaturart sichtbarkeit=== */
function has_gv_formSichtbarkeitSignaturArtCheckboxIDf()
{   
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formSichtbarkeitSignaturArtCheckboxID").val();
    if(jQuery("#has_gv_formSichtbarkeitSignaturArtCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formSichtbarkeitSignaturArtCheckboxID", 
                    has_gv_formSichtbarkeitSignaturArtCheckboxID:name,
                    'tab' : tab},               
                success: function(data){
                //  location.reload();
                M.toast({html: 'Signaturart ausgewählt'})
                    },
                });
            
            

            
            
            }	


            document.addEventListener('DOMContentLoaded', function(event){




                /* ===Sichtbarkeit Signaturart=== */

//Signaturart
jQuery(function () {
  jQuery("#has_gv_formSichtbarkeitSignaturArtCheckboxID").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#sichtbarkeitSignaturArt").show(600);

    } else {
      jQuery("#sichtbarkeitSignaturArt").hide(600);

    }
  });
});

     //Signaturart Sichtbarkeit
var sichtbarkeitSignaturArt = document.getElementById("sichtbarkeitSignaturArt");
var has_gv_formSichtbarkeitSignaturArtCheckboxID = document.getElementById("has_gv_formSichtbarkeitSignaturArtCheckboxID");
sichtbarkeitSignaturArt.style.display = has_gv_formSichtbarkeitSignaturArtCheckboxID.checked ? "block" : "none";  
});





</script>

