@extends('principal')

@section('body')
    <div class="container my-3">
        <div class="d-flex align-items-center justify-content-between">
            <h1>Itens</h1>
            <a href="/itens/create" class="btn btn-primary">Novo</a>
        </div>


        <hr>

        <h4>Itens</h4>
        <table class="table mt-4">
            <thead class="table-light">
                <tr>
                    <th>Id</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($itens as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->descricao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
