<?php ?>

<script type="text/javascript" >

                /* ===Zusatzbild sichtbarkeit=== */
                function has_gv_formZusatzbildSichtbarkeitCheckboxIDf()
{  
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formZusatzbildSichtbarkeitCheckboxID").val();
    if(jQuery("#has_gv_formZusatzbildSichtbarkeitCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formZusatzbildSichtbarkeitCheckboxID", 
                    has_gv_formZusatzbildSichtbarkeitCheckboxID:name,
                    'tab' : tab},               
                success: function(data){
                    var json = JSON.stringify(data);
                    var myJson = JSON.parse(json);
                    console.log(myJson.data.CheckboxData);
                    
                    if(myJson.data.CheckboxData == 'sichtbar'){jQuery('#has_gv_formZUSATZImageVorschau').show()}else{jQuery('#has_gv_formZUSATZImageVorschau').hide()}
                M.toast({html: 'Zusatzbild ausgewählt'})
                    },
                });}





document.addEventListener('DOMContentLoaded', function(event){
//Zusatzbild
var sichtbarkeitZusatzbild = document.getElementById("sichtbarkeitZusatzbild");
var has_gv_formZusatzbildSichtbarkeitCheckboxID = document.getElementById("has_gv_formZusatzbildSichtbarkeitCheckboxID");
sichtbarkeitZusatzbild.style.display =  "none";

//SIGNATURSIEGEL ausblenden
var ausblendenZusatzbild = document.getElementById("has_gv_formZUSATZImageVorschau");
var has_gv_formZusatzbildSichtbarkeitCheckboxID = document.getElementById("has_gv_formZusatzbildSichtbarkeitCheckboxID");
ausblendenZusatzbild.style.display = has_gv_formZusatzbildSichtbarkeitCheckboxID.checked ? "block" : "none";

});

</script>

