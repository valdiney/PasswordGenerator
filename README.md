# PasswordGenerator
Class para gerar Senhas.

<h3>Como funciona</h3>
<p>
	A classe é abstrata, o que significa que não precisamos instanciá-la para usar seus recursos fazendo com que o seu uso seja ainda mais simples.
</p>

<h3>Exemplo de Uso</h3>
```txt
echo PasswordGenerator::generate([Números], [Caracteres Especiais ], [Letras Maiúscula], [Tamanho da Senha]);

```

```php
<?php 
	require_once("class/PasswordGenerator.class.php");
	echo PasswordGenerator::generate(true, true, true, 10);
    /* Pode gerar algo como: QaYE%1Gfu */
?>
```
