<?php
include '../Functions/filiere.php';
include '../Functions/etudiant.php';

// Demander à l'utilisateur combien d'étudiant il veut rentrer et dans quel filière
// Tant que la filière rentrer n'est pas bonne il redemandera 
$nb = readline("Combien d'étudiant voulez vous entrez : ");
$fil = readline("Dans quel Filière voulez vous les rentrez : ");
while ($fil != 'Sport Business' && 'Event et Communication' && 'Mode Luxe et Design') {
    $fil = readline("Dans quel Filière voulez vous les rentrez : ");  
}

// Tableau qui prennent la filière en question
$sb = array();
$ec = array();
$mld = array();
 
// Boucle pour dire que quand nous n'avons pas atteint le nombre demander par l'utilisateur alors il continuera a demander de rentrer les saisie
for ($i=0; $i <$nb ; $i++) { 
    $nom = readline("Entre un Nom de Famille :");
    $prenom = readline("Entre un Prenom : ");
    $dateNaissance = readline("Entre une Date de Naissance : ");
    ${'etudiant'.$i} = new Etudiant($nom, $prenom, $dateNaissance);
    // Si la filière demandait est sport business alors les étudiant rentreront dans le tableau sport business
   if ($fil == 'Sport Business') {
        $sb[] = ${'etudiant'.$i};
        var_dump($sb);
    }
    // Si la filière demandait est Event et Communication alors les étudiant rentreront dans le tableau Event et communication
    if ($fil == 'Event et Communication') {
        $ec[] = ${'etudiant'.$i};
        var_dump($ec);
    }
    // Si la filière demandait est Mode luxe et Design alors les étudiant rentreront dans le tableau Mode luxe et design
    if ($fil == 'Mode Luxe et Design') {
        $mld[] = ${'etudiant'.$i};
        var_dump($mld);
    }
    
   
}



//  if ($fil = 1) {
//         $filiere = new Filiere('SB', 'Sport Business', $tab);
//         var_dump($filiere);
//     } if ($fil = 'Event et Communication') {
//          $filiere1 = new Filiere('EC', 'Event et Communication', $tab);
//         var_dump($filiere1);
//     } if ($fil = 'Mode Luxe et Design') {
//         $filiere2 = new Filiere('MLD', 'Mode Luxe et Design', $tab);
//         var_dump($filiere2);
//     } else {
//         echo "Cette Filière n'existe pas";
//     }
// ?>