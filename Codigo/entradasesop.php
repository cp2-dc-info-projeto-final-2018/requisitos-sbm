<?php
  require_once('../Validacoes/salvaturma.php');





  session_start();
  if(array_key_exists('matriculaUsuárioLogado', $_SESSION)==false)
  {
    header('Location: login.php');
  }

  $listaAlunos = null;

  if(array_key_exists('id',$_REQUEST) != false)
  {
    function ProcuraAlunosporTurma($id)
    {
      $bd = Conexão();
      $sql = $bd ->prepare('SELECT * FROM aluno WHERE turma = :valturma');
      $sql -> bindValue(':valturma',$id);
      $sql -> execute();
      return $sql -> fetchAll();
    }
    $result_turma = ProcuraAlunosporTurma($_REQUEST['id']);
  }

  $turma = Procuraturmaparaexibir();

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
      <li><a href=""> Pesquisa</a> </li>
      <li><a href="agendamentos.html"> Agendamentos</a></li>
      <li><a href="../calendario/index.php"> Calendário</a></li>
      <li><a href="cadastra.php">Cadastramento</a></li>
      <li style="float:right"><a class="active" href="/requisitos-sbm/Codigo/sair.php">Sair</a></li>
    </ul>
  <br><br><br>
    <div class="caixinhadoform">
      <select name="isso" onchange="location = `?id=${this.value}`;">
        <option value="0" selected disabled>--Escolha uma opção--</option>
        <?php foreach ($turma as $value) { ?>
            <option value="<?=$value['id_turma'] ?>"> <?=$value['nome'] ?> </option>
          <?php }?>
      </select>
    <br>
    <?php if(array_key_exists('id',$_REQUEST) != false) { ?>
    <?php	foreach ($result_turma as $aluno) { ?>
            <br>
           <?php echo $aluno['matricula']; ?>
           <?php echo $aluno['nome']; ?>
           <?php echo $aluno['sobrenome']; ?>


  <?php	} }?>
  </div>
  </body>
    </html>
