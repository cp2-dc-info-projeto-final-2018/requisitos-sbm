<?php
require_once('salvaresp.php');
$erros = [];
  $request = array_map('trim',$_REQUEST);
  $request = filter_var_array(
    $request,
    [
      'nome' => FILTER_DEFAULT,
      'sobrenome' => FILTER_DEFAULT,
      'email' => FILTER_VALIDATE_EMAIL,
      'telefone' => FILTER_DEFAULT,
      'turma' => FILTER_DEFAULT,
      'endereco' => FILTER_DEFAULT
    ]
  );
$nome = $request['nome'];
if ($nome == false)
{
  $erros[] = "Nome não preenchido!";
}
else if(strlen($nome)<3 || strlen($nome)>35)
{
  $erros[] = "O nome tem que ter ao menos 3 letras e no máximo 35!";
}
$sobrenome = $request['sobrenome'];
if($sobrenome == false)
{
  $erros[] = "Sobrenome não preenchido!";
}
else if(strlen($sobrenome)<3 || strlen($sobrenome)>35)
{
  $erros[] = "O nome tem que ter ao menos 3 letras e no máximo 35!";
}
$email = $request['email'];
if ($email = false)
{
$erros[] = "O email informado é invalido!";
}
$email = $request['email'];
if ($email == null)
{
$erros [] = " Precisa cadastrar o gmail!";
}
$email = $request['email'];
if ($email == 'email')
{
$erros [] = " Já existe um gmail cadastrado!";
}
$telefone = $request['telefone'];
if ($telefone == null)
{
  $erros [] = "Preencha o telefone!";
}
else if (strlen($telefone)<8 || strlen($telefone)> 9)
{
  $erros [] = "Telefone tem ao menos 8 digítos e no máximo 9!";
}
$endereco = $request['endereco'];
if ($endereco == false)
{
  $erros[] = "Endereço não preenchido!";
}
else if(strlen($endereco)<20 || strlen($endereco)>1000)
{
  $erros[] = "O endereço tem que ter ao menos 20 letras e no máximo 1000!";
}
  if (empty($erros))
{
      $novoResponsavel = [
      'nome' => $request['nome'],
      'sobrenome' => $request['sobrenome'],
      'email' => $request['email'],
      'telefone' => $request['telefone'],
      'endereco' => $request['endereco']
    ];
   InsereAluno($novoResponsavel);
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
