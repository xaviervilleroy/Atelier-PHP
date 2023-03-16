<?php

# cf : https://twig.symfony.com/doc/3.x/api.html

require_once 'vendor/autoload.php';

use Twig\Loader\FilesystemLoader;

# Initialise twig
$loader = new FilesystemLoader('vues');
$twig = new \Twig\Environment( $loader, [] );

# Liste genres
$pdo = new PDO('sqlite:streaming.sqlite');
$stm = $pdo->query('SELECT * FROM genre ORDER BY nom');
$genres = $stm->fetchAll(PDO::FETCH_OBJ);

# Rendu vue ( en lui passant les genres )
echo $twig->render('liste_genres.html', ['mesGenres'=>$genres]);