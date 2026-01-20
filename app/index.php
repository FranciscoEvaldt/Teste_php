<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD Usuários</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<h1>Gerenciamento de Usuários</h1>

<button id="novo">Novo Usuário</button>

<table id="tabela">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<h2 id="titulo-form">Cadastrar Usuário</h2>

<form id="form">
    <input type="hidden" id="id">

    <input type="text" id="nome" placeholder="Nome" required>
    <input type="email" id="email" placeholder="E-mail" required>
    <input type="text" id="telefone" placeholder="Telefone" required>

    <button type="submit">Salvar</button>
</form>

<script src="js/script.js"></script>
</body>
</html>
