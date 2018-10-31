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
$data = $dadosnovoAtendimento['data'];
$hora = $dadosnovoAtendimento['hora'];
$desc = $dadosnovoAtendimento['desc'];
$sql = $bd -> prepare(
  "INSERT INTO calendario(dat,matricula,inicio,fim,descricao)
  VALUES ( :valmatricula,:valdat, :valhora,:valdescricao);");

 $sql -> bindValue(':valmatricula',$dadosnovoAtendimento['Matricula']);
 $sql -> bindValue(':valdat',$dadosnovoAtendimento['data']);
 $sql -> bindValue(':valhora', $dadosnovoAtendimento['hora'])
 $sql -> bindValue(':valdescricao',$dadosnovoAtendimento['desc']);
 $sql -> execute();

}

 ?>
