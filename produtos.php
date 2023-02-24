<?php

require('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

$template = $twig-> load('produtos.html');

$produtos = [
    [
        'nome' => 'Chinelo',
        'preco' => 30,
    ],
    [
        'nome' => 'Camiseta',
        'preco' => 50,
    ],
    [
        'nome' => 'Boné',
        'preco' => 39.9
    ],
    [
        'nome' => 'Carro',
        'preco' => 35000
    ],
];

echo $template->render([
    'título' => 'Produtos',
    //'produtos' => $produtos,
    'produtos' => null,
]);