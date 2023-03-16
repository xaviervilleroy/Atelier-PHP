<?php

# cf : https://twig.symfony.com/doc/3.x/api.html

require_once 'vendor/autoload.php';

# Initialise twig
$loader = new \Twig\Loader\FilesystemLoader('vues');
$twig = new \Twig\Environment( $loader, [] );
$pdo = new PDO("sqlite:streaming.sqlite");

if (isset($_POST['nom']))
{
    //var_dump($_POST);
    $statement =$pdo->prepare("insert into genre (nom) values (:NOM);");
    $statement->bindvalue('NOM',$_POST['nom']);
    $statement->execute();

    header('Location:twig-controller_liste_genres.php');
    exit;
}

# Rendu vue
echo $twig->render('gestion_genres/ajouter.html');

# Liste genres

$stm = $pdo->query('SELECT * FROM genre ORDER BY nom');
$genres = $stm->fetchAll(PDO::FETCH_OBJ);

# Rendu vue ( en lui passant les genres )
echo $twig->render('liste_genres.html', ['mesGenres'=>$genres]);