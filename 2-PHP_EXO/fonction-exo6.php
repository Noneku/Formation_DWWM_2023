<?php
function adresse($numero, $rue, $code_postal, $ville) {
    return $numero . ', ' . $rue . ', ' . $code_postal . ', ' . $ville;
}

echo adresse(123, 'Rue de la République', 75001, 'Paris'); 
