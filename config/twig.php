<?php

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());

//On ajoute la globale mail à l'initialisation de l'objet Twig
$contactEmail = 'none.of@your.biz';
$twig->addGlobal('contactEmail', $contactEmail);
