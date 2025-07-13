<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // Chave primária auto-incremento
            $table->string('nome'); // Nome do usuário
            $table->string('email')->unique(); // Email único
            $table->string('senha'); // Senha criptografada
            $table->timestamps(); // created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};

