<?php

$tab2nb = explode(',', readline('saisir 2 nb'));
//var_dump($tab2nb);
if ($tab2nb[0] == $tab2nb[1]) {
    echo $tab2nb[0] . '=' . $tab2nb[1];
} elseif ($tab2nb[0] > $tab2nb[1]) {
    echo $tab2nb[0] . '>' . $tab2nb[1];
} else {
    echo $tab2nb[0] . '<' . $tab2nb[1];
}