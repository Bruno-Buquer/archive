<!DOCTYPE html>
<?php
  $dadosFuncionarios = array(
    array(
      'nome' => 'Bruno',
      'idade' => 35,
      'cidade' => 'Nova Friburgo'),
    array(
      'nome' => 'Joaquim',
      'idade' => 21,
      'cidade' => 'Cantagalo'),
    array(
      'nome' => 'João',
      'idade' => 64,
      'cidade' => 'Bom Jardim')
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
                    <th>Idade</th>
                    <th>Cidade</th>
                  </tr>";
      for($i = 0;$i < count($tabela);$i++) {
        $tela .= "<tr>
                    <td>".$tabela[$i]['nome']."</td>
                    <td>".$tabela[$i]['idade']."</td>
                    <td>".$tabela[$i]['cidade']."</td>
                  </tr>";
      }
      $tela .= "</table>";
      return $tela;
    };
    echo $montarTable($dadosFuncionarios);
    
  ?>
</body>
</html>