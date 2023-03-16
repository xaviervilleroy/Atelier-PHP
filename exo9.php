<?php


    $a = (double)readline('nb dec : ');
    $e = (int)readline('exp B : ');

    echorc ('Le résultat est : ' . calcexp($a, $e));

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