<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gerando Senhas com a Class PasswordGenerator</title>
</head>
<body>
	<?php 
	   require_once("class/PasswordGenerator.class.php");
	   echo PasswordGenerator::generate(10);
	?>
</body>
</html>