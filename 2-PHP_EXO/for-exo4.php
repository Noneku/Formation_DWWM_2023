<?php
for ($i = 0; $i <= 100; $i++) {

    $reste_des_dizaines = $i % 10;
    $reste_des_centaines = ($i - $reste_des_dizaines) % 100;

    // @dev
    // echo $reste_des_centaines;
    // echo PHP_EOL;
    // echo $reste_des_dizaines;
    // echo PHP_EOL;

    $unite = '';
    $dizaine = '';
    $liaison_dizaine = '';

    if ($reste_des_dizaines == 0) {
        $unite = '';
    } else if ($reste_des_dizaines == 1) {
        $unite = 'un';
    } else if ($reste_des_dizaines == 2) {
        $unite = 'deux';
    } else if ($reste_des_dizaines == 3) {
        $unite = 'trois';
    } else if ($reste_des_dizaines == 4) {
        $unite = 'quatre';
    } else if ($reste_des_dizaines == 5) {
        $unite = 'cinq';
    } else if ($reste_des_dizaines == 6) {
        $unite = 'six';
    } else if ($reste_des_dizaines == 7) {
        $unite = 'sept';
    } else if ($reste_des_dizaines == 8) {
        $unite = 'huit';
    } else if ($reste_des_dizaines == 9) {
        $unite = 'neuf';
    }

    if ($reste_des_centaines == 0) {
        $dizaine = '';
    } else if ($reste_des_centaines == 10) {
        $dizaine = 'dix';
    } else if ($reste_des_centaines == 20) {
        $dizaine = 'vingt';
    } else if ($reste_des_centaines == 30) {
        $dizaine = 'trente';
    } else if ($reste_des_centaines == 40) {
        $dizaine = 'quarante';
    } else if ($reste_des_centaines == 50) {
        $dizaine = 'cinquante';
    } else if ($reste_des_centaines == 60) {
        $dizaine = 'soixante';
    } else if ($reste_des_centaines == 70) {
        $dizaine = 'soixante-dix';
    } else if ($reste_des_centaines == 80) {
        $dizaine = 'quatre vingt';
    } else if ($reste_des_centaines == 90) {
        $dizaine = 'quatre vingt-dix';
    }

    if ($i == 0) {
        $nombre = 'zéro';
    } else if ($i == 100) {
        $nombre = 'cent';
    } else if ($reste_des_dizaines == 0) {
        $nombre = $dizaine;
    } else if ($reste_des_dizaines == 1 && $reste_des_centaines != 80) {
        $liaison_dizaine = '-et-';
        $nombre = $dizaine . $liaison_dizaine . $unite;
    } else {
        $liaison_dizaine = '-';
        $nombre = $dizaine . $liaison_dizaine . $unite;
    }

    // exceptions 10+
    if ($i == 11) {
        $nombre = 'onze';
    } else if ($i == 12) {
        $nombre = 'douze';
    } else if ($i == 13) {
        $nombre = 'treize';
    } else if ($i == 14) {
        $nombre = 'quatorze';
    } else if ($i == 15) {
        $nombre = 'quinze';
    } else if ($i == 16) {
        $nombre = 'seize';
    }

    // exceptions 70+
    if ($i == 71) {
        $nombre = 'soixante-et-onze';
    } else if ($i == 72) {
        $nombre = 'soixante-douze';
    } else if ($i == 73) {
        $nombre = 'soixante-treize';
    } else if ($i == 74) {
        $nombre = 'soixante-quatorze';
    } else if ($i == 75) {
        $nombre = 'soixante-quinze';
    } else if ($i == 76) {
        $nombre = 'soixante-seize';
    } else if ($i == 77) {
        $nombre = 'soixante-dix-sept';
    } else if ($i == 78) {
        $nombre = 'soixante-dix-huit';
    } else if ($i == 79) {
        $nombre = 'soixante-dix-neuf';
    }

    // exceptions 90+
    // @todo il manque 91, 92, 93, 94, 95, 96, 97, 98, 99, inspirez vous du bloc "exceptions 70+" et complétez le code

    if ($i == 91) {
        $nombre = 'quatre-vingt-onze';
    } else if ($i == 92) {
        $nombre = 'quatre-vingt-douze';
    } else if ($i == 93) {
        $nombre = 'quatre-vingt-treize';
    } else if ($i == 94) {
        $nombre = 'quatre-vingt-quatorze';
    } else if ($i == 95) {
        $nombre = 'quatre-vingt-quinze';
    } else if ($i == 96) {
        $nombre = 'quatre-vingt-seize';
    } else if ($i == 97) {
        $nombre = 'quatre-vingt-dix-sept';
    } else if ($i == 98) {
        $nombre = 'quatre-vingt-dix-huit';
    } else if ($i == 99) {
        $nombre = 'quatre-vingt-dix-neuf';
    }

    echo "$i : $nombre";
    echo PHP_EOL;
}
