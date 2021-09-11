<?php

namespace Cliente;


//  \ - volta pra raiz
class Cadastro extends \Cadastro {

	public function registrarVenda(){

    echo "Foi registrada uma venda para o(a) cliente ".$this->getNome();

	}

}

?>