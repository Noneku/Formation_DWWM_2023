import Personne from "./Personne.js";

export default class Professeur extends Personne {

    constructor(nom, prenom,matiere=[]) {
        super(nom, prenom);
        this.matiere=matiere;
    }
    
    display() {
        return `Professeur-${super.display()}`;
    }
}