@extends('principal')

@section('body')
    <div class="container my-3">
        <h1>Entidades</h1>

        <hr>

        <table class="table mt-4">
            <thead class="table-light">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entidades as $entidade)
                    <tr>
                        <td>{{ $entidade->id }}</td>
                        <td>{{ $entidade->nome }}</td>
                        <td>{{ $entidade->estado }}</td>
                        <td>{{ $entidade->cidade }}</td>
                        <td>{{ $entidade->bairro }}</td>
                        <td>
                        <form
                            action="/entidades/delete/{{$entidade->id}}"
                            method="POST"
                        >
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
