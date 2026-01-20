<?php
$usuarios = json_decode(file_get_contents('usuarios.json'), true);

if (isset($_GET['id'])) {
    foreach ($usuarios as $u) {
        if ($u['id'] == $_GET['id']) {
            echo json_encode($u);
            exit;
        }
    }
}

echo json_encode($usuarios);
