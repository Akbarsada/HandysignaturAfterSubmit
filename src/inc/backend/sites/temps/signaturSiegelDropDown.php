
 

<!------------------------##########################----------------------------------------->    
<!------------------------sichtbarkeitSignaturSiegel----------------------------------------->    
<div id="has_gv_formSichtbarkeitSignaturSiegelInputID" >
<!------------------------sichtbarkeitSignaturSiegel----------------------------------------->      
<!------------------------##########################----------------------------------------->    



   <!------------------------Signatur Siegel----------------------------------------->      
<div class="row">
  <div class="col s8">
    <div class="row signaturSiegelEinstellungen" >
      <select class="icons" name="has_gv_formSiegelTemplatesAuswahlID" id="has_gv_formSiegelTemplatesAuswahlID" onchange="has_gv_formSiegelTemplatesAuswahlIDf(this);">
        <?php

                            $has_json = get_option( 'has_gv_form_SiegelTemplates' );
                            $decoded = json_decode( $has_json, true );
echo '<option  val="">Siegel aussuchen</option>';
                            foreach ( $decoded as $key => $value ) {
                              echo '<option value="';
                              echo $key;
                              echo '" ';
                              selected( $key == get_option( 'has_gv_'.$form_tab.'SiegelTemplatesAuswahlID' ) );
                              echo '>';
                              echo 'Siegel: ';
                              echo $value;
                              echo ' - ID';
                              echo $key;
                            
                              echo '</option>';
                             
                            }
        ?>
      </select>
    </div>
  </div>

  </div>



<!------------------------Signatur Siegel----------------------------------------->   


<?php include (HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/sites/temps/erweiterteSiegelEinstellungen.php'); ?> 
<!------------------------##########################----------------------------------------->    
<!------------------------sichtbarkeitSignaturSiegel-----------------------------------------> 

</div><!--sichtbarkeitSignaturSiegel -->
<!------------------------##########################----------------------------------------->    
<!------------------------sichtbarkeitSignaturSiegel-----------------------------------------> 