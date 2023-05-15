<?php ?>

<script type="text/javascript" >

    //Temp Ayax
    function insert_Temp() {

  var tab = jQuery("#formular_tab_ID").val();
  var temp_content = tinyMCE.get('mycustomeditor').getContent();


  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: {
        action: "PDF_temp",
      
        'temp_content' : temp_content,
        'tab' : tab
      },
      success: function (data) {
        var json = JSON.stringify(data);
        console.log(data);
        var myJson = JSON.parse(json);
        console.log(myJson);
       // M.toast({html: 'PDF Template erstellt' })


          var toastHTML = '<span >Das Verzeichnis TEMPLATE_UPLOAD braucht Schreibrechte, 777 nähere Infos auf </span><a href="#"><button class="btn-flat toast-action">Wiki</button></a>';
          if(myJson.data.infos != 0){M.toast({html: toastHTML, displayLength: 50000, classes: 'infoToast' })}
          else{M.toast({html: myJson.data.erfolg})}





      },
    });

    } 



</script>


