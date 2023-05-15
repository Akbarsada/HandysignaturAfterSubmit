<?php ?>

<script type="text/javascript" >
function atrustLoginf() {

 var tab = jQuery("#formular_tab_ID").val();
 var atrust_login_image = document.getElementById("atrust_custom_logo_img").src;
 var atrust_login_text = jQuery("#has_gv_formAtrust_Text").val();
 var atrust_login_color = jQuery("#has_gv_formAtrust_BG_Color").val();

if( !atrust_login_color){
    atrust_login_color = "#ffffff";
}

  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",

      data: {
        action: "atrustLogin",
        'atrust_login_color':atrust_login_color,
        'atrust_login_text':atrust_login_text,
        'atrust_login_image':atrust_login_image,
        'tab' : tab

      },
      success: function (data) {
        var json = JSON.stringify(data);
        var myJson = JSON.parse(json);
        console.log(json);
        console.log(myJson);
          document.getElementById("rahmen_iframe").style.backgroundColor = myJson.data.color;
          document.getElementById("has_atrust_text").innerHTML = myJson.data.text;
        M.toast({html: 'Atrust gespeichert'})
      },
    });

    }


jQuery(document).ready( function($){

    var mediaUploader;

    jQuery('#has_gv_atrust_custom_Image').on('click',function(e) {
        e.preventDefault();
        if( mediaUploader ){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Custum Logo für A-Trust Login Seite auswählen',
            button: {
                text: 'Bild wählen'
            },
            multiple: false
        });

        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            jQuery("#atrust_custom_logo_img").attr("src", attachment.url);
            console.log( attachment.url);

        });

        mediaUploader.open();

    });

});
</script>