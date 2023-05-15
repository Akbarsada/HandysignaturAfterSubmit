<?php ?>

<script type="text/javascript" >
/* ===Siegelauswahl=== */
function has_gv_formSiegelTemplatesAuswahlIDf()
{  
  var tab = jQuery("#formular_tab_ID").val();
  var name = jQuery("#has_gv_formSiegelTemplatesAuswahlID").val();
   
    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formSiegelTemplatesAuswahlID", 
                  has_gv_formSiegelTemplatesAuswahlID:name,
                  'tab' : tab},               
                success: function(data){
                var json = JSON.stringify(data);
                var myJson = JSON.parse(json);


                    var toastHTML = '<span >Das Verzeichnis TEMPLATE_UPLOAD braucht Schreibrechte, 777 nähere Infos auf </span><a href="#"><button class="btn-flat toast-action">Wiki</button></a>';
                    if(myJson.data.infos != 0){M.toast({html: toastHTML, displayLength: 50000, classes: 'infoToast' })}
                    else{

                        //Meta
                        document.getElementById("has_gv_formSiegelTemplatesName").value = myJson.data.has_gv_formSiegelDescriptionName;
                        document.getElementById("has_gv_formSiegelTemplatesAuthor").value = myJson.data.has_gv_formSiegelDescriptionAuthor;
                        document.getElementById("has_gv_formSiegelTemplatesDescription").value = myJson.data.has_gv_formSiegelDescriptionBeschreibung;

                        //Siegel
                        document.getElementById("has_gv_formSiegelImageVorschau").setAttribute("src",  myJson.data.has_gv_formSiegelImage);
                        document.getElementById("has_gv_formSiegelImageVorschau").setAttribute("height",  (myJson.data.has_gv_formSiegelImageHeigth));
                        document.getElementById("has_gv_formSiegelImageVorschau").setAttribute("width",  (myJson.data.has_gv_formSiegelImageWidth));

                        document.getElementById("Y_siegel_value").setAttribute("max",  (myJson.data.PDF_breite - myJson.data.has_gv_formSiegelImageWidth ));
                        document.getElementById("X_siegel_value").setAttribute("max",  (myJson.data.PDF_hohe - myJson.data.has_gv_formSiegelImageHeigth ));



                        //Testbereich
                       // document.getElementById("has_gv_formSiegelImageVorschau").style.marginLeft = myJson.data.has_gv_formSiegelPositionX ;
                       // document.getElementById("has_gv_formSiegelImageVorschau").style.marginTop = 500 ;
                       // document.getElementById("has_gv_formSiegelImageVorschau").style.marginTop = myJson.data.PDF_hohe - (myJson.data.has_gv_formSiegelImageHeigth/2) - myJson.data.has_gv_formSiegelPositionY ;

                        M.toast({html: 'Sidgnatursiegel ausgewählt'});
                       location.reload();
                    }
 


      
                     
                    console.log(myJson);


  //  location.reload();

   

               
               }, }); 
              
              
              
              
              
              
              
              
              }	

              document.addEventListener('DOMContentLoaded', function(event){

/* ===SIGNATURSIEGEL=== */
jQuery(function () {
   jQuery("#has_gv_formSichtbarkeitSignaturSiegelCheckboxID").click(function () {
     if (jQuery(this).is(":checked")) {
       jQuery("#has_gv_formSichtbarkeitSignaturSiegelInputID").show(600);
       // jQuery("#text_siegelNameNEU").focus();
 
     } else {
       jQuery("#has_gv_formSichtbarkeitSignaturSiegelInputID").hide(600);
 
     }
   });
 });

});





</script>


