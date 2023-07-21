import Personne from './Personne.js';

export default class Etudiant extends Personne{
    constructor(nom, prenom,specilaité)
    {
        super(nom, prenom);
        this.specilaité = specilaité;
        this.notes = [];
    }
    ajouterNote(matiere,note){
        this.notes[matiere] = note;
    }

Moyenne(){
    let moyenne = 0;
    let i=0;
    for(let matiere in this.notes){
        moyenne += this.notes[matiere];
        i++;
    }

    return moyenne=moyenne/i;
}

        display(){
            console.log (`Etudiant-${super.display()} ${this.Moyenne()}`);

            switch (true) {
                case this.Moyenne()>12:
                    console.log("assez bien");
                    break;
                    case this.Moyenne()>14:
                    console.log("bien");
                    break;
                    case this.Moyenne()>16:
                    console.log("trés bien");
                    break;
            
                default:
                    console.log("pas de mention");
                    break;
            }
        }
}
