<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário para envio</title>
</head>
<body>
  <form method="POST" action="./tabela.php">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Informe seu nome."/>
    <br/>
    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" placeholder="Informe sua cidade."/>
    <br/>
    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade" placeholder="Informe sua Idade." />
    <br/>
    <label for="estado">Estado: </label>
    <select id="estado" name="estado">
      <!-- <option value="RJ">Rio de Janeiro</option> -->
      <?php
        $estadosBrasil = [
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
          echo "<option value=" . $chave .">" . $valor . "</option>";
        }
      ?>
    </select> 
    <br/>
    <button type="submit" name="enviar">Enviar</button>
  </form>
  <?php

// $cidadesEstados = array(
//     "AC" => array("Rio Branco", "Cruzeiro do Sul", "Sena Madureira", "Tarauacá"),
//     "AL" => array("Maceió", "Arapiraca", "Palmeira dos Índios", "Rio Largo"),
//     "AP" => array("Macapá", "Santana", "Laranjal do Jari", "Oiapoque"),
//     "AM" => array("Manaus", "Parintins", "Itacoatiara", "Manacapuru"),
//     "BA" => array("Salvador", "Feira de Santana", "Vitória da Conquista", "Camaçari"),
//     "CE" => array("Fortaleza", "Caucaia", "Juazeiro do Norte", "Sobral"),
//     "DF" => array("Brasília"),
//     "ES" => array("Vitória", "Vila Velha", "Serra", "Cariacica"),
//     "GO" => array("Goiânia", "Aparecida de Goiânia", "Anápolis", "Rio Verde"),
//     "MA" => array("São Luís", "Imperatriz", "Timon", "Caxias"),
//     "MT" => array("Cuiabá", "Várzea Grande", "Rondonópolis", "Sinop"),
//     "MS" => array("Campo Grande", "Dourados", "Três Lagoas", "Corumbá"),
//     "MG" => array("Belo Horizonte", "Uberlândia", "Contagem", "Juiz de Fora"),
//     "PA" => array("Belém", "Ananindeua", "Santarém", "Marabá"),
//     "PB" => array("João Pessoa", "Campina Grande", "Santa Rita", "Patos"),
//     "PR" => array("Curitiba", "Londrina", "Maringá", "Ponta Grossa"),
//     "PE" => array("Recife", "Jaboatão dos Guararapes", "Olinda", "Caruaru"),
//     "PI" => array("Teresina", "Parnaíba", "Picos", "Floriano"),
//     "RJ" => array("Rio de Janeiro", "São Gonçalo", "Duque de Caxias", "Nova Iguaçu"),
//     "RN" => array("Natal", "Mossoró", "Parnamirim", "Caicó"),
//     "RS" => array("Porto Alegre", "Caxias do Sul", "Pelotas", "Santa Maria"),
//     "RO" => array("Porto Velho", "Ji-Paraná", "Ariquemes", "Vilhena"),
//     "RR" => array("Boa Vista", "Rorainópolis", "Caracaraí", "Alto Alegre"),
//     "SC" => array("Florianópolis", "Joinville", "Blumenau", "Chapecó"),
//     "SP" => array("São Paulo", "Campinas", "Guarulhos", "Santos"),
//     "SE" => array("Aracaju", "Nossa Senhora do Socorro", "Lagarto", "Itabaiana"),
//     "TO" => array("Palmas", "Araguaína", "Gurupi", "Porto Nacional")
// );


?>
</body>
</html>