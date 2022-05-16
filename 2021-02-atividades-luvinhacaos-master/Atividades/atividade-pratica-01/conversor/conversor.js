function preencherSelectMoeda1(data){

    let moeda = document.getElementById("moeda1");

    for(let index in data.value){
        
        const {simbolo, nomeFormatado} = data.value[index];

        let option = document.createElement("option");
        option.value = nomeFormatado;
        option.innerHTML = `(${simbolo}) ${nomeFormatado}`;

        moeda.appendChild(option);
    }
}

function carregarMoeda1(){

    fetch("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/Moedas?$top=100&$skip=0&$format=json&$select=simbolo,nomeFormatado")
        .then(response => response.json())
        .then(data => preencherSelectMoeda1(data))
        .catch(error => console.error(error))
}

function preencherSelectMoeda2(data){

    let moeda = document.getElementById("moeda2");

    for(let index in data.value){
        
        const {simbolo, nomeFormatado} = data.value[index];

        let option = document.createElement("option");
        option.value = nomeFormatado;
        option.innerHTML = `(${simbolo}) ${nomeFormatado}`;

        moeda.appendChild(option);
    }
}

function carregarMoeda2(){

    fetch("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/Moedas?$top=100&$skip=0&$format=json&$select=simbolo,nomeFormatado")
        .then(response => response.json())
        .then(data => preencherSelectMoeda2(data))
        .catch(error => console.error(error))
}

function carregarMoedas2(){
    fetch("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/Moedas?$top=100&$skip=0&$format=json&$select=simbolo,nomeFormatado,tipoMoeda")
        .then(response => response.json())
        .then(data => preencherMoedas2(data))
        .catch(error => console.error(error))
}

async function getValor(){
    const response = await fetch("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaDia(moeda=@moeda,dataCotacao=@dataCotacao)?@moeda=''&@dataCotacao=''&$top=100&$format=json&$select=cotacaoCompra")
        .then(response => response.json())
        .then(data => {
            return data.value[0].cotacaoCompra;
        })
        .catch(error => console.error(error))
    return response
}

