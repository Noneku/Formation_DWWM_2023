import Personne from './Personne.class.js';
import Etudiant from './Etudiant.class.js';
import Professeur from './Professeur.class.js';

let etudiant = new Etudiant("Paul", "LeBouillon", 12.5);
let professeur = new Professeur("Robert", "LaLouche", ["Français", "Espagnol", "SVT"]);

//Display all class

let etudiant1 = new Etudiant("Nassim", "Gacem");
let professeur1 = new Professeur("David", "Wils", ["SVT", "Anglais"]);

const nombreAleatoire = Math.floor(Math.random() * 21);

etudiant1.setNotes("français", nombreAleatoire);
etudiant1.setNotes("anglais", nombreAleatoire);
etudiant1.setNotes("math", nombreAleatoire);
etudiant1.setNotes("svt", nombreAleatoire);
etudiant1.setNotes("espagnol", nombreAleatoire);



console.log(etudiant1.display());


