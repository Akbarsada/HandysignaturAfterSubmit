
   <!--/*////////////////////////////////////////////////////////////
  //              SIGNATURART                                     //
 //                                                              //
///////////////////////////////////////////////////////////////-->



<div class="row"  > 
<div class="col s1">
  
<div class="switch">
                        <label>
                            <input type="checkbox" name="has_gv_formSichtbarkeitSignaturArtCheckboxID" id="has_gv_formSichtbarkeitSignaturArtCheckboxID" onchange="has_gv_formSichtbarkeitSignaturArtCheckboxIDf(this);" 
                            <?php if (get_option( 'has_gv_'.$form_tab.'SichtbarkeitSignaturArtCheckboxID' ) == 'sichtbar' ){echo ' checked';} ?> value="<?php echo get_option( 'has_gv_'.$form_tab.'SichtbarkeitSignaturArtCheckboxID' );  ?>">                              
                            <span class="lever"></span>
                        </label>
                    </div>
</div>
  <div class="col s7"> <span class="material-symbols-outlined">draw</span> <span class="flow-text" >Signaturart</span> </div>
  <div class="col s4">
      <ul class="collapsible">
        <li class="">
          <div class="collapsible-header" tabindex="0"><i class="material-icons">local_library</i>Zertifikats Datei</div>
          <div class="collapsible-body" style="">
            <table>
              <thead>
                <tr>
                  <th>Format</th>
                  <th>Pixel</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>DIN A3</td>
                  <td>3508 x 4961 Pixel</td>
                </tr>
                <tr>
                  <td>DIN A4</td>
                  <td>2480 x 3508 Pixel</td>
                </tr>
                <tr>
                  <td>DIN A5</td>
                  <td>1748 x 2480 Pixel</td>
                </tr>
                <tr>
                  <td>DIN A6</td>
                  <td>1240 x 1748 Pixel</td>
                </tr>
                <tr>
                  <td>DIN A7</td>
                  <td>874 x 1240 Pixel</td>
                </tr>
                <tr>
                  <td>DIN A8</td>
                  <td>614 x 874 Pixel</td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="row" id="sichtbarkeitSignaturArt" style="display:none;">
  <div class="col s8">
    <select class="icons" name="has_gv_formSignaturForm" onchange="has_gv_formSignaturFormf(this);" id="has_gv_formSignaturForm">
      <option  value="single" <?php selected( 'single' ==  esc_attr( get_option( 'has_gv_'.$form_tab.'SignaturForm' ) ) ) ?> >Single Signatur</option>
      <option value="stapel"  <?php selected( 'stapel'  ==  esc_attr( get_option( 'has_gv_'.$form_tab.'SignaturForm' ) ) ) ?> >Stapel Signatur</option>
      <option value="pkc12"  <?php selected( 'pkc12'  ==  esc_attr( get_option( 'has_gv_'.$form_tab.'SignaturForm' ) ) ) ?> >PKCS12 Signatur</option>
    </select>
  </div>
  <!--col s8 -->
  
  <div class="col s4">
  <div class="" id="auswahlPDFInfo" >
      <div class="auswahlPDFInfo_header" >Signaturart Informationen</div>
      <div class="fields_kasten" >
      
          <div class="row">
            <div class="col s4" >Signarturart</div>
            <div class="col s8" id="signaturart_vorschau"><?php echo get_option( 'has_gv_'.$form_tab.'SignaturForm' ); ?></div>
          </div>
         
     
      </div>
    </div>
</div>
<!--col s4 -->

</div>
