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
  "INSERT INTO responsavel(nome,telefone,email,endereco,id_aluno)
  VALUES (:valnome,:valtelefone,:valemail,:valendereco,:valid_aluno);");

 $sql -> bindValue(':valnome',$dadosnovoResponsavel['nome']);
 $sql -> bindValue(':valtelefone',$dadosnovoResponsavel['telefone']);
 $sql -> bindValue(':valemail',$dadosnovoResponsavel['email']);
$sql -> bindValue(':valendereco',$dadosnovoResponsavel['endereco']);
$sql -> bindValue(':valid_aluno',$dadosnovoResponsavel['id_aluno']);
 $sql -> execute();

}

function BuscaUsuarioPorID($nome)
{
	$bd = Conexão();

	$sql = $bd->prepare('SELECT senha FROM usuarios WHERE matricula = :matricula');

	$sql->bindValue(':nome', $nome);

 ?>
