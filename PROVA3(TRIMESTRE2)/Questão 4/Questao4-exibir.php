<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de Table</title>
  <!-- <style type="text/css">
    th, td {
      border: 1px solid black;
      padding-left: 12px;
      padding-right: 12px;
    }
  </style> -->
</head>
<body>
<?php
  if(!empty($_POST['numLinhas']) && !empty($_POST['numColunas'])) {
    $numLinhas = $_POST['numLinhas'];
    $numColunas = $_POST['numColunas'];

    echo "<table border='1px'>";
      echo "<tr>";
      for($i = 1; $i <= $numColunas; $i++) {
        echo "<th>Cabeçalho ".$i."</th>";
      }
      echo "</tr>";
      for($i = 1; $i <= $numLinhas; $i++) {
        echo "<tr>";
        $j = 1;
        while($j <= $numColunas) {
          echo "<td>Linha ".$i.", Coluna " . $j;
          $j++;
        }
        echo "</tr>";
      }
  }else {
    if(empty($_POST['numLinhas'])) {
      echo "O num de linhas não foi preenchido <br /><br />";
    }
    if(empty($_POST['numColunas'])) {
      echo "O num de colunas não foi preenchido <br /><br />";
    }
  }
  
?>
</body>
</html>