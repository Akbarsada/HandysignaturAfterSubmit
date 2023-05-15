   /////////////////////////////////////////////////////////////////
  //               NAV DROPDOWN                                  //
 //                                                             //
/////////////////////////////////////////////////////////////////
jQuery(".dropdown-trigger").dropdown();

   /////////////////////////////////////////////////////////////////
  //               COLLAPSIBLE                                   //
 //                                                             //
/////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.collapsible');
   var instances = M.Collapsible.init(elems);
 });

   /////////////////////////////////////////////////////////////////
  //               SELECT                                        //
 //                                                             //
/////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('select');
   var instances = M.FormSelect.init(elems);
 });

   /////////////////////////////////////////////////////////////////
  //               SCHTBARKEITEN                                 //
 //                                                             //
/////////////////////////////////////////////////////////////////
































document.addEventListener('DOMContentLoaded', function(event){





/* ======================Erweiterte Signatureinstellungen=== */





















/* ===Sichtbarkeit Signaturort=== */

//Ort
jQuery(function () {
  jQuery("#has_gv_formOrtSichtbarkeitCheckboxIDs").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#sichtbarkeitTextfeldOrt").show(600); 

    } else {
      jQuery("#sichtbarkeitTextfeldOrt").hide(600);

    }
  });
});


/* ===Sichtbarkeit Signaturgrund=== */

//Signaturgrund
jQuery(function () {
  jQuery("#has_gv_formGrundSichtbarkeitCheckboxIDs").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#sichtbarkeitTextfeldGrund").show(600);

    } else {
      jQuery("#sichtbarkeitTextfeldGrund").hide(600);

    }
  });
});




/* ===Sichtbarkeit Signatur Zeitstempel=== */

//Zeitstempel
jQuery(function () {
  jQuery("#has_gv_formZeitstempelSichtbarkeitCheckboxIDs").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#sichtbarkeitTextfeldZeitstempel").show(600);
      // jQuery("#text_siegelNameNEU").focus();

    } else {
      jQuery("#sichtbarkeitTextfeldZeitstempel").hide(600);

    }
  });
});





//ZERTIFIKATS DATEI
jQuery(function () {
  jQuery("#has_gv_formZertifikatsDateiJaNeinCheckboxID").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#has_gv_formZertifikatsDateiSichtbarkeit").show(600);
      // jQuery("#text_siegelNameNEU").focus();
    } else {
      jQuery("#has_gv_formZertifikatsDateiSichtbarkeit").hide(600);

    }
  });
});





//CUSTOM DATEINAME
jQuery(function () {
  jQuery("#has_gv_formCustomDateinameSichtbarkeitCheckboxID").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#has_gv_formCustomDateinameSichtbarkeitInputID").show(600);
      // jQuery("#text_siegelNameNEU").focus();
    } else {
      jQuery("#has_gv_formCustomDateinameSichtbarkeitInputID").hide(600);

    }
  });
});

//Speicherpfade Wordpress
jQuery(function () {
  jQuery("#has_gv_formsichtbarkeitSpeicherPfadeWPCheckboxID").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#sichtbarkeitSpeicherPfade").show(600);
      
    } else {
      jQuery("#sichtbarkeitSpeicherPfade").hide(600);

    }
  });
});

//Speicherpfade Wordpress
jQuery(function () {
  jQuery("#has_gv_formsichtbarkeitWeiterleitungsPfadeWPCheckboxID").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#sichtbarkeitWeiterleitungsPfade").show(600);
      
    } else {
      jQuery("#sichtbarkeitWeiterleitungsPfade").hide(600);

    }
  });
});



//FTP Export
jQuery(function () {
  jQuery("#has_gv_formpdfFTP_Server_checkedCheckboxID").click(function () {
    if (jQuery(this).is(":checked")) {
      jQuery("#has_gv_formpdfFTP_Server_checkedInputID").show(600);
       jQuery("#has_gv_formpdfFTP_Server").focus();
    } else {
      jQuery("#has_gv_formpdfFTP_Server_checkedInputID").hide(600);

    }
  });
});


});

/* ======================MEDIAUPLOADER=== */














