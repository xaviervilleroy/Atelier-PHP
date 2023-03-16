<?php
$pdo = new PDO('sqlite:streaming.sqlite');
$stm = $pdo->query('SELECT * FROM genre ORDER BY nom');
$genres = $stm->fetchAll();
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

    <div>Sélectionnez un genre :</div>

    <?php
        foreach ($genres as $genre){
    ?>
    <a href="web-db-lister-films-par-genre.php?idDuGenre=<?php echo $genre['id'] ?>"><?php echo $genre['nom']; ?></a>
    <br>
            <?php
        }
    ?>
</body>
</html>
