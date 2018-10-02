<?php

require_once('salvasesopdirecao.php');

$erros = [];
  $request = array_map('trim',$_REQUEST);
  $request = filter_var_array(
    $request,
    [
      'matricula' => FILTER_DEFAULT,
      'nome' => FILTER_DEFAULT,
      'sobrenome' => FILTER_DEFAULT,
      'email' => FILTER_VALIDATE_EMAIL,
      'senha' => FILTER_DEFAULT,
      'confirmaSenha' => FILTER_DEFAULT,
      'datNasc' => FILTER_DEFAULT
    ]
  );
$matricula = $request['matricula'];
if($matricula == false)
{
  $erros[] = "Matrícula não preenchida";
}
else if(strlen($matricula)<6 || strlen($matricula)>9)
{
   $erros[] = "A Matrícula tem que ter no mínimo 6 digítos e no máximo 9";
}
$nome = $request['nome'];
if ($nome == false)
{
  $erros[] = "Nome não preenchido";
}
else if(strlen($nome)<3 || strlen($nome)>35)
{
  $erros[] = "O nome tem que ter ao menos 3 letras e no máximo 35";
}
$sobrenome = $request['sobrenome'];
if($sobrenome == false)
{
  $erros[] = "Sobrenome não preenchido";
}
else if(strlen($sobrenome)<3 || strlen($sobrenome)>35)
{
  $erros[] = "O nome tem que ter ao menos 3 letras e no máximo 35";
}
$email = $request['email'];
if ($email = false)
{
$erros[] = "O email informado é invalido";
}

$email = $request['email'];
if ($email == null)
{
$erros [] = " Precisa cadastrar o gmail";
}
$email = $request['email'];
if ($email == 'email')
{
$erros [] = " Já existe um gmail cadastrado";
}
$senha = $request['senha'];
if($senha == false)
{
  $erros[] = "Senha não encontrada";
}
else if(strlen($senha)<6 || strlen($sobrenome)>12)
{
 $erros [] = "Senha deve ter no minímo 6 caracteres e no máximo 12";
}
$confirma = $request['confirmaSenha'];
if($confirma == false)
{
  $erros[] = "Senha não confirmada";
}
if(strlen($confirma)<6 || strlen($confirma)>12)
{
 $erros[] = "Senha deve ter no mínimo 6 caracteres e no máximo 12";
}
if ($senha != $confirma)
{
 $erros[] = "Senhas não são iguais";
}

  else
    {
      $request['senha']  = password_hash($senha, PASSWORD_DEFAULT);
    }
    $datnasc = $request['datNasc'];

  $data = DateTime::createFromFormat('Y-m-d', $datnasc);

  if ($data == false){
    $erros[] = "Valor de Data inválido";
  }
  if (empty($erros))
{
      $novoUsuario = [
      'matricula' => $request['matricula'],
      'nome' => $request['nome'],
      'sobrenome' => $request['sobrenome'],
      'email' => $request['email'],
      'senha' => $request['senha'],
      'confirmaSenha' => $request['confirmaSenha'],
      'datNasc'=> $request['datNasc']
    ];

   InsereUsuario($novoUsuario);
}
else
{
  //Redirecionar
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
