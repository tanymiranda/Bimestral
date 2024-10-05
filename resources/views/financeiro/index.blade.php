@extends('layouts.app')

@section('title', 'Listagem Financeira')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4" style="color: #343a40;">Lista dos Cadastros</h1>

        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive mt-4">
            <table class="table table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Descrição</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($financeiros as $financeiro)
                        <tr>
                            <td>{{ $financeiro->descricao }}</td>
                            <td>R$ {{ number_format($financeiro->valor, 2, ',', '.') }}</td>
                            <td>{{ $financeiro->tipo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('financeiro.create') }}" class="btn btn-primary btn-lg">
                Cadastrar
            </a>
        </div>
    </div>
@endsection
