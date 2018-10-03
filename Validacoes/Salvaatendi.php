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
$Inicio = $dadosnovoAtendimento['Inicio'];
$fim = $dadosnovoAtendimento['fim'];
$desc = $dadosnovoAtendimento['desc'];
$sql = $bd -> prepare(
  "INSERT INTO calendario(dat,matricula,inicio,fim,descricao)
  VALUES (:valdat, :valmatricula, :valinicio, :valfim,:valdescricao);");

 $sql -> bindValue(':valmatricula',$dadosnovoAtendimento['Matricula']);
 $sql -> bindValue(':valdat',$dadosnovoAtendimento['Data']);
 $sql -> bindValue(':valinicio', $dadosnovoAtendimento['Inicio'])
 $sql -> bindValue(':valfim',$dadosnovoAtendimento['fim']);
 $sql -> bindValue(':valdescricao',$dadosnovoAtendimento['desc']);
 $sql -> execute();

}

 ?>
