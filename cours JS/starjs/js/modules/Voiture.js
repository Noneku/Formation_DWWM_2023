import Vehicule from './Vehicule';



export default class Voiture extends Vehicule{
    constructor(marque, modele, kilometrage, annee, clim) {
        super(marque, modele, kilometrage, annee);
        this.clim = clim;
    }
    display() {
        return `Voiture - ${super.display()} - ${this.clim ? "oui" : "non"}`;
    }
}