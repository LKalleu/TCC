<?php
//Sessão
session_start();
// COnexão
require_once 'db_connect.php';

if (isset($_POST['btn-desastivar'])) {

  $id = mysqli_escape_string($connect, $_POST['id']);

  $sql = "UPDATE devedor SET status = '2' WHERE id = '$id' ";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Desativado com sucesso!";
    header('Location: ../View/devedores.php');
  }else {
    $_SESSION['mensagem'] = "Erro ao desativar!";
    header('Location: ../View/devedores.php');
  }

}
 ?>
