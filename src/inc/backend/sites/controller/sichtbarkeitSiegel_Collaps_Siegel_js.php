<?php ?>

<script type="text/javascript" >

                /* ===Siegel sichtbarkeit=== */
                function has_gv_formHauptsiegelSichtbarkeitCheckboxIDf()
{  
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formHauptsiegelSichtbarkeitCheckboxID").val();
    if(jQuery("#has_gv_formHauptsiegelSichtbarkeitCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formHauptsiegelSichtbarkeitCheckboxID", 
                    has_gv_formHauptsiegelSichtbarkeitCheckboxID:name,
                    'tab' : tab},               
                success: function(data){

                    var json = JSON.stringify(data);
                    var myJson = JSON.parse(json);
                    console.log(myJson.data.CheckboxData);
                    
                    if(myJson.data.CheckboxData == 'sichtbar'){jQuery('#has_gv_formSiegelImageVorschau').show()}else{jQuery('#has_gv_formSiegelImageVorschau').hide()}
                    
                //  location.reload();
                M.toast({html: 'Hauptsiegel ausgewählt'})
                    },
                });}




document.addEventListener('DOMContentLoaded', function(event){



    
/* ===Sichtbarkeit Signator=== */

//Signator
jQuery(function () {
  jQuery("#has_gv_formSignatorSichtbarkeitCheckboxIDs").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#sichtbarkeitTextfeldSignator").show(600); 

    } else {
      jQuery("#sichtbarkeitTextfeldSignator").hide(600);

    }
  });
});
//SIGNATURSIEGEL
var sichtbarkeitSiegelbild = document.getElementById("sichtbarkeitSiegelbild");
var has_gv_formHauptsiegelSichtbarkeitCheckboxID = document.getElementById("has_gv_formHauptsiegelSichtbarkeitCheckboxID");
sichtbarkeitSiegelbild.style.display = "none";

//SIGNATURSIEGEL ausblenden
var ausblendenSiegelbild = document.getElementById("has_gv_formSiegelImageVorschau");
var has_gv_formHauptsiegelSichtbarkeitCheckboxID = document.getElementById("has_gv_formHauptsiegelSichtbarkeitCheckboxID");
ausblendenSiegelbild.style.display = has_gv_formHauptsiegelSichtbarkeitCheckboxID.checked ? "block" : "none";
});

</script>

