<?php

    require('models/Model.php');
    require('models/Usuario.php');

    $nome = $_POST['nome'] ?? false;
    $email = $_POST['email'] ?? false;
    $user = $_POST['user'] ?? false;
    $pass = $_POST['pass'] ?? false;
    $admin = $_POST['admin'] ?? false;
    $ativo = $_POST['ativo'] ?? false;

    if (!$nome || !$email || !$user || !$pass) {
        header('location:novo_usuario.php');
        die;
    }

    $pass = password_hash($pass, PASSWORD_BCRYPT);

    $usr = new Usuario();
    $usr->create([
        'nome' => $nome,
        'email' => $email,
        'username' => $user,
        'senha' => $pass,
        'admin' => $admin,
        'ativo' => 1,
    ]);

    header('location:usuarios.php');

