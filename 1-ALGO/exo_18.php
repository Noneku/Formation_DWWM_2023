<?php


/*Consigne Ecrire un algo qui demande l'âge d'un enfant à l'utlisateur. Ensuite, il informe de sa catégorie : 
    Poussin de 6 à 7ans
    Pupille de 8 à 9ans
    Minime de 10 à 11ans
    Cadet après 12 ans

    */
    



//Declaration

$age = readline("Saisir l'age de l'enfant : ");

//Instructions
switch($age){
    case $age < 6:
        echo "Votre enfant n'as pas l'âge requis pour commencer la pratique";
        break;
    case $age < 8:
        echo "Votre enfant est dans la catégorie Poussin";
        break;
    case $age < 10:
        echo "Votre enfant est en catégorie Pupille";
        break;
    case $age <= 12:
        echo "Votre enfant est dans la catégorie Minime";
        break;
    case $age > 12:
        echo "Votre enfant est dans la catégorie Cadet";
        break;

        default;
}





?>