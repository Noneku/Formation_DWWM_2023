<?php

include_once "filiere.class.php";
include_once "etudiant.class.php";

$etu1 = new Etudiant("nomé", "prhen", "01/02/2000", 1, "Français");
$etu2 = new Etudiant("nomé", "preen", "01/02/2000", 2, "Anglais");
$etu3 = new Etudiant("nomé", "prjen", "01/02/2000", 2, "Anglais");
$etu4 = new Etudiant("nomé", "precn", "01/02/2000", 3, "Math");
$etu5 = new Etudiant("nomé", "prean", "01/02/2000", 3, "Math");

// $nbEtu = 5;
// for ($i = 1; $i <= $nbEtu; $i++) {
//     ${"etu" . $i} = new Etudiant(
//         $Nom = readline("Nom: "),
//         $Prenom = readline("Prenom: "),
//         "01/02/2000",
//         $code = readline("Code: "),
//         $libele = readline("libele: ")
//     );
// }

for ($i = 1; $i <= 5; $i++) {
    $temp = ${"etu" . $i};
    switch ($temp->getCode()) {
        case 1:
            $Francais[] = $temp;
            break;

        case 2:
            $Anglais[] = $temp;
            break;

        case 3:
            $Math[] = $temp;
            break;
    }
}

echo "Français: ";
echo "\n";
echo $Francais[0];
echo "\n";
echo "Anglais: ";
echo "\n";
echo $Anglais[0];
echo $Anglais[1];
echo "Math: ";
echo "\n";
echo $Math[0];
echo $Math[1];
