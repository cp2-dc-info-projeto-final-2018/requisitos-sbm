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

function InsereAluno($dadosnovoAluno)

{
$bd = Conexão();
$matricula = $dadosnovoAluno['matricula'];
$nome = $dadosnovoAluno['nome'];
$sobrenome = $dadosnovoAluno['sobrenome'];
$email = $dadosnovoAluno['email'];
$turma = $dadosnovoAluno['turma'];
$endereco = $dadosnovoAluno['endereco'];
$datNasc = $dadosnovoAluno['datNasc'];
$sql = $bd -> prepare(
  "INSERT INTO aluno(matricula,nome,sobrenome,email,turma,endereco,datNasc)
  VALUES (:valmatricula, :valnome,:valsobrenome,:valemail,:valturma,:valendereco,:valdat);");

 $sql -> bindValue(':valmatricula',$dadosnovoAluno['matricula']);
 $sql -> bindValue(':valnome',$dadosnovoAluno['nome']);
 $sql -> bindValue(':valsobrenome',$dadosnovoAluno['sobrenome']);
 $sql -> bindValue(':valemail',$dadosnovoAluno['email']);
 $sql -> bindValue(':valturma',$dadosnovoAluno['turma']);
 $sql -> bindValue(':valendereco',$dadosnovoAluno['endereco']);
 $sql -> bindValue(':valdat',$dadosnovoAluno['datNasc']);
 $sql -> execute();

}

 ?>
