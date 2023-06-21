<?php

// On demande à l'utilisateur d'entrer l'âge

echo "Entrer l'âge : ";
$age = trim(fgets(STDIN));
echo "Entrer le sexe (homme ou femme) : ";
$sexe = trim(fgets(STDIN));

if ($sexe == "h" && $age>20) 
  {
    echo "paie les impots";
  }
elseif (($age >18 && $age <35)  && ($sexe == "f" )) 
{
    echo "paie les impots";
}
else
  {
      echo "les autres ne paient pas";
  }



?>










