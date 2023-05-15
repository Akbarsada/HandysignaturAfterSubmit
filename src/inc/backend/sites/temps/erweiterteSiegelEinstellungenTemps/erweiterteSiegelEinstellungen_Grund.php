
<!------------------------------Textfeld Signator Grund-----------------------------------------> 

<div id="sichtbarkeitTextfeldGrund"  style="padding: 20px;">
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
      <input type="range" name="range_Grund" id="X_siegel_value_Grund" value="<?php echo get_option( 'has_gv_'.$form_tab.'LabelGrundPositionMARGIN_LEFT' ); ?>" oninput="showVal5(this.value)" onchange="showVal5(this.value)" step="1" min="0" max="<?php echo ( get_option('has_gv_'.$form_tab.'PDF_breite') - get_option('has_gv_'.$form_tab.'LabelGrundWidth')) ?>"  />
      </div>
    </div>
    <div class="col s2"> <span id="range_Grund" style="display:none;">0</span>
      <div id="money_Grund"><?php echo get_option( 'has_gv_'.$form_tab.'LabelGrundPositionMARGIN_LEFT' ); ?>px</div>
    </div>
  </div>
  <div class="row">
    <div class="col s4">Position Y</div>
    <div class="col s6">
      <div>
      <input type="range" name="range2_Grund" id="Y_siegel_value_Grund" value="<?php echo get_option( 'has_gv_'.$form_tab.'LabelGrundPositionMARGIN_TOP' ); ?>" oninput="showVal5(this.value)" onchange="showVal5(this.value)" step="1" min="0" max="<?php echo(get_option('has_gv_'.$form_tab.'PDF_hohe')-get_option('has_gv_'.$form_tab.'LabelGrundHeigth')) ?>"  />
      </div>
    </div>
    <div class="col s2"> <span id="range2_Grund" style="display:none;">0</span>
      <div id="money2_Grund"><?php echo get_option( 'has_gv_'.$form_tab.'LabelGrundPositionMARGIN_TOP' ); ?>px</div>
    </div>
  </div>
  <div class="row">


    <div class="col s6">Textfarbe</div>
  </div>
  <div class="row">
    <div class="col s12">
      <div id="farbe-component2" class="file-field">
        <div class="file-path-wrapper">
        <input type="text"  id="has_gv_formLabelGrundFcolor" value="#effeff"  name="has_gv_formLabelGrundFcolor" value=" <?php echo esc_attr( get_option( 'has_gv_'.$form_tab.'LabelGrundFcolor' ) ) ?>" />
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
          <input type="text"  id="has_gv_formLabelGrundBGcolor" value="#effeff"   name="has_gv_formLabelGrundBGcolor"  value="<?php echo esc_attr( get_option( 'has_gv_'.$form_tab.'LabelGrundBGcolor' ) )?>" />
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col s4">
    <div class="switch">
        <label>
 <input type="checkbox" name="has_gv_formLabelGrundCENTER" id="has_gv_formLabelGrundCENTER" onchange="has_gv_formLabelGrundCENTERf(this);"
      <?php if (get_option( 'has_gv_'.$form_tab.'LabelGrundWRAP' ) == 'true' ){echo ' checked';} ?> >
          <span class="lever"></span> Rahmen </label>
      </div>
    </div>
    <div class="col s8">
      <div class="input-field">
        <input id="has_gv_formLabelInputGrund" type="text" placeholder="Signatur Grund:" data-length="10" name="has_gv_formLabelInputGrund" oninput="textfeldGrundf(this.value)"  onchange="textfeldGrundf(this);"  value="<?php echo  get_option(  'has_gv_'.$form_tab.'LabelInputGrund' ) ?>">
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col s3"></div>
    <div class="col s1">
      
    </div>
    <div class="col s8">
      <div class="input-field">
      <button type="button" class="waves-effect waves-light btn green darken-1" name="textfeldGrundSpeichern" id="textfeldGrundSpeichern" onclick="textfeldGrundSpeichernf(this);">Speichern</button>      </div>
    </div>
  </div>





</div>
<!-- sichtbarkeitTextfeldGrund --> 
<!------------------------------Textfeld Signator Grund-----------------------------------------> 