@extends('layout')

@section('content')
    <h2>Novo Usuário</h2>

    <!-- Formulário para criação -->
    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf
        <div class="mb-3">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" class="form-control" required>
        </div>

        <!-- Botões -->
        <button class="btn btn-primary">Salvar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection