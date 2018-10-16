
<?php
function Conexão()
{
  $bd = new PDO('mysql:host = localhost;
                  dbname=bd_sisop;
                  charset=utf8',
                  'bd_sisop',
                  'sisop123'
                );
$bd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $bd;
}
function InsereUsuario($dadosnovoUsuario)
{
$bd = Conexão();
$matricula = $dadosnovoUsuario['matricula'];
$nome = $dadosnovoUsuario['nome'];
$sobrenome = $dadosnovoUsuario['sobrenome'];
$email = $dadosnovoUsuario['email'];
$senha = $dadosnovoUsuario['senha'];
$dataNasc = $dadosnovoUsuario['datNasc'];
$atuacao = $dadosnovoUsuario['atuacao'];
$sql = $bd -> prepare(
  "INSERT INTO usuario(matricula,nome,sobrenome,email,senha,atuacao)
  VALUES (:valmatricula,:valnome,:valsobrenome,:valemail,:valsenha,:valatuacao);");
 $hash = password_hash($senha, PASSWORD_DEFAULT);
 $sql -> bindValue(':valmatricula',$dadosnovoUsuario['matricula']);
 $sql -> bindValue(':valnome',$dadosnovoUsuario['nome']);
 $sql -> bindValue(':valsobrenome',$dadosnovoUsuario['sobrenome']);
 $sql -> bindValue(':valemail',$dadosnovoUsuario['email']);
 $sql -> bindValue(':valsenha',$dadosnovoUsuario['senha']);
// $sql -> bindValue(':valdatanasc',$dadosnovoUsuario['datNasc']);
 $sql -> bindValue(':valatuacao',$dadosnovoUsuario['atuacao']);
 $sql -> execute();
}
function BuscaUsuarioPorMatricula($matricula)
{
	$bd = Conexão();
	$sql = $bd->prepare('SELECT senha FROM usuario WHERE matricula = :matricula');
	$sql->bindValue(':matricula', $matricula);
	$sql->execute();
	return $sql->fetch();
}
 ?>
