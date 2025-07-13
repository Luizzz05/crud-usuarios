
# 📋 CRUD de Usuários com Laravel 12

Este projeto é uma aplicação web simples desenvolvida com Laravel 12 para realizar o CRUD (Criar, Ler, Atualizar e Deletar) de usuários com interface visual. O foco é demonstrar domínio de rotas, controllers, migrations, views (Blade) e banco de dados MySQL.

---

## 🎯 Objetivo

Permitir o cadastro e gerenciamento completo de usuários (nome, e-mail e senha) com um front-end funcional utilizando HTML + Bootstrap, e back-end com PHP (Laravel) e MySQL.

---

## 🧪 COMO TESTAR O PROJETO

Siga os passos abaixo para instalar e testar a aplicação localmente:

Dica: Utilize o Terminal do laragon, foi nele que fiz meu projeto e a partir dele que criei o tutorial

---

### 🔧 1. PRÉ-REQUISITOS

- PHP 8.1 ou superior
- Composer
- MySQL ou MariaDB (recomendado: Laragon, XAMPP ou WAMP)
- Navegador Web (ex: Chrome)
- Editor de código (ex: VSCode)

---

### 📦 2. INSTALAÇÃO DO PROJETO

Abra o terminal e digite:

```bash
git clone https://github.com/Luizzz05/crud-usuarios.git
cd crud-usuarios
composer install
```

---

### 🛠️ 3. CONFIGURAÇÃO DO ARQUIVO `.env`

1. Copie o arquivo `.env.example` para `.env`:

```bash
cp .env.example .env
```

2. Gere a chave da aplicação:

```bash
php artisan key:generate
```

3. Edite o arquivo `.env` com as credenciais do seu banco de dados:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_db
DB_USERNAME=root
DB_PASSWORD=
```

> ⚠️ Crie o banco `crud_db` no MySQL **antes de prosseguir** (Utilizei o Laragon).

---

### 🗃️ 4. CRIAÇÃO DAS TABELAS

Execute as migrations:

```bash
php artisan migrate
```

---

### 🖥️ 5. INICIAR O SERVIDOR

Rode o projeto:

```bash
php artisan serve
```

Acesse no navegador:

```
http://localhost:8000/usuarios
```

---

## ✅ FUNCIONALIDADES PARA TESTE

### 🔹 1. Criar Usuário

- Clique em **"Adicionar Usuário"**.
- Preencha nome, e-mail e senha.
- Clique em **"Salvar"**.

✅ O usuário será salvo no banco de dados.

---

### 🔹 2. Visualizar Usuários

- Na página inicial (`/usuarios`), veja a **lista de todos os usuários cadastrados**.

---

### 🔹 3. Editar Usuário

- Clique no botão **"Editar"** ao lado de um usuário.
- Altere os dados e clique em **"Salvar"**.

✅ Os dados serão atualizados no banco.

---

### 🔹 4. Excluir Usuário

- Clique no botão **"Excluir"** ao lado de um usuário.

✅ O registro será removido definitivamente da tabela.

---

## 💡 OBSERVAÇÕES IMPORTANTES

- Senhas são armazenadas com `bcrypt` (criptografadas).
- Todas as funcionalidades têm **interface HTML com Bootstrap**.
- Código limpo, com comentários explicativos.
- Estrutura MVC completa: Model, Controller, View.

---

## 📁 ESTRUTURA DE DIRETÓRIOS

```
resources/views/
├── layout.blade.php
└── usuarios/
    ├── index.blade.php
    ├── create.blade.php
    └── edit.blade.php
```

---

## 👨‍🎓 DADOS DO ALUNO

- **Nome:** Luiz Felipe Da Silva Santos 
- **Curso:** Análise e desenvolvimento de sistemas
- **Disciplina:** Programação WEB II  
- **Ano/Semestre:** 2025/2  
<<<<<<< HEAD
- **Instituição:** Unitins
=======
- **Instituição:** Unitins
>>>>>>> 63e393d4a6d2dac637cbbf71b77b469edef0ab9d
