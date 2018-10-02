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
$matricula = $dadosnovoAtendimento['Matricula'];
$Data = $dadosnovoAtendimento['Data'];
$Duracao = $dadosnovoAtendimento['Duracao'];
$desc = $dadosnovoAtendimento['desc'];
$sql = $bd -> prepare(
  "INSERT INTO calendario(matricula,inicio,duracao,descricao)
  VALUES (:valmatricula, :valinicio,:valduracao,:valdescricao);");

 $sql -> bindValue(':valmatricula',$dadosnovoAtendimento['Matricula']);
 $sql -> bindValue(':valinicio',$dadosnovoAtendimento['Data']);
 $sql -> bindValue(':valduracao',$dadosnovoAtendimento['Duracao']);
 $sql -> bindValue(':valdescricao',$dadosnovoAtendimento['desc']);
 $sql -> execute();

}

 ?>
