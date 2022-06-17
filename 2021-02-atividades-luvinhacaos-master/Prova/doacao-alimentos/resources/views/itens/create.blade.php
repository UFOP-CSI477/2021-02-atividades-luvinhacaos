@extends('principal')

@section('body')
    <div class="container my-3">
        <form action="/itens" method="post">
            @csrf

            <div class="d-flex align-items-center justify-content-between">
                <h1>Itens</h1>
                <div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>

            <hr>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao">
            </div>
        </form>
    </div>
@endsection
