<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', fn() => redirect('/usuarios'));
Route::resource('usuarios', UsuarioController::class);

