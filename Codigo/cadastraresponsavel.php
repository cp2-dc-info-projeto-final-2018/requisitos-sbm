<?php session_start();
if(array_key_exists('emailUsuárioLogado',$_SESSION))
{
	header('Location: pedidos.php');
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
      <li><a href="entradasesop.html">Pesquisa</a></li>
      <li><a href="atendimentos.php"> Atendimentos</a></li>
      <li><a href="agendamentos.html"> Agendamentos</a></li>
      <li><a href="../calendario/index.php"> Calendário</a></li>
      <li><a href="cadastra.html"> Cadastramento</a></li>
      <li style="float:right"><a class="active" href="sair.php">Sair</a></li>
    </ul>
    <br><br><Br>

  <div class="caixinhadoform">
  <form name ="primeiroAcesso" id="primeiroAcesso" method="post" action="..\Validacoes\cadastraresp.php">
    <h4>Seja Bem-Vindo!</h4>
      <p>Cadastre um novo responsável::</p>
      <?php if ($erro != null) { ?>
           <p> <?= $erro ?> </p>
           <?php }?>

                <input name="nome" type="text" minlength='3' maxlength='35' title="Informe a nome do responsável do aluno - Obrigatório"placeholder="Nome" required />
  				      <input name="endereco" type="text" minlength='3' maxlength='1000' title="Informe o endereço - Obrigatório" placeholder="Endereço" required />
  				      <input name="email" type="email" title="Informe o e-mail do responsável do aluno - Obrigatório" placeholder="E-Mail" required />
                <input name="telefone" type="int" title="Informe o telefone do responsável do aluno- Obrigatório" placeholder="Telefone" required />

                <input name="matricula" type="text" title="Informe a matrícula do aluno- Obrigatório" placeholder="Matrícula do Aluno" required/>

							           <input type="submit" id="submitPrimeiroAcesso" class="btn btn-small" value="cadastrar responsável"/>
							        </form>
						</div>
					</div>

  </div>
</div>
    </div>
  </body>

</html>
