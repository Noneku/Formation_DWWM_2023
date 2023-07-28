
// export default est nécessaire si je veux utiliser ma classe dans un autre fichier
export default class Personne{
    constructor(nom, prenom){
        this.nom = nom;
        this.prenom = prenom;
    }

    display(){
        return `${this.prenom} ${this.nom}`;
    }
}
