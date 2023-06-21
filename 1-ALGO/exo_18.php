
// Ecrire un algorithme qui demande l'âge d'un enfant à l'utilisateur.Ensuite, il informe de sa catégorie: 
// "Poussin" de 6 à 7 ans 
// "Pupille" de 8 à 9 ans 
// "Minime" de 10 à 11 ans 
// "Cadet" après 12 ans 

<?php
// Demande l'âge de l'enfant à l'utilisateur
$age = readline("Entrez l'âge de l'enfant : ");

// Vérifie la catégorie en fonction de l'âge
if ($age >= 6 && $age <= 7) {
    
   
$categorie = "Poussin";
} 

elseif ($age >= 8 && $age <= 9) {
      
$categorie = "Pupille";
} 

elseif ($age >= 10 && $age <= 11) {
     
$categorie = "Minime";
} 

elseif ($age >= 12) {
    
$categorie = "Cadet";
} 

else {
     
$categorie = "Catégorie non définie";
}

// Affiche la catégorie correspondante
echo "L'enfant est dans la catégorie : " . $categorie;

?>