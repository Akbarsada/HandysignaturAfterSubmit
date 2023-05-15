  <!--/*////////////////////////////////////////////////////////////
  //              Formularauswahl                                 //
 //                                                              //
///////////////////////////////////////////////////////////////-->




<div class="row">

<div class="col s1 ">
<div class="switch">
                        <label>
                            <input type="checkbox" name="has_gv_formSichtbarkeitFormularAuswahlCheckboxID" id="has_gv_formSichtbarkeitFormularAuswahlCheckboxID" onchange="has_gv_formSichtbarkeitFormularAuswahlCheckboxIDf(this);" 
                            <?php if (get_option( 'has_gv_'.$form_tab.'SichtbarkeitFormularAuswahlCheckboxID' ) == 'sichtbar' ){echo ' checked';} ?> value="<?php echo get_option( 'has_gv_'.$form_tab.'SichtbarkeitFormularAuswahlCheckboxID' );  ?>">   

                            <span class="lever"></span>
                        </label>
                    </div>
    </div>
    
    <div class="col s7 ">
      <span class="material-symbols-outlined">article</span>
      <span class="flow-text" >Formularauswahl</span>
    </div>

    <div class="col s4">
      <ul class="collapsible">
        <li class="">
          <div class="collapsible-header" tabindex="0"><i class="material-icons">local_library</i>Informationen Formularauswahl</div>
          <div class="collapsible-body" style="">
              <h6>zu beachten</h6>
              <p>Um ein Gravity Formular auswählen zu können, muss das Formular <strong>erstellt</strong>  und <strong>aktiv</strong>  sein, zu dem darf es nicht bereits als Signaturformular ausgewählt worden sein. Falls dies
                  der Fall ist, ist das Formular nicht auswählbar und rot hinterlegt.</p>
             <p>Das Formular muss als PDF ausgegeben werden, falls das nicht der Fall ist erscheint das Formular nicht in der Auswahlliste.</p>
              <p class="weitereInfos">weitere Infos:  <a target="_blank" href="https://www.handysignatur-after-submit.at/dokumentation/formularauswahl/">Dokumentation</a></p>
              <span style="margin-right: 5px;">gehe zu: </span>
              <a class="waves-effect waves-light btn blue darken-1" href="https://smartcoding.at/wp-admin/admin.php?page=gf_edit_forms">GravitiForm</a>
              <a class="waves-effect waves-light btn blue darken-1" href="https://smartcoding.at/wp-admin/admin.php?page=gf_settings&subview=PDF#/">GravitiForm PDF </a>
          </div>
        </li>
      </ul>
    </div>

</div>
    
<div class="row" id="sichtbarkeitFormularAuswhal">
<div class="col s8">
<?php
$selected_form_array = array();                  
array_push($selected_form_array, get_option( 'has_gv_form1ID'), get_option( 'has_gv_form2ID'), get_option( 'has_gv_form3ID'), get_option( 'has_gv_form4ID'),get_option( 'has_gv_form5ID') );
?>         
                  
            <select class="icons" name="has_gv_formID"  onchange="has_gv_formIDf(this);" id="has_gv_formID">
             
              <option value="keins" selected>Wählen sie das zu siegnierende Formular aus</option>
              <?php
                foreach($all_gf_array_meta as $value){
                  $all_gf_array2 = get_object_vars( $value);
                  foreach($all_gf_array2 as $all_gf_array3){
                    $newValue  = json_decode( $all_gf_array3, true); 
                    $PDF_active = $newValue['gfpdf_form_settings'][key($newValue['gfpdf_form_settings'])]['active'];
                    $PDF_name = $newValue['gfpdf_form_settings'][key($newValue['gfpdf_form_settings'])]['name'];
                    $PDF_pdf_size = $newValue['gfpdf_form_settings'][key($newValue['gfpdf_form_settings'])]['pdf_size'];
                    $PDF_orientation = $newValue['gfpdf_form_settings'][key($newValue['gfpdf_form_settings'])]['orientation'];
                    $PDF_font_colour = $newValue['gfpdf_form_settings'][key($newValue['gfpdf_form_settings'])]['font_colour'];
                    $PDF_background_color = $newValue['gfpdf_form_settings'][key($newValue['gfpdf_form_settings'])]['background_color'];
                    $PDF_password = $newValue['gfpdf_form_settings'][key($newValue['gfpdf_form_settings'])]['password'];
                    
                    $GF_id = $newValue['id'];
                    $GF_infos =  $wpdb->get_results("SELECT  `is_active`, `is_trash`, `title`, `id` FROM {$wpdb->prefix}gf_form WHERE  `id` =  $GF_id "); 
                    foreach($GF_infos as $GF_info){
                

                          echo '<option '; 
                          if( (empty($PDF_active)) or (empty($GF_info->is_active)) or (!empty($GF_info->is_trash)) or (in_array($GF_id, $selected_form_array)) ){echo ' disabled';}
                          echo ' value="';
                          echo   $GF_info->id;
                          echo '" '; 
                          selected( $GF_info->id == get_option('has_gv_'.$form_tab.'ID') , true, true );
                          echo '>';
                          echo 'ID: ';
                          echo $GF_info->id;
                          echo '  |  ';
                          echo $GF_info->title;
                          echo '</option>';     
                          }      
                      }
                  }  

              ?>
            </select>
</div><!--col s8 -->    

<div class="col s4">
  <div class="" id="auswahlPDFInfo" >
      <div class="auswahlPDFInfo_header" >PDF Informationen</div>
      <div class="fields_kasten" >
      
          <div class="row">
            <div class="col s4" >Datei Name</div>
            <div class="col s4" id="PDFdateiName"><?php echo get_option( 'has_gv_'.$form_tab.'_PDF_name' ); ?></div>
          </div>
          <div class="row">
            <div class="col s4"  >Format</div>
            <div class="col s4" id="PDFdateiFormat"><?php echo get_option( 'has_gv_'.$form_tab.'_PDF_pdf_size' ); ?> </div>
          </div>
          <div class="row">
            <div class="col s4"  >Ausrichtung</div>
            <div class="col s4" id="PDFdateiAusrichtung"><?php echo get_option( 'has_gv_'.$form_tab.'_PDF_orientation' ); ?> </div>
          </div>
          <div class="row">
            <div class="col s4"  >Schrift Farbe</div>
            <div class="col s4" id="PDFdateiSchrift"><?php echo get_option( 'has_gv_'.$form_tab.'_PDF_font_colour' );?></div>
          </div>
          <div class="row">
            <div class="col s4"  >Hintergrund Farbe</div>
            <div class="col s4" id="PDFdateiHintergrund"><?php echo get_option( 'has_gv_'.$form_tab.'_PDF_background_color' );?> </div>
          </div>
          <div class="row">
            <div class="col s4"  >Passwort</div>
            <div class="col s4" id="PDFdateiPasswort"><?php echo get_option( 'has_gv_'.$form_tab.'_PDF_password' );?> </div>
          </div>

          
     
      </div>
    </div>
</div>
<!--col s4 -->

</div>