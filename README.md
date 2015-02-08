# PasswordGenerator
Class para gerar Senhas.

<h3>Exemplo de Uso</h3>

```php
<?php 
	require_once("class/PasswordGenerator.class.php");
	echo PasswordGenerator::generate(true, true, true, 10);
    /* Pode gerar algo como: QaYE%1Gfu */
?>
```
