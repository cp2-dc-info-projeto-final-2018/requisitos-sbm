
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
$matricula = $dadosnovoUsuario['matricula'];
$nome = $dadosnovoUsuario['nome'];
$sobrenome = $dadosnovoUsuario['sobrenome'];
$email = $dadosnovoUsuario['email'];
$senha = $dadosnovoUsuario['senha'];
$dataNasc = $dadosnovoUsuario['datNasc'];
$sql = $bd -> prepare(
<<<<<<< HEAD
  "INSERT INTO usuario(matricula,nome,sobrenome,email,senha)
  VALUES (:valmatricula,:valnome,:valsobrenome,:valemail,:valsenha);");
=======
  "INSERT INTO usuario(matricula,nome,sobrenome,email,senha,datNasc)
  VALUES (:valmatricula, :valnome,:valsobrenome,:valemail,:valsenha,:valdatanasc);");
>>>>>>> 94b8f8a031caca436c96cd6bb8b8ceb2121b536b
 $hash = password_hash($senha, PASSWORD_DEFAULT);

 $sql -> bindValue(':valmatricula',$dadosnovoUsuario['matricula']);
 $sql -> bindValue(':valnome',$dadosnovoUsuario['nome']);
 $sql -> bindValue(':valsobrenome',$dadosnovoUsuario['sobrenome']);
 $sql -> bindValue(':valemail',$dadosnovoUsuario['email']);
 $sql -> bindValue(':valsenha',$dadosnovoUsuario['senha']);
<<<<<<< HEAD
 //$sql -> bindValue(':valdatanasc',$dadosnovoUsuario['datNasc']);
=======
 $sql -> bindValue(':valdatanasc',$dadosnovoUsuario['datNasc']);
>>>>>>> 94b8f8a031caca436c96cd6bb8b8ceb2121b536b
 $sql -> execute();

}

 ?>
