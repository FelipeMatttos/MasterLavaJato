<?php
include "../Model/Bcrypt.php";
include "../Model/Login.php";
include "../Model/Erro.php";
$logar = new Login();
$erro = new Erro();

$login = $_POST['login'];
$senha = $_POST['senha'];
$token = Bcrypt::hash($login);
$logar->setLogin($login);
$logar->setSenha($senha);

$loginUsuario = $logar->logarUsuario();
if ($loginUsuario) {
  $usuario = json_decode($loginUsuario, true);
  if ($usuario['sucesso'] === true) {
    echo json_encode(array('Sucesso' => true, "acesso" => "usuario"));
  } else {
    $erro->setErro($usuario['erro']);
    $mensagemErro = $erro->MensagemErro();
    echo json_encode(array("Erro" => htmlentities($mensagemErro), "Codigo" => $usuario['codigo']));
  }
}
