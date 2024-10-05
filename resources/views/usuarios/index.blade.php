@extends('layouts.app')

@section('title', 'Listagem de Usuários')

@section('content')

    <div class="container my-5">
        <h1 class="text-center mb-4" style="color: #343a40;">Lista de Usuários</h1>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Cargo</th>
                        <th class="text-center">Escolaridade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td class="text-center">{{ $usuario->nome }}</td>
                            <td class="text-center">{{ $usuario->cargo }}</td>
                            <td class="text-center">{{ $usuario->escolaridade }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-center my-4">
            <a href="{{ route('usuarios.create') }}" 
               class="btn btn-primary btn-lg" style="padding: 12px 25px; border-radius: 5px;">
                Cadastrar Novo Usuário
            </a>
        </div>
    </div>

@endsection
