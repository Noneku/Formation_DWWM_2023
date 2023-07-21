// Burger Maker


var burger = ["Pain", "Cheddar", "Steak Haché(halal) ou pas)", "Bacon", "Sauce burger", "Cornichon", "Salade", "tomate", "Oignon"]

//1) rendre le burger Hallal : enlever le bacon
//2) rendre le burger végétarien : enlever le steak puis remplacer par une rondelle de champignon
//3) Les oignons font pleurer, enlever les !
//4) rendre le burger vegan : enlever le fromage
//5) personnalisez un peu
// chaque étapes doivent être accompagner d'un console.log décrivantt l'action effectué puis un console.table()

console.log("Voici le burger de base")
console.table(burger);
//1)
burger.splice(3, 1);
console.log("On enleve le bacon")
console.table(burger);
//2)
burger.splice(2, 1, "rondelle de champignon");
console.log("on met une rondelle de champignon à la place du steak")
console.table(burger);
//3)
burger.pop();
console.log("on retire less oignons")
console.table(burger);
//4)
burger.splice(1, 1);
console.log("on retire le fromage")
console.table(burger);
//5)
burger.splice(3, 0, "tenders");
burger.splice(1, 0, "cheddar");
burger.splice(2, 1, "galette de pomme de terre")
burger.push("sauce burger", "pain");
burger.splice(1, 0, "sauce burger");
console.log("Personnalisation du burger");
burger.splice(4, 1);
console.table(burger);


/*************************************************************************************
 *                           Character manager
 *************************************************************************************/

const characters = [
    {
        nom: "Anakin Skywalker alias Darth Vader ",
        affiliation: "Sith",
        grade: "Seigneur",
        infos: {
            origine: "Tatooine",
            naissance: -41,
            deces: 4
        }
    },
    {
        nom: "Luke Skywalker",
        affiliation: "Jedi",
        grade: "Maitre",
        infos: {
            origine: "Polis Massa",
            naissance: -19,
            deces: 34
        }
    },
    {
        nom: "Sheev Palpatine alias Darth Sidious",
        affiliation: "Sith",
        grade: "Seigneur",
        infos: {
            origine: "Naboo",
            naissance: -84,
            deces: 35
        }
    },
    {
        nom: "Jar Jar Binks",
        affiliation: "République galactiques",
        grade: "Sénateur",
        infos: {
            origine: "Naboo",
            naissance: -52
        }
    }
];

// 1/ affichez tous les nom des personnages
// 2/ affichez Palpatine
// 3/ affichez les infos de Luke
// 4/ trouvez uniquement les Sith
// 5/ les dates de naissances et de mort sont des nombres, les nombres négatifs sont des dates sont avant la bataille de Yavin, Calculez l'age à leur mort, Attention un personnage n'a pas de date de décés: envoyez "encore en vie"

//1.

const listStarWars = characters.map(function (character) {
    return character.nom;
})

console.log(listStarWars);

// 2/ affichez Palpatine
const palpatine = characters.find(function (character) {
    return character.nom.includes("Palpatine");
});
console.log(palpatine);

// 3/ affichez les infos de Luke
const luke = characters.find(function (character) {
    return character.nom.includes("Luke");
}).infos;
console.log(luke);

console.log(characters.find(character => character.nom.includes("Luke")).infos)

// 4/ trouvez uniquement les Sith

const sith = characters.filter(function (sith) {
    return sith.affiliation.includes("Sith");
});
console.log(sith);

console.log(characters.filter(character => character.affiliation == "Sith"));

// 5/ les dates de naissances et de mort sont des nombres,
//les nombres négatifs sont des dates sont avant la bataille de Yavin,
//Calculez l'age à leur mort, Attention un personnage n'a pas de date de décés: envoyez "encore en vie"

const age = characters.map(function (character) {
    if (character.infos.deces == null) {
        return "Still alive"
    } else {
        return character.infos.deces - character.infos.naissance;
        
}
});

console.log(age);

const ageCharacters = characters.map(character => {
    if (character.infos.deces){
        return character.infos.deces - character.infos.naissance
}else {
    return "Still Alive";
    }
})

console.log(ageCharacters);

console.log(characters.map(character => character.infos.deces ? character.infos.deces - character.infos.naissance : "Still alive"));

