@extends('principal')

@section('conteudo')

<form action="{{route('equipamentos.update', $equipamento->id)}}" method="post">
  @csrf
  @method('PUT')

  <h1>Editar equipamento</h1>
  <div class="form-group">
    <label for="nome" style="margin-bottom: 10px;">Nome:</label>
    <input type="text" name="{{$equipamento->nome}}" id="nome">
  </div>

  <div>
    <input type="submit" value="Atualizar" class="btn btn-dark" style="margin-left: 100px;">
  </div>
  @endsection