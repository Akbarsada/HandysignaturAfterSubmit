<?php ?>

<script type="text/javascript" >


                
                /* ===Ort sichtbarkeit=== */
                function has_gv_formOrtSichtbarkeitCheckboxIDf()
{  
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formOrtSichtbarkeitCheckboxID").val();
    if(jQuery("#has_gv_formOrtSichtbarkeitCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formOrtSichtbarkeitCheckboxID", 
                    has_gv_formOrtSichtbarkeitCheckboxID:name,
                    'tab' : tab},               
                success: function(data){


                    var json = JSON.stringify(data);
                    var myJson = JSON.parse(json);
                    console.log(myJson.data.CheckboxData);
                    
                    if(myJson.data.CheckboxData == 'sichtbar'){jQuery('#has_gv_formLabelInputLocationVorschau').show()}else{jQuery('#has_gv_formLabelInputLocationVorschau').hide()}
                //  location.reload();
                M.toast({html: 'Ort ausgewählt'})
                    },
                });} 





document.addEventListener('DOMContentLoaded', function(event){
//Ort
var sichtbarkeitTextfeldOrt = document.getElementById("sichtbarkeitTextfeldOrt");
var has_gv_formOrtSichtbarkeitCheckboxID = document.getElementById("has_gv_formOrtSichtbarkeitCheckboxID");
sichtbarkeitTextfeldOrt.style.display =  "none";

//SIGNATURSIEGEL ausblenden
var ausblendenTextfeldOrt = document.getElementById("has_gv_formLabelInputLocationVorschau");
var has_gv_formOrtSichtbarkeitCheckboxID = document.getElementById("has_gv_formOrtSichtbarkeitCheckboxID");
ausblendenTextfeldOrt.style.display = has_gv_formOrtSichtbarkeitCheckboxID.checked ? "block" : "none";
});

</script>

