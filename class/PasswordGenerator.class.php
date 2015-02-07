<?php 
/**
* Class para gerar de Senhas
* @var $number - Bool - Se deseja que a class inclua números na senha gerada.
* @var $length - Int - Tamanho da Senha Gerada.
* @author Valdiney França <valdiney.2@hotmail.com>
*/
class PasswordGenerator
{
	private $theInternalLetters = "abcdefghijklmnopqrstuvwxyz";
	private $theInternalNumbers = 123456789;
	private $character = null;
	private $length = null;
	private $result = null;

	public function __construct($number = true, $length = 8)
	{
		$this->length = $length;
		$this->character .= $this->theInternalLetters;

		if ($number) 
		{
			$this->character .= $this->theInternalNumbers;
		}
	}

	public function generate()
	{
		$characterLength = strlen($this->character);
		for ($i = 1; $i < $this->length; $i++)
		{
			$randomic = mt_rand(1, $characterLength);
			$this->result .= $this->character[$randomic-1];
		}

		return $this->result;
	}
}