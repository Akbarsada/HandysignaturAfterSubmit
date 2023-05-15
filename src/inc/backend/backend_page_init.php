<?php
function add_has_page() {  


    //backend Seite Reiter
    $backend_page = add_menu_page(
    'Handysignatur After Submit', //Page Title
    'Handysignatur', //Menu Title
    'manage_options', //Capability
    'handysignatur_options', //Page slug
    'has_page_html', //Callback Function 
    '',
    5 );     

    add_action( 'admin_print_styles-' . $backend_page, 'my_action_javascript' ); 
   add_action('admin_print_styles-' . $backend_page, 'backend_style_init');
   //add_action('backend_init', 'has_register_fields');
   
}
add_action( 'admin_menu', 'add_has_page' );

function has_page_html() {
    if ( ! current_user_can( 'manage_options' ) ) {
      return;
    }
  

  $default_tab = null;
  $form_tab = isset($_GET['tab']) ? $_GET['tab'] : $default_tab;
  
  
  ?>
<span  id="has_top"></span>
        <div class="row">
            <a href="#has_top" class="brand_logo" title="go to top">
                <img class="fuchslogo" src="<?php echo HANDYSIGNATUR_PLUGIN_URL .  'src/assets/img/logo.png'?>">
            </a>

        </div>
    <div class="row">
  <!-- html area -->
  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="?page=handysignatur_options&tab=form1" class=" <?php if($form_tab==='form1'):?><?php endif; ?>" ><?php if(get_option('has_gv_form1_PDF_name') == ''){echo '<span style="color:green;">Formular 1</span>';}else{echo get_option('has_gv_form1_PDF_name');} ?></a></li>
    <li class="divider"></li>
    <li><a href="?page=handysignatur_options&tab=form2" class=" <?php if($form_tab==='form2'):?><?php endif; ?>" ><?php if(get_option('has_gv_form2_PDF_name') == ''){echo '<span style="color:green;">Formular 2</span>';}else{echo get_option('has_gv_form2_PDF_name');} ?></a></li>
    <li class="divider"></li>
    <li><a href="?page=handysignatur_options&tab=form3" class=" <?php if($form_tab==='form3'):?><?php endif; ?>" ><?php if(get_option('has_gv_form3_PDF_name') == ''){echo '<span style="color:green;">Formular 3</span>';}else{echo get_option('has_gv_form3_PDF_name');} ?></a></li>
    <li class="divider"></li>
    <li><a href="?page=handysignatur_options&tab=form4" class=" <?php if($form_tab==='form4'):?><?php endif; ?>" ><?php if(get_option('has_gv_form4_PDF_name') == ''){echo '<span style="color:green;">Formular 4</span>';}else{echo get_option('has_gv_form4_PDF_name');} ?></a></li>
    <li class="divider"></li>
    <li><a href="?page=handysignatur_options&tab=form5" class=" <?php if($form_tab==='form5'):?><?php endif; ?>" ><?php if(get_option('has_gv_form5_PDF_name') == ''){echo '<span style="color:green;">Formular 5</span>';}else{echo get_option('has_gv_form5_PDF_name');} ?></a></li>
    <li class="divider"></li>
  </ul>
  
    
  </ul>
  <ul id="dropdown2" class="dropdown-content">
    <li><a href="?page=handysignatur_options&tab=license" class=" <?php if($form_tab==='license'):?><?php endif; ?>" >Lizens</a></li>
      <li class="divider"></li>
    <li><a href="?page=handysignatur_options&tab=atrust" class=" <?php if($form_tab==='atrust'):?><?php endif; ?>" >A-trust</a></li>
      <li class="divider"></li>
    <li><a href="?page=handysignatur_options&tab=settings" class=" <?php if($form_tab==='settings'):?><?php endif; ?>" >Einstellungen</a></li>
    <li class="divider"></li>

 
  </ul>


  <nav>
    <div class="nav-wrapper">


<ul class="left hide-on-med-and-down">
         <!-- Dropdown Trigger -->
         <a href="?page=handysignatur_options" class="left" >Home</a>
       
      </ul>
 
      <ul class="left hide-on-med-and-down">
         <!-- Dropdown Trigger -->
         <li><a class="dropdown-trigger" href="#" data-target="dropdown1">Formulare</a></li>
       
      </ul>
     
      <ul class="left hide-on-med-and-down">
         <!-- Dropdown Trigger -->
         <li><a class="dropdown-trigger" href="#" data-target="dropdown2">Einstellungen</a></li>
       
      </ul>
    </div>
  </nav>
          
  <div class="row">
  <div class="col s10 offset-s1" style="margin-top: 50px;">
  <input type="hidden" id="formular_tab_ID" name="formular_tab_ID" value="<?php if(isset($_GET['tab'])){echo $_GET['tab'];}  ?>" >
  <?php    
        include(HANDYSIGNATUR_PLUGIN_DIR . '/src/inc/backend/backend_func_init.php');
        include( HANDYSIGNATUR_PLUGIN_DIR . 'src/inc/backend/backend_var_init.php');



        switch($form_tab) :
                    
              case 'license':
                    include( HANDYSIGNATUR_PLUGIN_DIR . 'src/inc/backend/settings/license.php');
                    add_action( 'admin_footer', 'my_action_javascript' ); 
                    break;
              case 'atrust':
                    include( HANDYSIGNATUR_PLUGIN_DIR . 'src/inc/backend/settings/atrust.php');
                    add_action( 'admin_footer', 'my_action_javascript' ); 
                    break;
              case 'settings':
                    include( HANDYSIGNATUR_PLUGIN_DIR . 'src/inc/backend/settings/settings.php');
                    add_action( 'admin_footer', 'my_action_javascript' ); 
                    break;
              case '':
                    include( HANDYSIGNATUR_PLUGIN_DIR . 'src/inc/backend/sites/home.php');
                    add_action( 'admin_footer', 'my_action_javascript' ); 
                    break;

                default:?>           
            <div class="row rahmen_row" id="rahmen_rowID1">
            <div class="row" >
            <div class="col s12" >
            <?php  $form_tab =  $_GET['tab']; ?>
            <h5 style="margin-bottom:50px;"><?php if(get_option('has_gv_'.$form_tab.'_PDF_name') == ''){echo '<span style="color:green;">leeres Formular</span>';}else{echo 'Signatureinstellungen für das GF Formular <strong>' . get_option('has_gv_'.$form_tab.'_PDF_name').'</strong>';} ?></h5>
            </div>  
          </div>
            <div class="col s12 rahmen_col">
          
          
            <?php include ('sites/temps/formAuswahl.php'); ?>
            <?php include ('sites/temps/pdfTemplate.php'); ?>
            <?php include ('sites/temps/signaturArt.php'); ?>
            <?php include ('sites/temps/signaturSiegel.php'); ?>

            <?php include ('sites/temps/signaturSiegelDropDown.php'); ?>

            <?php //include ('sites/temps/zertifikatsDatei.php'); ?>
            <?php include ('sites/temps/dateiName.php'); ?> 
            <?php include ('sites/temps/wpSeicherpfade.php'); ?> 
            <?php include ('sites/temps/wpWeiterleitungsPfade.php'); ?> 
            <?php include ('sites/temps/atrustLogin.php'); ?>
            <?php add_action( 'admin_footer', 'my_action_javascript' );  ?> 
            
              </div>
            </div>      
               <?php break;
      endswitch; ?>


      </div>
      </div>

  
  <footer class="page-footer yellow darken-1">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Footer Content</h5>
                  <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Links</h5>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2014 Copyright Handysignatur after Submit
              <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
              </div>
            </div>
          </footer>
    </div> 

  <?php }