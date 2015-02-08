<?php 
/**
* Class para gerar de Senhas
* @var $number - Bool - Se deseja que a class inclua números na senha gerada.
* @var $symbols - Bool - Inclui caracteres especiais nas senhas geradas.
* @var $capital - Bool - Inclui letras Maiúscula nas senhas geradas.
* @var $length - Int - Tamanho da Senha Gerada.
* @author Valdiney França <valdiney.2@hotmail.com>
* @version 0.1
*/
class PasswordGenerator
{
	protected static $letters = "abcdefghijklmnopqrstuvwxyz";
	protected static $number = 0123456789;
	protected static $symbols = "!@#$%*-";
	protected static $character = null;
	protected static $result = null;

	public static function generate($number = true, $symbols = false, $capital = false, $length = 8)
	{
		self::$character .= self::$letters;

		if ($number)
		{
			self::$character .= self::$number;
		}

		if ($symbols)
		{
			self::$character .= self::$symbols;
		}

		if ($capital)
		{
			self::$character .= strtoupper(self::$letters);
		}

		$characterLength = strlen(self::$character);
		for ($i = 1; $i < $length; $i++)
		{
			$randomic = mt_rand(1, $characterLength);
			self::$result .= self::$character[$randomic-1];
		}

		return self::$result;
	}
}
/* End of file PasswordGenerator.class.php */
/* Location: class */