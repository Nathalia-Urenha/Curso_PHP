<?php 

require_once("config.php");

//Carrega um usuário
// $user = new Usuario();
// $user->loadbyId(1);
// echo $user;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//:: é de classe estática
// $search = Usuario::search("root");
// echo json_encode($search);

//carrega um usuário usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("user", "!@#$");
// echo $usuario;

//Criando um novo usuário
// $aluno = new Usuario("aluno", "@lun0");
// $aluno->insert();
// echo $aluno;


/* //Alterar um usuário
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->update("jose", "a1b2c3");
echo $usuario; */


$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;
 ?>