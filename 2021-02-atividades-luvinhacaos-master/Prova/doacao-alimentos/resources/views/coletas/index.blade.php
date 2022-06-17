@extends('principal')

@section('links')
    <link rel="stylesheet" href="coletas.css">
@endsection

@section('body')
    <div class="container my-3">
        <div class="d-flex align-items-center justify-content-between">
            <h1>Coletas</h1>
            <a href="/coletas/create" class="btn btn-primary">Novo</a>
        </div>

        <hr>

        <h4>Doações</h4>
        <table class="table mt-4">
            <thead class="table-light">
                <tr>
                    <th>Id</th>
                    <th>Entidade</th>
                    <th>Item</th>
                    <th>Quantidade</th>
                    <th>Data</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coletas as $coleta)
                    <tr>
                        <td>{{ $coleta->id }}</td>
                        <td>{{ $coleta->entidade->nome }}</td>
                        <td>{{ $coleta->item->descricao }}</td>
                        <td>{{ $coleta->quantidade }}</td>
                        <td>{{ $coleta->data }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-1">
                                <a href="/coletas/edit/{{ $coleta->id }}" class="btn btn-primary btn-sm">Exibir</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
