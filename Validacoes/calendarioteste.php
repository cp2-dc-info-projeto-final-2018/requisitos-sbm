<!DOCTYPE HTML>
<html>
<?php

/*
     Código escrito por Talianderson Dias
     em caso de dúvidas, mande um email para talianderson.web@gmail.com
*/
function MostreSemanas()
{
	$semanas = "DSTQQSS";

	for( $i = 0; $i < 7; $i++ )
  { ?>
	 <td><?=$semanas{$i}?></td>
   <?php

}
?>
<?php
function GetNumeroDias( $mes )
{
	$numero_dias = array(
			'01' => 31, '02' => 28, '03' => 31, '04' =>30, '05' => 31, '06' => 30,
			'07' => 31, '08' =>31, '09' => 30, '10' => 31, '11' => 30, '12' => 31
	);

	if (((date('Y') % 4) == 0 and (date('Y') % 100)!=0) or (date('Y') % 400)==0)
	{
	    $numero_dias['02'] = 29;	// altera o numero de dias de fevereiro se o ano for bissexto
	}

	return $numero_dias[$mes];
}

function GetNomeMes( $mes )
{
     $meses = array( '01' => "Janeiro", '02' => "Fevereiro", '03' => "Março",
                     '04' => "Abril",   '05' => "Maio",      '06' => "Junho",
                     '07' => "Julho",   '08' => "Agosto",    '09' => "Setembro",
                     '10' => "Outubro", '11' => "Novembro",  '12' => "Dezembro"
                     );

      if( $mes >= 01 && $mes <= 12)
        return $meses[$mes];

        return "Mês deconhecido";

}



function MostreCalendario( $mes  )
{

	$numero_dias = GetNumeroDias( $mes );	// retorna o número de dias que tem o mês desejado
	$nome_mes = GetNomeMes( $mes );
	$diacorrente = 0;

	$diasemana = jddayofweek( cal_to_jd(CAL_GREGORIAN, $mes,"01",date('Y')) , 0 );	// função que descobre o dia da semana
?>
  <table border = 0 cellspacing = '0' align = 'center'>
	<tr>
        <td colspan = 7><h3></h3></td>
	 </tr>
	 <tr>
     <?php
	   MostreSemanas();
     ?>
	</tr>
  <?php
	for( $linha = 0; $linha < 6; $linha++ )
	{
?>

	   <tr>
<?php
	   for( $coluna = 0; $coluna < 7; $coluna++ )
	   {
       ?>
		<td width = 30 height = 30>
<?php
		  if( ($diacorrente == ( date('d') - 1) && date('m') == $mes) )
		  {
			   echo " dia_atual " $diasemana;
		  }
		  else
		  {
			     if(($diacorrente + 1) <= $numero_dias )
			     {
			         if( $coluna < $diasemana && $linha == 0)
				           {
					                echo " dia_branco " $coluna;
				           }
				       else
				           {
				  	              echo "dia_comum " $diacorrente;
				           }
			     }
			     else
			     {
				         echo " ";
			     }
		  }

?>
      <align = "center" valign = "center">
        <?php

		   /* TRECHO IMPORTANTE: A PARTIR DESTE TRECHO É MOSTRADO UM DIA DO CALENDÁRIO (MUITA ATENÇÃO NA HORA DA MANUTENÇÃO) */

		      if( $diacorrente + 1 <= $numero_dias )
		      {
			 if( $coluna < $diasemana && $linha == 0)
			 {
			  	 echo " ";
			 }
			 else
			 { ?>
			  	 <input type = 'button' id = 'dia_comum' name = 'dia".($diacorrente+1)."'  value = '".++$diacorrente."' onclick = "acao(this.value)">
				  <a href = ".$_SERVER["PHP_SELF"]."?mes=$mes&dia=".($diacorrente+1).">"<?php $diacorrente ?> </a>
<?php
       }

		      }
		      else
		      {
			break;
		      }

		   /* FIM DO TRECHO MUITO IMPORTANTE */

?>

</td> <?php
    }
    ?>
  </tr> <?php
	}
?>
	</table>
  <?php
}

function MostreCalendarioCompleto()
{ ?>
	    <table align = "center">
        <?php
	    $cont = 1;
	    for( $j = 0; $j < 4; $j++ )
	    {
        ?>
		  <tr> <?php
		for( $i = 0; $i < 3; $i++ )
		{
?>
		  <td>
        <?php
			MostreCalendario( ($cont < 10 ) ? "0".$cont : $cont );

		        $cont++;
            ?>
		  </td>
<?php
	 	}
    ?>
		</tr>
    <?php
	   }
     ?>
	   </table>
     <?php
}

MostreCalendario('05');
?> <br/>
<?php
MostreCalendarioCompleto();
?>

</html>
