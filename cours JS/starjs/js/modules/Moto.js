import Vehicule from './Vehicule';



export default class Moto extends Vehicule{
    display() {
        return `Moto - ${super.display()}`;
    }
}