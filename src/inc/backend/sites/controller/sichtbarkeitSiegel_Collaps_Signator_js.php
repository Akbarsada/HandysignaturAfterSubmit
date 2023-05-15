<?php ?>

<script type="text/javascript" >


                /* ===Signator sichtbarkeit=== */
                function has_gv_formSignatorSichtbarkeitCheckboxIDf()
{  
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formSignatorSichtbarkeitCheckboxID").val();
    if(jQuery("#has_gv_formSignatorSichtbarkeitCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formSignatorSichtbarkeitCheckboxID", 
                    has_gv_formSignatorSichtbarkeitCheckboxID:name,
                     'tab' : tab},               
                success: function(data){

                    var json = JSON.stringify(data);
                    var myJson = JSON.parse(json);
                    console.log(myJson.data.CheckboxData);
                    
                    if(myJson.data.CheckboxData == 'sichtbar'){jQuery('#has_gv_formLabelInputSignerVorschau').show()}else{jQuery('#has_gv_formLabelInputSignerVorschau').hide()}
                //  location.reload();
                M.toast({html: 'Signator ausgewählt'})
                    },
                });} 




document.addEventListener('DOMContentLoaded', function(event){
//Signator
var sichtbarkeitTextfeldSignator = document.getElementById("sichtbarkeitTextfeldSignator");
var has_gv_formSignatorSichtbarkeitCheckboxID = document.getElementById("has_gv_formSignatorSichtbarkeitCheckboxID");
sichtbarkeitTextfeldSignator.style.display =  "none";


//SIGNATURSIEGEL ausblenden
var ausblendenTextfeldSignator = document.getElementById("has_gv_formLabelInputSignerVorschau");
var has_gv_formSignatorSichtbarkeitCheckboxID = document.getElementById("has_gv_formSignatorSichtbarkeitCheckboxID");
ausblendenTextfeldSignator.style.display = has_gv_formSignatorSichtbarkeitCheckboxID.checked ? "block" : "none";

});


</script>

