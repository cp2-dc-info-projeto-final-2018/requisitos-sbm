    <?php
      require_once('../Validacoes/salvaturma.php');

$i = 1;
         session_start();
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
      <li><a href="entradasesop.php">Pesquisa</a></li>
      <li><a href="agendamentos.html"> Agendamentos</a></li>
      <li><a href="../calendario/index.php"> Calendário</a></li>
      <li><a href= "cadastra.php">Cadastramento</a></li>
      <li style="float:right"><a class="active" href="/requisitos-sbm/Codigo/sair.php">Sair</a></li>
    </ul>


  <br> <br> <br>
  <div class="caixinhadoform">
  <form name ="primeiroAcesso" id="primeiroAcesso" method="post" action="..\Validacoes\cadastraaluno.php">
      <p>Cadastre um novo aluno:</p>
      <?php if ($erro != null) { ?>
           <p> <?= $erro ?> </p>
           <?php }?>

                Informações do Aluno:
								<input class="formcss" required="" tabindex="1" title="Informe a Matrícula do aluno - Obrigatório" placeholder="Matricula" autocomplete="off" type="text" name="matricula" id="matricula"/>
                <input name="nome" type="text" minlength='3' maxlength='35' title="Informe o Nome do aluno - Obrigatório" placeholder="Nome" required />
  				      <input name="sobrenome" type="text" minlength='3' maxlength='35' title="Informe o Sobrenome do aluno - Obrigatório" placeholder="Sobrenome" required />
                <input name ="datNasc" type="date"title="Informe a data de nascimento - Obrigatório" placeholder ="Data de Nascimento" required/>
                <select name="turma">
                  <option value="0" selected disabled>--Escolha uma opção--</option>
                  <?php foreach ($turma as $value) { ?>
                      <option value="<?=$i?>"> <?=$value['nome'] ?> </option>
                    <?php }?>
                <br><br>
                Informações do Responsável:
                <input name="nomeResp" type="text" minlengh = '3' maxlength = '35' title="Informe o nome do responsável do aluno." placeholder="Nome do Responsável" required/>
                <input name= "telefone" type="tel"title="Informe o telefone do aluno - Obrigatório" placeholder="Telefone" required/>
                <input name="email" type="email" title="Informe o e-mail - Opcional" placeholder="E-Mail" />
                <br>
							           <input type="submit" id="submitAluno" class="btn btn-small" value="Cadastrar Aluno">

                        </form>
						</div>
					</div>

  </div>
</div>
    </div>
  </body>

</html>
