<?php
$my_img = imagecreate( 200, 80 );
$background = imagecolorallocate( $my_img, 0, 0, 255 );
$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
imagestring( $my_img, 4, 30, 25, "thesitewizard.com", $text_colour );
imagesetthickness ( $my_img, 5 );
imageline( $my_img, 30, 45, 165, 45, $line_colour );

header( "Content-type: image/png" );
//imagepng( $my_img );
imagepng($my_img,"images/monimage.png");
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );

imagedestroy( $my_img );
header("Location:test.php");
?>