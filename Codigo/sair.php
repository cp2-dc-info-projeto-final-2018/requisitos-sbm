<?php
	 session_start();
	unset ($_SESSION['emailUsuárioLogado']);

  	header ('Location: /Codigo/login.html');
  	exit();
?>
