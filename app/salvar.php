<?php
$usuarios = json_decode(file_get_contents('usuarios.json'), true);

$id = $_POST['id'];
$dados = [
    'nome' => $_POST['nome'],
    'email' => $_POST['email'],
    'telefone' => $_POST['telefone']
];

if ($id) {
    foreach ($usuarios as &$u) {
        if ($u['id'] == $id) {
            $u = array_merge($u, $dados);
            break;
        }
    }
} else {
    $usuarios[] = array_merge(['id' => uniqid()], $dados);
}

file_put_contents('usuarios.json', json_encode($usuarios, JSON_PRETTY_PRINT));
