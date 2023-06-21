<?php

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

résultat attendu :
vous êtes sur la page d'accueil

*/

$page = 'home';

switch ($page) {
    case 'about':
        echo 'vous êtes sur la page « à propos »';
        
    
case 'contact':
    echo 'vous êtes sur la page « contact »';
    
 case 'home' :
    echo 'vous êtes sur la page d\'accueil';
    ;
 default :
    echo 'page non trouvée :(';
    
}

