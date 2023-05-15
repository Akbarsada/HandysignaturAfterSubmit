<!------------------------------------------META Informationen-------------------------------------------> 
<div class="row">
  <div class="col s12"><span class="flow-text">META Informationen</span></div>
</div>
<div class="row">
  <div class="col s2">Name des Siegels</div>
  <div class="col s6">
    <div class="input-field">
      <input  type="text" data-length="100"  name="has_gv_formSiegelTemplatesName" id="has_gv_formSiegelTemplatesName"  value="<?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'bearbeiten' ){echo get_option( 'has_gv_'.$form_tab.'SiegelDescriptionName' );} ?>"
              <?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'bearbeiten' ){echo 'disabled';} ?> required>
    </div>
  </div>
</div>
<div class="row">
  <div class="col s2">Author</div>
  <div class="col s6">
    <div class="input-field">
      <input  type="text" data-length="100" name="has_gv_formSiegelTemplatesAuthor"  id="has_gv_formSiegelTemplatesAuthor"  value="<?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'bearbeiten' ){echo  get_option( 'has_gv_'.$form_tab.'SiegelDescriptionAuthor' );} ?>"
              <?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'bearbeiten' ){echo 'disabled';} ?> required>
    </div>
  </div>
</div>
<div class="row">
  <div class="col s2">Beschreibung</div>
  <div class="col s6">
    <div class="input-field">
      <input type="text" data-length="100" name="has_gv_formSiegelTemplatesDescription" id="has_gv_formSiegelTemplatesDescription"  value="<?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'bearbeiten' ){echo get_option( 'has_gv_'.$form_tab.'SiegelDescriptionBeschreibung' );} ?>"
             <?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'bearbeiten' ){echo 'disabled';}  ?> required>
    </div>
  </div>
</div>
<div class="row">
  <div class="col s6"></div>
  <div class="col s2">


      <button type="submit"  class="waves-effect waves-light btn green darken-1" name="has_gv_formMetaDatenSpeichern" id="has_gv_formMetaDatenSpeichern" onclick="has_gv_formMetaDatenSpeichernf(this);"
              style="display: <?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'erstellen' ){echo 'block;';}else{echo 'none;';} ?> " >Meta Daten Speichern</button>

  </div>
  <div class="col s3">
  </div>


</div>

<hr class="hr_linie">
<!------------------------------------------META Informationen-------------------------------------------> 