@extends('principal')

@section('conteudo')

<form action="{{route('registros.store')}}" method="post">
  @csrf
  <div name="cadastrar">

    <h1 style="margin: 10px 10px;">Criar registro</h1>

    <div class="form-group" style="margin: 0px 10px;">
      <label for="equipamento_id" style="font-weight: bold;">Selecione o equipamento:</label>
      <select name="equipamento_id" id="equipamento_id" class="form-control">
        @foreach($equipamentos as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
        @endforeach
      </select>

    </div>

    <div class="form-group" style="margin: 0px 10px;">
      <label for="user_id" style="font-weight: bold;">Selecione o cliente:</label>
      <select name="user_id" id="user_id" class="form-control">
        @foreach($users as $u)
        <option value="{{$u->id}}">{{$u->name}}</option>
        @endforeach
      </select>

    </div>

    <div class="form-group" style="margin: 0px 10px;">
      <label for="tipo" style="font-weight: bold;">Tipo de manutenção:</label>
      <input type="number" name="tipo" id="tipo" class="form-control" placeholder="Selecione o tipo de manutenção">

      <label for="tipo">Tipo de manutenção</label>
      <select class="form-control" name="tipo" id="tipo">
        <option value="Preventiva">Preventiva</option>
        <option value="Corretiva">Corretiva</option>
        <option value="Urgente">Urgente</option>
      </select>
    </div>

    <div class="form-group" style="margin: 0px 10px;">
      <label for="descricao" style="font-weight: bold;">Descrição:</label>
      <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descreva o serviço a ser feito">
    </div>

    <div style="margin: 0px 10px;">
      <label for="datalimte" style="font-weight: bold;">Data de entrega:</label>
      <input type="date" name="datalimite" id="datalimite" class="form-control">
    </div>

  </div>

  <div style="margin: 10px 10px;">
    <input type="submit" value="Cadastrar" class="btn btn-dark">
    <a class="btn btn-dark" href="{{route('equipamentos.index')}}">Voltar</a>
  </div>


  @endsection