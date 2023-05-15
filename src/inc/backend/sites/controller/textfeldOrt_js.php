<?php ?>

<script type="text/javascript" >


function textfeldOrtf() {

  var tab = jQuery("#formular_tab_ID").val();
  var has_gv_formLabelInputLocation =  jQuery("#has_gv_formLabelInputLocation").val();

  jQuery.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: {
        action: "textfeldOrt",
        'has_gv_formLabelInputLocation': has_gv_formLabelInputLocation,
        'tab' : tab
        
      },
      success: function (data) {
        var json = JSON.stringify(data);
        console.log(data);
        var myJson = JSON.parse(json);

        
        document.getElementById("has_gv_formLabelInputLocationVorschau").innerHTML = myJson.data.inputTexfeld + ' %Musterort';
        console.log(myJson.data.inputTexfeld);
       
     
    
      },
    });

    } 




    function textfeldOrtSpeichernf() {
      var tab = jQuery("#formular_tab_ID").val();
  var has_gv_formLabelLocationBGcolor =  jQuery("#has_gv_formLabelLocationBGcolor").val();
  var has_gv_formLabelLocationFcolor = jQuery("#has_gv_formLabelLocationFcolor").val();
  var has_gv_formLabelInputLocation =  jQuery("#has_gv_formLabelInputLocation").val();
  
  var tab = jQuery("#formular_tab_ID").val();;


jQuery.ajax({
    type: 'POST',
    url: "<?php echo admin_url('admin-ajax.php'); ?>",
    data: {
      action: "textfeldOrtSpeichern",
      'has_gv_formLabelLocationBGcolor': has_gv_formLabelLocationBGcolor,
      'has_gv_formLabelLocationFcolor': has_gv_formLabelLocationFcolor,
      'has_gv_formLabelInputLocation': has_gv_formLabelInputLocation,
      'tab' : tab
      
    },
    success: function (data) {
      var json = JSON.stringify(data);
      var myJson = JSON.parse(json);
      console.log(myJson);

      document.getElementById("has_gv_formLabelInputLocationVorschau").style.color = myJson.data.has_gv_formLabelLocationBGcolor;

document.getElementById("has_gv_formLabelInputLocationVorschau").style.backgroundColor  = myJson.data.has_gv_formLabelLocationFcolor;


  
    },
  });

  } 

                /* ===CENTER=== */
function has_gv_formLabelLocationCENTERf(){   
  var tab = jQuery("#formular_tab_ID").val();
  var name = jQuery("#has_gv_formLabelLocationCENTER").val();
  var rahmenOrt; 
  if(jQuery("#has_gv_formLabelLocationCENTER").is(':checked')){
    rahmenOrt = true;
      document.getElementById("has_gv_formLabelInputLocationVorschau").style.borderStyle = 'solid';
      document.getElementById("has_gv_formLabelInputLocationVorschau").style.borderWidth  = 'thin';

    }else{
      rahmenOrt = false;
      document.getElementById("has_gv_formLabelInputLocationVorschau").style.borderStyle = 'none';
    }
    jQuery.ajax({
                type: 'POST',
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {action: "has_gv_formLabelLocationCENTER", 
                  has_gv_formLabelLocationCENTER:name,
                  'tab' : tab,
                  'rahmenOrt' : rahmenOrt,
                },               
                success: function(data){
                  var json = JSON.stringify(data);
      console.log(data);
      var myJson = JSON.parse(json);
                  
                // location.reload();
                M.toast({html: 'Rahmen Ort'})
                    },
                });} 



                function showVal8(newVal) {

  var tab = jQuery("#formular_tab_ID").val();

var Y_siegel = document.getElementById("Y_siegel_value_Ort").value; //valR
var Y_siegel_px = document.getElementById("money2_Ort").innerHTML = Y_siegel +"px";

var X_siegel = document.getElementById("X_siegel_value_Ort").value; //valR
var X_siegel_px = document.getElementById("money_Ort").innerHTML = X_siegel +"px";
var pdf_breite = parseInt(jQuery('#papier_1').css('width'));
var pdf_hohe = parseInt(jQuery('#papier_1').css('height'));
var bildhohe = parseInt(jQuery('#has_gv_formSiegelImageVorschau').attr('height'));
var bildbreite = parseInt(jQuery('#has_gv_formSiegelImageVorschau').attr('width'));

var textfeld_breite =     parseInt(jQuery('#has_gv_formLabelInputLocationVorschau').css('width'));
var textfeld_hohe =     parseInt(jQuery('#has_gv_formLabelInputLocationVorschau').css('height'));

document.getElementById("has_gv_formLabelInputLocationVorschau").style.marginLeft = X_siegel_px;
document.getElementById("has_gv_formLabelInputLocationVorschau").style.marginTop = Y_siegel_px;

      jQuery('#Y_siegel_value_Ort').attr('max', bildhohe - textfeld_hohe);
      jQuery('#X_siegel_value_Ort').attr('max', bildbreite -  textfeld_breite );

//  alert(bildhohe + ' bildhohe');
//  alert(bildbreite + ' bildbreite');



jQuery.ajax({
              type: 'POST',
              url: "<?php echo admin_url('admin-ajax.php'); ?>",
              data: {action: "has_gv_formLabelInputOrtRange", 
                  
                  'pdf_hohe' : pdf_hohe,
                  'pdf_breite' : pdf_breite,
                  'textfeld_hohe' : textfeld_hohe,
                  'textfeld_breite' : textfeld_breite,
                  'X_siegel' : X_siegel,
                  'Y_siegel' : Y_siegel,
                  'bildhohe' : bildhohe,
                  'bildbreite' : bildbreite,

                  'tab' : tab
                   },               
              success: function(data){
            
                  var json = JSON.stringify(data);

                   var myJson = JSON.parse(json);
                   console.log(myJson.data);


             
             }, }); 


}


//Range Signatur Bild





</script>


