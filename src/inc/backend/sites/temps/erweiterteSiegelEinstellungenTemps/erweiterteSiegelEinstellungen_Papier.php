<!------------------------------------------Vorsau Papier Bild-------------------------------------------> 
<div class="row ">
<h4>Einstellungen</h4>
</div>
<div class="row vorschaubild">
  <div class="col s4 ">  
        <?php include (HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/sites/temps/erweiterteSiegelEinstellungenTemps/erweiterteSiegelEinstellungen_Siegel.php'); ?> 
        <?php include (HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/sites/temps/erweiterteSiegelEinstellungenTemps/erweiterteSiegelEinstellungen_Signator.php'); ?> 
        <?php include (HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/sites/temps/erweiterteSiegelEinstellungenTemps/erweiterteSiegelEinstellungen_Ort.php'); ?> 
        <?php include (HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/sites/temps/erweiterteSiegelEinstellungenTemps/erweiterteSiegelEinstellungen_Grund.php'); ?> 
        <?php include (HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/sites/temps/erweiterteSiegelEinstellungenTemps/erweiterteSiegelEinstellungen_Zeitstempel.php'); ?>  
  </div>

  <div class="col s8">
    <form action="#">
      
      <!--Papier   -->
      <div id="papier_1"  style=" 
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      background-color: white; 
      height:<?php echo esc_attr( get_option('has_gv_'.$form_tab.'PDF_hohe')).'px;' ?> 
      width: <?php echo esc_attr( get_option('has_gv_'.$form_tab.'PDF_breite')).'px;' ?> "> 


       
        <div id="has_gv_formSiegelImageVorschau" name="has_gv_formSiegelImageVorschau"  
        height="<?php echo ( get_option('has_gv_'.$form_tab.'SiegelImageHeigth'))."px" ?>"
        width="<?php echo  ( get_option('has_gv_'.$form_tab.'SiegelImageWidth'))."px" ?>"
        
        style="border: solid red; 
        position: absolute; 
        padding: 3px; 
        margin-left:<?php echo get_option('has_gv_'.$form_tab.'SiegelPositionX')?>px;
        margin-top:<?php echo  get_option('has_gv_'.$form_tab.'SiegelPositionY') ?>px;">
       
                        
                        

                        <!-- Textfeld Signator  --> 
                        <div id="has_gv_formLabelInputSignerVorschau" name="has_gv_formLabelInputSignerVorschau"  
                          height="<?php echo esc_attr( get_option('has_gv_'.$form_tab.'LabelSignerHeigth'))."px" ?>"
                          width="<?php echo esc_attr( get_option('has_gv_'.$form_tab.'LabelSignerWidth'))."px" ?>"
                          style="
                          position: inherit;
                          display: <?php if(get_option('has_gv_'.$form_tab.'SignatorSichtbarkeitCheckboxID') == 'nicht_sichtbar'){echo 'none';} ?>;
                          padding: 3px; 
                          overflow: hidden;
                          white-space: nowrap;
                          text-overflow: ellipsis;
                          left:<?php echo get_option('has_gv_'.$form_tab.'LabelSignerPositionMARGIN_LEFT')?>px;
                          top:<?php echo get_option('has_gv_'.$form_tab.'LabelSignerPositionMARGIN_TOP')?>px;
                          color: <?php echo get_option('has_gv_'.$form_tab.'LabelSignerFcolor')?>;
                          background-color: <?php echo get_option('has_gv_'.$form_tab.'LabelSignerBGcolor')?>;
                          <?php if(get_option('has_gv_'.$form_tab.'LabelSignerWRAP') == 'true'){echo 'border:solid 1px;';}?>">
                          <?php echo get_option('has_gv_'.$form_tab.'LabelInputSigner')?> %Max Muster
                          </div>
                          <!-- Textfeld Signator  --> 


                          <!-- Textfeld Zeitstempel  --> 
                          <div id="has_gv_formLabelInputTimestampVorschau" name="has_gv_formLabelInputTimestampVorschau"  
                          height="<?php echo esc_attr( get_option('has_gv_'.$form_tab.'LabelTimestampHeigth'))."px" ?>"
                          width="<?php echo esc_attr( get_option('has_gv_'.$form_tab.'LabelTimestampWidth'))."px" ?>"
                          style="
                          position: inherit;
                          display: <?php if(get_option('has_gv_'.$form_tab.'ZeitstempelSichtbarkeitCheckboxID') == 'nicht_sichtbar'){echo 'none';} ?>;
                          padding: 3px; 
                          overflow: hidden;
                          white-space: nowrap;
                          text-overflow: ellipsis; 
                          left:<?php echo get_option('has_gv_'.$form_tab.'LabelTimestampPositionMARGIN_LEFT')?>px;
                          top:<?php echo get_option('has_gv_'.$form_tab.'LabelTimestampPositionMARGIN_TOP')?>px;
                          color: <?php echo get_option('has_gv_'.$form_tab.'LabelTimestampFcolor')?>;
                          background-color: <?php echo get_option('has_gv_'.$form_tab.'LabelTimestampBGcolor')?>;
                          <?php if(get_option('has_gv_'.$form_tab.'LabelTimestampWRAP') == 'true'){echo 'border:solid 1px;';}?>">
                          <?php echo get_option('has_gv_'.$form_tab.'LabelInputTimestamp')?> %Zeitstempel
                          </div>
                          <!-- Textfeld Zeitstempel  --> 
                          
                          
                          
                          <!-- Hauptsiegel  --> 
                            <img id="siegelBild" width="<?php echo esc_attr( get_option('has_gv_'.$form_tab.'SiegelImageWidth')) ?>" height="<?php echo esc_attr( get_option('has_gv_'.$form_tab.'SiegelImageHeigth')) ?>" src="<?php echo esc_attr( get_option('has_gv_'.$form_tab.'SiegelImage')) ?>">
                          <!-- Hauptsiegel  --> 



      </div>
      


      </div>
      <!--Papier   -->
    
    </form>
  </div>




</div>
<div class="row">
    <div class="col s4" ></div>
    <div class="col s5">
        Signatur Siegel auf Seite
        <div class="input-field inline">
            <input id="has_signatursiegel_seitenzahl" type="number" class="validate"
	            <?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'bearbeiten' ){echo 'disabled';} ?> required>
        </div>
        einfügen
    </div>
    <div class="col s3">

    </div>
</div>
<div class="row">
  <div class="col s7"></div>
  <div class="col s2" >
      <button type="submit" class="waves-effect waves-light btn green darken-1" name="has_gv_formSiegelTempErstellen" id="has_gv_formSiegelTempErstellen" onclick="has_gv_formSiegelTempErstellenf(this);"
              style="display: <?php if (get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'bearbeiten' ){echo 'none;';}else{echo 'block;';} ?> " >Siegel erstellen</button>
      

  </div>
  <div class="col s3" >
</div>

<!------------------------------------------Vorsau Papier Bild-------------------------------------------> 