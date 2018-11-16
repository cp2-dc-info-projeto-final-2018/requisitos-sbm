<?php
session_start();
var_dump($_SESSION);
if(array_key_exists('matriculaUsuárioLogado', $_SESSION)==false)
{
  header('Location: login.php');
}else if($_SESSION['atuacao'] == 1)
{
header('Location: entradadirecao.php');
}
?>
<!DOCTYPE HTML>

<html lang="pt-br">
  <head>
      <meta charset="utf-8">
      <title> SISOP </title>
      <link rel="stylesheet" type="text/css" href="style1.css">
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
      <li><a href="entradasesop.php">Pesquisa</a></li>
      <li><a href="agendamentos.html"> Agendamentos</a></li>
      <li><a href="../calendario/index.php"> Calendário</a></li>
      <li><a href=""> Cadastramento </a></li>
      <li style="float:right"><a class="active" href="/requisitos-sbm/Codigo/sair.php">Sair</a></li>
    </ul>
    <br> <br> <br>
  <div class="caixinhadoform1">
<table width="400" border="1">

<h3 center>Cadastramento</h3>

<tr>
<td> Evento </td>
<td>Aluno</td>
<td>Novo Usuário(Sesop e Direção)</td>
<td>Atendimento</td>
<td>Turma</td>
</tr>
<tr>
<td><a href= "cadastraevento.php"><img src= "../Imagens/evento.jpg" height= "100" widht= "100"/></a></td>
<td><a href="cadastraaluno.php"><img src="../Imagens/estudante.jpg" height="100" width="100"/></a></td>
<td><a href="cadastrausuario.php"><img src="../Imagens/sedi.jpg" height="100" width="100"/></a></td>
<td><a href="atendimentos.php"><img src="../Imagens/aten.jpg" height="100" width="100"/></a></td>
<td><a href="cadastraturma.php"><img src="../Imagens/turma.jpg" height="100" width="100"/></a></td>
</tr>
</div>
</body>
</html>
