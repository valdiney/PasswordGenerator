# PasswordGenerator
Class para gerar Senhas.

<h3>Descrição</h3>
<p>
	Com essa classe você conseguirá gerar poderosas senhas de forma muito simples e inteligente. Podendo gerar senhas contendo números, letras maiúsculas e minúsculas e caracteres especiais... Você também pode declinar de algumas dessas características, mas recomendados que use todo o recurso da classe para que a sua senha tenha uma estrutura forte!
</p>

<h3>Instalação</h3>
<p>
	Você pode instalar a class em seu projeto usando o <b>composer</b>. Basta adicionar ao seu <b>composer.json</b>: require: "valdiney/password-generator": "dev-master"
</p>

<a href="https://packagist.org/packages/valdiney/password-generator" target="_black">Visuaizar no Packagist</a>

<h3>Como funciona</h3>
<p>
	O Método <b>generate()</b>  recebe quatro argumentos, sendo o primeiro argumento um número inteiro que representa o tamanho da senha que será gerada. Os três seguintes são Booleanos [true] ou [false].
</p>

```txt
PasswordGenerator::generate([Tamanho da Senha], [Números], [Caracteres Especiais ], [Letras Maiúsculas]);
```
<h3>Exemplo de uso</h3>

```php
   require_once("generator/PasswordGenerator.php");

    /**
    * Gera uma senha com todos os recursos da classe.
    * Algo como: QaYE%1Gfu 
    */
	 echo generator\PasswordGenerator::generate(10);

	/**
    * Gera uma senha omitindo alguns recursos.
    * Algo como: hkrplcgyl 
    */
	echo generator\PasswordGenerator::generate(10, false, false, false);
```
