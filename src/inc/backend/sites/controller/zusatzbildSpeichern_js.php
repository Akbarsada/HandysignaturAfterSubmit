<?php ?>

<script type="text/javascript" >

/* ===Zusatzbild Speichern=== */
function has_gv_formZusatzBildSpeichernf()
{   
  var tab = jQuery("#formular_tab_ID").val();
    var name = jQuery("#has_gv_formZUSATZImageVorschau").attr('src');



const img = new Image();

img.onload = function(e) {
   
var width_s = this.width;
var heigth_s = this.height;

var width_10 = width_s;
var heigth_10 = heigth_s;
//alert(heigth_s + 'x' + width_s);
 jQuery.ajax({
    
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formSiegelZusatzBild", 
                  has_gv_formZUSATZImage:name, 
                  'width' : width_s,  
                  'height' : heigth_s,
                  'tab' : tab},               
                
                success: function(data){
                    var json = JSON.stringify(data);
                    console.log(data);
                    var myJson = JSON.parse(json);

                    console.log(myJson.data);
              
                M.toast({html: 'Siegel Bild Zusatzbild'});
               // location.reload();
                    },
                });

}
img.src = name;

            }	


/* ===Media Uploader Zusatzbild=== */

jQuery(document).ready( function($){
	
	var mediaUploader;
	
	jQuery('#has_gv_formZusatzBildButton').on('click',function(e) {
		e.preventDefault();
		if( mediaUploader ){
			mediaUploader.open();
			return;
		}
		
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Zusatzbild wählen',
			button: {
				text: 'Zusatzbild wählen'
			},
			multiple: false
		});
		
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
		
    //   const img = new Image();
    //   alert(this.width + 'xxx' + this.height);
      //img.onload = function() {

      //  alert(this.width + 'aaa' + this.height);
        jQuery('#has_gv_formZUSATZImage').width(this.width);
        jQuery('#has_gv_formZUSATZImage').height(this.height);
        jQuery('#has_gv_formZUSATZImage').val(attachment.url);
        jQuery('#has_gv_formZUSATZImageVorschau').attr('src', attachment.url);
        jQuery('#has_gv_formZUSATZImageVorschau').attr('width',  (attachment.width));
        jQuery('#has_gv_formZUSATZImageVorschau').attr('height', (attachment.height));
      // console.log(jQuery('#has_gv_form1SiegelHintergrundBildVorschau').attr('width', attachment.width))


       var pdf_breite = parseInt(jQuery('#papier_1').css('width'));
        var pdf_hohe = parseInt(jQuery('#papier_1').css('height'));

        var attach_bild_breite =     jQuery('#has_gv_formZUSATZImageVorschau').attr('width');
        var attach_bild_hohe =     jQuery('#has_gv_formZUSATZImageVorschau').attr('height');

        jQuery('#Y_siegel_value2').attr('max', pdf_breite - attach_bild_breite);
        jQuery('#X_siegel_value2').attr('max', pdf_hohe -  attach_bild_hohe );



        console.log(pdf_breite);
        console.log(pdf_hohe);
        console.log(attach_bild_breite);
        console.log(attach_bild_hohe);

        document.getElementById("info_siegelZusatz_hohe").innerHTML = 'Höhe: '+ attach_bild_hohe + ' px';
      document.getElementById("info_siegelZusatz_breite").innerHTML = 'Breite: '+ attach_bild_breite + ' px';
     // }
      //img.src = jQuery('#has_gv_formZUSATZImageVorschau').attr('src');

		});
		
		mediaUploader.open();
		
	});
	
});



/* ===RANGE=== */



//Range Signatur Bild

function showVal2(newVal) {
  
  var tab = jQuery("#formular_tab_ID").val();
  var X_siegel = document.getElementById("X_siegel_value2").value; //valR
  var X_siegel_px = document.getElementById("money11").innerHTML = X_siegel +"px";

  var Y_siegel = document.getElementById("Y_siegel_value2").value; //valR
  var Y_siegel_px = document.getElementById("money22").innerHTML = Y_siegel +"px";
  console.log('X_siegel_px');
  console.log(X_siegel_px);

  console.log('Y_siegel_px');
  console.log(Y_siegel_px);

  document.getElementById("has_gv_formZUSATZImageVorschau").style.marginTop = X_siegel_px;
  document.getElementById("has_gv_formZUSATZImageVorschau").style.marginLeft = Y_siegel_px;

  var pdf_breite = parseInt(jQuery('#papier_1').css('width'));
        var pdf_hohe = parseInt(jQuery('#papier_1').css('height'));

        var attach_bild_breite =     jQuery('#has_gv_formZUSATZImageVorschau').attr('width');
        var attach_bild_hohe =     jQuery('#has_gv_formZUSATZImageVorschau').attr('height');


        jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formZusatzbildTemplatesAuswahlRange", 
                    
                    'pdf_hohe' : pdf_hohe,
                    'pdf_breite' : pdf_breite,
                    'attach_bild_hohe' : attach_bild_hohe,
                    'attach_bild_breite' : attach_bild_breite,
                    'X_siegel' : X_siegel,
                    'Y_siegel' : Y_siegel,
                    'tab' : tab
                     },               
                success: function(data){
              
                    var json = JSON.stringify(data);
  
                     var myJson = JSON.parse(json);
                     console.log(myJson.data);


               
               }, }); 



}





/* ===Sichtbarkeit Zusatzbild=== */

//Zusatzbild
jQuery(function () {
  jQuery("#has_gv_formZusatzbildSichtbarkeitCheckboxIDs").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#sichtbarkeitZusatzbild").show(600);

    } else {
      jQuery("#sichtbarkeitZusatzbild").hide(600);

    }
  });
});            

</script>


