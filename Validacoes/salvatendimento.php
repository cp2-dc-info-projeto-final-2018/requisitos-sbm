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
$matricula = $dadosnovoAtendimento['matricula'];
$nomealu = $dadosnovoAtendimento['nomealu'];
$nomeresp = $dadosnovoAtendimento['nomeresp'];
$inicio = $dadosnovoAtendimento['inicio'];
$fim = $dadosnovoAtendimento['fim'];
$data = $dadosnovoAtendimento['data'];
$id = $dadosnovoAtendimento['idalu'];
$idresp = $dadosnovoAtendimento['idresp'];
$idusu = $dadosnovoAtendimento['idusu'];
$sql = $bd -> prepare(
  "INSERT INTO atendimento(data,inicio,fim,descricao,id_sesop,id_aluno,id_responsavel)
  VALUES (:valdata,:valinicio,:valfim,:valdescricao,:validsesop,:validalu,:validresp);");
 $sql -> bindValue(':valdata',$dadosnovoAtendimento['data']);
 $sql -> bindValue(':valinicio',$dadosnovoAtendimento['inicio']);
 $sql -> bindValue(':valfim',$dadosnovoAtendimento['fim']);
 $sql -> bindValue(':valdescricao',$dadosnovoAtendimento['descricao']);
 $sql -> bindValue(':validsesop',$dadosnovoAtendimento['idusu']);
 $sql -> bindValue(':validalu',$dadosnovoAtendimento['idalu']);
 $sql -> bindValue(':validresp',$dadosnovoAtendimento['idresp']);

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
function VerificaInicio($inicio)
{
  $bd = Conexão();
  $sql = $bd->prepare('SELECT  inicio FROM atendimento WHERE inicio = :valinicio');
  $sql -> bindValue(':valinicio',$inicio);
  $sucesso = $sql->execute();
  if($sucesso == false)
  {
     throw new Exception('Erro ao executar comando SQL');
  }
  return $sql -> fetch();
}
function VerificaFim($fim)

{
  $bd = Conexão();
  $sql = $bd->prepare('SELECT fim FROM atendimento WHERE fim = :valfim');
  $sql -> bindValue(':valfim',$fim);
  $sucesso = $sql -> execute();
  if($sucesso == false)
  {
     throw new Exception('Erro ao executar comando SQL');
  }
  return $sql -> fetch();
}

function VerificaAluno($nomealu)
{
  $bd = Conexão();
  $sql = $bd->prepare('SELECT id_aluno FROM aluno WHERE nome = :valnomealu');
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
  $sql = $bd->prepare('SELECT id_responsavel FROM responsavel WHERE nome = :valnomeresp ');
  $sql->bindValue(':valnomeresp',$nomeresp);
  $sucesso = $sql->execute();
  if($sucesso == false)
  {
    throw new Exception('Erro ao executar comando SQL');
  }
  return $sql-> fetch();
}
function VerificaUsuário($nomeusu)
{
  $bd = Conexão();
  $sql =  $bd->prepare('SELECT id_usuario FROM usuario WHERE nome = :valnomeusu');
  $sql-> bindValue(':valnomeusu',$nomeusu);
  $sucesso = $sql->execute();
  if($sucesso==false)
  {
    throw new Exception('Erro ao executar comando SQL');
  }
  return $sql-> fetch();
}

 ?>
