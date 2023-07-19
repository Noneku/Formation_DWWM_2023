export default class Etudiant {
  constructor(nom, prenom, specialite) {
    this.nom = nom;
    this.prenom = prenom;
    this.specialite = specialite;
    this.notes = {};
  }

  ajouterNote(matiere, note) {
    this.notes[matiere] = note;
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
    return (moyenne = moyenne / i);
  }

  display() {
    console.log(
      `Les notes de l'étudiant ${this.nom} ${this.prenom} de la spécialité ${this.specialite} sont :`
    );
    for (let matiere in this.notes) {
      console.log(`${matiere}: ${this.notes[matiere]}`);
    }

    console.log("La moyenne est de " + this.moyenne());


    switch (true) {

      case this.moyenne() > 12:
        console.log("Mention : Assez bien");
        break;

      case this.moyenne()> 14:
        console.log("Mention : Bien");
        break;

      case this.moyenne() > 16:
        console.log("Mention : Très bien");
        break;

      default:
            console.log("Mention : Pas de mention");
    }
  }
}

/*4/ Donnez des mentions pour chaque élèves  :    12 < Assez bien < 14 <  bien < 16 < Très bien*/

