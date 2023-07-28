// si je souhaite utiliser une classe extérieur à ce fichier, j'utilise l'import
import Personne from "./Personne.js";


export default class Professeur extends Personne{
    constructor(nom, prenom, matieres){
        // super permet de récupérer le constructeur de son parent
        super(nom, prenom);
        this.matieres = matieres;
    }

    display(){
        // super dans ce cas là permet de récupérer la méthode display de son parent
        return `Prof - ${super.display()} - matière - ${this.matieres}`
    }
}