@extends('principal')

@section('conteudo')

<h1>Dados do registro</h1>

<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Data de término</th>
      <th>Equipamento</th>
      <th>Cliente</th>
      <th>Descrição</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$registro->id}}</td>
      <td>{{$registro->datalimite}}</td>
      <td>{{$registro->equipamento->nome}}</td>
      <td>{{$registro->user->name}}</td>
      <td>{{$registro->descricao}}</td>
    </tr>
  </tbody>
</table>

<form name="frmDelete" action="" method="post" onsubmit="return confirm('Confirma exclusão da manutenção?')">

  <a class="btn btn-dark" href="{{route('registros.edit', $registro->id)}}">Editar</a>
  <a class="btn btn-dark" href="{{route('registros.index')}}">Voltar</a>
  @csrf
  @method('DELETE')

  <input class="btn btn-danger" type="submit" value="Excluir">
</form>



@endsection