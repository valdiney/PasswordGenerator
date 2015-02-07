# PasswordGenerator
Class para gerar Senhas.

<h3>Exemplo de Uso</h3>

```php
<?php 
	require_once("class/PasswordGenerator.class.php");
	$senha = new PasswordGenerator(true, 10);
    echo $senha->generate();
    /*Pode gerar algo como: 9vb5behoz*/
?>
```
