import Personne from "./Personne.js";

// Classe Etudiant
export default class Etudiant extends Personne {
    constructor(prenom, nom, specialite) {
        super(prenom, nom);
        this.specialite = specialite;
        this.notes = {};
    }

    ajouterNote(matiere, note) {
        this.note[matiere] = note;
    }

    moyenne() {
        let moyenne = 0;
        let i = 0;
        for (let matiere in this.notes) {
            i++;
            // console.log(this.notes[matiere]);
            moyenne += this.notes[matiere];
            // console.log(moyenne);
        }
        // console.table(this.notes);
        return moyenne = moyenne / i;
    }

    display() {
        console.log(`L'étudiant s'appelle ${this.nom} ${this.prenom} et sa spécialité est ${this.specialite}`);
        for (let matiere in this.notes) {
            console.log(`${matiere} : ${this.note[matiere]}`);
        }
        console.log("La moyenne est de " + this.moyenne());
    }
}