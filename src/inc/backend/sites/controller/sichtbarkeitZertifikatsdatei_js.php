<?php ?>

<script type="text/javascript" >
                /* ===ZertifikatDatei sichtbarkeit=== */
                function has_gv_formZertifikatsDateiJaNeinCheckboxIDf()
{  
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formZertifikatsDateiJaNeinCheckboxID").val();
    if(jQuery("#has_gv_formZertifikatsDateiJaNeinCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formZertifikatsDateiJaNeinCheckboxID", 
                    has_gv_formZertifikatsDateiJaNeinCheckboxID:name,
                    'tab' : tab},               
                success: function(data){
                //  location.reload();
                M.toast({html: 'Zertifikatsdatei erstellen'})
                    },
                });} 




document.addEventListener('DOMContentLoaded', function(event){
//Zertifikats Datei Sichtbarkeit
var has_gv_formZertifikatsDateiSichtbarkeit = document.getElementById("has_gv_formZertifikatsDateiSichtbarkeit");
var has_gv_formZertifikatsDateiJaNeinCheckboxID = document.getElementById("has_gv_formZertifikatsDateiJaNeinCheckboxID");
has_gv_formZertifikatsDateiSichtbarkeit.style.display = has_gv_formZertifikatsDateiJaNeinCheckboxID.checked ? "block" : "none";
});
</script>


