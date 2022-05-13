// cria o array para armazenar cada transação
var transacoes = []

function enviar() {

  var operacao = document.getElementById('select-operacao')
  var chave = document.getElementById('chave')
  var valor = document.getElementById('valor')
  var data = document.getElementById('data')

  // verifica se todos campos foram preenchidos
  if (chave.value == 0 || valor.value == 0 || data.value == 0) {
    window.alert('Preencha corretamente todos os dados!')
  }

  else {
    // cria o objeto com os dados da transação enviada
    const transacao = {
    infoOperacao: operacao.value,
    infoValor: valor.value,
  }
  
  transacoes.push(transacao)

  window.alert('Transação efetuada!')

  chave.value = ""
  valor.value = ""
  data.value = ""
  }
}

function finalizar () {

  var numeroEnviados = document.getElementById('exibe-enviado')
  var numeroRecebidos = document.getElementById('exibe-recebido')

  var saldoFinalEnviado = document.getElementById('exibe-saldo-enviado')
  var saldoFinalRecebido = document.getElementById('exibe-saldo-recebido')

  var contadorEnviados = 0
  var contadorRecebidos = 0

  var somaEnviados = 0
  var somaRecebidos = 0

  // calcular e retorna na div de resultado os dados sobre cada tipo de operação
  for(i in transacoes){

    if(transacoes[i].infoOperacao == 'Pagar'){
      contadorEnviados++
      numeroEnviados.innerHTML = `Numero de transações: ${contadorEnviados}`

      somaEnviados += Number(transacoes[i].infoValor)
      saldoFinalEnviado.innerHTML = `Saldo enviado acumulado: ${somaEnviados}`
    }
    else if(transacoes[i].infoOperacao == 'Receber') {
      contadorRecebidos++
      numeroRecebidos.innerHTML = `Numero de transações: ${contadorRecebidos}`
      
      somaRecebidos += Number(transacoes[i].infoValor)
      saldoFinalRecebido.innerHTML = `Saldo recebido acumulado: ${somaRecebidos}`
    }
  }

    // calcula e exibe no título o saldo final do cliente
    var saldoTotal = document.getElementById('saldo-total')
    var soma = somaRecebidos - somaEnviados
    saldoTotal.innerHTML = `Controle Pix - Seu saldo atual: R$${soma}`
}

// função que preenche o select com os dados vindo da API
function preencherBancos(data) {
  let listaBancos = document.getElementById("select-banco");

  for (i in data) {
      const { isbp, code, fullName } = data[i];
      let option = document.createElement("option");

      option.value = isbp;
      option.innerHTML = `${code}-${fullName}`;
      listaBancos.appendChild(option);
  }
}

// função que consome a API dos bancos
function carregarBancos() {
  fetch("https://brasilapi.com.br/api/banks/v1")
        .then(response => response.json())
        .then(data => preencherBancos(data))
}