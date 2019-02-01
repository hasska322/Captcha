<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Document</title>
</head>
<body>
	<form method="POST" action="">
		<img src="image.php"><br>
		<input type="text" name="enter"><br>
		<input type="submit" name="submit">
</form>



<?php 

include 'script.php';
	$captcha = $_COOKIE['captcha'];

	
	if (isset($_POST[enter])&&($_POST[enter] !=='')) {
		$answer = $_POST[enter];
			echo " Your answer  is  '$answer' <br>";
			echo "Correct answer is '$captcha' <br>";
	if ($answer == $captcha) {
				echo "Captcha is correct!";
			}
			else echo "Captcha isn't correct!";
	}

	else echo "Captcha is empty!";	
 
?>

</body>
</html>