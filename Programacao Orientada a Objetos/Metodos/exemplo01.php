<?php

  class Pessoa{
    public $nome; //Atributo

    public function falar(){ //método
      return "O meu nome é ".$this->nome;
    }
  }

  //Objeto
  $nathalia = new Pessoa();
  $nathalia->nome = 'Nathália Urenha';
  echo $nathalia->falar();

?>