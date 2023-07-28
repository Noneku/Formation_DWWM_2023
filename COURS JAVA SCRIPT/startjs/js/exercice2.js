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
console.log(characters.map(character => character.nom));
// 2/ affichez Palpatine
const palpatine = characters.find(character => character.nom.includes("Palpatine"));
console.log(palpatine);
// 3/ affichez les infos de Luke
console.log(characters.find(character => character.nom.includes("Luke")).infos)
// 4/ trouvez uniquement les Sith
console.log(characters.filter(character => character.affiliation == "Sith"));
// 5/ les dates de naissances et de mort sont des nombres, les nombres négatifs sont des dates sont avant la bataille de Yavin, Calculez l'age à leur mort, Attention un personnage n'a pas de date de décés: envoyez "encore en vie"
const ageCharacters = characters.map(character => {
    if(character.infos.deces){
        return character.infos.deces - character.infos.naissance
    }else{
        return "encore en vie"
    }
})

console.log(characters.map(character => character.infos.deces ? character.infos.deces- character.infos.naissance : "encore en vie"));



