<?php
//Conexão
include_once 'Model/db_connect.php';
//Mensagem
include_once 'Includes/mensagem.php';
//Sessão
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
    <style>

    body .wave {
      position: absolute;
      width: 100%;
      height: 142px;
      bottom: 0;
      left: 0;
      background: url(Public/img/wave.png);
      animation: animate 10s linear infinite;
    }

    body .wave:before {
      content: '';
      width: 100%;
      height: 142px;
      background: url(Public/img/wave.png);
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0.4;
      animation: animate-reverse 10s linear infinite;
    }

    body .wave:after {
      content: '';
      width: 100%;
      height: 142px;
      background: url(Public/img/wave.png);
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0.6;
      animation-delay: -5s;
      animation: animate 20s linear infinite;
    }

    @keyframes animate {
      0% {
        background-position: 0;
      }
      100% {
        background-position: 1360px;
      }
    }

    @keyframes animate-reverse {
      0% {
        background-position: 1360px;
      }
      100% {
        background-position: 0;
      }
    }
    </style>
  </head>
  <body  class="area indigo">

<div class="row">
  <div class=" white col s10 offset-s1 m6 offset-m3 l4 offset-l4 z-depth-3" style="margin-top: 160px">
    <div class="row">
      <h4 class="center light">Mercearia São José</h4>
    </div>
    <form class="" action="View/home.php" method="POST">
      <div class="row">
        <div class="col s10 offset-s1">
          <input placeholder="E-Mail" type="email" class="validate" name="email">
        </div>
        <div class="col s10 offset-s1">
          <input placeholder="Senha" type="password" class="validate" name="senha">
        </div>
        <button type="submit" name="btn-entrar" class="btn col s10 offset-s1 indigo">Entrar</button>
      </div>
    </form>
  </div>
</div>

  <div class="wave">

  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
  $(".dropdown-button").dropdown();
  </script>
</body>
</html>