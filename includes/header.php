<?php
  //session_start();
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="shortcut icon" href="../Public/img/icon.png" type="image/x-icon">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mercearia São José</title>
  </head>

  <body style="background-image: url(../Public/img/detalhe.png); background-size: 100%; background-repeat: no-repeat;">
    <!-- MENU -->

    <!-- Estrutura do Dropdown -->
    <ul id="dropdown1" class="dropdown-content" style="margin-top:64px">
      <li><a href="../View/produtos.php" class="indigo-text">PRODUTOS</a></li>
      <li><a href="../View/historico.php" class="indigo-text">HISTÓRICO</a></li>
    </ul>

    <ul id="dropdown2" class="dropdown-content" style="margin-top:64px">
      <li><a href="../View/devedores.php" class="indigo-text">DEVEDORES</a></li>
      <li><a href="../View/fornecedores.php" class="indigo-text">FORNECEDORES</a></li>
      <li><a href="../View/grafico.php" class="indigo-text">GRÁFICO</a></li>
      <li><a href="../login.php" class="red-text">SAIR</a></li>
    </ul>

    <div class="navbar-fixed">
      <nav class="indigo darken-2">
        <div class="nav-wrapper">
          <ul class="right">
            <li><a href="../View/home.php"><i class="material-icons right">home</i></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">GESTÃO PRODUTOS<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">GESTÃO PESSOAS<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
        </div>
      </nav>
    </div>
