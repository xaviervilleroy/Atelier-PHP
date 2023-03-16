<?php



$pdo = new PDO("sqlite:streaming.sqlite");

//$pdo->exec("insert into genre (nom) values ('genretoto');");
//$statement=$pdo->query("select id from genre where nom = 'genretoto';");
//echo $statement->fetchall();

$statement=$pdo->prepare("select id from genre where nom = :genrerech");
$statement->bindvalue('genrerech',readline('quel genre ?'));
$statement->execute();
var_dump ($statement->fetchall());


