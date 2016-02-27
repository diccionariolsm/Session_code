<html>
<head>
	<?php echo $header; ?>
</head>
<body>
	<?php echo $head; ?>
	
	<?php if (isset($login)) {
		echo $login;
	} 
	?>
	<?php if (isset($exitoadmin)) {
		echo $exitoadmin;
	} 
	?>


	<?php if (isset($exitouser)) {
		echo $exitouser;
	} 
	?>

	<?php if (isset($iniciar)) {
		echo $iniciar;
	} 
	?>
	
	<?php if (isset($error)) {
		echo $error;
	}?>
	
	<?php echo $footer; ?>
</body>
</html>