<?php ?>

<script type="text/javascript" >


                /* ===Speicherpfade Wordpress=== */
                function has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxIDf()
{ 
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID").val();
    if(jQuery("#has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID", 
                    has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID:name,
                    'tab' : tab},               
                success: function(data){
                //  location.reload();
                M.toast({html: 'Speicherpfade erstellen'})
                    },
                });} 





document.addEventListener('DOMContentLoaded', function(event){
    var sichtbarkeitSpeicherPfade = document.getElementById("sichtbarkeitSpeicherPfade");
var has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID = document.getElementById("has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID");
sichtbarkeitSpeicherPfade.style.display = has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID.checked ? "block" : "none";
});

</script>


