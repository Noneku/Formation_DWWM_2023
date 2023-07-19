import Personne from "./Personne.js";

export default class Professeur extends Personne {
    constructor(prenom , nom, matieres = []) {
        super(nom , prenom);
    this.prenom = prenom
      this.nom = nom;
      this.matieres = matieres;
    }


display(){
    console.log(` Prof - ${this.nom} ${this.prenom} - matières : `);
    this.matieres.forEach((matiere, index) => {
      console.log(`${index + 1}. ${matiere}`);
    });
  }

}