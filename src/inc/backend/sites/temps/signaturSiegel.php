           
   <!--/*////////////////////////////////////////////////////////////
  //              SIGNATURSIEGEL                                  //
 //                                                              //
///////////////////////////////////////////////////////////////-->            

<div class="row" >         
            <div class="col s1">
                    <div class="switch">
                        <label>
                            <input type="checkbox" name="has_gv_formSichtbarkeitSignaturSiegelCheckboxID" id="has_gv_formSichtbarkeitSignaturSiegelCheckboxID" onchange="has_gv_formSichtbarkeitSignaturSiegelCheckboxIDf(this);" 
                            <?php if (get_option( 'has_gv_'.$form_tab.'SichtbarkeitSignaturSiegelCheckboxID' ) == 'sichtbar' ){echo ' checked';} ?> value="<?php echo get_option( 'has_gv_'.$form_tab.'SichtbarkeitSignaturSiegelCheckboxID' );  ?>" />                             
                            <span class="lever"></span>
                        </label>
                    </div>
            </div>
            <div class="col s7">
                  <span class="material-symbols-outlined signatur_icon">workspace_premium</span>
                  <span class="flow-text" >Signatursiegel</span>
            </div>

            <div class="col s4">
            <ul class="collapsible">
                      <li>
                        <div class="collapsible-header" tabindex="0"><i class="material-icons">local_library</i>Signatrusiegel</div>
                        <div class="collapsible-body">
                        
<!--------------------------Colaps Inhalt----------------------------------------->                         
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
<!--------------------------Colaps Inhalt----------------------------------------->  

                        </div>                
                      </li>
                    </ul>
<!----------------############COLAPSIPLE 4col#################-------------------->  
<!----------------Erweitere Signatur Siegel Einstellungen------------------------->  
<!----------------#######################################------------------------->      
</div>







    </div>