<?php
	//require_once('../Tabelas/dadosClientes.php');

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
	else if (array_key_exists($matricula, $dadosusuario) == false)
	{
		$erro = "Nenhum usuário encontrado com esta Matrícula";
	}
	else if ($senha == false)
	{
		$erro = "Senha não informada";
	}
	 else if (password_verify($request['senha'],
							  $dadosusuario[$matricula]['senha']))
	 {
	 	session_start();

	 	$_SESSION['matriculaUsuárioLogado'] = $matricula;
		header('Location: /codigo/entrada.php');
	 	exit();
	 }
	else
	{
		$erro = "Senha inválida";
	}
	session_start();
	$_SESSION['erros']= $erro;
	header('Location: /Codigo/login.html');
?>
