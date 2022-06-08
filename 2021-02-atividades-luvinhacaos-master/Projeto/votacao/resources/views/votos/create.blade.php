@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Deposite seu voto</h1>


<form action="{{route('votos.store')}}" method="post">
  @csrf

  <div id="cadastrar-voto">
    <div class="form-group">
      <label for="ponto_id" style="margin-left: 10px;">Pauta:</label>
      <select name="ponto_id" id="ponto_id" class="form-control" style="width: 500px; margin: 0px 10px;">
        @foreach($pontos as $p)
        @if($p->tipo == 'Discussão' || $p->tipo == 'Aprovação')
        <option value="{{$p->id}}">{{$p->id}}</option>
        @endif
        @endforeach
      </select>

    </div>

    <div class="form-group" style="width: 500px; margin: 0px 10px;">
      <label for="escolha">Voto:</label>
      <select class="form-control" name="escolha" id="escolha">
        <option value="Aprova">Aprova</option>
        <option value="Reprova">Reprova</option>
        <option value="Abstém">Abstém</option>
      </select>
    </div>

    <div btn-cadastrovoto>
      <input type="submit" value="Cadastrar" class="btn btn-light" style="margin: 10px">
      <a class="btn btn-light" href="{{route('pontos.index')}}" style="margin: 10px">Voltar</a>
    </div>

    @endsection