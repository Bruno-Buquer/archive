<?php
  $nome = "Bruno Buquer Barroso";

  echo 'CRC32: ' . crc32($nome) . '<br/>';
  echo 'MD5: ' . md5($nome) . '<br/>';
  echo 'SHA1: ' . sha1($nome) . '<br/>';




  $senha = $_POST["senha"];
  if(sha1($senha) == $senhaBD) {
    return true;
  }
  else {
    return false;
  }
?>