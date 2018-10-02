<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
</head>
<body>
  <table border ="2">
    <tr>
      <th>&nbsp;</th>
      <th> Segunda-Feira </th>
      <th> Terça-Feira </th>
      <th> Quarta-Feira </th>
      <th> Quinta-Feira </th>
      <th> Sexta-Feira </th>
      <th> Sábado </th>
    </tr>


      <?php
       for ($i = 7; $i <= 18; $i++)
       {
      ?>
      <tr>
        <td><?=$i ?>:00 </td>

        <?php
        for($j = 0; $j < 6; $j++)
        {
          ?>
          <td> </td>
          <?php
        }
        ?>
      </tr>
      <?php }
      ?>

  </table><br>
  <form action="..\Validacoes\cadastraatendi.php">
    <input type="text" name="Matricula" placeholder="Matrícula"><br>
    <input type="date" name="Data" placeholder="Data"><br>
    <input type="text" name="Inicio" placeholder="Início do Atendimento"><br>
    <input type="text" name="Fim" placeholder="Fim do Atendimento"><br>
    <input type="text" name="desc" placeholder="Digite uma descrição: "><br>
    <input type="submit" value="Cadastrar"><br>
  </form>
</body>
</html>
