<?php

class Documento {

	private $numero;

	public function getNumero(){

		return $this->numero;

	}

	public function setNumero($n){

		$this->numero = $n;

	}

}


class CPF extends Documento {

	public function validar():bool
	{
    //nós nao temos acesso ao private numero mas temos acesso ao método público get
		$numeroCPF = $this->getNumero();

		// Validação do CPF

		return true;

	}

}

$doc = new CPF();
$doc->setNumero("11112223334-44");

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();

?>