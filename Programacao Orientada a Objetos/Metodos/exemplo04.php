<?php

class Endereco{
  private $logradouro;
  private $numero;
  private $cidade;

  public function __construct($a, $b, $c){
    $this->logradouro = $a;
    $this->numero = $b;
    $this->cidade = $c;
  }

  public function __destruct(){
    //var_dump("DESTRUIR");_
  }

  public function __toString():String{
    return $this->logradouro.", ".$this->numero." - ".$this.cidade;
  }
}

$meuEndereco = new Endereco("Rua Minas Gerais", "1405", "Lins");
echo $meuEndereco;


?>