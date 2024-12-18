<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário para envio</title>
  <script src="./script.js"></script>
</head>
<body>
  <?php var_dump($_POST); ?>
  <form method="POST" action="../tabela.php">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Informe seu nome." value="<?= isset($_POST["nome"]) ? $_POST["nome"] : "" ?>"/>
    <br/>
    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade" placeholder="Informe sua Idade." value="<?= isset($_POST["idade"]) ? $_POST["idade"] : "" ?>"/>
    <br/>
    <label for="estado">Estado: </label>
    <select id="estado" name="estado" onchange="carregaCidades(this)">
      <!-- <option value="RJ">Rio de Janeiro</option> -->
      <?php
        $estadosBrasil = [
            "" => "",
            "AC" => "Acre",
            "AL" => "Alagoas",
            "AP" => "Amapá",
            "AM" => "Amazonas",
            "BA" => "Bahia",
            "CE" => "Ceará",
            "DF" => "Distrito Federal",
            "ES" => "Espírito Santo",
            "GO" => "Goiás",
            "MA" => "Maranhão",
            "MT" => "Mato Grosso",
            "MS" => "Mato Grosso do Sul",
            "MG" => "Minas Gerais",
            "PA" => "Pará",
            "PB" => "Paraíba",
            "PR" => "Paraná",
            "PE" => "Pernambuco",
            "PI" => "Piauí",
            "RJ" => "Rio de Janeiro",
            "RN" => "Rio Grande do Norte",
            "RS" => "Rio Grande do Sul",
            "RO" => "Rondônia",
            "RR" => "Roraima",
            "SC" => "Santa Catarina",
            "SP" => "São Paulo",
            "SE" => "Sergipe",
            "TO" => "Tocantins"
        ];
        foreach($estadosBrasil as $chave => $valor) {
          if($_POST['estado'] == $chave){
            echo "<option value=" . $chave ." selected >" . $valor . "</option>";
          }
          else{
              echo "<option value=" . $chave .">" . $valor . "</option>";
          }
        }
      ?>
    </select>
    
    <br/>
    <label for="cidade">Cidade: </label>
    <select id="cidade" name="cidade">
    </select>
    <!--<label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" placeholder="Informe sua cidade."/> -->
    <br/>
    <br/>
    <button type="submit" name="enviar">Enviar</button>
  </form>
</body>
</html>