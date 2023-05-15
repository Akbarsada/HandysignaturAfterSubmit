<?php ?>



<script type="text/javascript" >
/* ===Sichtbarkeit Formularauswahl=== */
document.addEventListener('DOMContentLoaded', function(event){
jQuery(function () {
  jQuery("#has_gv_formSichtbarkeitFormularAuswahlCheckboxID").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#sichtbarkeitFormularAuswhal").show(600);

    } else {
      jQuery("#sichtbarkeitFormularAuswhal").hide(600);

    }
  });
});
});

/* ===Formularauswahl sichtbarkeit=== */
function has_gv_formSichtbarkeitFormularAuswahlCheckboxIDf()
{ 
  var tab = jQuery("#formular_tab_ID").val();
  var name = jQuery("#has_gv_formSichtbarkeitFormularAuswahlCheckboxID").val();
    if(jQuery("#has_gv_formSichtbarkeitFormularAuswahlCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formSichtbarkeitFormularAuswahlCheckboxID", 
                  has_gv_formSichtbarkeitFormularAuswahlCheckboxID:name,
                  'tab' : tab},               
                success: function(data){
                //  location.reload();
               // M.toast({html: 'Formular ausgewählt'})
                    },
                });}	




document.addEventListener('DOMContentLoaded', function(event){
		//Formularauswahl Sichtbarkeit
var sichtbarkeitFormularAuswhal = document.getElementById("sichtbarkeitFormularAuswhal");
var has_gv_formSichtbarkeitFormularAuswahlCheckboxID = document.getElementById("has_gv_formSichtbarkeitFormularAuswahlCheckboxID");
sichtbarkeitFormularAuswhal.style.display = has_gv_formSichtbarkeitFormularAuswahlCheckboxID.checked ? "block" : "none";  
});

</script>

