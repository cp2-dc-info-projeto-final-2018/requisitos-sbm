<?php
	require_once('../Validacoes/salvasesopdirecao.php');

	$erro = null;

	$request = array_map('trim', $_REQUEST);
	$request = filter_var_array(
	               $request,
	               [ 'matricula' => FILTER_DEFAULT,
	                 'senha' => FILTER_DEFAULT ]
	           );

	$matricula = $request['matricula'];
	$senha = $request['senha'];


	if ($matricula == false)
	{
		$erro = "Matrícula não informado";
	}

	else if ($senha == false)
	{
		$erro = "Senha não informada";
	}

	else {
		$resultados = BuscaUsuarioPorMatricula($matricula);
		if (empty($resultados))
		{
			$erro = "Nenhuma Matrícula encontrada para este usuário";
		}
	 else if (password_verify($senha, $resultados['senha']))
	 {
		 $sesopoudirecao = Verificaratuacao($matricula);
		 if ($sesopoudirecao['atuacao'] == 0)
		{
		 	$destino = 'entradasesop.php';
	 	}
		else if ($sesopoudirecao['atuacao'] == 1)
		{
			$destino = 'entradadirecao.php';
		}

		session_start();

		$_SESSION['matriculaUsuárioLogado'] = $matricula;
		$_SESSION['atuacao'] = $sesopoudirecao;

		header("Location: $destino");
		exit();

	}
	else
	{
		$erro = "Senha inválida";
	}
}

	//terminar de progrmar a conexão via bd com o login
	session_start();
	$_SESSION['erros']= $erro;
	echo $erro;
	header('Location: login.php');
?>
