<?php
require_once('..\Validacoes\salvaturma.php');
$erros = [];
  $request = array_map('trim',$_REQUEST);
  $request = filter_var_array(
    $request,
    [
      'nome' => FILTER_DEFAULT,
      'serie' => FILTER_VALIDATE_INT,
      'ano' => FILTER_VALIDATE_INT,
    ]
  );

$nome = $request['nome'];
  if ($nome == false)
  {
    $erros[] = "Nome não preenchido!";
  }
  else if(strlen($nome)<3 || strlen($nome)>10)
  {
    $erros[] = "O nome tem que ter ao menos 3 letras e no máximo 15!";
  }

$serie = $request['serie'];
  if ($serie == false)
  {
    $erros[] = "Série não preenchida!";
  }
  else if(strlen($serie)<1)
  {
    $erros[] = "A Turma tem que ter 1 número que indica a série!";
  }

$ano = $request['ano'];
  if ($ano == false)
  {
    $erros[] = "Ano não preenchido!";
  }
  else if(strlen($ano)<4 || strlen($ano)>4)
  {
    $erros[] = "O ano da turma está incorreto! Ex:2018";
  }

  if (empty($erros))
{
      $novaturma = [
      'nome' => $request['nome'],
      'serie' => $request['serie'],
      'ano' => $request['ano'],
    ];

  Inserenovaturma($novaturma);
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
