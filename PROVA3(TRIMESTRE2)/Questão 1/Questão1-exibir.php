<?php
  if(!empty($_POST['nota1']) && !empty($_POST['nota2']) && !empty($_POST['nota3']) && !empty($_POST['nota4'])) {
    $nota1 =  $_POST['nota1'];
    $nota2 =  $_POST['nota2'];
    $nota3 =  $_POST['nota3'];
    $nota4 =  $_POST['nota4'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

    if($media >= 5) {
      $situacao = "Aprovado";
    } else {
      $situacao = "Reprovado";
    }
    
    echo "N1 = " . $nota1 . " | N2 = " . $nota2 . " | N3 = " . $nota3 . " | N4 = " . $nota4 . " | MG = " . $media . " [" . $situacao . "]";
  }else {
    if(empty($_POST['nota1'])) {
      echo "A nota 1 não foi preenchida <br /><br />";
    }
    if(empty($_POST['nota2'])) {
      echo "A nota 2 não foi preenchida <br /><br />";
    }
    if(empty($_POST['nota3'])) {
      echo "A nota 3 não foi preenchida <br /><br />";
    }
    if(empty($_POST['nota4'])) {
      echo "A nota 4 não foi preenchida <br /><br />";
    }
  }
?>