<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 4</title>
</head>
<body>
  <?php
    echo "Usando While: ";
    $i = 1;
    while($i <= 10) {
      echo $i . ", ";
      $i++;
    }
    echo "<br><br>Usando For: ";
    for($j = 1; $j <= 10; $j++) {
      echo $j . ", ";
    }
  ?>
</body>
</html>