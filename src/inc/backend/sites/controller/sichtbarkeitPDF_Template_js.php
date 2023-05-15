<?php ?>

<script type="text/javascript" >

/* ===PDF Template sichtbarkeit=== */
function has_gv_formSichtbarkeitPDF_TemplateCheckboxIDf()
{  
  var tab = jQuery("#formular_tab_ID").val();
  var name = jQuery("#has_gv_formSichtbarkeitPDF_TemplateCheckboxID").val();
    if(jQuery("#has_gv_formSichtbarkeitPDF_TemplateCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formSichtbarkeitPDF_TemplateCheckboxID", 
                  has_gv_formSichtbarkeitPDF_TemplateCheckboxID:name,
                 'tab' : tab},               
                success: function(data){

                  var json = JSON.stringify(data);
                  var myJson = JSON.parse(json);

                  document.getElementById("gf_felder").innerHTML = myJson.data;

                    },
                });}	


                document.addEventListener('DOMContentLoaded', function(event){

                /* ===Sichtbarkeit PDF Template=== */

//Formularauswahl
jQuery(function () {
  jQuery("#has_gv_formSichtbarkeitPDF_TemplateCheckboxID").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#sichtbarkeitPDF_Template").show(600);

    } else {
      jQuery("#sichtbarkeitPDF_Template").hide(600);

    }
  });
});


//Formularauswahl Sichtbarkeit
var sichtbarkeitPDF_Template = document.getElementById("sichtbarkeitPDF_Template");
var has_gv_formSichtbarkeitPDF_TemplateCheckboxID = document.getElementById("has_gv_formSichtbarkeitPDF_TemplateCheckboxID");
sichtbarkeitPDF_Template.style.display = has_gv_formSichtbarkeitPDF_TemplateCheckboxID.checked ? "block" : "none";  
});

</script>

