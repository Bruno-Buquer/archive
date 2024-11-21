<?php
  if((!empty($_POST['num1']  || $_POST['num1'] == 0)) && (!empty($_POST['num2'])  || $_POST['num2'] == 0) && (!empty($_POST['operacao']))) {
    if($_POST['operacao'] == "/" && $_POST['num2'] == 0) {
      echo "Erro: O SEGUNDO NUM NÃO PODE SER ZERO, QUANDO DIVISÃO";
    } else {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $operacao = $_POST['operacao'];

      function calculaSoma($num1, $num2) {
        echo $num1 + $num2;
      }

      function calculaSubtracao($num1, $num2) {
        echo $num1 - $num2;
      }

      function calculaMultiplicao($num1, $num2) {
        echo $num1 * $num2;
      }

      function calculaDivisao($num1, $num2) {
        echo $num1 / $num2;
      }

      echo "Resultado: ";

      switch($operacao) {
          case "+": calculaSoma($num1, $num2);
          break;
          case "-": calculaSubtracao($num1, $num2);
          break;
          case "*": calculaMultiplicao($num1, $num2);
          break;
          case "/": calculaDivisao($num1, $num2);
          break;
        }
    }
  }else {
    if(empty($_POST['num1'])) {
      echo "O primeiro num não foi preenchido <br /><br />";
    }
    if(empty($_POST['num2'])) {
      echo "O segundo num não foi preenchido <br /><br />";
    }
    if(empty($_POST['operacao'])) {
      echo "A operação não foi preenchida <br /><br />";
    }
  }
  
?>