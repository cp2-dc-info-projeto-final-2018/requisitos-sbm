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

function BuscaIddoAluno($matriculaalu)
{
	$bd = Conexão();
	$sql = $bd->prepare('SELECT id_aluno FROM aluno WHERE matricula = :matricula');

	$sql->bindValue(':matricula', $matriculaalu);

	$sql->execute();

	$resultado = $sql->fetch();
if(empty($resultado) == true)
{
  return  0;

}
else
{
  return $resultado['id_aluno'];
}
}
function InsereResponsavel($dadosnovoResponsavel)

{
$bd = Conexão();
/*$nome = $dadosnovoResponsavel['nome'];
$endereco = $dadosnovoResponsavel['endereco'];
$telefone = $dadosnovoResponsavel['telefone'];
$email = $dadosnovoResponsavel['email'];
$id = $dadosnovoResponsavel['id_aluno'];
*/
$sql = $bd -> prepare(
  "INSERT INTO responsavel(nome,telefone,email,id_aluno)
  VALUES (:valnome,:valtelefone,:valemail,:valid_aluno);");

 $sql -> bindValue(':valnome',$dadosnovoResponsavel['nome']);
 $sql -> bindValue(':valtelefone',$dadosnovoResponsavel['telefone']);
 $sql -> bindValue(':valemail',$dadosnovoResponsavel['email']);
$sql -> bindValue(':valid_aluno',$dadosnovoResponsavel['id_aluno']);
 $sql -> execute();

}

function InsereAluno($dadosnovoAluno)

{
$bd = Conexão();

$matricula = $dadosnovoAluno['matricula'];
$nome = $dadosnovoAluno['nome'];
$sobrenome = $dadosnovoAluno['sobrenome'];
$email = $dadosnovoAluno['email'];
$turma = $dadosnovoAluno['turma'];
$datNasc = $dadosnovoAluno['datNasc'];
$sql = $bd -> prepare(
  "INSERT INTO aluno(matricula,nome,sobrenome,email,turma,datNasc)
  VALUES (:valmatricula, :valnome,:valsobrenome,:valemail,:valturma,:valdat);");

 $sql -> bindValue(':valmatricula',$dadosnovoAluno['matricula']);
 $sql -> bindValue(':valnome',$dadosnovoAluno['nome']);
 $sql -> bindValue(':valsobrenome',$dadosnovoAluno['sobrenome']);
 $sql -> bindValue(':valemail',$dadosnovoAluno['email']);
 $sql -> bindValue(':valturma',$dadosnovoAluno['turma']);
 $sql -> bindValue(':valdat',$dadosnovoAluno['datNasc']);
 $sql -> execute();

}

?>
