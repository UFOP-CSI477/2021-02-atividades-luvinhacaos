@extends('principal')

@section('conteudo')


<table class="table table-bordered table-hover table-striped" style="text-align: center;">
  <thead>
    <tr class="table-dark">
      <th>Id</th>
      <th>Nome</th>
      <th>Informações</th>
    </tr>
  </thead>
  <tbody>

    @foreach($equipamentos as $e)

    <tr>
      <td>{{$e->id}}</td>
      <td>{{$e->nome}}</td>
      <td> <a href="{{route('equipamentos.show', $e->id)}}" style="text-decoration: none; color: black;"> Exibir </a></td>
    </tr>
    @endforeach

  </tbody>

</table>

<a class="btn btn-dark" href="{{route('equipamentos.create')}}" style="margin: 0px 600px;">Cadastrar equipamento</a>

@endsection