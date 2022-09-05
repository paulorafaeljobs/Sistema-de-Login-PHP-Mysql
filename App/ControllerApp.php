<?php
require_once 'Autenticacao.php';
if(isset($_POST['login'])){
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $senha = filter_var($_POST['senha'], FILTER_SANITIZE_ADD_SLASHES);
  Login($email,$senha);
}
if(isset($_POST['cadastrar'])){
  $nome = filter_var($_POST['nome'], FILTER_SANITIZE_ADD_SLASHES);
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $senha = filter_var($_POST['senha'], FILTER_SANITIZE_ADD_SLASHES);
  Cadastrar($nome,$email,$senha);
}if(isset($_GET['sair'])){
  session_start();
  Logs("Usuario Logout",$_SESSION['email']);
  session_destroy();
  session_write_close();
  session_regenerate_id(true);
  unset($_SESSION['id']);
  unset($_SESSION['nome']);
  unset($_SESSION['email']);
  header("location: ./../");
}else{
  header("location: ./../");
};