@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Produto') }}</div>

                <div class="card-body">
                    <div class="d-flex justify-content-around">
                        <a href="{{ route('produto.index')}}" class="btn btn-warning">Voltar</a>                        
                    </div>

                    <form class="was-validated" action="{{ route('produto.update', ['produto' => $produto->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Produto</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome ?? old('nome')}}" placeholder="Digite o nome do produto" required minlength="3">
                            {{$errors->has('nome') ? $errors->first('nome') : ''}}
                            <div class="invalid-feedback text text-danger">O campo nome do Produto precisa ter no mínimo 3 caracteres</div>
                        </div>

                        <div class="modal-footer d-flex justify-content-around">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-success">Atualizar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection