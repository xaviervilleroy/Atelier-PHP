<?php

$mots = ['moteur', 'batterie', 'guitare', 'ordi', 'musique'];

$mots = array_map(function ($elt) {
    return strtoupper($elt);
}, $mots);

var_dump($mots);

$paysPop = [
    ['pays' => 'chine', 'pop' => 1400],
    ['pays' => 'france', 'pop' => 70],
    ['pays' => 'belgique', 'pop' => 10],
    ['pays' => 'russie', 'pop' => 250],
    ['pays' => 'allemagne', 'pop' => 100],
];

echo 'avant tri pop :' . json_encode($paysPop) . "\n";

usort($paysPop, function ($elt1, $elt2) {
    //return  $elt1['pop']<$elt2['pop'];
    if ($elt1['pop'] < $elt2['pop']) {
        return 1;
    } elseif ($elt1['pop'] == $elt2['pop']) {
        return 0;
    } else return -1;

});

echo 'après tri pop :' . json_encode($paysPop) . "\n";

$paysPop = array_filter($paysPop, function ($paysPop) {
    return $paysPop['pop'] >= 100;
    //return (($paysPop['pop']>=100)?true:false);
});

echo 'après filtre > 100 :' . json_encode($paysPop) . "\n";

usort($paysPop, function ($elt1, $elt2) {
    //return  (strcmp($elt1['pays'],$elt2['pays'])?-1:1);
    return strcmp($elt1['pays'], $elt2['pays']);
});

echo 'après filtre > 100 et tri par nom pays :' . json_encode($paysPop) . "\n";