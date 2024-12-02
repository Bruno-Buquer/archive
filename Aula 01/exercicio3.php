<!DOCTYPE html>
<?php
  $dadosProdutos = array(
    array(
      'nome' => 'Detergente',
      'preço' => 2.90,
      'fabricante' => 'Veja'),
    array(
      'nome' => 'Palha de Aço',
      'preço' => 5.99,
      'fabricante' => 'Bombril'),
    array(
      'nome' => 'Esponja',
      'preço' => 0.99,
      'fabricante' => 'Limpol')
  )
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela</title>
</head>
<body>
  <?php
    //$soma = fn(int $a, int $b):int => $a+$b;
    echo "<br/>";
    //var_dump($soma(5,6));
    $montarTable = function($tabela) {
      $tela = "<table>
                  <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Fabricante</th>
                  </tr>";
      for($i = 0;$i < count($tabela);$i++) {
        $tela .= "<tr>
                    <td>".$tabela[$i]['nome']."</td>
                    <td>".$tabela[$i]['preço']."</td>
                    <td>".$tabela[$i]['fabricante']."</td>
                  </tr>";
      }
      $tela .= "</table>";
      return $tela;
    };
    echo $montarTable($dadosProdutos);
    
  ?>
</body>
</html>
