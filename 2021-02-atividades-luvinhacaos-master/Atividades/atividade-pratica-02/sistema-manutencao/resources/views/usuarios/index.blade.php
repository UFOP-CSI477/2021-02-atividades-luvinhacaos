@extends('principal')

@section('conteudo')

<table class="table table-bordered table-hover table-striped" style="text-align: center;">
  <thead>
    <tr class="table-dark">
      <th>Nome</th>
      <th>E-mail</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $users as $u )
    <tr>
      <td>{{ $u->name }}</td>
      <td>{{ $u->email }}</td>

    </tr>
    @endforeach

  </tbody>
</table>
@endsection