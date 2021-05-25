<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once __DIR__ . '/vendor/autoload.php';

//caricamento engine
$loader = new FilesystemLoader(__DIR__ . '/templates/');
$twig = new Environment($loader, [
    //    'cache' => __DIR__ . '/templates_c', //cache template compilati
    'cache' => false,
]);

//caricamento template
$template = $twig->load('index.html.twig');

//LOGICA
$users = [
    ['name' => 'Chiara Cerrone', 'email' => 'chiara@cerrone.it'],
    ['name' => 'Lorenzo Leccese', 'email' => 'lorenzo@leccese.it'],
];
//variabili template
$vars = [
    'page_title' => 'Demo Twig - Stage Netsons',
    'users'      => $users
];

echo $template->render($vars);

