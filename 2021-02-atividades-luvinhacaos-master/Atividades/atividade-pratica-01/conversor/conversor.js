function desabilita(estado){
    var input = document.querySelector("#date");
    input.disabled =  estado;
}

function limparSelect(campo){
    while(campo.length > 1){
        campo.remove(1);
    }
}

function preencherMoedas1(data){

    let moedas = document.getElementById("moeda1");
    limparSelect(moedas);

    for(let index in data.value){
        
        const {simbolo, nomeFormatado} = data.value[index];

        let option = document.createElement("option");
        option.value = nomeFormatado;
        option.innerHTML = `${simbolo}-${nomeFormatado}`;

        moedas.appendChild(option);
    }
}

function carregarMoedas1(){

    fetch("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/Moedas?$top=100&$skip=0&$format=json&$select=simbolo,nomeFormatado ")
        .then(response => response.json())
        .then(data => preencherMoedas1(data))
        .catch(error => console.error(error))
}

function preencherMoedas2(data){

    let moedas = document.getElementById("moeda2");
    limparSelect(moedas);

    for(let index in data.value){
        
        const {simbolo, nomeFormatado} = data.value[index];

        let option = document.createElement("option");
        option.value = nomeFormatado;
        option.innerHTML = `${simbolo}-${nomeFormatado}`;

        moedas.appendChild(option);
    }
}

function carregarMoedas2(){

    fetch("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/Moedas?$top=100&$skip=0&$format=json&$select=simbolo,nomeFormatado ")
        .then(response => response.json())
        .then(data => preencherMoedas2(data))
        .catch(error => console.error(error))
}

function converter(valorMoeda1){
    console.log(valorMoeda1);
}