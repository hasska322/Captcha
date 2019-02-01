<?php

include 'script.php';
$captcha = generic();
setcookie('captcha',$captcha,time()+180);

header("Content-Type: image/png");
$im = @imagecreate(200, 70)
    or die("Невозможно создать поток изображения");
$background_color = imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255));
$color = imagecolorallocate($im, rand(0, 200), rand(100,200), rand(0, 200));
$text_color = imagecolorallocate($im, 0, 0, 0);

$font = '/usr/share/fonts/truetype/lao/Phetsarath_OT.ttf';

$linenum = rand(3,7);
for ($i=0; $i<$linenum; $i++)
		{
			$color = imagecolorallocate($im, rand(0, 150), rand(0, 100), rand(0, 150)); 
			imageline($im, rand(0, 20), rand(1, 50), rand(150, 180), rand(1, 50), $color);
		}


$x = rand(0, 10);
for($i = 0; $i < strlen($captcha); $i++) {
	$x+=rand(10, 20);;
	$letter=substr($captcha, $i, 1);
	imagettftext ($im, 20, 0, $x, 40 , imagecolorallocate($im, rand(0, 150), rand(0, 100), rand(0, 150)), $font, $letter);
}

for ($i=0; $i<$linenum; $i++)
		{
			$color = imagecolorallocate($im, rand(0, 255), rand(0, 200), rand(0, 255));
			imageline($im, rand(0, 20), rand(1, 50), rand(150, 180), rand(1, 50), $color);
		}

imagepng($im);
imagedestroy($im);






  ?>
