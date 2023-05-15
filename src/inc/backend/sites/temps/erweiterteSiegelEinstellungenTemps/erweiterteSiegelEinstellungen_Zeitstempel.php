<!------------------------------Textfeld Signatur Zeitstempel-----------------------------------> 

<div id="sichtbarkeitTextfeldZeitstempel" style="padding: 20px;">
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
      <input type="range" name="range_Timestamp" id="X_siegel_value_Timestamp" value="<?php //echo get_option( 'has_gv_'.$form_tab.'LabelTimestampPositionMARGIN_LEFT');?>" oninput="showVal6(this.value)" onchange="showVal6(this.value)" step="1" min="0" max="<?php echo(get_option('has_gv_'.$form_tab.'PDF_breite')-get_option('has_gv_'.$form_tab.'LabelTimestampWidth')) ?>"  />
      </div>
    </div>
    <div class="col s2"> <span id="range_Timestamp" style="display:none;">0</span>
      <div id="money_Timestamp"><?php echo get_option( 'has_gv_'.$form_tab.'LabelTimestampPositionMARGIN_LEFT');?>px</div>
    </div>
  </div>
  <div class="row">
    <div class="col s4">Position Y</div>
    <div class="col s6">
      <div>
      <input type="range" name="range2_Timestamp" id="Y_siegel_value_Timestamp" value="<?php // echo get_option( 'has_gv_'.$form_tab.'LabelTimestampPositionMARGIN_TOP');?>" oninput="showVal6(this.value)" onchange="showVal6(this.value)" step="1" min="0" max="<?php echo( get_option('has_gv_'.$form_tab.'PDF_hohe')-get_option('has_gv_'.$form_tab.'LabelTimestampHeigth')) ?>"  />
      </div>
    </div>
    <div class="col s2"> <span id="range" style="display:none;">0</span>
      <div id="money2_Timestamp"><?php echo get_option( 'has_gv_'.$form_tab.'LabelTimestampPositionMARGIN_TOP');?>px</div>
    </div>
  </div>
  <div class="row">


    <div class="col s6">Textfarbe</div>
  </div>
  <div class="row">
    <div class="col s12">
      <div id="farbe-component2" class="file-field">
        <div class="file-path-wrapper">
          <input type="text" id="has_gv_formLabelTimestampFcolor" value="#000000"  name="has_gv_formLabelTimestampFcolor" value=" <?php echo esc_attr( get_option( 'has_gv_'.$form_tab.'LabelTimestampFcolor' ) ) ?>" />
        </div>
      </div>
    </div>
  
  </div>
  <div class="row">

    <div class="col s6">Hintergrundfarbe</div>

  </div>

  <div class="row">

    <div class="col s12">
      <div id="farbe-component2" class="file-field">
        <div class="file-path-wrapper">
          <input type="text"  id="has_gv_formLabelTimestampBGcolor" value="#ffffff"  name="has_gv_formLabelTimestampBGcolor"  value="<?php echo esc_attr( get_option( 'has_gv_'.$form_tab.'LabelTimestampBGcolor' ) )?>" />
        </div>
      </div>
    </div>
  </div>




  <div class="row">

    <div class="col s2">
      <div class="input-field">
      <button type="button" class="waves-effect waves-light btn green darken-1" name="textfeldZeitstempelSpeichern" id="textfeldZeitstempelSpeichern" onclick="textfeldZeitstempelSpeichernf(this);">Speichern</button>      </div>
    </div>
  </div>










</div>
<!-- sichtbarkeitTextfeldZeitstempel -->
<!------------------------------Textfeld Signatur Zeitstempel-----------------------------------> 