<?php ?>

<script type="text/javascript" >


function has_gv_formSiegelTempErstellenf()
{  

  var tab = jQuery("#formular_tab_ID").val();


//Position

    var tab = jQuery("#formular_tab_ID").val();




    var pdf_breite = parseInt(jQuery('#papier_1').css('width'));
    var pdf_hohe = parseInt(jQuery('#papier_1').css('height'));


    //siegel

    var Y_siegelSiegel = document.getElementById("Y_siegel_value").value; //valR
    var X_siegelSiegel = document.getElementById("X_siegel_value").value; //valR
    var attach_bild_breiteSiegel =     jQuery('#has_gv_formSiegelImageVorschau').attr('width');
    var attach_bild_hoheSiegel =     jQuery('#has_gv_formSiegelImageVorschau').attr('height');



    //time
    var Y_siegelTime = document.getElementById("Y_siegel_value_Timestamp").value; //valR
    var X_siegelTime = document.getElementById("X_siegel_value_Timestamp").value; //valR
    var textfeld_breiteTime =     parseInt(jQuery('#has_gv_formLabelInputTimestampVorschau').css('width'));
    var textfeld_hoheTime =     parseInt(jQuery('#has_gv_formLabelInputTimestampVorschau').css('height'));
    var bildhoheTime = parseInt(jQuery('#has_gv_formSiegelImageVorschau').attr('height'));
    var bildbreiteTime = parseInt(jQuery('#has_gv_formSiegelImageVorschau').attr('width'));


//signer
    var Y_siegelSigner = document.getElementById("Y_siegel_value_Signator").value; //valR
    var X_siegelSigner = document.getElementById("X_siegel_value_Signator").value; //valR
    var textfeld_breiteSigner =     parseInt(jQuery('#has_gv_formLabelInputSignerVorschau').css('width'));
    var textfeld_hoheSigner =     parseInt(jQuery('#has_gv_formLabelInputSignerVorschau').css('height'));
    var bildhoheSigner = parseInt(jQuery('#has_gv_formSiegelImageVorschau').attr('height'));
    var bildbreiteSigner = parseInt(jQuery('#has_gv_formSiegelImageVorschau').attr('width'));



//Meta
   var has_gv_formSiegelTemplatesName = jQuery("#has_gv_formSiegelTemplatesName").val();
   var has_gv_formSiegelTemplatesAuthor = jQuery("#has_gv_formSiegelTemplatesAuthor").val();
   var has_gv_formSiegelTemplatesDescription = jQuery("#has_gv_formSiegelTemplatesDescription").val(); 
  
//Grund
  var has_gv_formLabelGrundBGcolor =  jQuery("#has_gv_formLabelGrundBGcolor").val();
  var has_gv_formLabelGrundFcolor = jQuery("#has_gv_formLabelGrundFcolor").val();
  var has_gv_formLabelInputGrund = jQuery("#has_gv_formLabelInputGrund").val();

//Ort
  var has_gv_formLabelLocationBGcolor =  jQuery("#has_gv_formLabelLocationBGcolor").val();
  var has_gv_formLabelLocationFcolor = jQuery("#has_gv_formLabelLocationFcolor").val();
  var has_gv_formLabelInputLocation =  jQuery("#has_gv_formLabelInputLocation").val();

//Signator
  var has_gv_formLabelSignerBGcolor =  jQuery("#has_gv_formLabelSignerBGcolor").val();
  var has_gv_formLabelSignerFcolor = jQuery("#has_gv_formLabelSignerFcolor").val();
  var has_gv_formLabelInputSigner =  jQuery("#has_gv_formLabelInputSigner").val();

//Zeitstempel
  var has_gv_formLabelTimestampBGcolor =  jQuery("#has_gv_formLabelTimestampBGcolor").val();
  var has_gv_formLabelTimestampFcolor = jQuery("#has_gv_formLabelTimestampFcolor").val();
  var has_gv_formLabelInputTimestamp =  jQuery("#has_gv_formLabelInputTimestamp").val();

  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
    
      data: {
        action: "has_gv_formSiegelTempErstellen",
        'tab' : tab,
          'pdf_hohe' : pdf_hohe,
          'pdf_breite' : pdf_breite,

          'Y_siegelSiegel':Y_siegelSiegel,
          'X_siegelSiegel':X_siegelSiegel,
          'attach_bild_breiteSiegel':attach_bild_breiteSiegel,
          'attach_bild_hoheSiegel':attach_bild_hoheSiegel,

          'bildhoheTime':bildhoheTime,
          'bildbreiteTime':bildbreiteTime,
          'textfeld_hoheTime' : textfeld_hoheTime,
          'textfeld_breiteTime' : textfeld_breiteTime,
          'X_siegelTime' : X_siegelTime,
          'Y_siegelTime' : Y_siegelTime,

          'bildhoheSigner':bildhoheSigner,
          'bildbreiteSigner':bildbreiteSigner,
          'textfeld_hoheSigner' : textfeld_hoheSigner,
          'textfeld_breiteSigner' : textfeld_breiteSigner,
          'X_siegelSigner' : X_siegelSigner,
          'Y_siegelSigner' : Y_siegelSigner,


        'has_gv_formLabelGrundBGcolor':has_gv_formLabelGrundBGcolor,
        'has_gv_formLabelGrundFcolor':has_gv_formLabelGrundFcolor,
        'has_gv_formLabelInputGrund':has_gv_formLabelInputGrund,
        'has_gv_formLabelLocationBGcolor':has_gv_formLabelLocationBGcolor,
        'has_gv_formLabelLocationFcolor':has_gv_formLabelLocationFcolor,
        'has_gv_formLabelInputLocation':has_gv_formLabelInputLocation,
        'has_gv_formLabelSignerBGcolor':has_gv_formLabelSignerBGcolor,
        'has_gv_formLabelSignerFcolor':has_gv_formLabelSignerFcolor,
        'has_gv_formLabelInputSigner':has_gv_formLabelInputSigner,
        'has_gv_formLabelTimestampBGcolor':has_gv_formLabelTimestampBGcolor,
        'has_gv_formLabelTimestampFcolor':has_gv_formLabelTimestampFcolor,
        'has_gv_formLabelInputTimestamp':has_gv_formLabelInputTimestamp,
        'has_gv_formLabelGrundBGcolor':has_gv_formLabelGrundBGcolor,
        'has_gv_formSiegelTemplatesAuthor':has_gv_formSiegelTemplatesAuthor,
        'has_gv_formSiegelTemplatesDescription':has_gv_formSiegelTemplatesDescription,
        'has_gv_formSiegelTemplatesName':has_gv_formSiegelTemplatesName


      },
      success: function (data) {
        var json = JSON.stringify(data);
        var myJson = JSON.parse(json);
   console.log(myJson);
        console.log( myJson.data.template_id);
      //  location.reload();


        var toastHTML = '<span >Das Verzeichnis TEMPLATE_UPLOAD braucht Schreibrechte, 777 nähere Infos auf </span><a href="#"><button class="btn-flat toast-action">Wiki</button></a>';
        if(myJson.data.infos != 0){M.toast({html: toastHTML, displayLength: 50000, classes: 'infoToast' })}
        else{M.toast({html: myJson.data.erfolg})}

       //   location.reload();
      },
    });

    } 




</script>


