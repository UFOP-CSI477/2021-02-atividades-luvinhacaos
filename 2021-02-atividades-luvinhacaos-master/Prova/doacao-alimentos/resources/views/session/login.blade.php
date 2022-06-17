@extends('principal')

@section('body')
    <div class="container my-3">
        <form action="/login" method="post">
            <div class="d-flex align-items-center justify-content-between">
                <h1>Login</h1>
                <div class="d-flex gap-3">
                    <a href="/cadastro" class="btn btn-light">Fazer cadastro</a>
                    <button type="submit" class="btn btn-primary d-block mx-auto">Login</button>
                </div>
            </div>

            <hr />

            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
        </form>
    </div>
@endsection
