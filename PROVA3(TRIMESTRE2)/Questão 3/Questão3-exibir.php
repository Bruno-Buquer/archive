<?php
  if(!empty($_POST['nome']) && !empty($_POST['idade']) && !empty($_POST['estado']) && !empty($_POST['cidade']) && !empty($_POST['sexo'])) {
    echo "Nome: " . $_POST['nome'];
    echo "<br />";
    echo "Idade: " . $_POST['idade'];
    echo "<br />";
    echo "Estado: " . $_POST['estado'];
    echo "<br />";
    echo "Cidade: " . $_POST['cidade'];
    echo "<br />";
    echo "Sexo: " . $_POST['sexo'];
  }else {
    if(empty($_POST['nome'])) {
      echo "O nome não foi preenchido <br /><br />";
    }
    if(empty($_POST['idade'])) {
      echo "A idade não foi preenchida <br /><br />";
    }
    if(empty($_POST['estado'])) {
      echo "O estado não foi preenchido <br /><br />";
    }
    if(empty($_POST['cidade'])) {
      echo "A cidade não foi preenchida <br /><br />";
    }
    if(empty($_POST['sexo'])) {
      echo "O sexo não foi preenchido <br /><br />";
    }
  }
?>