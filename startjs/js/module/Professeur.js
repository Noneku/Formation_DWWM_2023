import Personne from "./Personne.class.js"

export default class Professeur extends Personne{

    matieres = [
        "français",
        "anglais",
        "math",
        "svt",
        "espagnol"
    ]

    constructor(nom, prenom, matieres){
        super(nom, prenom);

        this.matieres = matieres;
    }

    display(){
        return `Nom : ${this.nom}, Prenom : ${this.prenom}, Matière : ${this.matieres}`;
    }
}