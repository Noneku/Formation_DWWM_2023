import Personne from './Personne.js'



export default class Etudiant extends Personne{
    constructor(prenom, nom,  specialite, notes) {
        super(nom, prenom);
        this.specialite = specialite;
        this.noteste = notes;
    }

    moyenne(notes) {
        let resultat = 0;
        let length = 0;
        for (const key in notes) {
            length++;
            resultat += notes[key];
        }
        return resultat/length
    }
    display() {
        return `Etudiant - ${super.display()} - Specialité : ${this.specialite} - Moyenne : ${this.moyenne(this.notes)}`;
    }
}

