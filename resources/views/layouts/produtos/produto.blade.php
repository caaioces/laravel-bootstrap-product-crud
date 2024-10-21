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
                        <a href="{{ route('home')}}" class="btn btn-warning">Voltar</a>
                    </div>

                    <div class="text-center">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Visualizar</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $produtos as $produto )

                                <tr>
                                    <th scope="row">{{ $produto->id }}</th>
                                    <td>{{ $produto->nome }}</td>
                                    <td><a href="{{route('produto.show', ['produto' => $produto->id])}}">Visualizar</a></td>
                                    <td><a href="{{route('produto.edit', ['produto' => $produto->id])}}">Editar</a></td>
                                    <td>
                                        <form id="form_{{$produto->id}}" action="{{route('produto.destroy', ['produto' => $produto->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <!-- <button type="submit">Excuir</button> -->
                                            <a href="#" onClick="document.getElementById('form_{{$produto->id}}').submit()">Excluir</a>
                                        </form>
                                    </td>
                                    
                                </tr>
                                    
                                @endforeach                            

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