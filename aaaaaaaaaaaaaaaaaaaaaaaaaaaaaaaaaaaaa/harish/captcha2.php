<?php
/*
$letter="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789!@$%&()?/{}[]\|";
$captcha=substr(str_shuffle($letter),0,8);

$img=imagecreatetruecolor(10,90);
header("Content-type: img/png");
$bg=imagecolorallocate($img,84,65,190);
$font=imagecolorallocate($img,255,0,0);
imagefill($img,0,0,$bg);
imagestring($img,5,5,5,$captcha,$font);
imagepng($img);
imagedestroy($img);


$im = @imagecreatetruecolor(120, 20)
      or die('Cannot Initialize new GD image stream');
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

header ('Content-Type: image/png');
imagepng($im);
imagedestroy($im);*/

?>
<?php

    header ('Content-Type: image/jpeg');
    $im = @imagecreatetruecolor(100,100);
    $text_color = imagecolorallocate($im, 233, 14, 91);
    $letter="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789!@$%&()?/{}[]\|";
    $captcha=substr(str_shuffle($letter),0,8);
    imagestring($im, 5, 50, 50,$captcha, $text_color);
    imagejpeg($im);
 
?>
    