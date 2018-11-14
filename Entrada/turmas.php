

<!DOCTYPE HTML>

<html lang="pt-br">
  <head>
      <meta charset="utf-8">
      <title> SISOP </title>
      <link rel="stylesheet" type="text/css" href="../Codigo/style.css">

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
        <li><a href="../Codigo/entradasesop.php">Pesquisa</a></li>
        <li><a href="../Codigo/agendamentos.html"> Agendamentos</a></li>
        <li><a href="../calendario/index.php"> Calendário</a></li>
        <li><a href="../Codigo/cadastra.php"> Cadastramento</a></li>
        <li style="float:right"><a class="active" href="/requisitos-sbm/Codigo/sair.php">Sair</a></li>
      </ul>


        //fazer validção da turma pois pode n vir nenhuma turma

      <h3><center><?= $_REQUEST['turma'] ?>: </h3>
        <?php
        $listaAluno = ListaAluno();

        foreach ($listaAluno as $aluno) { ?>
      		<div>
            	<table>
      			<h4><?= $aluno[0] ?></h4>
              <tr>
      				<td>Data do Atendimento:</td>
      				<td><?= $aluno[1] ?></td>
            </tr>
              <tr>
      				<td>Turma:</td>
      				<td><?= $aluno[2] ?></a></td>
            </tr>
            <tr>
      				<td>Hora do Atendimento:</td>
      				<td><?= $aluno[3] ?></td>
      			</tr>
          </table>
      		</div>
      	<?php } ?>

  </body>
    </html>
