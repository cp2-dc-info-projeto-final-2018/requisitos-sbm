<?php
require_once('salvaresp.php');
$erros = [];
  $request = array_map('trim',$_REQUEST);
  $request = filter_var_array(
    $request,
    [
      'nome' => FILTER_DEFAULT,
      'endereco' => FILTER_DEFAULT,
      'email' => FILTER_VALIDATE_EMAIL,
      'telefone' => FILTER_DEFAULT,
      'matricula' => FILTER_DEFAULT


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
else if (strlen($telefone)< 8 || strlen($telefone)> 14) //(21)96445-8444
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
$matriculaalu = $request['matricula'];
$id_aluno = BuscaIddoAluno($matriculaalu);
if($matriculaalu == false)
{
  $erros[] = "Matrícula não preenchida!";
}
else if(strlen($matriculaalu)<9 || strlen($matriculaalu)>11)
{
   $erros[] = "A Matrícula tem que ter no mínimo 9 digítos e no máximo 11!";
}

else if ($id_aluno==0)
{
  $erros[] = "Aluno inexistente";
}


  if (empty($erros))
{
      $novoResponsavel = [
      'nome' => $request['nome'],
            'endereco' => $request['endereco'],
      'email' => $request['email'],
      'telefone' => $request['telefone'],
      'id_aluno' => $id_aluno

    ];
   InsereResponsavel($novoResponsavel);
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
