@extends('layouts.app')

@section('title', 'Cadastrar Novo Usuário')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4" style="color: #343a40;">Cadastrar Novo Usuário</h1>

        <div class="d-flex justify-content-center">
            <form action="{{ route('usuarios.store') }}" method="POST" class="shadow p-4 rounded" style="width: 400px;">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control" id="cargo" name="cargo" required>
                </div>
                <div class="form-group">
                    <label for="escolaridade">Escolaridade</label>
                    <select class="form-control" id="escolaridade" name="escolaridade" required>
                        <option value="Médio">Médio</option>
                        <option value="Técnico">Técnico</option>
                        <option value="Superior">Superior</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-block mt-3">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
