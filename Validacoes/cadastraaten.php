
<?php
require_once('salvatendimento.php');
$erros = [];
  $request = array_map('trim',$_REQUEST);
  $request = filter_var_array(
    $request,
    [

      'data' => FILTER_DEFAULT,
      'hora' => FILTER_DEFAULT,
      'descricao' => FILTER_VALIDATE_EMAIL,
      'nomealu' => FILTER_DEFAULT,
      'nomeresp' => FILTER_DEFAULT,
      'matricula' => FILTER_DEFAULT


    ]
  );

$nomealu = $request['nomealu'];
if ($nomealu == false)
{
  $erros[] = "Nome não preenchido!";
}
else if(strlen($nomealu)<3 || strlen($nomealu)>35)
{
  $erros[] = "O nome tem que ter ao menos 3 letras e no máximo 35!";
}
$nomeresp = $request['nomeresp'];
if ($nomeresp == false)
{
  $erros[] = "Nome não preenchido!";
}
else if(strlen($nomeresp)<3 || strlen($nomeresp)>35)
{
  $erros[] = "O nome tem que ter ao menos 3 letras e no máximo 35!";
}
$data = $request['data'];
$data = DateTime::createFromFormat('d-m-Y', $data);
if ($data == false){
$erros[] = "Valor de Data inválido";
}
$matricula = $request['matricula'];
if($matricula == false)
{
  $erros[] = "Matrícula não preenchida!";
}
else if(strlen($matricula)<9 || strlen($matricula)>11)
{
   $erros[] = "A Matrícula tem que ter no mínimo 9 digítos e no máximo 11!";
}
$hora = $request['hora'];
if ($hora == false)
{
  $erros[] = "Hora não preenchida!";
}
else if (strlen($hora)>0 || strlen($hora)<24)
{
  $erros[] = "Hora Inválida!";
}
$descricao = $request['descricao'];
if ($descricao == false)
{
  $erros[] = "Descrição não preenchido!";
}
else if(strlen($descricao)<3 || strlen($descricao)>35)
{
  $erros[] = "A descrição tem que ter ao menos 3 letras e no máximo 1000!";
}
$matricula = $request['matricula'];
if($matricula == false)
{
  $erros[] = "Matrícula não preenchida!";
}
else if(strlen($matricula)<9 || strlen($matricula)>11)
{
   $erros[] = "A Matrícula tem que ter no mínimo 9 digítos e no máximo 11!";
}

$matriculaalu = $request['matricula'];
if($matriculaalu == false)
{
  $erros[] = "Matrícula não preenchida!";
}
else if(strlen($matriculaalu)<9 || strlen($matriculaalu)>11)
{
   $erros[] = "A Matrícula tem que ter no mínimo 9 digítos e no máximo 11!";
}
if(VerificaEmail($request['email']) != null)
{
  $erros[] = "O Email informado já está cadastrado.";
}

  foreach ($erros as $msgErro)
  {
      echo "<li>$msgErro</li>";
    echo '</ul>';
    echo '<a href = "javascript:history.back()"> voltar</a>';
  }


?>
