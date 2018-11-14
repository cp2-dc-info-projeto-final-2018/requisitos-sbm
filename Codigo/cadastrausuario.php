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
      <br> <br> <br>
  <div class="caixinhadoform">
  <form name ="primeiroAcesso" id="primeiroAcesso" method="post" action="..\Validacoes\cadastrarsesopdirecao.php">
    <h4>Seja Bem-Vindo!</h4>
      <p>Cadastre o Usuário:</p>
      <?php if ($erro != null) { ?>
           <p> <?= $erro ?> </p>
           <?php }?>

								<input name="matricula" class="formcss" required="" tabindex="1" title="Informe sua Matricula - Obrigatrio" placeholder="Matricula" autocomplete="off" type="text"  id="matricula"/>
                <input name="nome" type="text" minlength='3' maxlength='35' placeholder="Nome" required />
  				      <input name="sobrenome" type="text" minlength='3' maxlength='35' placeholder="Sobrenome" required />
  				      <input name="email" type="email" placeholder="E-Mail" required />
  				      <input name="senha" type="password" placeholder="Digite a Senha" required="" class="formcss" type="text" size="20" minlengh="3" maxlengh="20" tabindex="2">
                <input name="confirmaSenha" type="password" min='6' max='12' placeholder="Confirmar senha" required /><br>
                <input name="datNasc" type="date" placeholder="Data de Nascimento" required />
                  <br>​
                  <fieldset>
                  	<legend> Qual área da atuação no Colégio Pedro II?</legend>
                    <input type="radio" name="atuacao" value= "sesop"> SESOP<br>
                    <input type="radio" name="atuacao" value="direcao"> Direção<br><br>

​                   </fieldset>
                  </fieldset>
​                  <br>
							           <input type="submit" id="submitPrimeiroAcesso" class="btn btn-small" value="Continuar o cadastramento"/>
							        </form>
						</div>
					</div>

  </div>
</div>
    </div>
  </body>

</html>
