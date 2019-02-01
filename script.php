<?php 

function generic()
{
$char = 'zxcvbnmqawsedrftgyhujikolpQAZWSXEDCRFVTGBYHNUJMIKOLP123456789';
$how_many = rand(5,10);

for ($i=0; $i <$how_many; $i++) { 
	$captcha .= substr($char ,rand(1,strlen($char)),1);

}
return $captcha;
}
 ?>