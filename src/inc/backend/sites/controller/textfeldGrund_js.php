<?php ?>

<script type="text/javascript" >


function textfeldGrundf() {

  var tab = jQuery("#formular_tab_ID").val();
  var has_gv_formLabelInputGrund =  jQuery("#has_gv_formLabelInputGrund").val();

  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: {
        action: "textfeldGrund",
        'has_gv_formLabelInputGrund': has_gv_formLabelInputGrund,
        'tab' : tab
        
      },
      success: function (data) {
        var json = JSON.stringify(data);
        console.log(data);
        var myJson = JSON.parse(json);
       
        console.log(myJson);


        document.getElementById("has_gv_formLabelInputGrundVorschau").innerHTML = myJson.data.inputTexfeld + ' %Grund';
        console.log(myJson.data.inputTexfeld);
    
      },
    });

    } 




    function textfeldGrundSpeichernf() {
  var tab = jQuery("#formular_tab_ID").val();
  var has_gv_formLabelGrundBGcolor =  jQuery("#has_gv_formLabelGrundBGcolor").val();
  var has_gv_formLabelGrundFcolor = jQuery("#has_gv_formLabelGrundFcolor").val();
  var has_gv_formLabelInputGrund = jQuery("#has_gv_formLabelInputGrund").val();

  
  var tab = jQuery("#formular_tab_ID").val();


jQuery.ajax({
    type: 'POST',
    url: "<?php echo admin_url('admin-ajax.php'); ?>",
    data: {
      action: "textfeldGrundSpeichern",
      'has_gv_formLabelGrundBGcolor': has_gv_formLabelGrundBGcolor,
      'has_gv_formLabelGrundFcolor': has_gv_formLabelGrundFcolor,
      'has_gv_formLabelInputGrund': has_gv_formLabelInputGrund,
      'tab' : tab
      
    },
    success: function (data) {
      var json = JSON.stringify(data);
      var myJson = JSON.parse(json);
      console.log(myJson);

   
      document.getElementById("has_gv_formLabelInputGrundVorschau").style.color = myJson.data.has_gv_formLabelGrundBGcolor;

document.getElementById("has_gv_formLabelInputGrundVorschau").style.backgroundColor  = myJson.data.has_gv_formLabelGrundFcolor;


  
    },
  });

  } 

                /* ===CENTER=== */
function has_gv_formLabelGrundCENTERf(){   
  var tab = jQuery("#formular_tab_ID").val();
  var name = jQuery("#has_gv_formLabelGrundCENTER").val();
  var rahmenGrund;
    if(jQuery("#has_gv_formLabelGrundCENTER").is(':checked')){
      rahmenGrund = true;
      document.getElementById("has_gv_formLabelInputGrundVorschau").style.borderStyle = 'solid';
      document.getElementById("has_gv_formLabelInputGrundVorschau").style.borderWidth  = 'thin';
    }else{
      rahmenGrund = false;
      document.getElementById("has_gv_formLabelInputGrundVorschau").style.borderStyle = 'none';
    }
    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formLabelGrundCENTER", 
                  has_gv_formLabelGrundCENTER:name,
                  'tab' : tab,
                  'rahmenGrund' : rahmenGrund,
                },               
                success: function(data){
                  var json = JSON.stringify(data);
      console.log(data);
      var myJson = JSON.parse(json);
                  
        //          location.reload();
                M.toast({html: 'Rahmen Grund'})
                    },
                });} 





//Range Signatur Bild


function showVal5(newVal) {
  
  var tab = jQuery("#formular_tab_ID").val();
  var Y_siegel = document.getElementById("Y_siegel_value_Grund").value; //valR
  var Y_siegel_px = document.getElementById("money2_Grund").innerHTML = Y_siegel +"px";

  var X_siegel = document.getElementById("X_siegel_value_Grund").value; //valR
  var X_siegel_px = document.getElementById("money_Grund").innerHTML = X_siegel +"px";
  var pdf_breite = parseInt(jQuery('#papier_1').css('width'));
  var pdf_hohe = parseInt(jQuery('#papier_1').css('height'));

  var textfeld_breite =     parseInt(jQuery('#has_gv_formLabelInputGrundVorschau').css('width'));
  var textfeld_hohe =     parseInt(jQuery('#has_gv_formLabelInputGrundVorschau').css('height'));
  var bildhohe = parseInt(jQuery('#has_gv_formSiegelImageVorschau').attr('height'));
  var bildbreite = parseInt(jQuery('#has_gv_formSiegelImageVorschau').attr('width'));

  document.getElementById("has_gv_formLabelInputGrundVorschau").style.marginLeft = X_siegel_px;
  document.getElementById("has_gv_formLabelInputGrundVorschau").style.marginTop = Y_siegel_px;


        jQuery('#Y_siegel_value_Grund').attr('max', bildhohe - textfeld_hohe);
        jQuery('#X_siegel_value_Grund').attr('max', bildbreite -  textfeld_breite );

// alert(attach_bild_breite);
// alert(attach_bild_hohe);

  jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formLabelInputGrundRange", 
                    
                    'pdf_hohe' : pdf_hohe,
                    'pdf_breite' : pdf_breite,
                    'textfeld_hohe' : textfeld_hohe,
                    'textfeld_breite' : textfeld_breite,
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


</script>


