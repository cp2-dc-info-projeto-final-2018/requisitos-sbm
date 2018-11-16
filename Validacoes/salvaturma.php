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

function Inserenovaturma($dadosnovoAluno)
{
$bd = Conexão();

$sql = $bd -> prepare(
  "INSERT INTO turma(nome,ano,serie)
  VALUES (:valnome,:valano,:valserie);");

 $sql -> bindValue(':valnome',$dadosnovoAluno['nome']);
 $sql -> bindValue(':valano',$dadosnovoAluno['ano']);
 $sql -> bindValue(':valserie',$dadosnovoAluno['serie']);
 $sql -> execute();
}
function Procuraturmaparaexibir()
{
  $bd = conexão();
  $sql = $bd -> prepare("SELECT id_turma, nome FROM turma");
  $sql -> execute();
  return $sql->fetchAll();
}
//function ProcuraAlunosporTurma()
//{
//  $bd = Conexão();
//  $sql = $bd ->prepare("SELECT * FROM aluno WHERE id_turma = :valturma");
//  $sql -> execute();
//  return $sql -> fetchAll();
//}
?>
