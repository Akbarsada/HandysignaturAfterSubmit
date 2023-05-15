<!----------------------------------Textfeld Signator-------------------------------------------> 
<div id="sichtbarkeitTextfeldSignator"  style="padding: 20px;">
<hr class="hr_linie">
  <div class="row">
    <div class="col s4">Position Textfeld SIGNATOR</div>
    <div class="col s8">
    
    </div>
  </div>
  <div class="row">
    <div class="col s4">Position X</div>
    <div class="col s6">
      <div>
        <input type="range" name="range2_Signator" id="X_siegel_value_Signator" value="<?php //echo get_option( 'has_gv_'.$form_tab.'LabelSignerPositionMARGIN_LEFT');?>" oninput="showVal4(this.value)" onchange="showVal4(this.value)" step="1" min="0" max="300" />
      </div>
    </div>
    <div class="col s2"> <span id="range_Signator" style="display:none;">0</span>
      <div id="money_Signator"><?php echo get_option( 'has_gv_'.$form_tab.'LabelSignerPositionMARGIN_LEFT');?>px</div>
    </div>
  </div>
  <div class="row">
    <div class="col s4">Position Y</div>
    <div class="col s6">
      <div>
        <input type="range" name="range2_Signator" id="Y_siegel_value_Signator" value="<?php // echo get_option( 'has_gv_'.$form_tab.'LabelSignerPositionMARGIN_TOP');?>" oninput="showVal4(this.value)" onchange="showVal4(this.value)" step="1" min="0" max="200"  />
      </div>
    </div>
    <div class="col s2"> <span id="range2_Signator" style="display:none;">0</span>
      <div id="money2_Signator"><?php echo get_option( 'has_gv_'.$form_tab.'LabelSignerPositionMARGIN_TOP');?>px</div>
    </div>
  </div>
  <div class="row">


    <div class="col s6">Textfarbe</div>
  </div>
  <div class="row">

    <div class="col s12">
      <div id="farbe-SIGNATROR_has_gv_LABEL_BG_color1ID" class="file-field">
        <div class="file-path-wrapper">
          <input type="text"  id="has_gv_formLabelSignerFcolor" value="#000000"  name="has_gv_formLabelSignerFcolor"   value="<?php echo get_option('has_gv_'.$form_tab.'LabelSignerFcolor') ?>" />
        </div>
      </div>
    </div>







  </div>
  <div class="row">

    <div class="col s6">Hintergrundfarbe</div>

  </div>

  <div class="row">


<div class="col s12">
  <div id="farbe-SIGNATOR_has_gv_LABEL_Font_color1ID" class="file-field">
    <div class="file-path-wrapper">
      <input type="text"   id="has_gv_formLabelSignerBGcolor" value="#ffffff"   name="has_gv_formLabelSignerBGcolor"    value="<?php echo get_option('has_gv_'.$form_tab.'LabelSignerBGcolor') ?>" />
    </div>
  </div>
</div>
</div>


  <div class="row">

    <div class="col s2">
      <div class="input-field">
      <button type="button" class="waves-effect waves-light btn green darken-1" name="textfeldSignatorSpeichern" id="textfeldSignatorSpeichern" onclick="textfeldSignatorSpeichernf(this);">Speichern</button>      </div>
    </div>
  </div>















</div>
<!-- sichtbarkeitTextfeldSignator --> 
<!----------------------------------Textfeld Signator-------------------------------------------> 