<?php
function fctaffichemaj (?string...$mots) : void {
    foreach ($mots as $mt) {
        echorc (strtoupper($mt));
    }
}
function echorc (string $prompt) : void {
    echo $prompt . "\n\r";
}

//$tabmots = explode(',', readline('saisir des mots séparés par une virgule : ' . "\n"));

fctaffichemaj('mot1', 'mot2','mot3');



