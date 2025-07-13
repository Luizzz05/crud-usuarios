<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos com mass assignment
    protected $fillable = ['nome', 'email', 'senha'];

    // Esconde o campo senha quando o objeto for convertido para JSON
    protected $hidden = ['senha'];
}