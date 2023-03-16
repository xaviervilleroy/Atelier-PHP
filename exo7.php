<?php

$personnes=[];

do {
    $op = readline('A pour ajouter une personne, ' . "\n\r" . 'B pour rechercher une personne, ' . "\n\r" . 'C pour afficher toutes les personnes, ' . "\n\r" . 'Q pour quitter.' . "\n\r");

    switch ($op) {
        case "A" :
            $personnes[] = readline ('Entrez le nom de la nouvelle personne : ');
            break;
        case "B" :
            //var_dump(array_search(readline('Entrez le nom de la personne recherchée : '), $personnes));
            if  (array_search(readline('Entrez le nom de la personne recherchée : '), $personnes) !== false) {
                echorc ('la personne existe dans le tableau.');
            } else {
                echorc( 'La personne n a pas été retrouvée dans le tableau.');
            }
            break;
        case "C" :
            foreach ($personnes as $t){
                echorc ($t);
            }
            break;
        default :
            echorc ('Choix invalide');
            break;
    }

 } while ($op!= 'Q');

function echorc (string $prompt) : void {
 echo $prompt . "\n\r";
}