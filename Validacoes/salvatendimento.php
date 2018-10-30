
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
function InsereAtendimento($dadosnovoAtendimento)
{
$bd = Conexão();
$descricao = $dadosnovoAtendimento['descricao'];
$matricula = $dadosnovoAtendimento['matricula'];
$nomealu = $dadosnovoAtendimento['nomealu'];
$nomeresp = $dadosnovoAtendimento['nomeresp'];
$hora = $dadosnovoAtendimento['hora'];
$data = $dadosnovoAtendimento['data'];
$sql = $bd -> prepare(
  "INSERT INTO atendimento(data,hora,descricao,nomealu,nomeresp,matricula)
  VALUES (:valdata,:valhora,:valdescricao,:valnomealu,:valnomeresp,:valmatricula);");
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
	$sql->bindValue(':valmatricula', $matricula);
	$sql->execute();
	return $sql->fetch();
}
function VerificaHora($hora)
{
  $bd = Conexão();
  $sql = $bd->prepare('SELECT  hora FROM atendimento WHERE hora = :valhora');
  $sql -> bindValue(':valhora',$hora);
  $sucesso = $sql->execute();
  if($sucesso == false)
  {
     throw new Exception('Erro ao executar comando SQL');
  }
  return $sql -> fetch();
}
function VerificaAluno($matricula)
{
  $bd = Conexão();
  $sql = $bd->prepare('SELECT matricula FROM aluno WHERE matricula = :valmatricula');
  $sql->bindValue(':valmatricula',$matricula);
  $sucesso = $sql->execute();
  if($sucesso == false)
  {
     throw new Exception('Erro ao executar comando SQL');
  }
  return $sql-> fetch();
}
 ?>
