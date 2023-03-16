<?php


main {
    $tab2nb = explode(',', readline_terminal('saisir 2 nb séparé par une virgule : ' . "\n"));
    var_dump($tab2nb);

    $op = readline_terminal('saisir  A pour Addition ou B pour Soustraction: ' . "\n");

    if ($op == 'A') {
        echo $tab2nb[0] + $tab2nb[1];
    } elseif ($op == 'B') {
        echo $tab2nb[0] - $tab2nb[1];
    } else {
        echo 'Opérateur inconnu.';
    }
}

function readline_terminal($prompt = '') {
    $prompt && print $prompt;
    $terminal_device = '/dev/tty';
    $h = fopen($terminal_device, 'r');
    if ($h === false) {
        #throw new RuntimeException("Failed to open terminal device $terminal_device");
        return false; # probably not running in a terminal.
    }
    $line = rtrim(fgets($h),"\r\n");
    fclose($h);
    return $line;
}