@extends('layout')

@section('content')
    <h2>Editar Usuário</h2>

    <!-- Formulário de edição -->
    <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" value="{{ $usuario->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $usuario->email }}" required>
        </div>

        <button class="btn btn-primary">Atualizar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection