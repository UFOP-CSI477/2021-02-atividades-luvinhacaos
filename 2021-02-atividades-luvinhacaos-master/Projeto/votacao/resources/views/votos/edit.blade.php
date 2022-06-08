@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Editar voto</h1>

<form action="{{route('votos.update', $voto->id )}}" method="post" id="edit-voto">

  @csrf
  @method('PUT')

  <div class="row-2" style="width: 500px; margin: 0px 10px;">
    <label for="escolha">Escolha:</label>
    <select class="form-control" name="escolha" id="escolha">
      <option value="Aprova">Aprova</option>
      <option value="Reprova">Reprova</option>
      <option value="Abstém">Abstém</option>
    </select>
  </div>

  <div id="btn-editpt">
    <input type="submit" style="margin: 5px; width: 90%;" value="Atualizar" class="btn btn-light">
    <a class="btn btn-light" style="margin: 5px; width: 80%;" href="{{route('votos.show',  $voto->id)}}">Voltar</a>

  </div>
</form>
@endsection