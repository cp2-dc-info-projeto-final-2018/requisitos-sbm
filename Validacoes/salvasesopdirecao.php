
<?php
function Conexão()
{
  $bd = new PDO('mysql:host = localhost;
                  dbname=bd_sisop;
                  charset=utf8',
                  'bdsisop',
                  'senha'
                );

$bd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERMODE_EXCEPTION);
return $bd;
}

function INsereUsuario($dadosnovoUsuario)

{
$bd = Conexão();
$matricula = $dadosnovoUsuario['matricula'];
$nome = $dadosnovoUsuario['nome'];
$sobrenome = $dadosnovoUsuario['sobrenome'];
$email = $dadosnovoUsuario['email'];
$senha = $dadosnovoUsuario['senha'];
$sql = $bd -> prepare(
  ' INSERT INTO usuario(matricula,nome,sobrenome)'
}
 ?>
