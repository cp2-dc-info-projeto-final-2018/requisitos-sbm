<?php
	session_start();
	unset ($_SESSION['matriculaUsuárioLogado']);
	unset ($_SESSION['atuacao']);

  	header ('Location: ../Codigo/login.php');
  	exit();
?>
