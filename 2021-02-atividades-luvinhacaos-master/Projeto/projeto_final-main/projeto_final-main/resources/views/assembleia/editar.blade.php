@extends('layout')

@section('cabecalho')
Tela Inicial Votação
@endsection

@section('conteudo')


<form action="/assembleia/atualziar/{{$pauta->id}}" method="post">
    @csrf
    <div class="mr-3">

        <div class="col col-8 mb-3">
            <label for="desc_pauta">Descricao da pauta: </label>
            <input type="text" class="form-control" name="desc_pauta" id="desc_pauta" value=" {{ $pauta->desc_pauta }}">
        </div>
        
        <div class="col col-2 mb-3">
            <label for="tipo_pauta">Tipo: </label>
            <select name="tipo_pauta" id="tipo_pauta" class="form-select" required>
                <option value="{{ $pauta->tipo_pauta}}">{{ $pauta->tipo_pauta }}</option>
                <option value="Apreciação">Apreciação</option>
                <option value="Aprovação">Aprovação</option>   
                <option value="Discussão">Discussão</option>
            </select> 
        </div>

        <div class="col col-2 mb-3">
            <label for="ativa_sn">Status</label>
            <select name="ativa_sn" id="ativa_sn" class="form-select" required>
                <option value="{{ $pauta->ativa_sn}}">{{ $pauta->ativa_sn }}</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>
        </div>

        <button class="btn btn-primary mt-3"> Salvar </button>
        <a href="/home" class="btn btn-primary mt-3">Voltar</a>
    </div>
</form>
@endsection
