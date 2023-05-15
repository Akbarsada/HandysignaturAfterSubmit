<?php ?>

<script type="text/javascript" >
//Save Color
function textfeldZeitstempelSpeichernf() {
  var tab = jQuery("#formular_tab_ID").val();
  var has_gv_formLabelTimestampBGcolor =  jQuery("#has_gv_formLabelTimestampBGcolor").val();
  var has_gv_formLabelTimestampFcolor = jQuery("#has_gv_formLabelTimestampFcolor").val();
  var tab = jQuery("#formular_tab_ID").val();


jQuery.ajax({
    type: 'POST',
    url: "<?php echo admin_url('admin-ajax.php'); ?>",
    data: {
      action: "textfeldZeitstempelSpeichern",
      'has_gv_formLabelTimestampBGcolor': has_gv_formLabelTimestampBGcolor,
      'has_gv_formLabelTimestampFcolor': has_gv_formLabelTimestampFcolor,

      'tab' : tab
      
    },
    success: function (data) {
      var json = JSON.stringify(data);
      var myJson = JSON.parse(json);
      console.log(myJson);

      document.getElementById("has_gv_formLabelInputTimestampVorschau").style.backgroundColor = myJson.data.has_gv_formLabelTimestampBGcolor;
      document.getElementById("has_gv_formLabelInputTimestampVorschau").style.color  = myJson.data.has_gv_formLabelTimestampFcolor;

    },
  });

  } 

//Range Signatur Bild
function showVal6(newVal) {

  var tab = jQuery("#formular_tab_ID").val();
  var Y_siegel = document.getElementById("Y_siegel_value_Timestamp").value; //valR
document.getElementById("money2_Timestamp").innerHTML = (Y_siegel*2) +"px";


  var X_siegel = document.getElementById("X_siegel_value_Timestamp").value; //valR
 document.getElementById("money_Timestamp").innerHTML = (X_siegel*2) +"px";


  var pdf_breite = parseInt(jQuery('#papier_1').css('width'));
  var pdf_hohe = parseInt(jQuery('#papier_1').css('height'));

  var textfeld_breite =     parseInt(jQuery('#has_gv_formLabelInputTimestampVorschau').css('width'));
  var textfeld_hohe =     parseInt(jQuery('#has_gv_formLabelInputTimestampVorschau').css('height'));
  var bildhohe = parseInt(jQuery('#siegelBild').attr('height'));
  var bildbreite = parseInt(jQuery('#siegelBild').attr('width'));

  document.getElementById("has_gv_formLabelInputTimestampVorschau").style.left = X_siegel +'px';
  document.getElementById("has_gv_formLabelInputTimestampVorschau").style.top = Y_siegel+'px';


        jQuery('#Y_siegel_value_Timestamp').attr('max', bildhohe);
        jQuery('#X_siegel_value_Timestamp').attr('max', bildbreite );



  //jQuery.ajax({
  //              type: 'POST',
  //              url: "<?php //echo admin_url('admin-ajax.php'); ?>//",
  //              data: {action: "has_gv_formLabelInputTimestampRange",
  //
  //
  //                  'bildhohe':bildhohe,
  //                  'bildbreite':bildbreite,
  //                  'pdf_hohe' : pdf_hohe,
  //                  'pdf_breite' : pdf_breite,
  //                  'textfeld_hohe' : textfeld_hohe,
  //                  'textfeld_breite' : textfeld_breite,
  //                  'X_siegel' : X_siegel,
  //                  'Y_siegel' : Y_siegel,
  //                  'tab' : tab
  //                   },
  //              success: function(data){
  //
  //                  var json = JSON.stringify(data);
  //
  //                   var myJson = JSON.parse(json);
  //                   console.log(myJson.data);
  //
  //
  //
  //             }, });

}



</script>


