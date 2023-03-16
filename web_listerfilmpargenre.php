<?php
$pdo = new PDO("sqlite:streaming.sqlite");

$stm2=$pdo->query("select film.* from film 
    join film_genre fg 
    on film.id = fg.film_id
    where fg.genre_id =:genreSelect");

$stm2->bindvalue('genreSelect',$_GET["idgenresel"]);
$stm2->execute();
$films= $stm2->fetchAll();
//var_dump ($films);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Liste des films du genre selectionné :
    <br>
    <?php
    foreach ($films as $film){
        echo $film["titre"];?>
        <br>
    <?php }
    ?>
</body>
</html>
