<?php session_start();
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
<!DOCTYP
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
  <form name ="primeiroAcesso" id="primeiroAcesso" method="post" action="..\Validacoes\cadastraturma.php">
    <h4>Seja Bem-Vindo!</h4>
      <p>Cadastre uma nova turma:</p>
      <?php if ($erro != null) { ?>
           <p> <?= $erro ?> </p>
           <?php }?>

        <input type="text" name="nome" title="Informe o nome da turma - Obrigatório" placeholder="Nome da Turma">
        <input type="text" name="ano" title="Informe o ano da turma- Obrigatório" placeholder="Ano">
        <input type="text" name="serie" title="Informe a série da turma - Obrigatório" placeholder="Série">
        <br><br>
					<button type="submit">Enviar</button>
				</div>

					<br>
				</form>
  </div>
</div>
    </div>
  </body>

</html>
