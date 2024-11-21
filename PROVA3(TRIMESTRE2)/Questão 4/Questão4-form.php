<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário para envio</title>
</head>
<body>
  <form method="POST" action="./Questao4-exibir.php">

    <label for="numLinhas">Numero de linhas:</label>
    <input type="number" id="numLinhas" name="numLinhas" placeholder="Informe as Linhas:"/>
    <br/>

    <label for="numColunas">Numero de Colunas:</label>
    <input type="numColunas" id="numColunas" name="numColunas" placeholder="Informe as Colunas:"/>

    <br/>
    <button type="submit" name="enviar">Gerar Tabela</button>
  </form>
</body>
</html>