<?php

Class Pessoa 
{
	private $nome = "wando santos";
	private $idade = 33;
	public $profissao = "Dev.";

	public function Exibir()
	{
		return "O nome do usuário é ".$this->nome.", idade ".$this->idade." anos.";
	}


}

$cliente = new Pessoa;
echo $cliente->Exibir();


?>