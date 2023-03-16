<?php

$a = (double) readline ('nb dec : ');

$result = $a;
while ( $a>1 ) {
    $result *= --$a;
}

echo 'Le résultat est : ' . $result;
