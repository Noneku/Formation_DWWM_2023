export default class Personne {

    constructor(prenom, nom){
        this.prenom = prenom;
        this.nom = nom;
    }

    display(){
        return `Prénom : ${this.prenom}, Nom : ${this.nom}`;
    }
}