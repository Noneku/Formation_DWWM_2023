 <?php

// Demande à l'utilisateur d'entrer un nombre de départ
$nombreDepart = readline("Entrez un nombre de départ: ");

// Affiche les dix nombres suivants
// 1- condition initiale 
// 2- condition nécéssaire
// 3- opération à effectuer 
for ($i = $nombreDepart + 1; $i <= $nombreDepart + 10; $i++) 
{
    echo $i ." ";
}  

// ou 

$a = readline("Donner un nombre : ");

// Instruction

for ($i = 1; $i <= 10; $i++) {
    echo ++$a  . " ";
}

?>