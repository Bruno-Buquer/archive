<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soma</title>
</head>
<body>
  <?php
    //$soma = fn(int $a, int $b):int => $a+$b;
    $soma = function(int $a, int $b) {
      return $a+$b;
    };
    echo "<br/>";
    var_dump($soma(5,6));
  ?>
</body>
</html>