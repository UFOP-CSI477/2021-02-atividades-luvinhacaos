@extends('principal')

@section('conteudo')

<form action="{{ route('registros.update', $registro->id )}}" method="post">

  @csrf
  @method('PUT')

  <h1>Editar dados da manutenção</h1>
  <div class="col">
    <div class="row-2">
      <label for="equipamento">Equipamento</label>
      <select class="form-control" name="equipamento_id" id="equipamento">

        @foreach($equipamentos as $e)
        <option value="{{ $e->id}}" @if($registro->equipamento_id == $e->id)
          selected
          @endif
          >{{ $e->nome }}</option>
        @endforeach

      </select>
    </div>

    <div class="row-2">
      <label for="usuario">Usuário</label>
      <select class="form-control" name="user_id" id="usuario">

        @foreach($users as $u)
        <option value="{{ $u->id}}" @if($registro->user_id == $u->id)
          selected
          @endif
          >{{ $u->name }}</option>
        @endforeach

      </select>
    </div>

    <div class="row-2">
      <label for="descricao">Descrição</label>
      <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $registro->descricao }}">
    </div>

    <div class="row-2">
      <label for="datalimite">Data limite</label>
      <input type="date" class="form-control" name="datalimite" id="data_limite" value="{{ $registro->datalimite }}">
    </div>


    <div class="row-2">
      <label for="tipo">Tipo</label>
      <select class="form-control" name="tipo" id="tipo">
        <option value="Preventiva">Preventiva</option>
        <option value="Corretiva">Corretiva</option>
        <option value="Urgente">Urgente</option>
      </select>
    </div>

    <div>
      <input type="submit" value="Atualizar" class="btn btn-dark">
    </div>
</form>
@endsection