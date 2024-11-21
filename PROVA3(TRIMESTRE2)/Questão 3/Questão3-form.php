<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário para envio</title>
</head>
<body>
    <form method="POST" action="./Questão3-exibir.php" id="formCadastro">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Informe seu nome." />

        <br/>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" placeholder="Informe sua Idade." />

        <br/>

        <label for="estado">Estado: </label>
        <select id="estado" name="estado">
          <option value="RJ">Rio de Janeiro</option>
          <option value="SP">São Paulo</option>
          <option value="ES">Espírito Santo</option>
          <option value="MG">Minas Gerais</option>
        </select>

        <br/>

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" placeholder="Informe a cidade." />

        <br/>
        <label>Sexo:</label>
        <input type="radio" id="sexo_M" name="sexo" value="M">
        <label for="sexo_M">Masculino</label>
        <input type="radio" id="sexo_F" name="sexo" value="F">
        <label for="sexo_F">Feminino</label>
        
        <br/>
        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>
</html>