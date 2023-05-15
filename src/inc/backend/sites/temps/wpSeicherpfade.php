

<!----------------Speicher Pfade-------------------------------------------------->       

<div class="row">         
            <div class="col s1">
            <div class="switch">
      <label>
        <input type="checkbox" name="has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID" id="has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID" onchange="has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxIDf(this);" value=""
<?php if (get_option( 'has_gv_'.$form_tab.'sichtbarkeitSpeicherPfadeWPCheckboxID' ) == 'sichtbar' ){echo ' checked';} ?> value="<?php echo get_option( 'has_gv_'.$form_tab.'sichtbarkeitSpeicherPfadeWPCheckboxID' );  ?>">
        <span class="lever"></span> </label>
    </div>

                   
            </div>


            <div class="col s7">
            <span class="material-symbols-outlined">save</span>
                  <span class="flow-text" >Speicherpfade</span>
            </div>
            <div class="col s4">
      <ul class="collapsible">
        <li class="">
          <div class="collapsible-header" tabindex="0"><i class="material-icons">local_library</i>Informationen Speicherpfade</div>
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

<div id="sichtbarkeitSpeicherPfade" ><!-- sichtbarkeitSpeicherPfade -->
<div class="row">
    <div class="flow-text uberschriften_collaps">interne Speicherpfade</div>

      
