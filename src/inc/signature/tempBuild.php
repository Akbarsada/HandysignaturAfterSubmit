<?php

$xml_file_name = 'template3.xml';

$xml = new DomDocument('1.0');
$xml->encoding = 'utf-8';
$xml->formatOutput=true;

$SignatureTemplateStyle = $xml->createElement('SignatureTemplateStyle');
$xml->appendChild($SignatureTemplateStyle);


if(get_option( 'has_gv_'.$form_tab.'ZusatzbildSichtbarkeitCheckboxID' )){



}



//COLORS
$SchriftFarbeHEX = get_option( 'has_gv_form1SiegelTemplatesAuthor' );
list($r, $g, $b) = sscanf($SchriftFarbeHEX, "#%02x%02x%02x");
$SchriftFarbeRGB = 'rgb('.$r.','.$g.','.$b.')';


$HintergrundFarbeHEX = get_option( 'has_gv_form1SiegelTemplatesAuthor' );
list($r, $g, $b) = sscanf($HintergrundFarbeHEX, "#%02x%02x%02x");
$HintergrundFarbeRGB = 'rgb('.$r.','.$g.','.$b.')';




$label1_input_text = 'Signiert von: ';
$location = ' %signer';
$label1_input_de = $label1_input_text . $location;


$label2_input_text = 'Ort der Signatur: %location';
$ort = ' %location';
$label2_input_de = $label2_input_text . $ort;


$label3_input_text = 'Grund der Signatur:';
$grund = ' %reason';
$label3_input_de = $label3_input_text . $grund;


$label4_input_text = 'Zeitpunkt der Signatur:';
$zeitstempel = ' %timestamp';
$label4_input_de = $label4_input_text . $zeitstempel;






$Description = $xml->createElement('Description');
$Description->setAttribute('author', $description_author );
$Description->setAttribute('name', $description_name);
$Description->setAttribute('description', $description_description );
$SignatureTemplateStyle->appendChild($Description);





$Position = $xml->createElement('Position');
$Position->setAttribute('type', $postion_type );
$Position->setAttribute('x', $postion_name);
$Position->setAttribute('y', $postion_x );
$Position->setAttribute('w', $postion_y );
$Position->setAttribute('h', $postion_h );
$Position->setAttribute('page', $postion_page );
$SignatureTemplateStyle->appendChild($Position);

$B64bgImage = $xml->createElement('B64bgImage', $b64hintergrundBild );
$SignatureTemplateStyle->appendChild($B64bgImage);

$Fields = $xml->createElement('Fields');
$SignatureTemplateStyle->appendChild($Fields);


$Image  = $xml->createElement('Image', $b64zusatzBild);
$Image ->setAttribute('x', $image_x );
$Image ->setAttribute('y', $image_y);
$Image ->setAttribute('w', $image_w);
$Image ->setAttribute('h', $image_h);
$Fields->appendChild($Image );

$Label  = $xml->createElement('Label', $label1_input_de);
$Label ->setAttribute('type', $label1_type );
$Label ->setAttribute('x', $label1_x);
$Label ->setAttribute('y', $label1_y);
$Label ->setAttribute('w', $label1_w);
$Label ->setAttribute('h', $label1_h);
$Label ->setAttribute('center', $label1_center);
$Label ->setAttribute('wrap', $label1_wrap);
$Label ->setAttribute('fgColor', $label1_fgColor);
$Label ->setAttribute('bgColor', $label1_bgColor);
$Fields->appendChild($Label );

$Label  = $xml->createElement('Label', $label2_input_de);
$Label ->setAttribute('type', $label2_type );
$Label ->setAttribute('x', $label2_x);
$Label ->setAttribute('y', $label2_y);
$Label ->setAttribute('w', $label2_w);
$Label ->setAttribute('h', $label2_h);
$Label ->setAttribute('center', $label2_center);
$Label ->setAttribute('wrap', $label2_wrap);
$Label ->setAttribute('fgColor', $label2_fgColor);
$Label ->setAttribute('bgColor', $label2_bgColor);
$Fields->appendChild($Label );

$Label  = $xml->createElement('Label', $label3_input_de);
$Label ->setAttribute('type', $label3_type );
$Label ->setAttribute('x', $label3_x);
$Label ->setAttribute('y', $label3_y);
$Label ->setAttribute('w', $label3_w);
$Label ->setAttribute('h', $label3_h);
$Label ->setAttribute('center', $label3_center);
$Label ->setAttribute('wrap', $label3_wrap);
$Label ->setAttribute('fgColor', $label3_fgColor);
$Label ->setAttribute('bgColor', $label3_bgColor);
$Fields->appendChild($Label );

$Label  = $xml->createElement('Label', $label4_input_de);
$Label ->setAttribute('type', $label4_type );
$Label ->setAttribute('x', $label4_x);
$Label ->setAttribute('y', $label4_y);
$Label ->setAttribute('w', $label4_w);
$Label ->setAttribute('h', $label4_h);
$Label ->setAttribute('center', $label4_center);
$Label ->setAttribute('wrap', $label4_wrap);
$Label ->setAttribute('fgColor', $label4_fgColor);
$Label ->setAttribute('bgColor', $label4_bgColor);
$Fields->appendChild($Label );
















/*create element using createElement()
append child to parent using appendChild()*/


// parent->appendChild(child);




$xml->save( WP_PLUGIN_DIR . '/HandysignaturAfterSubmit/temp/'.$xml_file_name);
echo "$xml_file_name has been successfully created";
