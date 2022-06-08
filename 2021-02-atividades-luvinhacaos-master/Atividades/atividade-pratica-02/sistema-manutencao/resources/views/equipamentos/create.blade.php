@extends('principal')

@section('conteudo')

<form action="{{route('equipamentos.store')}}" method="post">
  @csrf
  <h1 style="margin: 0px 10px;">Cadastro de equipamento</h1>
  <div name="cadastrar">
    <div class="form-group">
      <label for="nome" style="margin: 0px 10px; font-weight: bold;">Nome: </label>
      <input type="text" name="nome" id="nome" class="form-control" style="width: 500px; margin: 0px 10px;">
    </div>
  </div>

  <div>
    <input type="submit" value="Cadastrar" class="btn btn-dark" style="margin: 10px">
    <a class="btn btn-dark" href="{{route('equipamentos.index')}}" style="margin: 10px">Voltar</a>
  </div>

  @endsection