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
      <li><a href="agendamentos.html"> Agendamentos</a></li>
      <li><a href="../calendario/index.php"> Calendário</a></li>
      <li><a href= "cadastra.html">Cadastramento</a></li>
      <li style="float:right"><a class="active" href="sair.php">Sair</a></li>
    </ul>


  <br> <br> <br>
  <div class="caixinhadoform">
  <form name ="primeiroAcesso" id="primeiroAcesso" method="post" action="..\Validacoes\cadastraturma.php">
      <p>Cadastre uma nova turma:</p>
                Informações da Turma:
                <input name="nome" type="text" minlength='3' maxlength='35' title="Informe o Nome do aluno - Obrigatório" placeholder="Nome" required />
  				      <input name="serie" type="number" maxlength='1' title="Informe o Sobrenome do aluno - Obrigatório" placeholder="Série" required />
                <input name="ano" type="number" title="Informe o Ano da Turma" maxlength="4" placeholder ="Ano da Turma" required/>
                <br>
							           <input type="submit" id="submitAluno" class="btn btn-small" value="Cadastrar Turma">
                        </form>
						</div>
					</div>

  </div>
</div>
    </div>
  </body>

</html>
