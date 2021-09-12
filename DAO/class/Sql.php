<?php 

//ESSA CLASSE BASICAMENTE FORMATA OS COMANDOS SQL

class Sql extends PDO {

  //conexão
	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

	}

  //setando varios parametros
	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($statement, $key, $value);

		}

	}


  //setando um parametro
	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}

  //comando sql
  //rawQuery é o tipo do comando sql (update, delete, select, etc)
	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}

  //SELECT
	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

}

 ?>