<?php

require_once('config.php');

// Carrega somente um usuário
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

// Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuário, buscando pelo login
// $search = Usuario::search('jo');
// echo json_encode($search);

// Carrega somente um usuário, atenticando por login e senha
// $usuario = new Usuario();
// $usuario->login("root","#%$#%");
// echo $usuario;

$aluno = new Usuario("gui87", "7654");

$aluno->insert();

echo $aluno;

