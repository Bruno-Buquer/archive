document.addEventListener("DomContentLoaded", () => {
  var selectEstado = document.getElementById("estado");
  selectEstado.addEventListener("change", carregaCidades);
});

function carregaCidades() {
  var formulario = new FormData();
  formulario.append("Estado", pegaValorEstado());
  fetch("cidade.php", {
    method: "POST",
    header: { "content-type": "Application-json" },
    body: formulario,
  })
    .then(async (resposta) => {
      var cidades = await resposta.json();
      criaOptionsCidade(cidades);
    })
    .catch((Error) => console.log(Error));
}

function pegaValorEstado() {
  var selectEstado = document.getElementById("estado");
  return selectEstado.options[selectEstado.selectedIndex].value;
}

function criaOptionsCidade(resposta) {
  var selectCidade = document.getElementById("cidade");
  limpaSelect(selectCidade);
  for (var cidade of resposta) {
    var optionCid = document.createElement("option");
    optionCid.setAttribute("value", cidade);
    optionCid.textContent = cidade;
    selectCidade.appendChild(optionCid);
  }
}

function limpaSelect(campo) {
  var opt;
  while ((opt = campo.firstChild)) {
    campo.removeChild(opt);
  }
}
