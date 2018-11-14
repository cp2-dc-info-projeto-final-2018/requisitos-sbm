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
  "INSERT INTO usuario(matricula,nome,sobrenome,email,senha,datNasc,atuacao)
  VALUES (:valmatricula,:valnome,:valsobrenome,:valemail,:valsenha,:valdatNasc,:valatuacao);");
 $hash = password_hash($senha, PASSWORD_DEFAULT);
 $sql -> bindValue(':valmatricula',$dadosnovoUsuario['matricula']);
 $sql -> bindValue(':valnome',$dadosnovoUsuario['nome']);
 $sql -> bindValue(':valsobrenome',$dadosnovoUsuario['sobrenome']);
 $sql -> bindValue(':valemail',$dadosnovoUsuario['email']);
 $sql -> bindValue(':valsenha',$dadosnovoUsuario['senha']);
 $sql -> bindValue(':valdatNasc',$dadosnovoUsuario['datNasc']);
 $sql -> bindValue(':valatuacao',$dadosnovoUsuario['atuacao']);
 $sql -> execute();
}
function BuscaUsuarioPorMatricula($matricula)
{
	$bd = Conexão();
	$sql = $bd->prepare('SELECT senha FROM usuario WHERE matricula = :valmatricula');
	$sql->bindValue(':valmatricula', $matricula);
	$sql->execute();
	return $sql->fetch();
}
function VerificaEmail(string $email)
{
  $bd = Conexão();
  $sql = $bd->prepare('SELECT email FROM usuario WHERE email = :valemail');
  $sql -> bindValue(':valemail',$email);
  $sucesso = $sql -> execute();
  if($sucesso == false)
  {
    throw new Exception('Erro ao executar comando SQL');
  }
  return $sql -> fetch();
}
function Verificaratuacao(string $matricula)
{
    $bd = Conexão();
    $sql = $bd->prepare('SELECT atuacao FROM usuario WHERE matricula = :valmatricula');
    $sql -> bindValue(':valmatricula', $matricula);
    $sql -> execute();
    $resultado = $sql -> fetch();
    assert($resultado != false);
    return $resultado['atuacao'];
}
 ?>
