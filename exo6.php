<?php

$a = (double) readline ('nb dec : ');
$e = (int) readline ('exp B : ');
//$result = pow($a, $b);

$result = $a;
for ($i=1; $i< $e;$i++) {
    $result *= $a;
}

echo 'Le résultat est : ' . $result;
