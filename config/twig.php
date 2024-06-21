<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load Twig
$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');

$twig = new Twig\Environment($loader, ['debug' => true, 'cache' => false]);
$twig->addExtension(new Twig\Extension\DebugExtension());



// Add global variables
$author = 'Hélène BLANCHE';
$contactEmail = 'helene-blanche_student2023@wilder.school';
$twig->addGlobal('author', $author);
$twig->addGlobal('mail', $contactEmail);

