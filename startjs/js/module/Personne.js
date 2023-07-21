
export default class Personne{

    constructor(nom,prenom){
        this.nom = nom;
        this.prenom = prenom;
    }
    display(){
        return `${this.nom} ${this.prenom}`;
    }
}