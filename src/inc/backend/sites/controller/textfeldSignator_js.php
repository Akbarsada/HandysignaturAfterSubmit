<?php ?>

<script type="text/javascript" >
//Save Color
function textfeldSignatorSpeichernf() {
  var tab = jQuery("#formular_tab_ID").val();
  var has_gv_formLabelSignerBGcolor =  jQuery("#has_gv_formLabelSignerBGcolor").val();
  var has_gv_formLabelSignerFcolor = jQuery("#has_gv_formLabelSignerFcolor").val();
  var tab = jQuery("#formular_tab_ID").val();;


jQuery.ajax({
    type: 'POST',
    url: "<?php echo admin_url('admin-ajax.php'); ?>",
    data: {
      action: "textfeldSignatorSpeichern",
      'has_gv_formLabelSignerBGcolor': has_gv_formLabelSignerBGcolor,
      'has_gv_formLabelSignerFcolor': has_gv_formLabelSignerFcolor,
      'tab' : tab
      
    },
    success: function (data) {
      var json = JSON.stringify(data);
      var myJson = JSON.parse(json);
      console.log(myJson);

      document.getElementById("has_gv_formLabelInputSignerVorschau").style.color = myJson.data.has_gv_formLabelSignerBGcolor;
      document.getElementById("has_gv_formLabelInputSignerVorschau").style.backgroundColor  = myJson.data.has_gv_formLabelSignerFcolor;

    },
  });

  } 

//Range Signatur Bild
function showVal4(newVal) {
  var tab = jQuery("#formular_tab_ID").val();

  var Y_siegel = document.getElementById("Y_siegel_value_Signator").value; //valR
document.getElementById("money2_Signator").innerHTML = (Y_siegel*2) +"px";

  var X_siegel = document.getElementById("X_siegel_value_Signator").value; //valR
document.getElementById("money_Signator").innerHTML = (X_siegel*2) +"px";


    var Y_siegel2 = document.getElementById("money2_Timestamp"); //valR
    var X_siegel2 = document.getElementById("money_Timestamp"); //valR

    Y_siegel2 = Y_siegel2.textContent;
    X_siegel2 = X_siegel2.textContent;

    var Y_siegel3 = Y_siegel2.slice(0, 2);
    var X_siegel3 = X_siegel2.slice(0, 2);

  var pdf_breite = parseInt(jQuery('#papier_1').css('width'));
  var pdf_hohe = parseInt(jQuery('#papier_1').css('height'));

  var textfeld_breite =     parseInt(jQuery('#has_gv_formLabelInputSignerVorschau').css('width'));
  var textfeld_hohe =     parseInt(jQuery('#has_gv_formLabelInputSignerVorschau').css('height'));
  var bildhohe = parseInt(jQuery('#siegelBild').attr('height'));
  var bildbreite = parseInt(jQuery('#siegelBild').attr('width'));

  document.getElementById("has_gv_formLabelInputSignerVorschau").style.left = X_siegel +'px';
  document.getElementById("has_gv_formLabelInputSignerVorschau").style.top = Y_siegel+'px';


  jQuery('#Y_siegel_value_Signator').attr('max', bildhohe);
  jQuery('#X_siegel_value_Signator').attr('max', bildbreite);




  //
  //jQuery.ajax({
  //              type: 'POST',
  //              url: "<?php //echo admin_url('admin-ajax.php'); ?>//",
  //              data: {action: "has_gv_formLabelInputSignerRange",
  //
  //                  'Y_siegel2':Y_siegel3,
  //                  'X_siegel2':X_siegel3,
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
  //             }, });

}

</script>