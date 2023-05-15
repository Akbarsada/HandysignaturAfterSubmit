

<!----------------Atrust Export------------------------------------------------------>
<div class="row">         
            <div class="col s1">
                    <div class="switch">
                        <label>
                        <input type="checkbox" name="has_gv_formAtrust_Login_checkedCheckboxID" id="has_gv_formAtrust_Login_checkedCheckboxID" onchange="has_gv_formAtrust_Login_checkedCheckboxIDf(this);"
                        <?php if (get_option( 'has_gv_'.$form_tab.'Atrust_Login_checkedCheckboxID' ) == 'sichtbar' ){echo ' checked';} ?> value="<?php echo get_option( 'has_gv_'.$form_tab.'Atrust_Login_checkedCheckboxID' );  ?>">
                        
                                    <span class="lever"></span>
                        </label>
                    </div>
            </div>


            <div class="col s7">
            <span class="material-symbols-outlined">dns</span>
                  <span class="flow-text" >A-Trust Login</span>
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

<div id="has_gv_formAtrust_Login_checkedInputID"  ><!-- sichtbarkeitAtrust_Login -->



    <div id="rahmen_iframe" class="col s8" style="border: solid; background-color: <?php echo get_option('has_gv_'.$form_tab.'_atrust_CustomColor') ?>; padding: 15px; margin-bottom: 20px;" >

    <div class="row ">

        <div class="col s12 has_atrust_logo">
                <img id="atrust_custom_logo_img" src="<?php echo get_option( 'has_gv_'.$form_tab.'_atrust_CustomLogo' ); ?>" alt="">
        </div>

    </div>

    <div class="row">

        <div class="col s12" >
               <h1 id="has_atrust_text"><?php echo get_option( 'has_gv_'.$form_tab.'_atrust_CustomText' ); ?></h1>
        </div>

    </div>

<div class="row">

    <div class="col s12  has_atrust_login">


    <img src="<?php echo HANDYSIGNATUR_PLUGIN_URL . '/src/assets/img/atrust_login.png' ?>" alt="">


    </div>

</div>



</div>





    <div class="row">
<div  class="col s8">




        <div class="row">

        <div class="col s2">Logo auswählen</div>

        <div class="col s8">
            <form action="#">
                <div class="file-path-wrapper">
                    <!-- Inputfield Button  -->
                    <div class="waves-effect waves-light btn yellow darken-1 file-field vorschaubild_button"> <span>PNG  JPG</span>
                        <input type="file" name="has_gv_atrust_custom_Image" id="has_gv_atrust_custom_Image" value=" ">
                    </div>
                    <!-- Inputfield Button  -->
                    <!-- Inputfield Bild  -->
                    <input class="file-path validate nichtAnzeigen" name="has_gv_atrust_custom_Image"  type="text" value="" >
                    <!--Inputfield Bild  -->
                </div>

            </form>

        </div>


        </div>

    <div class="row">
        <div class="col s2" >Zusatztext</div>








        <div class="col s8">
            <div class="input-field">
                <input id="has_gv_formAtrust_Text" type="text" placeholder="Signiert von:" data-length="10" name="has_gv_formAtrust_Text"  value="<?php echo get_option('has_gv_'.$form_tab.'_atrust_CustomText') ?>">
            </div>
        </div>

    </div>




    <div class="row">
        <div class="col s2" >Hintergrundfarbe</div>

        <div class="col s8">
            <div id="farbe-SIGNATOR_has_gv_LABEL_Font_color1ID" class="file-field">
                <div class="file-path-wrapper">
                    <input type="text"  id="has_gv_formAtrust_BG_Color"  name="has_gv_formAtrust_BG_Color"   value="<?php echo get_option('has_gv_'.$form_tab.'_atrust_CustomColor') ?>" />
                </div>
            </div>
        </div>
    </div>




    <div class="row">

        <div class="col s2"></div>

        <div class="col s8">

            <button type="submit" class="waves-effect waves-light btn green darken-1" name="atrustLoginf" id="atrustLoginf" onclick="atrustLoginf(this);">Speichern</button>
        </div>


    </div>


</div>

    </div>
    <hr class="hr_linie">
</div><!-- sichtbarkeitAtrust_Login -->

<!----------------Atrust Export------------------------------------------------------>