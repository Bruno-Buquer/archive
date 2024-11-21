<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário para envio</title>
</head>
<body>
  <form method="POST" action="./Questão2-exibir.php">

    <label for="num1">Numero 1:</label>
    <input type="number" id="num1" name="num1" placeholder="Informe o 1 num:"/>
    <br/>

    <label for="num2">Numero 2:</label>
    <input type="number" id="num2" name="num2" placeholder="Informe o 2 num:"/>

    <br/>

    <label for="operacao">Operação</label>
    <select id="operacao" name="operacao">
      <option value="+">Soma</option>
      <option value="-">Subtração</option>
      <option value="*">Multiplicação</option>
      <option value="/">Divisão</option>
    </select>

    <br/>
    <button type="submit" name="enviar">Enviar</button>
  </form>
</body>
</html>