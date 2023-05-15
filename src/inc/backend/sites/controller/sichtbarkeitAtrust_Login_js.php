<?php ?>

<script type="text/javascript" >


   /* ===FTP Sichtbarkeit=== */
   function has_gv_formAtrust_Login_checkedCheckboxIDf()
{  
    var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formAtrust_Login_checkedCheckboxID").val();
    if(jQuery("#has_gv_formAtrust_Login_checkedCheckboxID").is(':checked')){name = "sichtbar"}else{name = "nicht_sichtbar"}

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formAtrust_Login_checkedCheckboxID",
                    has_gv_formAtrust_Login_checkedCheckboxID:name,
                    'tab' : tab},               
                success: function(data){
                //  location.reload();
                M.toast({html: 'Atrust Login erstellen'})
                    },
                });}







document.addEventListener('DOMContentLoaded', function(event){




    //FTP Export
    jQuery(function () {
        jQuery("#has_gv_formAtrust_Login_checkedCheckboxID").click(function () {
            if (jQuery(this).is(":checked")) {
                jQuery("#has_gv_formAtrust_Login_checkedInputID").show(600);

            } else {
                jQuery("#has_gv_formAtrust_Login_checkedInputID").hide(600);

            }
        });
    });



//FTP Export Sichtbarkeit
var has_gv_formAtrust_Login_checkedInputID = document.getElementById("has_gv_formAtrust_Login_checkedInputID");
var has_gv_formAtrust_Login_checkedCheckboxID = document.getElementById("has_gv_formAtrust_Login_checkedCheckboxID");
    has_gv_formAtrust_Login_checkedInputID.style.display = has_gv_formAtrust_Login_checkedCheckboxID.checked ? "block" : "none";
});


</script>

