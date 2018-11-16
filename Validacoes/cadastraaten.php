
<?php
require_once('salvatendimento.php');
$erros = [];
  $request = array_map('trim',$_REQUEST);
  $request = filter_var_array(
    $request,
    [
      'data' => FILTER_DEFAULT,
      'inicio' => FILTER_DEFAULT,
      'fim' => FILTER_DEFAULT,
      'descricao' => FILTER_DEFAULT,
      'nomealu' => FILTER_DEFAULT,
      'nomeresp' => FILTER_DEFAULT,
      'matricula' => FILTER_DEFAULT,
      'nomeusu' => FILTER_DEFAULT
    ]
  );
  var_dump($request['data']);
  var_dump($request['descricao']);
  $inicio = $request['inicio'];
  $fim = $request['fim'];
  $data = $request['data'];
  $data = DateTime::createFromFormat('Y-m-d', $data);
  if ($data == false){
  $erros[] = "Valor de Data inválido";
  }
$nomeusu = $request['nomeusu'];
if($nomeusu==false)
{
  $erros[] = "Nome não preenchido!";
}
else if(strlen($nomeusu)<3 || strlen($nomeusu)>35)
{
  $erros[] ="O nome tem que ter ao menoss 3 letras e no máximo 35!";
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
$inicio = $request['inicio'];
$strInicio = substr("$inicio", 0,2);
if ($inicio == false)
{
  $erros[] = "Hora não preenchida!";
}
else if ($inicio>=24){
echo "a hora não pode ser maior que 24";
}
$fim = $request['fim'];
$strFim = substr("$fim", 0,2);
if ($fim == false)
{
  $erros[] = "Hora não preenchida!";
}
else if ($fim>=24){
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
if(VerificaInicio($request['inicio'])!= null)
{
  $erros[] = "Horário já ocupado.";
}
if(VerificaFim($request['fim'])!=null)
{
  $erros[] = "Horário já ocupado.";
}


$aluno = VerificaAluno($request['nomealu']);
if($aluno == null)
{
  $erros[] = "Aluno inexistente.";
}
$resp = VerificaResponsável($request['nomeresp']);
if($resp == null)
{
  $erros[] = "Responsável inexistente.";
}
$usu = VerificaUsuário($request['nomeusu']);
if($usu == null)
{
  $erros[] = "Usuário inexistente.";
}
if (empty($erros))
{
    $novoAtendimento = [
        'data' => $request['data'],
        'inicio' => $request['inicio'],
        'fim' => $request['fim'],
        'descricao' => $request['descricao'],
        'nomealu' => $request['nomealu'],
        'nomeresp' => $request['nomeresp'],
        'matricula' => $request['matricula'],
        'idalu' => $aluno['id_aluno'],
        'idresp' => $resp['id_responsavel'],
        'idusu' => $usu['id_usuario']
      ];
   InsereAtendimento($novoAtendimento);
}
  //header('Location: ../Codigo/login.php');
  foreach ($erros as $msgErro)
  {
      echo "<li>$msgErro</li>";
    echo '</ul>';
    echo '<a href = "javascript:history.back()"> voltar</a>';
  }
?>
