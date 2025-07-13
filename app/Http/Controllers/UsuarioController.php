<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // Lista todos os usuários cadastrados
    public function index()
    {
        $usuarios = Usuario::all(); // Busca todos os registros
        return view('usuarios.index', compact('usuarios')); // Envia para a view
    }

    // Mostra o formulário para criar um novo usuário
    public function create()
    {
        return view('usuarios.create');
    }

    // Armazena um novo usuário no banco de dados
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:usuarios',
            'senha' => 'required'
        ]);

        // Cria o usuário no banco, criptografando a senha
        Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => bcrypt($request->senha)
        ]);

        return redirect()->route('usuarios.index'); // Redireciona para a lista
    }

    // Mostra o formulário para editar um usuário
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    // Atualiza os dados de um usuário existente
    public function update(Request $request, Usuario $usuario)
    {
        // Valida os dados recebidos
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email'
        ]);

        // Atualiza os dados do usuário
        $usuario->update([
            'nome' => $request->nome,
            'email' => $request->email
            // senha não é atualizada aqui, pode ser feito em outro formulário se necessário
        ]);

        return redirect()->route('usuarios.index');
    }

    // Exclui um usuário do banco
    public function destroy(Usuario $usuario)
    {
        $usuario->delete(); // Remove o registro
        return redirect()->route('usuarios.index');
    }
}
