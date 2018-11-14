<?php session_start();
if(array_key_exists('emailUsuárioLogado',$_SESSION))
{
	header('Location: .php');
	exit();
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
      <li><a href="agendamentos.html"> Agendamentos</a></li>
      <li><a href="../calendario/index.php"> Calendário</a></li>
      <li><a href="cadastra.php"> Cadastramento</a></li>
      <li style="float:right"><a class="active" href="/requisitos-sbm/Codigo/sair.php">Sair</a></li>
    </ul>
    <br><br><Br>

  <div class="caixinhadoform">
  <form name ="primeiroAcesso" id="primeiroAcesso" method="post" action="..\Validacoes\cadastraevento.php">
    <h4>Seja Bem-Vindo!</h4>
      <p>Cadastre um novo evento:</p>
      <?php if ($erro != null) { ?>
           <p> <?= $erro ?> </p>
           <?php }?>

        <input type="text" name="evento" title="Informe o nome do evento - Obrigatório" placeholder="Nome do Evento">
        <input type="Date" name="data" title="Informe a data do agendamento- Obrigatório" placeholder="Data">
				<br><br>
				<fieldset>
					<legend> Horário do evento:</legend>
					<input type="radio" name="turno" value= "manha"> Manhã<br>
					<input type="radio" name="turno" value="tarde"> Tarde<br>
					<input type="radio" name="turno" value= "integral"> Integral<br>
					<input type="radio" name="turno" value="noite">Noite<br>
​        </fieldset>
          <br><br>
          <label for="msg">Descrição:</label>
          <br><br>

          <textarea name="descricao" title="Informe uma pequena descrição - Obrigatório"></textarea>
					<button type="submit">Cadastrar</button>
				</div>

					<br>
				</form>
  </div>
</div>
    </div>
  </body>

</html>
