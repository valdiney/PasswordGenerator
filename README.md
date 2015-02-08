# PasswordGenerator
Class para gerar Senhas.

<h3>Como funciona</h3>
<p>
	A classe é abstrata, o que significa que não precisamos instanciá-la para usar seus recursos, fazendo com que o seu uso seja ainda mais fácil.
</p>

<h3>Exemplo de Uso</h3>
<p>
	O Método <b>generate()</b>  recebe quatro argumentos, sendo os três iniciais Booleanos [true] ou [false] e o ultimo argumento um número inteiro que representa o tamanho da senha que será gerada.
</p>
```txt
PasswordGenerator::generate([Números], [Caracteres Especiais ], [Letras Maiúscula], [Tamanho da Senha]);

```

```php
<?php 
	require_once("class/PasswordGenerator.class.php");
	echo PasswordGenerator::generate(true, true, true, 10);
    /* Pode gerar algo como: QaYE%1Gfu */
?>
```
