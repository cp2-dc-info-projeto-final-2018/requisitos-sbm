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

function InsereAluno($dadosnovoResponsavel)

{
$bd = Conexão();
$nome = $dadosnovoResponsavel['nome'];
$sobrenome = $dadosnovoResponsavel['sobrenome'];
$telefone = $dadosnovoResponsavel['telefone'];
$email = $dadosnovoResponsavel['email'];
$endereco = $dadosnovoResponsavel['endereco'];
$sql = $bd -> prepare(
  "INSERT INTO responsavel(nome,sobrenome,telefone,email,endereco)
  VALUES (:valnome,:valsobrenome,:valtelefone,:valemail,:valendereco,:valdat);");

 $sql -> bindValue(':valnome',$dadosnovoResponsavel['nome']);
 $sql -> bindValue(':valsobrenome',$dadosnovoResponsavel['sobrenome']);
  $sql -> bindValue(':valdat',$dadosnovoResponsavel['telefone']);
 $sql -> bindValue(':valemail',$dadosnovoResponsavel['email']);
 $sql -> bindValue(':valendereco',$dadosnovoResponsavel['endereco']);
 $sql -> execute();

}

////function BuscaUsuarioPor($matricula)
{
	$bd = Conexão();

	$sql = $bd->prepare('SELECT senha FROM usuarios WHERE matricula = :matricula');

	$sql->bindValue(':matricula', $matricula);

	$sql->execute();

	return $sql->fetch();
}

 ?>
