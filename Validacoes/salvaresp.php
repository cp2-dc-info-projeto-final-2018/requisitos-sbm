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

                function InsereEvento($dadosnovoEvento)

                {
                $bd = Conexão();
                $evento = $dadosnovoEvento['evento'];
                $data = $dadosnovoAtendimento['data'];
                $hora = $dadosnovoEvento['hora'];
                $descricao = $dadosnovoAtendimento['descricao'];
                $sql = $bd -> prepare(
                  "INSERT INTO calendario(evento,data,hora,descricao)
                  VALUES (:valevento,:valdata, :valhora, :valdescricao);");

                 $sql -> bindValue(':valevento',$dadosnovoEvento['evento']);
                 $sql -> bindValue(':valdata',$dadosnovoEvento['data']);
                 $sql -> bindValue(':valhora', $dadosnovoEvento['hora'];
                 $sql -> bindValue(':valdescricao',$dadosnovoEvento['descricao']);
                 $sql -> execute();

                }

                 ?>
