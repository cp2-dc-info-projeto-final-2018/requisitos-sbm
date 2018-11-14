<?php
require_once('../Validacoes/salvasesopdirecao.php');

session_start();

  if(array_key_exists('matriculaUsuárioLogado', $_SESSION))
  {
    $atuacao = Verificaratuacao($_SESSION['matriculaUsuárioLogado']);
    $_SESSION['atuacao'] = $atuacao;
    if($atuacao==0){
    header ('Location: entradasesop.php');
                   }
    else
    {
      header('Location:entradadirecao.php');
    }
  	exit();
  }

  if (array_key_exists('erros',$_SESSION))
  {
  	$erro = $_SESSION ['erros'];

  	unset ($_SESSION['erros']);
  }
  else
  {
  	$erro = null;
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

    <br> <br> <br> <br> <br>
    <div class="caixinhadoform">
      <form name="formdelogin" method="post" action="entrar.php" >
        <h4>Seja Bem-Vindo!</h4>
		      <p>Por favor, identifique-se:</p>
          <?php if ($erro != null) { ?>
			         <p> <?= $erro ?> </p>
               <?php }?>
        <input type="text" name="matricula" placeholder="Matrícula"><br>
        <input type="password" name="senha"  placeholder="Senha"><br>
        <br>
          <br><br>
        <input type="submit" value="Entrar">
      </form>
    </div>
  </body>
</html>
