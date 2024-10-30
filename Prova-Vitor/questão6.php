<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 6

  </title>
</head>
<body>
  <form method="POST">
    <fieldset>
      <label id="nome" name="nome">Nome: </label>
      <input id="nome" name="nome" type="text">

      </br>
      </br>

      <label id="idade" name="idade">Idade: </label>
      <input id="idade" name="idade" type="number">

      </br>
      </br>

      <button type="submit">Enviar</button>
    </fieldset>
  </form>
  <?php
    if(isset($_POST['nome']) && isset($_POST['idade'])) {
      if( (!empty($_POST['nome'])) && (!empty($_POST['idade']) && ($_POST['idade'] > 0))) {
        echo "O programa está funcionando <br>";
      } else {
        if(empty($_POST['nome'])) {
          echo "O nome não foi preenchido corretamente <br>";
        }
        if(empty($_POST['idade'])) {
          echo "A idade não foi preenchida corretamente <br>";
        }
      }
    } else {
      if(!(isset($_POST['nome']))) {
        echo "Faltou o nome <br>";
      }
      if(!(isset($_POST['idade']))) {
        echo "Faltou a idade <br>";
      }
    }
  ?>
</body>
</html>