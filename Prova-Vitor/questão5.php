<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questão 5</title>
</head>
<body>
  <?php
    //vitor.goncalves@cefet-rj.br
    $frutas = array("Maçã", "Banana", "Laranja", "Uva", "Manga");
    array_push($frutas, "Abacaxi");
    echo "<table>";
    for($j=0;$j < 6;$j++) {
      echo "<tr>
              <td>$frutas[$j]<td>
            </tr>";
      
    }
    echo "</table>"
  ?>
</body>
</html>