</div>

    <div class="row">
        <div class="col s12"> <div>PDF signiert Speicherpfad</div>
    <blockquote class="validate" name="has_gv_formpdfWP_Download_Gesamtpfad" id="has_gv_formpdfWP_Download_Gesamtpfad" ><?php echo  esc_attr( get_option( 'has_gv_'.$form_tab.'pdfWP_Download' ) . '/'. get_option( 'has_gv_'.$form_tab.'pdfDownload' ) )?></blockquote>

    </div>
    </div>
    
    <div class="row">
      <div class="input-field col s8">

      <select class="icons" name="has_gv_formpdfWP_Download" id="has_gv_formpdfWP_Download">
               
                <option value="<?php echo  site_url() ;?>"                  <?php esc_attr( selected(  site_url()                     ==  esc_attr(  get_option( 'has_gv_'.$form_tab.'pdfWP_Download' ) ),true ,true ) );  ?> ><?php echo site_url( '/' ); ?> </option>
                <option value="<?php echo  content_url();?>"                <?php esc_attr( selected(  content_url()                  ==  esc_attr(  get_option( 'has_gv_'.$form_tab.'pdfWP_Download' ) ),true ,true ) );  ?> ><?php echo content_url( '/' ); ?> </option>
                <option value="<?php echo  plugins_url();?>"                <?php  esc_attr( selected(  plugins_url()                 ==  esc_attr(  get_option( 'has_gv_'.$form_tab.'pdfWP_Download' ) ),true ,true ) );  ?> ><?php echo plugins_url( '/' ); ?> </option>
                <option value="<?php echo  wp_upload_dir()['baseurl'];?>"                <?php  esc_attr( selected(  wp_upload_dir()['baseurl']                 ==  esc_attr(  get_option( 'has_gv_'.$form_tab.'pdfWP_Download' ) ),true ,true ) );  ?> ><?php echo wp_upload_dir()['baseurl']; ?> </option>

                <option value="<?php echo  get_template_directory_uri();?>" <?php  esc_attr( selected(  get_template_directory_uri()  ==  esc_attr(  get_option( 'has_gv_'.$form_tab.'pdfWP_Download' ) ),true ,true ) );  ?> ><?php echo get_template_directory_uri('/'); ?></option>
              </select>    
      </div>
      
      <div class="input-field col s4">  
       
                <input  type="text" class="validate" name="has_gv_formpdfDownload" id="has_gv_formpdfDownload"  value="<?php echo esc_attr( get_option( 'has_gv_'.$form_tab.'pdfDownload' ) )?>" >

              
      </div>

      
    
    </div>

    <div class="row">
    <div class="col s8"> 
     
    </div>
    <div class="col s2">
      <button type="submit" class="waves-effect waves-light btn  green darken-1" name="has_gv_formSpeicherPfadWPDownloadSpeichern" id="has_gv_formSpeicherPfadWPDownloadSpeichern" onclick="has_gv_formSpeicherPfadWPDownloadSpeichernf(this);">Speichern</button>
    </div>

  </div>




    <div class="row">
        <div class="col s12"> <div>CER Datei Speicherpfad</div>
            <blockquote class="validate" name="has_gv_formZertifikatsDateiGesamtSpeicherPfad" id="has_gv_formZertifikatsDateiGesamtSpeicherPfad"><?php echo get_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad' ) . '/'. get_option( 'has_gv_'.$form_tab.'ZertifikatsDateiOrdnerSpeicherPfad' );  ?></blockquote>

        </div>


    </div>



    <div class="row">
        <div class="row">
            <div class="col s8">
                <select class="icons" name="has_gv_formZertifikatsDateiWPspeicherPfad"  id="has_gv_formZertifikatsDateiWPspeicherPfad">
                    <option value="<?php echo  site_url();?>"                   <?php esc_attr( selected(  site_url()                ==  esc_attr(  get_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad' ) ),true ,true ) );  ?> ><?php echo site_url( '/' ); ?> </option>
                    <option value="<?php echo  content_url();?>"                <?php esc_attr( selected(  content_url()             ==  esc_attr(  get_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad' ) ),true ,true ) );  ?> ><?php echo content_url( '/' ); ?> </option>
                    <option value="<?php echo  plugins_url();?>"                <?php  esc_attr( selected(  plugins_url()            ==  esc_attr(  get_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad' ) ),true ,true ) );  ?> ><?php echo plugins_url( '/' ); ?> </option>
                    <option value="<?php echo  wp_upload_dir()['baseurl'];?>"                <?php  esc_attr( selected(  wp_upload_dir()['baseurl']                 ==  esc_attr(  get_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad' ) ),true ,true ) );  ?> ><?php echo wp_upload_dir()['baseurl']; ?> </option>
                    <option value="<?php echo  get_template_directory_uri();?>" <?php  esc_attr( selected(  get_template_directory_uri()  ==  esc_attr(  get_option( 'has_gv_'.$form_tab.'ZertifikatsDateiWPspeicherPfad' ) ),true ,true ) );  ?> ><?php echo get_template_directory_uri(); ?></option>
                </select>
                <label>Verzeichnis für den Upload</label>
            </div>
            <div class="col s4">
                <input placeholder="Verzeichnis"  type="text" class="validate" name="has_gv_formZertifikatsDateiOrdnerSpeicherPfad"  id="has_gv_formZertifikatsDateiOrdnerSpeicherPfad" value="<?php echo  esc_attr( get_option( 'has_gv_'.$form_tab.'ZertifikatsDateiOrdnerSpeicherPfad' ) )?>">

            </div>






        </div>
        <div class="row">
            <div class="col s8">

            </div>
            <div class="col s2">
                <button type="submit" class="waves-effect waves-light btn  green darken-1" name="has_gv_formZertifikatsPfadSpeichern" id="has_gv_formZertifikatsPfadSpeichern" onclick="has_gv_formZertifikatsPfadSpeichernf(this);">Speichern</button>
            </div>

        </div>
    </div>



    <div class="row">
        <div class="flow-text uberschriften_collaps col s12">externe Speicherpfade - FTP export</div>

        <div class="col s12">
            <label class="hacken">
                <input type="checkbox" name="has_gv_formFTP_Connection" id="has_gv_formFTP_Connection" onchange="has_gv_formFTPConnectionf(this);" value="ftp"
				    <?php if(get_option( 'has_gv_'.$form_tab.'pdfFTP_Conection') == 'ftp'){echo 'checked';}?>>
                <span></span>
            </label>
        </div>
    </div>



        <div class="row">

        <div class="col s12"> <div>PDF signiert Speicherpfad</div>

        </div>

    </div>




<div id="sichtbarkeitFTP_doc" >


    <div class="row">
        <div class="col s8">
            <input  type="text" data-length="10" name="has_gv_formpdfFTP_Server" id="has_gv_formpdfFTP_Server"  value="<?php echo esc_attr(get_option('has_gv_'.$form_tab.'pdfFTP_Server'))?>">
            <label for="icon_prefix">externe Serveradresse</label>
        </div>
        <div class="col s4">
            <input  type="text" data-length="10" name="has_gv_formpdfFTP_Server" id="has_gv_formpdfFTP_Folder"  value="<?php echo esc_attr(get_option('has_gv_'.$form_tab.'pdfFTP_Folder'))?>">
            <label for="icon_prefix">Verzeichnis</label>
        </div>
    </div>



    <div class="row">
        <div class="col s3">
            <input   type="text" class="validate" name="has_gv_formpdfFTP_Server_User"  id="has_gv_formpdfFTP_Server_User" value="<?php echo esc_attr(get_option('has_gv_'.$form_tab.'pdfFTP_Server_User'))?>">
            <label for="icon_prefix">Benutzer</label></div>
        <div class="col s3">
            <input type="password" class="validate" name="has_gv_formpdfFTP_Server_Passwort"  id="has_gv_formpdfFTP_Server_Passwort" value="<?php echo esc_attr(get_option('has_gv_'.$form_tab.'pdfFTP_Server_Passwort'))?>">
            <label for="icon_prefix">Passwort</label>
        </div>
        <div class="col s2">
            <input   type="text" class="validate" name="has_gv_formpdfFTP_Server_Port" id="has_gv_formpdfFTP_Server_Port" value="<?php echo esc_attr(get_option('has_gv_'.$form_tab.'pdfFTP_Server_Port'))?>">
            <label for="icon_prefix">Port</label>
        </div>

        <div class="col s4">

        </div>
    </div>
    <div class="row">
        <div class="col s8">

        </div>
        <div class="col s2">
            <button type="submit" class="waves-effect waves-light btn  green darken-1" name="has_gv_formFTPSpeichern" id="has_gv_formFTPSpeichern" onclick="has_gv_formFTPSpeichernf(this);">Speichern</button>
        </div>

    </div>

</div>



    <div class="row">


        <div class="col s12">
            <label class="hacken">
                <input type="checkbox" name="has_gv_formFTP2_Connection" id="has_gv_formFTP2_Connection" onchange="has_gv_formFTP2Connectionf(this);" value="ftp"
					<?php if(get_option( 'has_gv_'.$form_tab.'pdfFTP2_Conection') == 'ftp'){echo 'checked';}?>>
                <span></span>
            </label>
        </div>
    </div>



    <div class="row">

        <div class="col s12"> <div>CER Datei Speicherpfad</div>

        </div>

    </div>



    <div id="sichtbarkeitFTP_cert">



    <div class="row">
        <div class="col s8">
            <input  type="text" data-length="10" name="has_gv_formpdfFTP2_Server" id="has_gv_formpdfFTP2_Server"  value="<?php echo esc_attr(get_option('has_gv_'.$form_tab.'pdfFTP2_Server'))?>" >
            <label for="icon_prefix">externe Serveradresse</label>
        </div>
        <div class="col s4">
            <input  type="text" data-length="10" name="has_gv_formpdfFTP2_Server" id="has_gv_formpdfFTP2_Folder"  value="<?php echo esc_attr(get_option('has_gv_'.$form_tab.'pdfFTP2_Folder'))?>" >
            <label for="icon_prefix">Verzeichnis</label>
        </div>
    </div>



    <div class="row">
        <div class="col s3">
            <input   type="text" class="validate" name="has_gv_formpdfFTP2_Server_User"  id="has_gv_formpdfFTP2_Server_User" value="<?php echo esc_attr(get_option('has_gv_'.$form_tab.'pdfFTP2_Server_User'))?>">
            <label for="icon_prefix">Benutzer</label></div>
        <div class="col s3">
            <input type="password" class="validate" name="has_gv_formpdfFTP2_Server_Passwort"  id="has_gv_formpdfFTP2_Server_Passwort" value="<?php echo esc_attr(get_option('has_gv_'.$form_tab.'pdfFTP2_Server_Passwort'))?>">
            <label for="icon_prefix">Passwort</label>
        </div>
        <div class="col s2">
            <input   type="text" class="validate" name="has_gv_formpdfFTP2_Server_Port" id="has_gv_formpdfFTP2_Server_Port" value="<?php echo esc_attr(get_option('has_gv_'.$form_tab.'pdfFTP2_Server_Port'))?>">
            <label for="icon_prefix">Port</label>
        </div>

        <div class="col s4">

        </div>
    </div>
    <div class="row">
        <div class="col s8">

        </div>
        <div class="col s2">
            <button type="submit" class="waves-effect waves-light btn  green darken-1" name="has_gv_formFTP2Speichern" id="has_gv_formFTP2Speichern" onclick="has_gv_formFTP2Speichernf(this);">Speichern</button>
        </div>

    </div>

    </div>


 <hr class="hr_linie">
</div><!-- sichtbarkeitSpeicherPfade -->

<!----------------Speicher Pfade-------------------------------------------------->        