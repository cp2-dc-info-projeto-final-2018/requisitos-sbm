
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
$id = $dadosnovoAtendimento['idalu'];
$idresp = $dadosnovoAtendimento['idresp'];
$sql = $bd -> prepare(
  "INSERT INTO atendimento(data,hora,descricao,id)
  //pegar sesop da sessão, listar usuário.
  VALUES (:valdata,:valhora,:valdescricao,:validalu,:validresp);");
 $sql -> bindValue(':valdata',$dadosnovoAtendimento['data']);
 $sql -> bindValue(':valhora',$dadosnovoAtendimento['hora']);
 $sql -> bindValue(':valdescricao',$dadosnovoAtendimento['descricao']);
 $sql -> bindValue(':validalu',$dadosnovoAtendimento['idalu']);
 $sql -> bindValue(':validresp',$dadosnovoAtendimento['idresp']);
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
function VerificaAluno($nomealu)
{
  $bd = Conexão();
  $sql = $bd->prepare('SELECT id FROM aluno WHERE nome = :valnomealu');
  $sql->bindValue(':valnomealu',$nomealu);
  $sucesso = $sql->execute();
  if($sucesso == false)
  {
     throw new Exception('Erro ao executar comando SQL');
  }
  return $sql-> fetch();
}
function VerificaResponsável($nomeresp)
{
  $bd = Conexão();
  $sql = $bd->prepare('SELECT id FROM responsavel WHERE nome = :valnomeresp ');
  $sql->bindValue(':valnomeresp',$nomeresp);
  $sucesso = $sql->execute();
  if($sucesso == false)
  {
    throw new Exception('Erro ao executar comando SQL');
  }
  return $sql-> fetch();
}

 ?>
