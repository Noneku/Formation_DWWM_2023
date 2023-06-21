<?PHP


 // Ecrire un algorithme qui demande trois noms à l'utilisateur et l'informe ensuit s'ils sont rangés ou non dans l'ordre alphabétique

// Demande à l'utilisateur de saisir trois noms
$nom1 = readline("Entrez le premier nom : ");
$nom2 = readline("Entrez le deuxième nom : ");
$nom3 = readline("Entrez le troisième nom : ");

// Vérifie si les noms sont rangés dans l'ordre alphabétique
if ($nom1 < $nom2 && $nom2 < $nom3) {
    echo "Les noms sont rangés dans l'ordre alphabétique.";
} 

else {
    echo "Les noms ne sont pas rangés dans l'ordre alphabétiqu";
}


?>