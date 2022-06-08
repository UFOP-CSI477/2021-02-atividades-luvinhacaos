@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Informações sobre o voto</h1>

<div id="show-voto">
  <h3>Nº identificador da pauta: {{$voto->ponto_id}}</h3>
  <h3>Voto: {{$voto->escolha}}</h3>

  <div id="btn-showvoto">
    <a class="btn btn-light" style="margin: 5px; width: 45%;" href="{{route('votos.edit', $voto->id)}}">Editar</a>
    <a class="btn btn-light" style="margin: 5px; width: 45%;" href="{{route('votos.index')}}">Voltar</a>
  </div>


  <form name="frmDelete" action="{{route('votos.destroy', $voto->id)}}" method="post" onsubmit="return confirm('Confirma exclusão do voto?')">

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">
  </form>
</div>


@endsection