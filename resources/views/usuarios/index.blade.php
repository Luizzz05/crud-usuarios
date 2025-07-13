@extends('layout')

@section('content')
    <h2>Lista de Usuários</h2>

    <!-- Botão para criar novo usuário -->
    <a href="{{ route('usuarios.create') }}" class="btn btn-success mb-3">Novo Usuário</a>

    <!-- Tabela com os usuários -->
    <table class="table table-bordered">
        <thead>
            <tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>
                        <!-- Link para editar -->
                        <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-warning btn-sm">Editar</a>

                        <!-- Formulário para excluir -->
                        <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Excluir este usuário?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection