<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 2</title>
</head>
<body>
  <form method="POST">
    <fieldset>
      <label id="idade" name="idade">Idade: </label>
      <input id="idade" name="idade" type="number">

      <label id="naci" name="naci">Nacionalidade: </label>
      <input id="naci" name="naci" type="text">

      <button type="submit">Enviar</button>
    </fieldset>
  </form>
  <?php
    if( isset($_POST['idade']) && (($_POST['idade'] >= 18 && $_POST['idade'] <= 70) && $_POST['naci'] == "brasileira")) {
      echo "Está apto a votar";
    } else {
      if( isset($_POST['idade']) && ((($_POST['idade'] >= 16 && $_POST['idade'] <= 17) ||  $_POST['idade'] > 70) && $_POST['naci'] == "brasileira")) {
        echo "O voto é facultativo";
      } else {
        echo "Não pode votar";
      }
    }
  ?>
</body>
</html>