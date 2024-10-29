<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 3</title>
</head>
<body>
  <?php
    $num = 10;

    function somaValor ($number) {
      $soma = $number + 5;
      echo $soma;
    }
    function somaReferencia (&$number) {
      $number = $number + 10;
    }
    echo "Antes da função por valor: " . $num . "<br>";//10
    echo "Depois da função por valor: ";
    somaValor($num);//15
    echo "<br>";
    echo "Antes da função por referência: " . $num . "<br>";//10
    somaReferencia($num);
    echo "Depois da função por referência: " . $num . "<br>";//20
  ?>
</body>
</html>