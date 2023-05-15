<?php ?>

<script type="text/javascript" >




/* ===Media Uploader Siegel=== */




jQuery(document).ready( function($){
	
	var mediaUploader;
	
	jQuery('#has_gv_formSiegelHintergrundBildButton').on('click',function(e) {
		e.preventDefault();
		if( mediaUploader ){
			mediaUploader.open();
			return;
		}
		
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Bild für Signatursiegel wählen',
			button: {
				text: 'Bild wählen'
			},
			multiple: false
		});
		
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
		

           //Bild wird von hidden Field genommen
          jQuery('#has_gv_formSiegelImage').width(this.width);
          jQuery('#has_gv_formSiegelImage').height(this.height);
          jQuery('#has_gv_formSiegelImage').val(attachment.url);

           //Bild wird leerem img Tag übergeben und halbiert
          jQuery('#siegelBild').attr('src', attachment.url);
          jQuery('#siegelBild').attr('width',  (attachment.width/2));
          jQuery('#siegelBild').attr('height', (attachment.height/2));


          var pdf_breite = parseInt(jQuery('#papier_1').css('width'));
          var pdf_hohe = parseInt(jQuery('#papier_1').css('height'));

          var bild_breite =     jQuery('#siegelBild').attr('width');
          var bild_hohe =     jQuery('#siegelBild').attr('height');


            //die Max Werte des Range werden eingestellt
          jQuery('#Y_siegel_value').attr('max', pdf_hohe - bild_hohe);
          jQuery('#X_siegel_value').attr('max', pdf_breite -  bild_breite );

          //BildInfos werden übergeben
          document.getElementById("info_siegel_hohe").innerHTML = 'Höhe: '+ (bild_hohe*2) + ' px';
          document.getElementById("info_siegel_breite").innerHTML = 'Breite: '+ (bild_breite*2) + ' px';

          var tab = jQuery("#formular_tab_ID").val();
          var bild_url = jQuery("#siegelBild").attr('src');

        var attach_bild_breite =     jQuery('#has_gv_formSiegelImageVorschau').attr('width');
        var attach_bild_hohe =     jQuery('#has_gv_formSiegelImageVorschau').attr('height');

        var vorschau_bild_breite =     jQuery('#has_gv_formSiegelImageVorschau').attr('width');
        var vorschau_bild_hohe =     jQuery('#has_gv_formSiegelImageVorschau').attr('height');


            jQuery.ajax({

                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "mediaUploadSiegel",

                    'bild_url':bild_url,
                    'bild_breite':bild_breite,
                    'bild_hohe':bild_hohe,
                    'vorschau_bild_breite':vorschau_bild_breite,
                    'vorschau_bild_hohe':vorschau_bild_hohe,
                    'attach_bild_breite':attach_bild_breite,
                    'attach_bild_hohe':attach_bild_hohe,
                    'pdf_breite':pdf_breite,
                    'pdf_hohe':pdf_hohe,
                    'tab' : tab},

                success: function(data){
                    var json = JSON.stringify(data);
                    var myJson = JSON.parse(json);

                    console.log(myJson.data);

                    M.toast({html: 'Siegel Bild ausgewählt'});
                    // location.reload();
                },

            });

		});
		
		mediaUploader.open();
		
	});
	
});





//Range Signatur Bild
function showVal(newVal) {
  
  var tab = jQuery("#formular_tab_ID").val();
  var Y_siegel = document.getElementById("Y_siegel_value").value; //valR
  var Y_siegel_px = document.getElementById("money2").innerHTML = Y_siegel +"px";

  var X_siegel = document.getElementById("X_siegel_value").value; //valR
  var X_siegel_px = document.getElementById("money").innerHTML = X_siegel +"px";

  var pdf_breite = parseInt(jQuery('#papier_1').css('width'));
  var pdf_hohe = parseInt(jQuery('#papier_1').css('height'));

  var attach_bild_breite =     jQuery('#has_gv_formSiegelImageVorschau').attr('width');
  var attach_bild_hohe =     jQuery('#has_gv_formSiegelImageVorschau').attr('height');
 document.getElementById("has_gv_formSiegelImageVorschau").style.marginLeft = X_siegel_px;
 document.getElementById("has_gv_formSiegelImageVorschau").style.marginTop = Y_siegel_px;




  //
  //jQuery.ajax({
  //              type: 'POST',
  //              url: "<?php //echo admin_url('admin-ajax.php'); ?>//",
  //              data: {action: "has_gv_formSiegelTemplatesAuswahlRange",
  //
  //                  'pdf_hohe' : pdf_hohe,
  //                  'pdf_breite' : pdf_breite,
  //                  'attach_bild_hohe' : attach_bild_hohe,
  //                  'attach_bild_breite' : attach_bild_breite,
  //                  'X_siegel' : X_siegel,
  //                  'Y_siegel' : Y_siegel,
  //
  //                  'tab' : tab
  //                   },
  //              success: function(data){
  //
  //                  var json = JSON.stringify(data);
  //
  //                   var myJson = JSON.parse(json);
  //                   console.log(myJson.data);
  //
  //             }, });

}






document.addEventListener('DOMContentLoaded', function(event){
/* ===Sichtbarkeit Signaturbild=== */

//SIGNATURSIEGEL
jQuery(function () {
  jQuery("#has_gv_formHauptsiegelSichtbarkeitCheckboxIDs").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#sichtbarkeitSiegelbild").show(600);

    } else {
      jQuery("#sichtbarkeitSiegelbild").hide(600);

    }
  });
});

});

</script>


