
<!------------------------------Auswahlfelder Überschrift-----------------------------------------------> 

<div class="row">
<div class="col s1 auswahl"></div>
<div class="col s2 auswahl">
<span class="flow-text">Siegelbild</span>
</div>

<div class="col s2 auswahl">
<span class="flow-text">Signator</span>
</div>
<div class="col s2 auswahl">
  <span class="flow-text">Zeitstempel</span>
</div>
<div class="col s2 auswahl">
 
</div>
<div class="col s2 auswahl">

</div>
<div class="col s1 auswahl"></div>
</div>


<!------------------------------Auswahlfelder Überschrift-----------------------------------------------> 
<!------------------------------Auswahlfelder Switch----------------------------------------------------> 

<div class="row">
<div class="col s1 auswahl"></div>
<div class="col s2 auswahl">

      <label class="hacken">       
      <input type="checkbox" name="has_gv_formHauptsiegelSichtbarkeitCheckboxID" id="has_gv_formHauptsiegelSichtbarkeitCheckboxID" onchange="has_gv_formHauptsiegelSichtbarkeitCheckboxIDf(this);"
	      <?php if (get_option( 'has_gv_'.$form_tab.'SignatorSichtbarkeitCheckboxID' ) == 'sichtbar' ){echo ' checked';} ?> value="<?php echo get_option( 'has_gv_'.$form_tab.'SignatorSichtbarkeitCheckboxID' );  ?>">
      <span ></span> 
     </label>

</div>

<div class="col s2 auswahl">

      <label class="hacken">       
      <input type="checkbox" name="has_gv_formSignatorSichtbarkeitCheckboxID" id="has_gv_formSignatorSichtbarkeitCheckboxID" onchange="has_gv_formSignatorSichtbarkeitCheckboxIDf(this);"
      <?php if (get_option( 'has_gv_'.$form_tab.'SignatorSichtbarkeitCheckboxID' ) == 'sichtbar' ){echo ' checked';} ?> value="<?php echo get_option( 'has_gv_'.$form_tab.'SignatorSichtbarkeitCheckboxID' );  ?>">
      <span ></span> 
     </label>

</div>
<div class="col s2 auswahl">

    <label class="hacken">
    <input type="checkbox" name="has_gv_formZeitstempelSichtbarkeitCheckboxID" id="has_gv_formZeitstempelSichtbarkeitCheckboxID" onchange="has_gv_formZeitstempelSichtbarkeitCheckboxIDf(this);"
	<?php if (get_option( 'has_gv_'.$form_tab.'ZeitstempelSichtbarkeitCheckboxID' ) == 'sichtbar' ){echo ' checked';} ?> value="<?php echo get_option( 'has_gv_'.$form_tab.'ZeitstempelSichtbarkeitCheckboxID' );  ?>">
    <span></span>
    </label>


</div>
<div class="col s2 auswahl">



</div>
<div class="col s2 auswahl">



</div>
<div class="col s1 auswahl"></div>
</div>

<!------------------------------Auswahlfelder Switch----------------------------------------------------> 
<!------------------------------Auswahlfelder Switch----------------------------------------------------> 

<div class="row">
<div class="col s1 auswahl"></div>
<div class="col s2 auswahl">
<div class="switch">
      <label>       
      <input type="checkbox" name="has_gv_formHauptsiegelSichtbarkeitCheckboxIDs" id="has_gv_formHauptsiegelSichtbarkeitCheckboxIDs"
	       <?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'bearbeiten' ){echo 'disabled';} ?>>
      <span class="lever"></span> 
     </label>
    </div>
</div>

<div class="col s2 auswahl">
<div class="switch">
      <label>       
      <input type="checkbox" name="has_gv_formSignatorSichtbarkeitCheckboxIDs" id="has_gv_formSignatorSichtbarkeitCheckboxIDs"
	      <?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'bearbeiten' ){echo 'disabled';} ?>>
      <span class="lever"></span> 
     </label>
    </div>
</div>
<div class="col s2 auswahl">
<div class="switch">
    <label>
        <input type="checkbox" name="has_gv_formZeitstempelSichtbarkeitCheckboxIDs" id="has_gv_formZeitstempelSichtbarkeitCheckboxIDs"
			<?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'bearbeiten' ){echo 'disabled';} ?>>
        <span class="lever"></span>
    </label>
    </div>
</div>
<div class="col s2 auswahl">

</div>
<div class="col s2 auswahl">

</div>
<!-- <div class="col s1 auswahl"></div> -->
</div>

<!------------------------------Auswahlfelder Switch----------------------------------------------------> 