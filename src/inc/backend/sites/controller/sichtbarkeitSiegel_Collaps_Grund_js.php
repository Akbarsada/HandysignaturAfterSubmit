<?php ?>

<script type="text/javascript" >

                /* ===Grund sichtbarkeit=== */
                function has_gv_formGrundSichtbarkeitCheckboxIDf()
{   
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formGrundSichtbarkeitCheckboxID").val();
    if(jQuery("#has_gv_formGrundSichtbarkeitCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formGrundSichtbarkeitCheckboxID", 
                    has_gv_formGrundSichtbarkeitCheckboxID:name,
                     'tab' : tab},               
                success: function(data){

                    var json = JSON.stringify(data);
                    var myJson = JSON.parse(json);
                    console.log(myJson.data.CheckboxData);
                    
                    if(myJson.data.CheckboxData == 'sichtbar'){jQuery('#has_gv_formLabelInputGrundVorschau').show()}else{jQuery('#has_gv_formLabelInputGrundVorschau').hide()}

                //  location.reload();
                M.toast({html: 'Grund ausgewählt'})
                    },
                });} 






document.addEventListener('DOMContentLoaded', function(event){
//Signaturgrund
var sichtbarkeitTextfeldGrund = document.getElementById("sichtbarkeitTextfeldGrund");
var has_gv_formGrundSichtbarkeitCheckboxID = document.getElementById("has_gv_formGrundSichtbarkeitCheckboxID");
sichtbarkeitTextfeldGrund.style.display = "none";


//SIGNATURSIEGEL ausblenden
var ausblendenTextfeldGrund = document.getElementById("has_gv_formLabelInputGrundVorschau");
var has_gv_formGrundSichtbarkeitCheckboxID = document.getElementById("has_gv_formGrundSichtbarkeitCheckboxID");
ausblendenTextfeldGrund.style.display = has_gv_formGrundSichtbarkeitCheckboxID.checked ? "block" : "none";
});

</script>

