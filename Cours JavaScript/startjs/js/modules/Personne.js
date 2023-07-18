// Classe Personne
export default class Personne {
    constructor(prenom, nom) {
        this.prenom = prenom;
        this.nom = nom;
    }

    display() {
        return `${this.nom} - ${this.prenom}`;
    }
}