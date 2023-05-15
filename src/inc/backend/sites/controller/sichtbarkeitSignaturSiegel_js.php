<?php ?>

<script type="text/javascript" >

/* ===Meta Daten speichern=== */


/* ===Siegel Einstellungen sichtbarkeit=== */
function has_gv_formSichtbarkeitSignaturSiegelCheckboxIDf()
{  
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formSichtbarkeitSignaturSiegelCheckboxID").val();
    if(jQuery("#has_gv_formSichtbarkeitSignaturSiegelCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formSichtbarkeitSignaturSiegelCheckboxID", 
                    has_gv_formSichtbarkeitSignaturSiegelCheckboxID:name,
                    'tab' : tab},               
                success: function(data){

             
                
                M.toast({html: 'Signatursiegel ausgewählt'})
                    },
                });}	



document.addEventListener('DOMContentLoaded', function(event){
//SignaturSiegel Sichtbarkeit
var has_gv_formSichtbarkeitSignaturSiegelInputID = document.getElementById("has_gv_formSichtbarkeitSignaturSiegelInputID");
var has_gv_formSichtbarkeitSignaturSiegelCheckboxID = document.getElementById("has_gv_formSichtbarkeitSignaturSiegelCheckboxID");
has_gv_formSichtbarkeitSignaturSiegelInputID.style.display = has_gv_formSichtbarkeitSignaturSiegelCheckboxID.checked ? "block" : "none";
});

</script>