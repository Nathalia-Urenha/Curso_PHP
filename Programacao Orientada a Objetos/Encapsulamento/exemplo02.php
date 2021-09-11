<?php

class Pessoa {

	public $nome = "Nathália Urenha";
	protected $idade = 20;
	private $senha = "123456";


	public function verDados(){

		echo $this->nome. "<br/>";
		echo $this->idade. "<br/>";
		echo $this->senha. "<br/>";

	}


}

//classe filha (herança), ela pode acessar os atributos publicos e protegidos da classe mãe
//mas os privados não.
class Programador extends Pessoa{

  public function verDados(){

		echo get_class($this) . "<br/>";

		echo $this->nome. "<br/>";
		echo $this->idade. "<br/>";
		echo $this->senha. "<br/>";

	}

}

$objeto = new Programador();

// echo $objeto->senha . "<br/>";

$objeto->verDados();

?>