<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$name = 'Wilder';
$link1 = '/products.php';
$link2 = '/index.php';

echo $twig->render('home.html.twig', [
    'name' => $name,
    'link1' => $link1,
    'link2' => $link2
]);
