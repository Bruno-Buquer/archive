<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 1</title>
</head>
<body>
  <form method="POST">
    <fieldset>
      <label id="numero" name="numero">Numero: </label>
      <input id="numero" name="numero" type="number">

      <button type="submit">Enviar</button>
    </fieldset>
  </form>
  <?php
    if($_POST['numero'] % 2 == 0) {
      echo "O numero é par!";
    }else {
      echo "O numero é ímpar!";
    }
  ?>
</body>
</html>