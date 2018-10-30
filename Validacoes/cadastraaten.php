<?php
require_once('salvatendimento.php');
$erros = [];
  $request = array_map('trim',$_REQUEST);
  $request = filter_var_array(
    $request,
    [
      'data' => FILTER_DEFAULT,
      'hora' => FILTER_DEFAULT,
      'descricao' => FILTER_DEFAULT,
      'nomealu' => FILTER_DEFAULT,
      'nomeresp' => FILTER_DEFAULT,
      'matricula' => FILTER_DEFAULT
    ]
  );
  var_dump($request['data']);
  var_dump($request['descricao']);
  $data = $request['data'];
  $data = DateTime::createFromFormat('Y-m-d', $data);
  if ($data == false){
  $erros[] = "Valor de Data inválido";
  }

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
$strHora = substr("$hora", 0,2);
if ($hora == false)
{
  $erros[] = "Hora não preenchida!";
}
else if ($strHora>=24){
echo "a hora não pode ser maior que 24";
}
$descricao = $request['descricao'];
if ($descricao == false)
{
  $erros[] = "Descrição não preenchido!";
}
else if(strlen($descricao)<3 || strlen($descricao)>1000)
{

  $erros[] = "A descrição tem que ter ao menos 3 letras e no máximo 1000!";
}
$matricula = $request['matricula'];
if($matricula == false)
{
  $erros[] = "Matrícula não preenchida!";
}
else if(strlen($matricula)<8 || strlen($matricula)>11)
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
if(VerificaHora($request['hora'])!= null)
{
  $erros[] = "Horário já ocupado.";
}
if(VerificaAluno($request['matricula'])== null)
{
  $erros[] = "Aluno inexistente.";
}
if (empty($erros))
{
    $novoAtendimento = [
        'data' => $request['data'],
        'hora' => $request['hora'],
        'descricao' => $request['descricao'],
        'nomealu' => $request['nomealu'],
        'nomeresp' => $request['nomeresp'],
        'matricula' => $request['matricula']
      ];
   InsereAtendimento($novoAtendimento);
}
  foreach ($erros as $msgErro)
  {
      echo "<li>$msgErro</li>";
    echo '</ul>';
    echo '<a href = "javascript:history.back()"> voltar</a>';
  }
?>
