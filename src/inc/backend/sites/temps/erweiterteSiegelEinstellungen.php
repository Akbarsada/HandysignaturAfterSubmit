  
<div class="row signaturSiegelEinstellungen" id="erweitereSignatursiegel_rowID1" >
 <div class="col s12">
<!----------------############COLAPSIPLE 8col############------------------------->  
<!----------------Erweitere Signatur Siegel Einstellungen------------------------->  
<!----------------#######################################------------------------->    
    <ul class="" id="erweitereSignatursiegel_rowColaps" >
      <li>
                    <div><span class="material-symbols-outlined" style="margin-right:10px;">tune</span>Erweitere Siegel Einstellungen</div>
        <div>

                  <?php include (HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/sites/temps/erweiterteSiegelEinstellungenTemps/erweiterteSiegelEinstellungen_Neu.php'); ?>
                  <?php include (HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/sites/temps/erweiterteSiegelEinstellungenTemps/erweiterteSiegelEinstellungen_Meta.php'); ?>



                  <?php

                  if(get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' ) == 'erstellen' ){

	                  include (HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/sites/temps/erweiterteSiegelEinstellungenTemps/erweiterteSiegelEinstellungen_Auswahl_Switches.php');
                  }

                   ?>


                  <?php include (HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/sites/temps/erweiterteSiegelEinstellungenTemps/erweiterteSiegelEinstellungen_Papier.php'); ?>

        </div>
       </li>
    </ul>
           
<!----------------############COLAPSIPLE 8col#################-------------------->  
<!----------------Erweitere Signatur Siegel Einstellungen------------------------->  
<!----------------#######################################------------------------->    

 </div><!--col s12 -->
<!------------------------##########################----------------------------------------->                     
</div><!--signaturauswahl_row -->
<!----------------Erweitere Signatur Siegel Einstellungen------------------------->       
<hr class="hr_linie">