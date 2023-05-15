
   <!--/*////////////////////////////////////////////////////////////
  //              PDF Template                                    //
 //                                                              //
///////////////////////////////////////////////////////////////-->

<div class="row">

<div class="col s1 ">
<div class="switch">
                        <label>
                            <input type="checkbox" name="has_gv_formSichtbarkeitPDF_TemplateCheckboxID" id="has_gv_formSichtbarkeitPDF_TemplateCheckboxID" onchange="has_gv_formSichtbarkeitPDF_TemplateCheckboxIDf(this);" 
                            <?php if (get_option( 'has_gv_'.$form_tab.'SichtbarkeitPDF_TemplateCheckboxID' ) == 'sichtbar' ){echo ' checked';} ?> value="<?php echo get_option( 'has_gv_'.$form_tab.'SichtbarkeitPDF_TemplateCheckboxID' );  ?>">   

                            <span class="lever"></span>
                        </label>
                    </div>
    </div>
    
    <div class="col s7 ">
      <span class="material-symbols-outlined">picture_as_pdf</span>
      <span class="flow-text" >PDF Template</span>
    </div>

    <div class="col s4">
      <ul class="collapsible">
        <li class="">
          <div class="collapsible-header" tabindex="0"><i class="material-icons">local_library</i>Informationen Gravity Forms PDF Template</div>
          <div class="collapsible-body" style="">

              <p>Mit dem intigrierten Tool können Sie spielend leicht eine PDF Vorlage für das abgesendete Formular erstellen. </p>
              <p>Im Bereich "Gravity Forms dynamische Formular Felder" werden nach der Auswahl eines Gravity Formulars alle dynmischen Felder angezeigt.</p>
              <p>Erstellen Sie Ihr Dokument einfach in einem Textverabeitungsprogramm wie MS Word oder Libre Office und fügen den Inhalt mit Copy Paste in den PDF Template Editor.</p>
              <p>Nun können sie die Dynamischen Felder <strong>{Feld:1}</strong> an die von Ihnen vorgesehne Stelle einfügen. </p>
              <p class="weitereInfos">weitere Infos:  <a target="_blank" href="https://www.handysignatur-after-submit.at/dokumentation/pdf-template//">Dokumentation</a></p>

          </div>
        </li>
      </ul>
    </div>

</div>
    
<div class="row" id="sichtbarkeitPDF_Template">


<div class="row">
<div class="col s8">
  <?php        
$content = wp_kses_post( get_option( 'has_gv_'.$form_tab.'temp_content' ) );
$editor_id = 'mycustomeditor';
$settings  = array( 
   

    'editor_height' => 900, // In pixels, takes precedence and has no default value
  
    'textarea_rows' => 10,  // Has no visible effect if editor_height is set, default is 20

);





 
 wp_editor( $content, $editor_id, $settings );

?>

</div><!--col s8 -->    

<div class="col s4">
  <div class="" id="auswahlPDFInfo" >
      <div class="auswahlPDFInfo_header" >Gravity Forms dynamische Formular Felder</div>
      <div class="fields_kasten" >
    
              <span id="gf_felder">
            <?php echo get_option( 'has_gv_'.$form_tab.'GF_fields' ); ?>
            </span>
     
      </div>
    </div>
</div>
<!--col s4 -->
</div>




<div class="row">

<div class="col s8"> 
    </div>

    <div class="col s2"> 
    <button type="submit" class="waves-effect waves-light btn  green darken-1" name="has_gv_formFTPSpeichern" id="has_gv_formFTPSpeichern" onclick="insert_Temp('mycustomeditor');">Speichern</button>

    </div>
    <div class="col s2"> 
    <a id="PDF_bearbeiten_link" class="waves-effect waves-light btn blue darken-1" href="<?php echo get_option( 'has_gv_'.$form_tab.'_PDF_bearbeiten_Link' );?>">GravitiForm</a>
    </div>
  </div>


  

  <hr class="hr_linie">
</div>
