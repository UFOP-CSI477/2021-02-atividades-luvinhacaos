@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Editar dados da pauta</h1>

<form action="{{route('pontos.update', $ponto->id )}}" method="post" id="edit-pauta">

  @csrf
  @method('PUT')

  <div class="row-2">
    <label for="descricao" style="margin-left: 10px;">Descrição</label>
    <input type="text" class="form-control" name="descricao" id="descricao" style="width: 500px; margin: 0px 10px;" value="{{ $ponto->descricao }}">
  </div>

  <div class="row-2" style="width: 500px; margin: 0px 10px;">
    <label for="tipo">Tipo</label>
    <select class="form-control" name="tipo" id="tipo">
      <option value="Discussão">Discussão</option>
      <option value="Apreciação">Apreciação</option>
      <option value="Aprovação">Aprovação</option>
    </select>
  </div>

  <div id="btn-editpt">
    <input type="submit" style="margin: 5px; width: 90%;" value="Atualizar" class="btn btn-light">
    <a class="btn btn-light" style="margin: 5px; width: 80%;" href="{{route('pontos.show',  $ponto->id)}}">Voltar</a>

  </div>
</form>
@endsection