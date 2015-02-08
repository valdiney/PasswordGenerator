# PasswordGenerator
Class para gerar Senhas.

<h3>Descrição</h3>
<p>
	A classe é abstrata, o que significa que não precisamos instanciá-la para usar seus recursos, fazendo com que o seu uso seja ainda mais fácil.
</p>

<h3>Como funciona</h3>
<p>
	O Método <b>generate()</b>  recebe quatro argumentos, sendo o primeiro argumento um número inteiro que representa o tamanho da senha que será gerada. Os três seguintes são Booleanos [true] ou [false].
</p>

```txt
PasswordGenerator::generate([Tamanho da Senha], [Números], [Caracteres Especiais ], [Letras Maiúsculas]);
```
<h3>Exemplo de uso</h3>
```php
<?php 
	require_once("class/PasswordGenerator.class.php");

	/**
    * Gera uma senha com todos os recursos da classe.
    * Algo como: QaYE%1Gfu 
    */
	echo PasswordGenerator::generate(10);

	/**
    * Gera uma senha omitindo alguns recursos.
    * Algo como: hkrplcgyl 
    */
	echo PasswordGenerator::generate(10, false, false, false);
   
?>
```
