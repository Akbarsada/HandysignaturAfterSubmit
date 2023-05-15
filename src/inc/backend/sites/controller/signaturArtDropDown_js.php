<?php ?>

<script type="text/javascript" >
/* ===Signaturart=== */
function has_gv_formSignaturFormf()
{   
  var tab = jQuery("#formular_tab_ID").val();
  var name = jQuery("#has_gv_formSignaturForm").val();
   
    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formSignaturForm", 
                  has_gv_formSignaturForm:name,
                  'tab' : tab},               
                success: function(data){
                // location.reload();
                 M.toast({html: 'Sidgnatursiegel ausgewählt'});
               
               }, }); }	
</script>


