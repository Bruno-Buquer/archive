<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário para envio</title>
</head>
<body>
  <form method="POST" action="./Questão1-exibir.php">
    <label for="nota1">Nota 1:</label>
    <input type="number" id="nota1" name="nota1" placeholder="Informe sua 1 nota."/>
    <br/>
    <label for="nota2">Nota 2:</label>
    <input type="number" id="nota2" name="nota2" placeholder="Informe sua 2 nota."/>
    <br/>
    <label for="nota3">Nota 3:</label>
    <input type="number" id="nota3" name="nota3" placeholder="Informe sua 3 nota."/>
    <br/>
    <label for="nota4">Nota 4:</label>
    <input type="number" id="nota4" name="nota4" placeholder="Informe sua 4 nota."/>
    <br/>
    <button type="submit" name="enviar">Enviar</button>
  </form>
</body>
</html>