<?php
/* ===Template bearbeiten oder nicht sichtbarkeit=== */
function has_gv_formNeuesTemplateOderBearbeitenID(){
  $form_tab =  $_POST['tab'];
  $Siegel_neu_bearbeiten = array();
  $name = $_POST['has_gv_formNeuesTemplateOderBearbeitenID'];
  update_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID', $_POST['has_gv_formNeuesTemplateOderBearbeitenID'] );
//Set on 0
  update_option( 'has_gv_'.$form_tab.'SiegelImage', '');

//	update_option( 'has_gv_'.$form_tab.'SiegelImageWidth', 0);
//	update_option( 'has_gv_'.$form_tab.'SiegelImageHeigth', 0);
//
//	update_option( 'has_gv_'.$form_tab.'LabelSignerPositionMARGIN_LEFT', 0);
//	update_option( 'has_gv_'.$form_tab.'LabelSignerPositionMARGIN_TOP', 0);




  $Siegel_neu_bearbeiten ['Siegel_neu_bearbeiten'] = get_option( 'has_gv_'.$form_tab.'NeuesTemplateOderBearbeitenID' );
  wp_send_json_success( $Siegel_neu_bearbeiten );
  return true;
  wp_die();
  }

  add_action('wp_ajax_has_gv_formNeuesTemplateOderBearbeitenID', 'has_gv_formNeuesTemplateOderBearbeitenID');