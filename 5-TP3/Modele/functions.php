<?php

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{
 
    $date = new DateTime();
    $dateNow = $date->format("Y-m-d His");
    echo $dateNow;

    file_put_contents("Modele/sauvegardes/save_students_$dateNow.txt", $studentList);   
}

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function loadStudentsFromFile(string $pathFile) {   //--ENLEVER LARRAY 
   

 // Vérifier si le fichier existe
 //if (file_exists($pathFile)) {
    // Lire le contenu du fichier
    $pathFile = file_get_contents($pathFile);
    
    // Convertir le contenu en tableau de lignes
    $studentList = explode("\n", $pathFile);
    
        foreach($studentList as $line){
            //Réecriture
          $tab[] = $line;   
}
 
// tableau associative
$myKeys = array ("Place_1","Place_2","Place_3","Place_4" ,"Place_5","Place_6","Place_7","Place_8","Place_9","Place_10","Place_11","Place_12","Place_13","Place_14","Place_15","Place_16");

//print_r($studentList);
//print_r($myKeys);
$c= array_combine($myKeys,$studentList);

//print_r($c);

return $c; 

}


/*sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList): void {
  
    //remplacement des espacements par ";"
    $studentList = str_replace(' ',';', $studentList);
   
    //sauvegarde au format csv
    $date = new DateTime();
    $dateNow = $date->format("Y-m-d His");
    echo $dateNow;
    file_put_contents("Modele/sauvegardes/save_students_$dateNow.csv", $studentList);
   }*/


//sauvegarde de la liste des students au format json 
function saveToJsonFile(array $studentList): void {
    // Conversion en JSON
    $json = json_encode($studentList);
    
    if ($json === false) {
        // Gestion de l'erreur de conversion JSON
        throw new Exception('Erreur lors de la conversion en JSON');
    }
    
    // Génération du nom de fichier
    $date = new DateTime();
    $dateNow = $date->format("Y-m-d_His");
    $filename = "../Modele/sauvegardes/save_students_$dateNow.json";
    
    // Sauvegarde du fichier JSON
    file_put_contents($filename, $json);
}

 
 /* Sauvegarde du fichier JSON
 file_put_contents($filename, $json);
}*/




/*en en entrée un tableau associatif de stagiaire [K,V], en sorti un tableau associatif
avec les values mélangé.
ex :
["Place_1" => "MOUACI Leila"]
["Place_2" => "DEWEIRELD Nicolas"] 
["Place_3" => "BOUCHER Alex"] 
["Place_4" => "M'HMEMDI Quentin"] 
["Place_5" => "ADJAL Karim"] 
["Place_6" => "BELAHCEN Aimane"] 
["Place_7" => "GIRARD Fabien"] 
["Place_8" => "LE PEUCH Loick"] 
["Place_9" => "BALLOY Julien"] 
["Place_10" => "DELOURME Amaury"] 
["Place_11" => "AZAAOUAJ Younes"] 
["Place_12" => "SAHLI Asaad"] 
["Place_13" => "SAYARATH Alissa"] 
["Place_14" => "LYAGOUBI Mohamed"] 
["Place_15" => "OLIVIER Quentin"]
["Place_16" => "GACEM Nassim"]
*/
function shufflePositions(array $studentList ): array {

    $values = array_values($studentList); // Obtenir les valeurs de la liste
    shuffle($values); // Mélanger les valeurs
    $keys = array_keys($studentList); // Obtenir les clés d'origine
    $studentList = array_combine($keys, $values); // Combinez les clés et les valeurs mélangées
   
    //shuffle($studentList);
    return $studentList;

//if (isset($_POST['shuffleButton'])) {
    // Le bouton a été cliqué
    // Vous pouvez appeler la fonction shufflePositions ici
   // $studentList = shufflePositions($studentList);
}

?>