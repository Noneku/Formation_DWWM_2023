<?php

/*

à partir des variables `$roues` `$pedales` et `$moteur`, identifiez le type de véhicule

les types de véhicules possibles sont :

* autre
* mobilette (2 roues, pédales, moteur)
* moto ou  scooter (2 roues, pas de pédales, moteur)
* scooter trois roues (3 roues, pas de pédales, moteur)
* voiture (4 roues, pas de pédales, moteur)


* vélo (2 roues, pédales, pas de moteur)
* trottinette ou drésienne (2 roues, pas de pédales, pas de moteur)
* tricycle (3 roues, pédales, pas de moteur)
* rosalie (4 roues, pédales, pas de moteur)

vous devez utiliser les opérateurs booléens `&&` et `!`
l'opérateur booléen `||` n'est pas nécessaire

*/

require '../code/lib.php';

list($roues, $pedales, $moteur) = get_random_vehicle();

echo "roues: $roues\n";
echo "pedales: " . boolean_to_string($pedales) . "\n";
echo "moteur: " . boolean_to_string($moteur) . "\n";



if ($moteur) {
    if ($roues = 2 && $pedales) {
        echo "Mobilette";
    } else if ($roues = 3 && !$pedales) {
        echo "Moto ou scooter";
    } else {
        echo "Voiture";
    }
} else {
    if ($roues = 2 && $pedales) {
        echo "Vélo";
    } else if ($roues = 2 && !$pedales) {
        echo "trottinette ou drésienne";
    } else if ($roues = 3) {
        echo "tricycle";
    } else if ($roues = 4) {
        echo "Rosalie";
    } else {
        echo "Autre";
    }
}



// if ($moteur) {
//     if ($roues = 2) {
//         if ($pedales) {
//             echo "Mobilette";
//         } else {
//             echo "Moto ou scooter";
//         }
//     } else if ($roues = 3) {
//         echo "Scooter ou trois roues";
//     } else {
//         echo "Voiture";
//     }
// } else {
//     if ($roues = 2) {
//         if ($pedales) {
//             echo "Vélo";
//         } else {
//             echo "trottinette ou drésienne";
//         }
//     } else if ($roues = 3) {
//         echo "tricycle";
//     } else {
//         echo "Rosalie";
//     }
// }
