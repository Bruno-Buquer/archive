<?php
  $animalNome = array(
    "MA" => array("Canis lupus familiaris", "Felis catus", "Homo sapiens"),
    "AV" => array("Aquila chrysaetos", "Sphenodon punctatus", "Corvus corax"),
    "BA" => array("Escherichia coli", "Salmonella enterica", "Streptococcus pneumoniae")
  ); 
  
  if(!empty($_POST["classe"])) {
    echo json_encode($animalNome[$_POST["classe"]]);
  }
?>