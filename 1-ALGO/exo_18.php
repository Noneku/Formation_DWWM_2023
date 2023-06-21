
<?PHP


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



?>