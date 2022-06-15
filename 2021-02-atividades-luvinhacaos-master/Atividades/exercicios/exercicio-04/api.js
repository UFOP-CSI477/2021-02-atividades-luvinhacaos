window.alert('Para carregar os dados, inicialmente clique no botão!')

function limparSelect(campo) {
    while (campo.length > 1) {
      campo.remove(1)
    }
  }

function preencherUF(data) {

  let estados = document.getElementById('estados')
  limparSelect(estados)

  for (let i in data) {

    const { id, nome, sigla } = data[i];

    let opcao = document.createElement('option')
    opcao.value = id;
    opcao.innerHTML = `${nome} - ${sigla}`

    estados.appendChild(opcao);
  }
}

function carregarUF() {
   fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
    .then(Response => Response.json())
    .then(data => preencherUF(data))
    .catch(error => console.error(error))
  }


  function carregarCidade() {
  
    const estados = document.getElementById('estados')
    const estado_index = estados.selectedIndex
    const estado_id = estados.options [ estado_index ].value

    const cidades = document.getElementById('cidades')
    limparSelect(cidades)

    if (estado_id == "") {
      return
    }

    const urlCidades = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estado_id}/municipios`

        fetch(urlCidades)
          .then(Response => Response.json())
          .then(data => preencherCidades(data))
          .catch(error => console.error(error))
  }

  function preencherCidades(data) {

    function limparSelect(campo) {
      while (campo.length > 1) {
        campo.remove(1)
      }
    }

    let cidades = document.getElementById('cidades')
    limparSelect(cidades)

    for (let i in data) {

      const { id, nome } = data[i];

      let opcao = document.createElement('option')
      opcao.value = id;
      opcao.innerHTML = nome;

      cidades.appendChild(opcao);
    }

  }

function preencherCidade(data) {

  let cidades = document.getElementById('cidades')
  limparSelect(cidades)

  for (let i in data) {

    const { id, nome } = data[i];

    let opcao = document.createElement('option')
    opcao.value = id;
    opcao.innerHTML = `${nome} - ${sigla}`

    estados.appendChild(opcao);

  }

}

  

