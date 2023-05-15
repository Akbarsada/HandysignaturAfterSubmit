
<!------------------------------Textfeld Signator Ort-------------------------------------------> 

<div id="sichtbarkeitTextfeldOrt"  style="padding: 20px;">
<hr class="hr_linie">
  <div class="row">
    <div class="col s4">Position Textfeld ORT</div>
    <div class="col s8">
     
    </div>
  </div>
  <div class="row">
    <div class="col s4">Position X</div>
    <div class="col s6">
      <div>
      <input type="range" name="range_Ort" id="X_siegel_value_Ort" value="<?php echo get_option( 'has_gv_'.$form_tab.'LabelLocationPositionMARGIN_LEFT');?>" oninput="showVal8(this.value)" onchange="showVal8(this.value)" step="1" min="0" max="<?php echo(get_option('has_gv_'.$form_tab.'SiegelImageWidth')-get_option('has_gv_'.$form_tab.'LabelLocationWidth')) ?>"  />
      </div>
    </div>
    <div class="col s2"> <span id="range_Ort" style="display:none;">0</span>
      <div id="money_Ort"><?php echo get_option( 'has_gv_'.$form_tab.'LabelLocationPositionMARGIN_LEFT' ); ?>px</div>
    </div>
  </div>
  <div class="row">
    <div class="col s4">Position Y</div>
    <div class="col s6">
      <div>
      <input type="range" name="range2_Ort" id="Y_siegel_value_Ort" value="<?php echo get_option( 'has_gv_'.$form_tab.'LabelLocationPositionMARGIN_TOP' ); ?>" oninput="showVal8(this.value)" onchange="showVal8(this.value)" step="1" min="0" max="<?php echo(get_option('has_gv_'.$form_tab.'SiegelImageHeigth')-get_option('has_gv_'.$form_tab.'LabelLocationHeigth'))?>" />
      </div>
    </div>
    <div class="col s2"> <span id="range2_Ort" style="display:none;">0</span>
      <div id="money2_Ort"><?php echo get_option( 'has_gv_'.$form_tab.'LabelLocationPositionMARGIN_TOP' ); ?>px</div>
    </div>
  </div>
  <div class="row">

    
    <div class="col s6">Hintergrundfarbe</div>
  </div>
  <div class="row">
    <div class="col s12">
      <div id="farbe-component2" class="file-field">
        <div class="file-path-wrapper">
          <input type="text"  id="has_gv_formLabelLocationFcolor" value="#effeff"  name="has_gv_formLabelLocationFcolor" value=" <?php echo esc_attr( get_option( 'has_gv_'.$form_tab.'LabelLocationFcolor' ) ) ?>" />
        </div>
      </div>
    </div>

  </div>
  <div class="row">

<div class="col s6">Textfarbe</div>

</div>
  <div class="row">
 
    <div class="col s12">
      <div id="farbe-component2" class="file-field">
        <div class="file-path-wrapper">
          <input type="text"  id="has_gv_formLabelLocationBGcolor" value="#effeff"  name="has_gv_formLabelLocationBGcolor"  value="<?php echo esc_attr( get_option( 'has_gv_'.$form_tab.'LabelLocationBGcolor' ) )?>" />
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col s4">
    <div class="switch">
        <label>
 <input type="checkbox" name="has_gv_formLabelLocationCENTER" id="has_gv_formLabelLocationCENTER" onchange="has_gv_formLabelLocationCENTERf(this);"
      <?php if (get_option( 'has_gv_'.$form_tab.'LabelLocationWRAP' ) == 'true' ){echo ' checked';} ?> >
          <span class="lever"></span> Rahmen </label>
      </div>
    </div>
    <div class="col s8">
      <div class="input-field">
      <input id="has_gv_formLabelInputLocation" type="text" placeholder="Ort der Signatur:" data-length="10" name="has_gv_formLabelInputLocation" oninput="textfeldOrtf(this.value)"  onchange="textfeldOrtf(this);"  value="<?php echo get_option( 'has_gv_'.$form_tab.'LabelInputLocation' );  ?>">
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col s3"></div>
    <div class="col s1">
      
    </div>
    <div class="col s8">
      <div class="input-field">
      <button type="button" class="waves-effect waves-light btn green darken-1" name="textfeldOrtSpeichern" id="textfeldOrtSpeichern" onclick="textfeldOrtSpeichernf(this);">Speichern</button>      </div>
    </div>
  </div>





  
</div>
<!-- sichtbarkeitTextfeldOrt -->
<!------------------------------Textfeld Signator Ort-------------------------------------------> 