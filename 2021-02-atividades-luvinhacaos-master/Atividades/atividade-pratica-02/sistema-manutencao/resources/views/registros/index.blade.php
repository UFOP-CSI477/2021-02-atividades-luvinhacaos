@extends('principal')

@section('conteudo')

<table class="table table-bordered table-hover table-striped" style="text-align: center;">
  <thead>
    <tr class="table-dark">
      <th>Data limite</th>
      <th>Equipamento</th>
      <th>Usuário</th>
      <th>Tipo de manutenção</th>
      <th>Descrição do serviço</th>
      <th>Informações</th>
    </tr>
  </thead>
  <tbody>

    @foreach($registros as $r)

    <tr>
      <td>{{$r->datalimite}}</td>
      <td>{{$r->equipamento->nome}}</td>
      <td>{{$r->user->name}}</td>
      <td>{{$r->tipo}}</td>
      <td>{{$r->descricao}}</td>
      <td> <a href="{{route('registros.show', $r->id)}}" style="text-decoration: none; color: black;"> Exibir </a></td>

    </tr>
    @endforeach

  </tbody>

</table>

<a class="btn btn-dark" href="{{route('registros.create')}}" style="margin: 0px 600px;">Registrar manutenção</a>

@endsection