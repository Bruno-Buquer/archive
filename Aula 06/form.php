<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário para envio</title>
  <script src="./script.js" defer></script>
</head>
<body>
  <?php var_dump($_POST); ?>
  <form method="POST" action="../tabela.php">
    <label for="classe">Filo: </label>
    <select id="classe" name="classe" onchange="carregaAnimais(this)">
      <!-- <option value="RJ">Rio de Janeiro</option> -->
      <?php
        $classeAnimal = [
            "" => "",
            "MA" => "Mamífero",
            "AV" => "Ave",
            "BA" => "Bactéria"
        ];
        foreach($classeAnimal as $chave => $valor) {
          if($_POST["classe"] == $chave){
            echo "<option value=" . $chave ." selected >" . $valor . "</option>";
          }
          else{
              echo "<option value=" . $chave .">" . $valor . "</option>";
          }
        }
      ?>
    </select>
    
    <br/>
    <label for="nome">Nome: </label>
    <select id="nome" name="nome">
    </select>
    <!--<label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" placeholder="Informe sua cidade."/> -->
    <br/>
    <br/>
    <button type="submit" name="enviar">Enviar</button>
  </form>
</body>
</html>