
<!------------------------------------------Siegel Bild-------------------------------------------> 
<div id="sichtbarkeitSiegelbild"  style="padding: 20px;">
<hr class="hr_linie">
<div class="row">
    <div class="col s4">Siegelbild hochladen</div>
    <div class="col s8">
    <form action="#">
    <div class="file-path-wrapper"> 
    <!-- Inputfield Button  -->
      <div class="waves-effect waves-light btn yellow darken-1 file-field vorschaubild_button"> <span>PNG  JPG</span>
      <input type="file" name="has_gv_formSiegelHintergrundBildButton" id="has_gv_formSiegelHintergrundBildButton" 
      value="  <?php echo get_option('has_gv_'.$form_tab.'SiegelImage')  ?>">
      </div>
    <!-- Inputfield Button  --> 
        <!-- Inputfield Bild  -->
        <input class="file-path validate nichtAnzeigen" name="has_gv_formSiegelImage" id="has_gv_formSiegelImage" type="text" 
        value="">
        <!--Inputfield Bild  --> 
      </div>
    
    </form>

<!--    <button type="submit"  class="waves-effect waves-light btn green darken-1" name="has_gv_formHauptSiegelSpeichernf" id="has_gv_formHauptSiegelSpeichernf" -->
<!--    onclick="has_gv_formHauptSiegelSpeichernf(this);">Speichern</button>-->


    </div>
  </div>
  <div class="row">
  <div class="col s4">Position X</div>
  <div class="col s6">
    <div>
    <input type="range" name="range" id="X_siegel_value" value="<?php echo get_option( 'has_gv_'.$form_tab.'SiegelPositionMARGIN_LEFT');?>" oninput="showVal(this.value)" onchange="showVal(this.value)" step="1" min="0" max="<?php echo ( get_option('has_gv_'.$form_tab.'PDF_breite') - get_option('has_gv_'.$form_tab.'SiegelImageWidth')); ?>"  />

    </div>
  </div>
  <div class="col s2"> <span id="range" style="display:none;">0</span>
    <div id="money"><?php echo get_option( 'has_gv_'.$form_tab.'SiegelPositionMARGIN_LEFT');?>px</div>
  </div>
</div>

<div class="row">
  <div class="col s4">Position Y</div>
  <div class="col s6">
    <div>
    <input  type="range" name="range2" id="Y_siegel_value" value="<?php echo get_option( 'has_gv_'.$form_tab.'SiegelPositionMARGIN_TOP');?>" oninput="showVal(this.value)" onchange="showVal(this.value)" step="1" min="0" max="<?php echo ( get_option('has_gv_'.$form_tab.'PDF_hohe') -  get_option('has_gv_'.$form_tab.'SiegelImageHeigth')); ?>"  />
    </div>
  </div>
  <div class="col s2"> <span id="range2" style="display:none;">0</span>
    <div id="money2"><?php echo get_option( 'has_gv_'.$form_tab.'SiegelPositionMARGIN_TOP');?>px</div>
  </div>
</div>



<div class="row">
    <div class="col s4">Bild Informationen</div>
    <div class="col s4" id="info_siegel_hohe">
     Höhe: <?php echo  get_option('has_gv_'.$form_tab.'SiegelImageHeigth') ?> px
    </div>
    <div class="col s4" id="info_siegel_breite">
   Breite: <?php echo  get_option('has_gv_'.$form_tab.'SiegelImageWidth') ?> px
    </div>
</div>
<div class="row">
  <div class="col s4"></div>
  <div class="col s5"> </div>
  <div class="col s3">
  
  </div>
</div>
</div><!-- sichtbarkeitSiegelbild -->
<!------------------------------------------Siegel Bild-------------------------------------------> 