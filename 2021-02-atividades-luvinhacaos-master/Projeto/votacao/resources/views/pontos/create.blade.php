@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Cadastro de novas pautas para a Assembléia</h1>

<form action="{{route('pontos.store')}}" method="post" id="form-pauta">
  @csrf

  <div name="cadastrar">

    <div class="form-group">
      <label for="descricao" style="margin: 0px 10px;">Descreva a pauta a ser inserida:</label>
      <input type="text" name="descricao" id="descricao" class="form-control" style="width: 500px; margin: 0px 10px;">
    </div>

    <div class="form-group" style="width: 500px; margin: 0px 10px;">
      <label for="tipo">Tipo de pauta:</label>
      <select class="form-control" name="tipo" id="tipo">
        <option value="Discussão">Discussão</option>
        <option value="Apreciação">Apreciação</option>
        <option value="Aprovação">Aprovação</option>
      </select>

    </div>

    <div id="btn-creatept">
      <input type="submit" value="Cadastrar" class="btn btn-light" style="margin: 10px; width: 20%;">
      <a class="btn btn-light" href="{{route('pontos.index')}}" style="margin: 10px; width: 20%;">Voltar</a>

    </div>

    @endsection