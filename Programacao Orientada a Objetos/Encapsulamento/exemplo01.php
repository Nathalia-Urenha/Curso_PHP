<?php

class Pessoa {

	public $nome = "Nathalia Urenha";
	protected $idade = 20;
	private $senha = "123456";


  //esse método é publico entao ele pode acessar todos os tipos de atributos
	public function verDados(){

		echo $this->nome. "<br/>";
		echo $this->idade. "<br/>";
		echo $this->senha. "<br/>";

	}

}

$objeto = new Pessoa();

//nao é possivel acessar o atributo protegido, somente um método que está dentro dessa classe,
//ou um método de uma classe filha

//echo $objeto->idade . "<br/>";

//nao é possivel acessar o atributo privado, somente um método que está dentro dessa classe,
//nem mesmo o método de uma classe filha consegue acessar

//echo $objeto->senha . "<br/>";

$objeto->verDados();

?>
