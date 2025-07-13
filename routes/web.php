<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

// Rota inicial redireciona para a listagem de usuários
Route::get('/', fn() => redirect('/usuarios'));

// Define todas as rotas CRUD com um único comando (index, create, store, edit, update, destroy, show)
Route::resource('usuarios', UsuarioController::class);