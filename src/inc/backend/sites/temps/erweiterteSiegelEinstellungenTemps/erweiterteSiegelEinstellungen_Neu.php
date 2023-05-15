<!----------------Template neu erstellen oder ausgewähltes Template bearbeiten-------------------------> 

<div class="row">
  <div class="col 8"> Template neu erstellen oder ausgewähltes Template bearbeiten </div>
</div>
<div class="row">
  <div class="col s6">
    <div class="switch">
      <label>
        <input type="checkbox" name="has_gv_formNeuesTemplateOderBearbeitenID" id="has_gv_formNeuesTemplateOderBearbeitenID" onchange="has_gv_formNeuesTemplateOderBearbeitenIDf(this);" 
<?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'erstellen' ){echo ' checked';} ?> value="<?php echo get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' );  ?>" />
        <span class="lever"></span>Neuen Siegel erstellen </label>
    </div>
  </div>
  <div id="neuesTemplateSichtbarkeit" style="display: <?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'erstellen' ){echo 'none;';}else{echo 'block;';} ?> " >
    <div class="col s2">
      <div class="input-field" id="siegel_bearbeiten">
          <button class="waves-effect waves-light btn red darken-1"  name="Delete_TemplateAuswahl"  id="Delete_TemplateAuswahl" onclick="Delete_TemplateAuswahlf(this);" >Siegel Löschen <i class="material-icons right">delete</i> </button>

      </div>
    </div>
    <div class="col s2 ">
    </div>
  </div>
</div>
<!----------------Template neu erstellen oder ausgewähltes Template bearbeiten-------------------------> 