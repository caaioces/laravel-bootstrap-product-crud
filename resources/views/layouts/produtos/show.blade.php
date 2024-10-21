@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listar Produtos') }}</div>

                <div class="card-body">
                    
                    @if(session('sucesso'))
                        <div class="alert alert-success  alert-dismissible fade show" role="alert">
                            {{ session('sucesso') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="d-flex justify-content-around">
                        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal">Cadastrar Produto</a>
                        <a href="{{ route('produto.index')}}" class="btn btn-warning">Voltar</a>
                    </div>

                    <div class="text-center">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nome</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <th scope="row">{{ $produtos->id }}</th>
                                    <td>{{ $produtos->nome }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @component('layouts._components.modal')                    
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@component('layouts._components.modalError')
@endcomponent

@endsection