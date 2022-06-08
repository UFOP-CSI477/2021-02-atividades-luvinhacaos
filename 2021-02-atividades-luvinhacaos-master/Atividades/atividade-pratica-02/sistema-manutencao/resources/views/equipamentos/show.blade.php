@extends('principal')

@section('conteudo')

<h1 style="margin: 0px 10px;">Informações do equipamento</h1>

<table class="table table-bordered table-hover table-striped" style="margin: 0px 10px;">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$equipamento->id}}</td>
            <td>{{$equipamento->nome}}</td>
        </tr>
    </tbody>
</table>

<form name="frmDelete" action="{{route('equipamentos.destroy', $equipamento->id)}}" method="post" onsubmit="return confirm('Confirma exclusão do produto?')" style="margin: 0px 10px;">

    <a class="btn btn-dark" href="{{route('equipamentos.edit', $equipamento->id)}}" style="margin: 10px 0px;">Editar</a>
    <a class="btn btn-dark" href="{{route('equipamentos.index')}}" style="margin: 10px 0px;">Voltar</a>
    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">
</form>



@endsection