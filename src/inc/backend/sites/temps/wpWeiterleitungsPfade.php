

<!----------------Weiterleitungen Pfade------------------------------------------->       

<div class="row">         
            <div class="col s1">
            <div class="switch">
      <label>
        <input type="checkbox" name="has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID" id="has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID" onchange="has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxIDf(this);"  
<?php if (get_option( 'has_gv_'.$form_tab.'sichtbarkeitWeiterleitungsPfadeWPCheckboxID' ) == 'sichtbar' ){echo ' checked';} ?> value="<?php echo get_option( 'has_gv_'.$form_tab.'sichtbarkeitWeiterleitungsPfadeWPCheckboxID' );  ?>">
        <span class="lever"></span> </label>
    </div>
            </div>


            <div class="col s7">
            <span class="material-symbols-outlined">fork_right</span>
                  <span class="flow-text" >Weiterleitungs Pfade</span>
            </div>

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
<div id="sichtbarkeitWeiterleitungsPfade" ><!-- sichtbarkeitWeiterleitungsPfade -->

<div class="row">

    <div class="col s12">
    <blockquote class="validate" name="has_gv_formWP_Weiterleitung_Erfolg_Vorschau" id="has_gv_formWP_Weiterleitung_Erfolg_Vorschau" ><?php echo get_option( 'has_gv_'.$form_tab.'Erfolg' );  ?></blockquote>
    <label for="icon_prefix">Weiterleitung nach erfolgreicher Signatur</label>
  </div>
      
</div>

    <div class="row">

  
      <div class="col s8">

      <div class="input-field">
      <select name="has_gv_formErfolg"  onchange="has_gv_formWP_Weiterleitung_Erfolgf(this);" id="has_gv_formErfolg">
                  <optgroup label="Beträge">
                  <?php
                  foreach ( $all_posts as $value ) {
                    echo '<option value="';
                    echo $value->guid;
                    echo '"';
                    esc_attr( selected( esc_attr(  $value->guid == get_option( 'has_gv_'.$form_tab.'Erfolg' ) ) ) );
                    echo '>';
                    echo $value->post_title;
                    echo '</option>';
                  }
                  ?>
                   </optgroup>
                   <optgroup label="Seiten">
                   <?php
                  foreach ( $all_sites as $value ) {
                    echo '<option value="';
                    echo $value->guid;
                    echo '"';
                    esc_attr( selected( esc_attr(  $value->guid == get_option( 'has_gv_'.$form_tab.'Erfolg' ) ) ) );
                    echo '>';
                    echo $value->post_title;
                    echo '</option>';
                  }
                  ?>
                  </optgroup>
                </select>

              </div>


      </div>
     
    </div>

    <div class="row">

<div class="col s12">
<blockquote class="validate" name="has_gv_formWP_Weiterleitung_Error_Vorschau" id="has_gv_formWP_Weiterleitung_Error_Vorschau" ><?php echo get_option( 'has_gv_'.$form_tab.'Error' );  ?></blockquote>
    <label for="icon_prefix">Weiterleitung bei Error</label>
  </div>
      
</div>

    
    
    <div class="row">

      <div class="col s8">

      <div class="input-field">
                <select name="has_gv_formError" onchange="has_gv_formWP_Weiterleitung_Errorf(this);" id="has_gv_formError">
                  <optgroup label="Beträge">
                  <?php
                  foreach ( $all_posts as $value ) {
                    echo '<option value="';
                    echo $value->guid;
                    echo '"';
                    esc_attr( selected( esc_attr(  $value->guid == get_option( 'has_gv_'.$form_tab.'Error' ) ) ) );
                    echo '>';
                    echo $value->post_title;
                    echo '</option>';
                  }
                  ?>
                   </optgroup>
                   <optgroup label="Seiten">
                   <?php
                  foreach ( $all_sites as $value ) {
                    echo '<option value="';
                    echo $value->guid;
                    echo '"';
                    esc_attr( selected( esc_attr(  $value->guid == get_option( 'has_gv_'.$form_tab.'Error' ) ) ) );
                    echo '>';
                    echo $value->post_title;
                    echo '</option>';
                  }
                  ?>
                  </optgroup>
                </select>

              </div>


      </div>
      
    </div>

    

 <hr class="hr_linie">
</div><!-- sichtbarkeitWeiterleitungsPfade -->

<!----------------Weiterleitungen Pfade------------------------------------------->     