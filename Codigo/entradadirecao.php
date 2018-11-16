<?php
session_start();
if(array_key_exists('matriculaUsuárioLogado', $_SESSION)==false)
{
  header('Location: login.php');
}
?>
<!DOCTYPE HTML>

<html lang="pt-br">
  <head>
      <meta charset="utf-8">
      <title> SISOP </title>
      <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body>
    <div id="topo">
      <div id="topo2">
        <div class="primeira"> <b>COLÉGIO <br> </div>
          <div class= "segunda"> PEDRO II<b>
        </div>
      </div>
    </div>

    <style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: black;
    }
    li {
        float: left;
    }
    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    li a:hover:not(.active) {
        background-color: #111;
    }
    }
    </style>
    </head>
    <body>

    <ul>
      <li><a href="login.php">Pesquisa</a></li>
      <li><a href="atendimentos.php"> Atendimentos</a></li>
      <li><a href="../calendario/index.php"> Calendário</a></li>
      <li style="float:right"><a class="active" href="/requisitos-sbm/Codigo/sair.php">Sair</a></li>
    </ul>

  <br><br><br>
  <div class="caixinhadoform">
    <select name="isso" onchange="location = this.value;">
  <option value="0" selected disabled>--Escolha uma opção--</option>
  <?php
    require_once('../Validacoes/salvaturma.php');
    $turma = Procuraturmaparaexibir();
  foreach ($turma as $value) { ?>
      <option value="<?=$value ?>"> <?=$value ?> </option> <?php }?>
  </select>
  <br>
    <p><input type = "button" value="Entrar"></input></p>
  </div>


  </body>
    </html>
