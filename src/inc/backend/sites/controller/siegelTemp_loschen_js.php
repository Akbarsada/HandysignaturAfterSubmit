<?php ?>

<script type="text/javascript" >


function Delete_TemplateAuswahlf ()
{  





 

 var tab = jQuery("#formular_tab_ID").val();








  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
    
      data: {
        action: "Delete_TemplateAuswahl",


        'tab' : tab

      },
      success: function (data) {
      //   var json = JSON.stringify(data);
      //  // console.log(data);
      //   var myJson = JSON.parse(json);
                   location.reload();
          //  console.log(myJson.data.tempalteId);
        M.toast({html: 'Siegel gelöscht'})
      },
    });

    } 




</script>


