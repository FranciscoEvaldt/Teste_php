<?php
$usuarios = json_decode(file_get_contents('usuarios.json'), true);
$id = $_POST['id'];

$usuarios = array_filter($usuarios, fn($u) => $u['id'] != $id);

file_put_contents('usuarios.json', json_encode(array_values($usuarios), JSON_PRETTY_PRINT));
