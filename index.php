<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gerando Senhas com a Class PasswordGenerator</title>
</head>
<body>
	<?php 
	   require_once("class/PasswordGenerator.class.php");
	   $senha = new PasswordGenerator(true, 6);
       echo $senha->generate();
	?>
</body>
</html>