<?php
require_once('salvaaluno.php');
$erros = [];
  $request = array_map('trim',$_REQUEST);
  $request = filter_var_array(
    $request,
    [
      'matricula' => FILTER_DEFAULT,
      'nome' => FILTER_DEFAULT,
      'sobrenome' => FILTER_DEFAULT,
      'datNasc' => FILTER_DEFAULT,
      'turma' => FILTER_DEFAULT,
      'nomeResp' => FILTER_DEFAULT,
      'telefone' => FILTER_DEFAULT,
      'email' => FILTER_VALIDATE_EMAIL
    ]
  );

$matricula = $request['matricula'];
  if($matricula == false)
  {
    $erros[] = "Matrícula não preenchida!";
  }
  else if(strlen($matricula)<9 || strlen($matricula)>11)
  {
    $erros[] = "A Matrícula tem que ter no mínimo 9 digítos e no máximo 11!";
  }

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

$datNasc = $request['datNasc'];
$data = DateTime::createFromFormat('d-m-Y', $datNasc);

  if ($datNasc == false)
  {
    $erros[] = "Valor de Data inválida!";
  }

$turma = $request['turma'];
  if ($turma == false)
  {
    $erros[] = "Turma não preenchida!";
  }
  else if(VerificaTurma($turma)==false)
  {
    $erros[] = "Turma inexistente!";
  }

$nomeResp = $request['nomeResp'];
  if ($nome == false)
  {
    $erros[] = "Nome não preenchido!";
  }
  else if(strlen($nomeResp)<3 || strlen($nomeResp)>35)
  {
    $erros[] = "O nome tem que ter ao menos 3 letras e no máximo 35!";
  }

$telefone = $request['telefone'];
  if ($telefone == null)
  {
    $erros [] = "Preencha o telefone!";
  }
  else if (strlen($telefone) < 8 || strlen($telefone) > 15 )
  {
    $erros [] = "Telefone tem ao menos 8 digítos e no máximo 9!";
  }

$email = $request['email'];
  if ($email = false)
  {
    $erros[] = "O email informado é invalido!";
  }
  else if (VerificaEmail($email)!=false)
  {
  $erros [] = " Já existe um gmail cadastrado";
  }

  if (empty($erros))
{
      $novoAluno = [
      'matricula' => $request['matricula'],
      'nome' => $request['nome'],
      'sobrenome' => $request['sobrenome'],
      'datNasc' => $request['datNasc'],
      'turma'=> $request['turma'],
      'nomeResp'=> $request['nomeResp'],
      'telefone' => $request['telefone'],
      'email' => $request['email']
    ];

    InsereAluno($novoAluno);
    $id_aluno = BuscaIddoAluno($request['matricula']);

    $novoResponsavel = [
    'nomeResp' => $request['nomeResp'],
    'email' => $request['email'],
    'telefone' => $request['telefone'],
    'id_aluno' => $id_aluno

  ];

  InsereResponsavel($novoResponsavel);
  header('Location: ../Codigo/cadastra.php');
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
