<?php ?>

<script type="text/javascript" >


                /* ===Zeitstempel sichtbarkeit=== */
                function has_gv_formZeitstempelSichtbarkeitCheckboxIDf()
{  
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formZeitstempelSichtbarkeitCheckboxID").val();
    if(jQuery("#has_gv_formZeitstempelSichtbarkeitCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formZeitstempelSichtbarkeitCheckboxID", 
                    has_gv_formZeitstempelSichtbarkeitCheckboxID:name,
                     'tab' : tab},               
                success: function(data){
                
                    var json = JSON.stringify(data);
                    var myJson = JSON.parse(json);
                    console.log(myJson.data.CheckboxData);
                    
                    if(myJson.data.CheckboxData == 'sichtbar'){jQuery('#has_gv_formLabelInputTimestampVorschau').show()}else{jQuery('#has_gv_formLabelInputTimestampVorschau').hide()}

                M.toast({html: 'Zeitstempel ausgewählt'})
                    },
                });} 





document.addEventListener('DOMContentLoaded', function(event){
//Zeitstempel
var sichtbarkeitTextfeldZeitstempel = document.getElementById("sichtbarkeitTextfeldZeitstempel");
var has_gv_formZeitstempelSichtbarkeitCheckboxID = document.getElementById("has_gv_formZeitstempelSichtbarkeitCheckboxID");
sichtbarkeitTextfeldZeitstempel.style.display =  "none";

//SIGNATURSIEGEL ausblenden
var ausblendenTextfeldZeitstempel = document.getElementById("has_gv_formLabelInputTimestampVorschau");
var has_gv_formZeitstempelSichtbarkeitCheckboxID = document.getElementById("has_gv_formZeitstempelSichtbarkeitCheckboxID");
ausblendenTextfeldZeitstempel.style.display = has_gv_formZeitstempelSichtbarkeitCheckboxID.checked ? "block" : "none";

});


</script>

