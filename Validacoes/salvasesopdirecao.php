
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

$senha = $dadosnovoUsuario['senha'];
$hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = $bd -> prepare(
<<<<<<< HEAD
  "INSERT INTO usuario(matricula,nome,sobrenome,email,senha,atuacao)
  VALUES (:valmatricula,:valnome,:valsobrenome,:valemail,:valsenha,:valatuacao);");
 $hash = password_hash($senha, PASSWORD_DEFAULT);
=======
  "INSERT INTO usuario(matricula, nome, sobrenome, email, senha, datNasc, atuacao)
  VALUES (:valmatricula, :valnome, :valsobrenome, :valemail, :valsenha, :valdatNasc, :valatuacao);");

>>>>>>> 3ec81b41650ea3dd451679bb384341d92b1f6f44
 $sql -> bindValue(':valmatricula',$dadosnovoUsuario['matricula']);
 $sql -> bindValue(':valnome',$dadosnovoUsuario['nome']);
 $sql -> bindValue(':valsobrenome',$dadosnovoUsuario['sobrenome']);
 $sql -> bindValue(':valemail',$dadosnovoUsuario['email']);
 $sql -> bindValue(':valsenha',$hash);
 $sql -> bindValue(':valdatNasc',$dadosnovoUsuario['datNasc']);
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
