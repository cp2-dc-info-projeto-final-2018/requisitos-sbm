<?php session_start();
if($_SESSION['atuacao'] == 1)
{

	$erro = $_SESSION['erros'];
	unset($_SESSION['erros']);
}
//if (empty($_SESSION['erros']))
if(array_key_exists('erros',$_SESSION))
{
	$erro = $_SESSION['erros'];
	unset($_SESSION['erros']);
}
else
{
	$erro=null;
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
      <li><a href="entradasesop.php">Pesquisa</a></li>
      <li><a href="atendimentos.php"> Atendimentos</a></li>
      <li><a href="agendamentos.html"> Agendamentos</a></li>
        <li><a href="../calendario/index.php"> Calendário</a></li>
      <li><a href= "cadastra.php">Cadastramento</a></li>
      <li style="float:right"><a class="active" href="/requisitos-sbm/Codigo/sair.php">Sair</a></li>
    </ul>
    <br> <br> <br>
    <div class="caixinhadoform">
      <form name="formdelogin" method="post" action="../Validacoes/cadastraaten.php" >
        <h4>Seja Bem-Vindo!</h4>
          <p>Cadastre um novo atendimento:</p>
          <?php if ($erro != null) { ?>
               <p> <?= $erro ?> </p>
               <?php }?>
        <input type="text" name="matricula" title="Informe a matrícula da pessoa que irá atender - Obrigatório" placeholder="Matrícula" required><br>
        <input type="text" name="nomealu" title="Informe o nome do aluno - Obrigatório" placeholder="Nome do Aluno" required>
        <input type="text" name="nomeresp" title="Informe o nome do Responsável - Obrigatório" placeholder="Nome do Responsável" required>
				<input type="text" name="nomeusu" title="Informe o nome de quem irá atender - Obrigatório" placeholder ="Nome do Atendente" required>
				<input type="time" name="inicio" title="Informe a hora do agendamento- Obrigatório" placeholder="Inicio" required>
				<input type="time" name="fim" title="Informe a hora do agendamento- Obrigatório" placeholder="Fim" required>
        <input name ="data" type="date" title="Informe a data do agendamento - Obrigatório" placeholder ="Data do Agendamento" required/>
        <div>
          <br>
          <label for="msg">Descrição:</label>
          <br><br>-

          <textarea name="descricao" title="Informe uma pequena descrição - Obrigatório"></textarea>

      </div>
      <button type="submit">Cadastrar</button>
        <br>
      </form>
  </div>

  </body>
    </html>
