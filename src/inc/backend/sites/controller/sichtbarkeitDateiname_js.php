<?php ?>

<script type="text/javascript" >


                /* ===Dateiname Sichtbarkeit=== */
                function has_gv_formCustomDateinameSichtbarkeitCheckboxIDf()
{  
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formCustomDateinameSichtbarkeitCheckboxID").val();
    if(jQuery("#has_gv_formCustomDateinameSichtbarkeitCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formCustomDateinameSichtbarkeitCheckboxID", 
                                    has_gv_formCustomDateinameSichtbarkeitCheckboxID:name,
                                    'tab' : tab},               
                success: function(data){
                //  location.reload();
                M.toast({html: 'Dateiname erstellen'})
                    },
                });} 



document.addEventListener('DOMContentLoaded', function(event){
//Custom Dateiname Sichtbarkeit
var has_gv_formCustomDateinameSichtbarkeitInputID = document.getElementById("has_gv_formCustomDateinameSichtbarkeitInputID");
var has_gv_formCustomDateinameSichtbarkeitCheckboxID = document.getElementById("has_gv_formCustomDateinameSichtbarkeitCheckboxID");
has_gv_formCustomDateinameSichtbarkeitInputID.style.display = has_gv_formCustomDateinameSichtbarkeitCheckboxID.checked ? "block" : "none";
});

</script>


