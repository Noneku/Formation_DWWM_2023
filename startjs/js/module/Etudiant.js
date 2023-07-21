<<<<<<< HEAD
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
=======
import Personne from "./Personne.class.js";

export default class Etudiant extends Personne {

    moyenne = 0;

    mention = "";
    
    specialite = {
        notes : {
            "français" : [],
            "anglais" : [],
            "math" : [],
            "svt" : [],
            "espagnol" : []
        }
    }


    constructor(nom, prenom){
        super(nom, prenom);
    }

    display(){
        return `Nom : ${this.nom}, Prenom : ${this.prenom}, Moyenne : ${this.getMoyenne()}, Mention : ${this.getMention()}`;
    }

    setNotes(matiere, note){
        this.specialite.notes[matiere] = note;
    }

    getMoyenne(){
        
        let arrayNotes = this.specialite["notes"];
        //Content number of iteration in my array : Represent the numbers of notes
        let nbrNotes = 0;
        //Sum of all notes
        let sum = 0;

            for (const [key, value] of Object.entries(arrayNotes)) {

                nbrNotes++;

                sum += value;
            }

            let moyenne = (sum / nbrNotes);

         return this.moyenne = moyenne;
    }

    getMention(){
        if(this.getMoyenne() >= 12 && this.getMoyenne() <= 14){
            return this.mention = "Assez Bien";
        }else if (this.getMoyenne() > 14){
            return this.mention = "Trés Bien";
        }else{
            return this.mention = "Continuer a creuser vous trouverez du pétrole";
        }
    }

}
>>>>>>> 1472f091f8c5435bcf11b400866325bfc399a5d5
