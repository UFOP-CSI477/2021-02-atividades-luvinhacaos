@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Dados da pauta inserida</h1>

<div id="show-pauta">
  <h3 style="text-align: center; margin-top: 10px;">Nº identificador: {{$ponto->id}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Descrição: {{$ponto->descricao}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Tipo: {{$ponto->tipo}}</h3>

  <div id="btn-show">
    <a class="btn btn-light" style="margin: 5px; width: 45%;" href="{{route('pontos.edit', $ponto->id)}}">Editar</a>
    <a class="btn btn-light" style="margin: 5px; width: 45%;" href="{{route('pontos.index')}}">Voltar</a>
  </div>


  <form name="frmDelete" action="{{route('pontos.destroy', $ponto->id)}}" method="post" onsubmit="return confirm('Confirma exclusão da pauta?')">

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">
  </form>
</div>




@endsection