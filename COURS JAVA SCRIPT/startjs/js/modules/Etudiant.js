import Personne from "./Personne.js";


export default class Etudiant extends Personne{
    constructor(nom, prenom, specialite, notes){
        super(nom, prenom);
        this.specialite = specialite;
        this.notes = notes;
    }

    moyenne(notes){
        let resultat = 0;
        let length = 0
        for (const key in notes) {
            length++;
            resultat += notes[key];
        }
        return resultat/length;
    }

    display(){
        return `Etudiant - ${super.display()} - specialité : ${this.specialite} - moyenne : ${this.moyenne(this.notes)}`
    }
}