// export / default est necessaire si je veux utliser ma classe dans un autre fichier//

export default class Personne{
    constructor(prenom , nom){
        this.prenom = prenom;
        this.nom = nom;
 
    }

    display(){
        return `${this.prenom} - ${this.nom}`
    }
}