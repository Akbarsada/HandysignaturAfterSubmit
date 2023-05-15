<?php ?>

<script type="text/javascript" >

/* ===Template bearbeiten oder nicht - Sichtbarkeit=== */
function has_gv_formNeuesTemplateOderBearbeitenIDf()
{  
  var tab = jQuery("#formular_tab_ID").val();
  var name = jQuery("#has_gv_formNeuesTemplateOderBearbeitenID").val();
    if(jQuery("#has_gv_formNeuesTemplateOderBearbeitenID").is(':checked')){name = "erstellen"}else{name = "bearbeiten"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formNeuesTemplateOderBearbeitenID", 
                  has_gv_formNeuesTemplateOderBearbeitenID:name,
                  'tab' : tab},               
                success: function(data){

                  
                  var json = JSON.stringify(data);
  
  var myJson = JSON.parse(json);
  console.log(myJson.data.Siegel_neu_bearbeiten);
if(myJson.data.Siegel_neu_bearbeiten == 'erstellen'){
                document.getElementById('has_gv_formSiegelTemplatesName').value =  "";
                document.getElementById('has_gv_formSiegelTemplatesAuthor').value =  "";
                document.getElementById('has_gv_formSiegelTemplatesDescription').value =  "";
                document.getElementById("siegelBild").src="";




                location.reload();

}
if(myJson.data.Siegel_neu_bearbeiten == 'bearbeiten'){
    // jQuery( "#has_gv_formHauptsiegelSichtbarkeitCheckboxIDs" ).prop( "disabled", true );
    // jQuery( "#has_gv_formSignatorSichtbarkeitCheckboxIDs" ).prop( "disabled", true );
    // jQuery( "#has_gv_formOrtSichtbarkeitCheckboxIDs" ).prop( "disabled", true );
    // jQuery( "#has_gv_formGrundSichtbarkeitCheckboxIDs" ).prop( "disabled", true );
    // jQuery( "#has_gv_formZeitstempelSichtbarkeitCheckboxIDs" ).prop( "disabled", true );

    // jQuery( "#has_gv_formHauptsiegelSichtbarkeitCheckboxID" ).prop( "disabled", true );
    // jQuery( "#has_gv_formSignatorSichtbarkeitCheckboxID" ).prop( "disabled", true );
    // jQuery( "#has_gv_formZeitstempelSichtbarkeitCheckboxID" ).prop( "disabled", true );
    // jQuery( "#has_gv_formGrundSichtbarkeitCheckboxID" ).prop( "disabled", true );
    // jQuery( "#has_gv_formOrtSichtbarkeitCheckboxID" ).prop( "disabled", true );

    location.reload();


}
               

              // location.reload();
                M.toast({html: 'Meta neu ausgewählt'})
                    },
                });}	





                document.addEventListener('DOMContentLoaded', function(event){

/* ===Neues Template oder Template Bearbeiten=== */
jQuery(function () {
   jQuery("#has_gv_formNeuesTemplateOderBearbeitenID").click(function () {
     if (jQuery(this).is(":checked")) {


       jQuery("#has_gv_formSiegelTempErstellen").show(600);
       jQuery("#neuesTemplateSichtbarkeit").hide(600);

     } else {

         jQuery("#has_gv_formSiegelTempErstellen").hide(600);
         jQuery("#neuesTemplateSichtbarkeit").show(600);
         jQuery("#has_gv_formSiegelTextID").focus();
     }
   });
 });
});
//SIGNATURSIEGEL ausblenden
// var ausblendenTextfeldGrund = document.getElementById("has_gv_formLabelInputGrundVorschau");
// var has_gv_formNeuesTemplateOderBearbeitenID = document.getElementById("has_gv_formNeuesTemplateOderBearbeitenID");
// ausblendenTextfeldGrund.style.display = has_gv_formNeuesTemplateOderBearbeitenID.checked ? "block" : "none";


</script>


