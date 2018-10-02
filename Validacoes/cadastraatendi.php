<?php
erros = [];
  $request = array_map('trim',$_REQUEST);
  $request = filter_var_array(
    $request,
    [
      'Matricula' => FILTER_DEFAULT,
      'Data' => FILTER_DEFAULT,
      'Duracao' => FILTER_DEFAULT

    ]
  );
$matricula = $request['Matricula'];
if($matricula == false)
{
  $erros[] = "Matrícula não preenchida!";
}
else if(strlen($matricula)<9 || strlen($matricula)>11)
{
   $erros[] = "A Matrícula tem que ter no mínimo 9 digítos e no máximo 11!";
}
$datNasc = $request['Data'];

$data = DateTime::createFromFormat('d-m-Y', $datNasc);

if ($datNasc == false){
$erros[] = "Valor de Data inválido";
}
  if (empty($erros))
{
      $novoAluno = [
      'Matricula' => $request['Matricula'],
      'Data' => $request['Data'],
      'Duracao' => $request['Duracao']
    ];
   InsereAtendimento($novoAtendimento);
}
else
{
  echo '<h1>Dados Inválidos</h1>';
  echo '<ul>';
  foreach ($erros as $msgErro)
  {
      echo "<li>$msgErro</li>";
    echo '</ul>';
    echo '<a href = "javascript:history.back()"> voltar</a>';
  }
}
?>
