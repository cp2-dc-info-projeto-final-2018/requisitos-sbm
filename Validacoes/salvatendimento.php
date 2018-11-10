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
function InsereUsuario($dadosnovoAtendimento)
{
$bd = Conexão();
$matricula = $dadosnovoAtendimento['matricula'];
$nomealu = $dadosnovoAtendimento['nome'];
$nomeresp = $dadosnovoAtendimento['nomeresp'];
$hora = $dadosnovoAtendimento['hora'];
$data = $dadosnovoAtendimento['data'];
$sql = $bd -> prepare(
  "INSERT INTO atendimento(data,hora,descricao,nomealu,nomeresp,matricula)
  VALUES (:valdata,:valmatricula,:valhora,:valdescricao,:valnomealu,:valnomeresp,);");
 $sql -> bindValue(':valdata',$dadosnovoAtendimento['data']);
 $sql -> bindValue(':valhora',$dadosnovoAtendimento['hora']);
 $sql -> bindValue(':valdescricao',$dadosnovoAtendimento['descricao']);
 $sql -> bindValue(':valnomealu',$dadosnovoAtendimento['nomealu']);
 $sql -> bindValue(':valnomeresp',$dadosnovoAtendimento['nomeresp']);
 $sql -> bindValue(':valmatricula',$dadosnovoAtendimento['matricula']);

 $sql -> execute();
}
function BuscaUsuarioPorAtendimento($matricula)
{
	$bd = Conexão();
	$sql = $bd->prepare('SELECT senha FROM usuario WHERE matricula = :matricula');
	$sql->bindValue(':matricula', $matricula);
	$sql->execute();
	return $sql->fetch();
}
 ?>
