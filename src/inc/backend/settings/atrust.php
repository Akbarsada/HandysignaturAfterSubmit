<div class="col s12">
    <div class="card-panel grey lighten-5 z-depth-1">
      <div class="row valign-wrapper">
        <div class="col s2">
          <!-- leer -->
        </div>
        <div class="col s10">
          <div class="black-text" style="margin-bottom: 25px">
          <p><strong>Bitte geben sie die A-Trust Serveraddresse und ihren API-KEY ein.</strong></p>
          <p><strong>Bei weiteren Fragen wenden sie sich bitte an A-Trust</strong></p>
          
          </div>
 
        <div class="row">
        <form class="col s12">
       
        <div class="row">     
        <div class="input-field col s12">
          <input id="has_gv_form_atrust_serveraddresse" name="has_gv_form_atrust_serveraddresse" type="text" class="validate" value="<?php echo esc_attr( get_option( 'has_gv_form_atrust_serveraddresse' ) )  ?>">
          <label for="has_gv_form_atrust_serveraddresse">A-Trust Serveradresse</label>
        </div>
        </div>
 
 
        <div class="row">
        <div class="input-field col s12">
           <input id="has_gv_form_atrust_apikey" type="text" class="validate" name="has_gv_form_atrust_apikey"  value="<?php echo esc_attr( get_option( 'has_gv_form_atrust_apikey' ) )   ?>" >
           <label for="has_gv_form_atrust_apikey">A-Trust API KEY</label>
         </div>
        </div>
 
        </form>
        </div>
        <div class="row">
      <div class="col s8"> </div>
      <div class="col s2">
        <button type="submit" class="waves-effect waves-light btn  green darken-1" name="has_gv_form1ZertifikatsPfadSpeichern" id="has_gv_form1ZertifikatsPfadSpeichern" onclick="has_gv_formAtrustSpeichernf(this);">Speichern</button>
      </div>
    </div>
 
          
        </div>
      </div>
    </div>
  </div>