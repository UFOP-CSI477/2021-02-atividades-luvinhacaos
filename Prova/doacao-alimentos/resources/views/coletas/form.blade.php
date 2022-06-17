@extends('principal')

@section('links')
    <link rel="stylesheet" href="coletas.css">
@endsection

@section('body')
    <div class="container my-3">
        <form action="/coletas/{{ $coleta->id }}" method="post">
            @csrf
            @if ($modoEdicao)
                @method('PUT')
            @endif

            <div class="d-flex align-items-center justify-content-between">
                <h1>Coletas</h1>
                <div>
                    @if ($modoEdicao)
                        <button type="button" class="btn btn-danger mx-2" onclick="document.querySelector('#formExclusao').submit()">Remover</a>
                    @endif
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>

            <hr>

            <div class="mb-3">
                <label for="entidade" class="form-label">Entidade</label>
                <select name="entidade_id" id="entidade" class="form-control">
                    @foreach ($entidades as $entidade)
                        <option value="{{ $entidade->id }}" {{ $coleta->entidade->id == $entidade->id ? 'selected' : '' }}>{{ $entidade->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="item" class="form-label">Item</label>
                <select name="item_id" id="item" class="form-control">
                    @foreach ($itens as $item)
                        <option value="{{ $item->id }}" {{ $coleta->item->id == $item->id ? 'selected' : ''}}>{{ $item->descricao }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" id="quantidade" value="{{ $coleta->quantidade }}">
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" name="data" id="data" value="{{ $coleta->data }}">
            </div>
        </form>

        <form action="/coletas/delete/{{$coleta->id}}" id="formExclusao" method="POST">
            @csrf
            @method('DELETE')
        </form>
    </div>
@endsection
