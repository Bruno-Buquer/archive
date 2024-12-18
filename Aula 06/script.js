document.addEventListener("DomContentLoaded", () => {
  var selectClasse = document.getElementById("classe");
  selectClasse.addEventListener("change", carregaAnimais);
});

function carregaAnimais() {
  var formulario = new FormData();
  formulario.append("classe", pegaValorClasse());
  fetch("http://localhost/archive/Aula%2006/nomeAnimal.php", {
    method: "POST",
    header: { "content-type": "Application-json" },
    body: formulario,
  })
    .then(async (resposta) => {
      var nomeAnimals = await resposta.json();
      criaOptionsnomeAnimal(nomeAnimals);
    })
    .catch((Error) => console.log(Error));
}

function pegaValorClasse() {
  var selectClasse = document.getElementById("classe");
  return selectClasse.options[selectClasse.selectedIndex].value;
}

function criaOptionsnomeAnimal(resposta) {
  var selectnomeAnimal = document.getElementById("nome");
  limpaSelect(selectnomeAnimal);
  for (var nomeAnimal of resposta) {
    var optionCid = document.createElement("option");
    optionCid.setAttribute("value", nomeAnimal);
    optionCid.textContent = nomeAnimal;
    selectnomeAnimal.appendChild(optionCid);
  }
}

function limpaSelect(campo) {
  var opt;
  while ((opt = campo.firstChild)) {
    campo.removeChild(opt);
  }
}
