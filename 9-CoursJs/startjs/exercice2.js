/*************************************************************************************
 *                           Character manager
 *************************************************************************************/

const characters = [
    {
        nom : "Anakin Skywalker alias Darth Vader ",
        affiliation : "Sith",
        grade : "Seigneur",
        infos :{
            origine : "Tatooine",
            naissance : -41,
            deces : 4
        }
    },
    {
        nom : "Luke Skywalker",
        affiliation : "Jedi",
        grade : "Maitre",
        infos :{
            origine : "Polis Massa",
            naissance : -19,
            deces : 34
        }
    },
    {
        nom : "Sheev Palpatine alias Darth Sidious",
        affiliation : "Sith",
        grade : "Seigneur",
        infos :{
            origine : "Naboo",
            naissance : -84,
            deces : 35
        }
    },
    {
        nom : "Jar Jar Binks",
        affiliation : "République galactiques",
        grade : "Sénateur",
        infos :{
            origine : "Naboo",
            naissance : -52
        }
    }
]

// 1/ affichez tous les nom des personnages

let listPersonnages = characters.map((character) => character);

console.log(listPersonnages);
// 2/ affichez Palpatine

console.log("Palpatine");
let Palpatine = characters.find((character) => character.nom.includes("Palpatine"));

console.log(Palpatine);
// 3/ affichez les infos de Luke
console.log("Luke");
let Luke = characters.find((character) => character.nom.includes("Luke")).infos;

console.log(Luke);

// 4/ trouvez uniquement les Sith
let listSith = characters.filter((character) => character.affiliation.includes("Sith"));

console.log(listSith);

// 5/ les dates de naissances et de mort sont des nombres, les nombres négatifs sont des dates sont avant la bataille de Yavin, Calculez l'age à leur mort, 
// Attention un personnage n'a pas de date de décés: envoyez "encore en vie"

console.log("Liste des morts");

let deadList = characters.map((character) => {
    if(character.infos.deces !== undefined){
        return "Cette personne est morte à " + (character.infos.deces - character.infos.naissance) + " ans qui porté le nom de " + character.nom;
    }else {
       return character.nom + " est en vie";
    }

});

console.log(deadList);

