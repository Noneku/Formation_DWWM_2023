/*
exercice classes : créer une classe personne avec prenom, nom
une classe Etudiant avec un attribut spécialité et un tableau associatif  : notes (français, anglais, math, SVT, Espagnol) 
une classe Professeur avec attribut un tableau de matières (un prof peut enseigner plusieurs matières)
la classe Personne dispose d'un display qui décrit le nom et le prenom, en héritant, les 2 classes filles affichent leur propre display : ( Etudiant - Paul LeBouillon - moyenne : 12.5) (Prof - Robert LaLouche - matières : Français, Espagnol, SVT)

1/ Créez 2 étudiants et 2 professeurs
2/ Affichez les display des 4 objets
3/ Donnez la moyenne générale pour chaque matière 
4/ Donnez des mentions pour chaque élèves  :    12 < Assez bien < 14 <  bien < 16 < Très bien
5/ Jetez un oeil à Math.random() , attribuez les notes de façon aléatoire sur 20, chaque matière de chaque élèves disposera d'une note aléatoire*/

import Etudiant from "./modules/Etudiant.js";
import Professeur from "./modules/Professeur.js";

// 1/ et 2/
let etudiant1 = new Etudiant("Cordier", "Emilie", "Litérature",
    {
        français: 12,
        anglais: 15,
        math: 8,
        espagnol: 11,
        SVT: 16
    });
let etudiant2 = new Etudiant("Lefrèvre", "Jean", "Sciences",
    {
        français: 11,
        anglais: 8,
        math: 18,
        espagnol: 19,
        SVT: 20
    });

console.log(etudiant1.display());
console.log(etudiant2.display());

let prof1 = new Professeur("Landier", "Hubert", ["Math", "SVT"]);
let prof2 = new Professeur("Lardon", "Martine", ["Français", "Anglais"]);

console.log(prof1.display());
console.log(prof2.display());

let eleves = [etudiant1, etudiant2];


const moyenneMatiere = (eleves, matiere) => {
    let moyenne = 0;
    let length = 0
    eleves.map(eleve => {
        length++
        moyenne += eleve.notes[matiere];
    })
    return moyenne/length
}

const matieres = ["français", "anglais", "math", "espagnol" , "SVT"]

matieres.map(matiere => {
    console.log(`Matière : ${matiere} moyenne générale : ${moyenneMatiere(eleves,matiere)}`)
})

const mention = (eleve) => {
    const moyenneEleve = eleve.moyenne(eleve.notes);
    if(moyenneEleve < 12 ){
        return eleve.display() + " pas de mention";
    }else if (moyenneEleve < 14){
        return eleve.display() + " mention : assez bien";
    }else if (moyenneEleve < 16){
        return eleve.display() + " mention : bien";
    }else{
        return eleve.display() + " mention : très bien";
    }
}

console.log(mention(etudiant1));
console.log(mention(etudiant2));

const getNote = () =>{
    return Number((Math.random()*20).toFixed(2));
}

let etudiant3 = new Etudiant("Lagarde","Kévin","Général",
{
    français: getNote(),
    anglais: getNote(),
    math: getNote(),
    espagnol: getNote(),
    SVT: getNote()
});

console.log(mention(etudiant3));
