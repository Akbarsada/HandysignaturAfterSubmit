



<!----------------Sichtbarkeit Dateiname Switch-------------------------------------->
<div class="row">
  <div class="col s1">
    <div class="switch">
      <label>
        <input type="checkbox" name="has_gv_formCustomDateinameSichtbarkeitCheckboxID" id="has_gv_formCustomDateinameSichtbarkeitCheckboxID" onchange="has_gv_formCustomDateinameSichtbarkeitCheckboxIDf(this);"  value=""
<?php if (get_option( 'has_gv_'.$form_tab.'CustomDateinameSichtbarkeitCheckboxID' ) == 'sichtbar' ){echo ' checked';} ?> value="<?php echo get_option( 'has_gv_'.$form_tab.'CustomDateinameSichtbarkeitCheckboxID' );  ?>">
        <span class="lever"></span> </label>
    </div>
  </div>
  <div class="col s7"> <span class="material-symbols-outlined signatur_icon">drive_file_rename_outline</span> <span class="flow-text">Dateiname</span> </div>
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
<!----------------Sichtbarkeit Dateiname Switch-------------------------------------->
<div id="has_gv_formCustomDateinameSichtbarkeitInputID"><!-- sichtbarkeit Dateiname--> 
  <!----------------Datei name-------------------------------------------------->
  <div class="row">
    <div class="row">
      <div class="col s12"> <span class="material-symbols-outlined"> drive_file_rename_outline </span>
        <blockquote class="validate" name="has_gv_form_PDF_filename" id="has_gv_form_PDF_filename" ><?php echo '<span>'. get_option( 'has_gv_'.$form_tab.'_preffix1' ) . '</span>' .
                                                                                                              '<span style="color:red">'. get_option( 'has_gv_'.$form_tab.'_select_preffix_UID' ) . '</span>' .
                                                                                                              '<span>'. get_option( 'has_gv_'.$form_tab.'_preffix2' )  . '</span>' .
                                                                                                              '<span style="color:green">'. get_option( 'has_gv_'.$form_tab.'_PDF_filename' )  . '</span>' .
                                                                                                              '<span>'. get_option( 'has_gv_'.$form_tab.'_suffix1' )  . '</span>' .
                                                                                                              '<span style="color:red">'. get_option( 'has_gv_'.$form_tab.'_select_suffix_UID' ) . '</span>' .
                                                                                                              '<span>'. get_option( 'has_gv_'.$form_tab.'_suffix2' )  . '</span>' ?>.pdf</blockquote>
        <label for="icon_prefix">Das ist der tatsächliche Dateiname für ihr Dokument</label>
      </div>
    </div>
    <div class="row">
      <div class="col s2">
        <input class="center" name="has_gv_form_preffix1" id="has_gv_form_preffix1" type="text" class="validate" value="<?php echo  esc_attr( get_option( 'has_gv_'.$form_tab.'_preffix1' ) )?>">
      </div>
      <div class="col s1">
        <select class="browser-default"  name="has_gv_form_select_preffix_UID"  id="has_gv_form_select_preffix_UID">
          <option value=""  <?php selected( '' ==  esc_attr( get_option( 'has_gv_'.$form_tab.'_select_preffix_UID_Auswahl' ) ) ) ?>></option>
          <option value="preffix_UID4" <?php selected( 'preffix_UID4' ==  esc_attr( get_option( 'has_gv_'.$form_tab.'_select_preffix_UID_Auswahl' ) ) ) ?>>UID 4</option>
          <option value="preffix_UID6" <?php selected( 'preffix_UID6' ==  esc_attr( get_option( 'has_gv_'.$form_tab.'_select_preffix_UID_Auswahl' ) ) ) ?>>UID 6</option>
          <option value="preffix_UID8" <?php selected( 'preffix_UID8' ==  esc_attr( get_option( 'has_gv_'.$form_tab.'_select_preffix_UID_Auswahl' ) ) ) ?>>UID 8</option>
        </select>
      </div>
      <div class="col s2">
        <input class="center"  id="has_gv_form_preffix2" name="has_gv_form_preffix2" type="text" class="validate" value="<?php echo  esc_attr( get_option( 'has_gv_'.$form_tab.'_preffix2' ) )?>">
      </div>
      <div class="col s2">
        <input disabled class="center" name="has_gv_form_PDF_filename" id="has_gv_form_PDF_filename" value="<?php echo   get_option( 'has_gv_'.$form_tab.'_PDF_filename' ) ?>">
      </div>
      <div class="col s2">
        <input class="center"  id="has_gv_form_suffix1" name="has_gv_form_suffix1" type="text" class="validate" value="<?php echo  esc_attr( get_option( 'has_gv_'.$form_tab.'_suffix1' ) )?>">
      </div>
      <div class="col s1">
        <select class="browser-default" id="has_gv_form_select_suffix_UID"  name="has_gv_form_select_suffix_UID">
          <option value=""  <?php selected( '' ==  esc_attr( get_option( 'has_gv_'.$form_tab.'_select_suffix_UID_Auswahl' ) ) ) ?>></option>
          <option value="suffix_UID4" <?php selected( 'suffix_UID4' ==  esc_attr( get_option( 'has_gv_'.$form_tab.'_select_suffix_UID_Auswahl' ) ) ) ?>>UID 4</option>
          <option value="suffix_UID6" <?php selected( 'suffix_UID6' ==  esc_attr( get_option( 'has_gv_'.$form_tab.'_select_suffix_UID_Auswahl' ) ) ) ?>>UID 6</option>
          <option value="suffix_UID8" <?php selected( 'suffix_UID8' ==  esc_attr( get_option( 'has_gv_'.$form_tab.'_select_suffix_UID_Auswahl' ) ) ) ?>>UID 8</option>
        </select>
      </div>
      <div class="col s2">
        <input class="center"  id="has_gv_form_suffix2" name="has_gv_form_suffix2" type="text" class="validate"  value="<?php echo  esc_attr( get_option( 'has_gv_'.$form_tab.'_suffix2' ) )?>">
      </div>
    </div>
    <div class="row">
      <div class="col s8"> </div>
      <div class="col s2">
        <button type="submit" class="waves-effect waves-light btn  green darken-1" name="has_gv_formZertifikatsPfadSpeichern" id="has_gv_formZertifikatsPfadSpeichern" onclick="has_gv_formDateiNamenSpeichernf(this);">Speichern</button>
      </div>
    </div>
  </div>
  <hr class="hr_linie">
</div>
<!--Sichtbarkeit Dateiname --> 
<!----------------Dateiname-------------------------------------------------------> 
<!----------------Sichtbarkeit Dateiname------------------------------------------>