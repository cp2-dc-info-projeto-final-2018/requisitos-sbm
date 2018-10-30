<?php
	session_start();
	unset ($_SESSION['matriculaUsuárioLogado']);

  	header ('Location: ../Codigo/login.php');
  	exit();
?>
