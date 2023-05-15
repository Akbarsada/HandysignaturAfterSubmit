<?php ?>

<script type="text/javascript" >

function has_gv_formMetaDatenSpeichernf(){
     // alert('hallo welt'); 
     var tab = jQuery("#formular_tab_ID").val();
   var name = jQuery("#has_gv_formSiegelTemplatesName").val();
   var author = jQuery("#has_gv_formSiegelTemplatesAuthor").val();
   var beschreibung = jQuery("#has_gv_formSiegelTemplatesDescription").val();
   

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formMetaDatenSpeichern", has_gv_formSiegelTemplatesName:name, 
                                                                has_gv_formSiegelTemplatesAuthor:author, 
                                                                has_gv_formSiegelTemplatesDescription:beschreibung,
                                                                'tab' : tab },               
                success: function(data){
               //location.reload();
                M.toast({html: 'Meta Informationen aktualisiert'})
                    },
                });
               
               
               
               }	


</script>


