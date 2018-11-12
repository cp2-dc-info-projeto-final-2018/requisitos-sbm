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
      <li><a href="agendamentos.html"> Agendamentos</a></li>
      <li><a href="tabela.php"> Calendário</a></li>
      <li style="float:right"><a class="active" href="sair.php">Sair</a></li>
    </ul>

  <br><br><br>
  <div class="caixinhadoform">
  <select>
  <option value="turma">Primeiro Ano Regular</option>
  <option value="turma">Segundo Ano Regular</option>
  <option value="turma">Terceiro Ano Regular</option>
  <option value="turma">PROEJA Primeiro Ano</option>
  <option value="turma">PROEJA Segundo Ano</option>
  <option value="turma">PROEJA Terceiro Ano</option>
  <option value="turma">Primeiro Ano Integrado</option>
  <option value="turma">Segundo Ano Integrado</option>
  <option value="turma">Terceiro Ano Integrado</option>
  <option value="Repetente">Repetente Regular</option>
  <option value="Repetente">Repetente Integrado</option>
  <option value="Repetente">Repetente PROEJA</option>
  <option value="Mais de 3 apoios">Mais de 3 apoios Regular</option>
  <option value="Mais de 3 apoios">Mais de 3 apoios Integrado</option>
  <option value="Mais de 3 apoios">Mais de 3 apoios PROEJA</option>

    </select>
    <br>
    <p><input type = "button" value="Entrar"></input></p>
  </div>


  </body>
    </html>
