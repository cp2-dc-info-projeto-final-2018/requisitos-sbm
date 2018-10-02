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
       for ($i = 0; $i <= 23; $i++)
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

  </table>
  <form>
    <input type="text" name="Matricula" placeholder="Matrícula"><br>
    <input type="date" name="Data" placeholder="inicio"><br>
    <input
  </form>
</body>
</html>
