<?php ?>

<script type="text/javascript" >


                /* ===Weiterleitung Wordpress=== */
                function has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxIDf()
{  
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID").val();
    if(jQuery("#has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID", 
                    has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID:name,
                    'tab' : tab},               
                success: function(data){
                //  location.reload();
                M.toast({html: 'Weiterleitung erstellen'})
                    },
                });} 




document.addEventListener('DOMContentLoaded', function(event){
//Weiterleitung Wordpress
var sichtbarkeitWeiterleitungsPfade = document.getElementById("sichtbarkeitWeiterleitungsPfade");
var has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID = document.getElementById("has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID");
sichtbarkeitWeiterleitungsPfade.style.display = has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID.checked ? "block" : "none";
});

</script>


