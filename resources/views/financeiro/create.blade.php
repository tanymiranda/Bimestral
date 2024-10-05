@extends('layouts.app')

@section('title', 'Cadastrar Nova Conta')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4" style="color: #343a40;">Cadastrar Nova Conta</h1>

        <div class="d-flex justify-content-center">
            <form action="{{ route('financeiro.store') }}" method="POST" style="width: 400px;">
                @csrf
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" required>
                </div>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="number" class="form-control" id="valor" name="valor" required>
                </div>
                <div class="form-group">
                    <label for="tipo">Selecione as opções:</label>
                    <select class="form-control" id="tipo" name="tipo" required>
                        <option value="A pagar">A pagar</option>
                        <option value="A receber">A receber</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-block mt-4">
                    Cadastrar
                </button>
            </form>
        </div>
    </div>
@endsection
