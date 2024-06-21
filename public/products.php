<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Initialisation de Twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

// Ajouter l'extension 'dump'
$twig->addExtension(new \Twig\Extension\DebugExtension());

// Initialisation du tableau de produits
$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];


// Add global variables
$author = 'Hélène BLANCHE';
$contactEmail = 'helene-blanche_student2023@wilder.school';
$twig->addGlobal('author', $author);
$twig->addGlobal('mail', $contactEmail);

// Appel du template Twig et passage du tableau de produits
echo $twig->render('products.html.twig', [
    'products' => $products,
    'link2' => '/index.php' // Assuming your home page is index.php
]);

