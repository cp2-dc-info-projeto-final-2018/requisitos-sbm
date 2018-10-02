<?php
erros = [];
  $request = array_map('trim',$_REQUEST);
  $request = filter_var_array(
    $request,
    [
      'Matricula' => FILTER_DEFAULT,
      'Data' => FILTER_DEFAULT,
      'Inicio' => FILTER_DEFAULT,
      'Fim' => FILTER_DEFAULT

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
$Data = $request['Data'];

$Data = DateTime::createFromFormat('d-m-Y', $Data);

if ($Data == false){
$erros[] = "Valor de Data inválido";
}
$Inicio = $request['Inicio'];

if($Inicio == false)
{
  $erros [] = "Hora não inserida";
}
else if(intval($Inicio) < 7)
{
  $erros [] = "Hora não permitida";
}
$fim = $request['fim'];
if($fim == false)
{
  $erros [] = "Hora não inserida";
}
else if(intval($fim) < 18)
{
  $erros [] = "Hora não permitida";
}
  if (empty($erros))
{
      $novoAtendimento = [
      'Matricula' => $request['Matricula'],
      'Data' => $request['Data'],
      'Inicio' => $request['Inicio'],
      'Fim' => $request['Fim'],
      'descricao' => $request['descricao']
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
