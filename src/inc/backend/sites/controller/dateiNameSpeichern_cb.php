<?php


    /* ===Dateiname Speichern=== */
    function has_gv_formDateiNamenSpeichern(){
        $form_tab =  $_POST['tab'];
        $Datei_Name = array();


        $preffix_UID_Auswahl = $_POST['has_gv_form_select_preffix_UID_Auswahl'];
        $suffix_UID_Auswahl = $_POST['has_gv_form_select_suffix_UID_Auswahl'];
       // $preffix_UID = $_POST['has_gv_form_select_preffix_UID'];
       // $suffix_UID = $_POST['has_gv_form_select_suffix_UID'];
        $preffix1 = $_POST['preffix1'];
        $preffix2 = $_POST['preffix2'];
        $suffix1 = $_POST['suffix1'];
        $suffix2 = $_POST['suffix2'];
        $PDF_filename = $_POST['PDF_filename'];



        
        update_option( 'has_gv_'.$form_tab.'_select_preffix_UID',$_POST['has_gv_form_select_preffix_UID']);
        update_option( 'has_gv_'.$form_tab.'_select_suffix_UID', $_POST['has_gv_form_select_suffix_UID']);
        update_option( 'has_gv_'.$form_tab.'_preffix1', $_POST['preffix1'] );
        update_option( 'has_gv_'.$form_tab.'_preffix2', $_POST['preffix2'] );
        update_option( 'has_gv_'.$form_tab.'_suffix1', $_POST['suffix1'] );
        update_option( 'has_gv_'.$form_tab.'_suffix2', $_POST['suffix2'] );
        update_option( 'has_gv_'.$form_tab.'_select_preffix_UID_Auswahl', $_POST['has_gv_form_select_preffix_UID_Auswahl'] );
        update_option( 'has_gv_'.$form_tab.'_select_suffix_UID_Auswahl', $_POST['has_gv_form_select_suffix_UID_Auswahl'] );



        $Datei_Name ['preffix_UID'] = get_option( 'has_gv_'.$form_tab.'_select_preffix_UID' );
        $Datei_Name ['suffix_UID'] = get_option( 'has_gv_'.$form_tab.'_select_suffix_UID' );
        $Datei_Name ['preffix1'] = get_option( 'has_gv_'.$form_tab.'_preffix1' );
        $Datei_Name ['preffix2'] = get_option( 'has_gv_'.$form_tab.'_preffix2' );
        $Datei_Name ['suffix1'] = get_option( 'has_gv_'.$form_tab.'_suffix1' );
        $Datei_Name ['suffix2'] = get_option( 'has_gv_'.$form_tab.'_suffix2' );
        $Datei_Name ['PDF_filename'] = get_option( 'has_gv_'.$form_tab.'_PDF_filename' );
       

        $DateiNameVorschau =    '<span>'. get_option( 'has_gv_'.$form_tab.'_preffix1' ) . '</span>' .
                                '<span style="color:red">'. get_option( 'has_gv_'.$form_tab.'_select_preffix_UID' ) . '</span>' .
                                '<span>'. get_option( 'has_gv_'.$form_tab.'_preffix2' )  . '</span>' .
                                '<span style="color:green">'. get_option( 'has_gv_'.$form_tab.'_PDF_filename' )  . '</span>' .
                                '<span>'. get_option( 'has_gv_'.$form_tab.'_suffix1' )  . '</span>' .
                                '<span style="color:red">'. get_option( 'has_gv_'.$form_tab.'_select_suffix_UID' ) . '</span>' .
                                '<span>'. get_option( 'has_gv_'.$form_tab.'_suffix2' )  . '</span>.pdf';
    
        $DateiNameFinal =        get_option( 'has_gv_'.$form_tab.'_preffix1' ) . 
                                 get_option( 'has_gv_'.$form_tab.'_select_preffix_UID' ) . 
                                 get_option( 'has_gv_'.$form_tab.'_preffix2' )  . 
                                 get_option( 'has_gv_'.$form_tab.'_PDF_filename' )  . 
                                 get_option( 'has_gv_'.$form_tab.'_suffix1' )  . 
                                 get_option( 'has_gv_'.$form_tab.'_select_suffix_UID' ) . 
                                 get_option( 'has_gv_'.$form_tab.'_suffix2' );
        
        
        update_option( 'has_gv_'.$form_tab.'_DateiNameFinal', $DateiNameFinal );

        $Datei_Name ['DateiNameVorschau'] = $DateiNameVorschau;

        wp_send_json_success( $Datei_Name );
        return true;
        wp_die();
        }
       // add_action('wp_ajax_nopriv_has_gv_formDateiNamenSpeichern', 'has_gv_formDateiNamenSpeichern');
        add_action('wp_ajax_has_gv_formDateiNamenSpeichern', 'has_gv_formDateiNamenSpeichern');
