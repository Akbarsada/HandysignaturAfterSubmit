<?php ?>
<script type="text/javascript" >
function has_gv_formIDf(){   
  var tab = jQuery("#formular_tab_ID").val();
  var name = jQuery("#has_gv_formID").val();

    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formID", has_gv_formID:name,
                                                'tab' : tab},               
                success: function(data){
                var json = JSON.stringify(data);
                var myJson = JSON.parse(json);
                console.log(myJson);

           if(data != 0)
             {   document.getElementById("PDFdateiName").innerHTML = myJson.data.name;
                document.getElementById("PDFdateiFormat").innerHTML = myJson.data.pdf_size;
                document.getElementById("PDFdateiAusrichtung").innerHTML = myJson.data.orientation;
                document.getElementById("PDFdateiSchrift").innerHTML = myJson.data.font_colour;
                document.getElementById("PDFdateiHintergrund").innerHTML = myJson.data.background_color;
                document.getElementById("PDFdateiPasswort").innerHTML = myJson.data.PDF_password;
                document.getElementById("papier_1").style.width = myJson.data.PDF_breite+"px";
                document.getElementById("papier_1").style.height = myJson.data.PDF_hohe+"px";
                document.getElementById("has_gv_form_PDF_filename").style.height = myJson.data.filename;
                document.getElementById("PDF_bearbeiten_link").href = myJson.data.PDF_bearbeitungsLink;
                document.getElementById("gf_felder").innerHTML = myJson.data.GV_Felder;

                M.toast({html: 'Gravity Forumular '+myJson.data.name+ ' ausgewählt'});
                location.reload();
              }
            else{
               document.getElementById("PDFdateiName").innerHTML = '';
               document.getElementById("PDFdateiFormat").innerHTML ='';
               document.getElementById("PDFdateiAusrichtung").innerHTML = '';
               document.getElementById("PDFdateiSchrift").innerHTML = '';
               document.getElementById("PDFdateiHintergrund").innerHTML ='';
               document.getElementById("PDFdateiPasswort").innerHTML = '';
               document.getElementById("papier_1").style.width = '';
               document.getElementById("papier_1").style.height ='';
               document.getElementById("has_gv_form_PDF_filename").style.height = '';
               document.getElementById("PDF_bearbeiten_link").href = '';
               document.getElementById("gf_felder").innerHTML = '';

               M.toast({html: 'kein Forumular ausgewählt',classes: 'infoToast'});}
               location.reload();
               }, }); }






</script>