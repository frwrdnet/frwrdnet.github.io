<?php
$size = explode('x',array_keys($_GET)[0]);
$w = $size[0];//($_GET['w']!='') ? $_GET['w'] : '800';
$h = $size[1];//($_GET['h']!='') ? $_GET['h'] : '600';
$f = $w/20;
$my_img = imagecreate( $w, $h );
$background = imagecolorallocate( $my_img, 88, 88, 88 );
$text_colour = imagecolorallocate( $my_img, 255, 255, 255 );
// center text
$text = $w.'x'.$h;
$font_width = ImageFontWidth($f);
$font_height = ImageFontHeight($f);
$text_width = $font_width * strlen($text);
$position_center = ceil(($w - $text_width) / 2); // Position to align in center
$text_height = $font_height;
$position_middle = ceil(($h - $text_height) / 2);
// output text
imagestring( $my_img, $f, $position_center, $position_middle, $text, $text_colour );
//imagesetthickness ( $my_img, 5 );
//imageline( $my_img, 30, 45, 165, 45, $line_colour );
header( "Content-type: image/png" );
imagejpeg( $my_img );
//imagecolordeallocate( $line_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );
?>