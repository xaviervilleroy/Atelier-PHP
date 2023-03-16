<?php

function calcexp(int $a, int $e) : int {
    $result = $a;
    for ($i = 1; $i < $e; $i++) {
        $result *= $a;
    }
    return $result;
}

function echorc (string $prompt) : void {
    echo $prompt . "\n\r";
}


function convertiTableauPuissance(&$tabs, $exp) {
    for($i=0;$i<count($tabs); $i++ ) {
        $tabs[$i]=calcexp ($tabs[$i], $exp);
    }
}

$tabs=[2,3,4];

convertiTableauPuissance($tabs,2);

foreach($tabs as $result) {
    echorc ($result);
}