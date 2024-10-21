@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    <div class="d-flex justify-content-around">
                        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal">Cadastrar Produto</a>
                        <a href="{{ route('produto.index')}}" class="btn btn-warning">Listar Produtos</a>
                    </div>
                </div>

                @component('layouts._components.modal')                    
                @endcomponent

            </div>
        </div>
    </div>
</div>
@component('layouts._components.modalError')
@endcomponent
@endsection