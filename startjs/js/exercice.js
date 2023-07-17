/*******************************************************
 *                  Burger Maker
 *******************************************************/

var burger = ["Pain", "Cheddar", "Steak Haché (halal ou pas)", "Bacon", "Sauce Burger", "Cornichon", "Salade", "Tomate", "Oignon"];

// 1) rendre le burger Hallal : enlever le bacon
// 2) rendre le burger végétarien : enlever le steak puis remplacer par une rondelle de champignon
// 3) Les oignons font pleurer, enlevez les !
// 4) rendre le burger vegan : enlever le fromage
// 5) personnalisez un peu
// chaque étapes doivent etre accompagner d'un console.log() décrivant l'action effectué puis un console.table() pour la nouvelle compsoition

// // 1) rendre le burger Hallal : enlever le bacon
// console.log("enlever le bacon");
// burger.splice(3,1);
// console.log(burger);

// // 2) rendre le burger végétarien : enlever le steak puis remplacer par une rondelle de champignon
// console.log("enlever le steak puis remplacer par une rondelle de champignon");
// burger[2]="rondellle de Champignon";
// console.log(burger);

// // 3) Les oignons font pleurer, enlevez les !
// console.log("enlevez les oignons font pleurer");
// burger.pop();
// console.log(burger);

// // 4) rendre le burger vegan : enlever le fromage
// console.log("enlever le fromage");
// burger.splice(1,1);
// console.log(burger);

// // 5) personnalisez un peu
// console.log("personnalisez un peu");
// burger.splice(1,1,"comté");
// burger[2]="steack haché";
// console.table(burger);
/*Exercice 
1/creer un tableau à 2 dimension contenant 3 personnes
2/affichez dans la console la concatenation du nom prenom, age*/

/*faux*/
// var prenom=["sarah", "marie", "julien", "françois"];
// var nom=["martin","gilbert", "robert", "marie"];
// var age=["22", "23", "24", "25"];
// var personne=[prenom,nom,age];
// console.table(personne);
// console.log(personne[0][1]+" "+personne[1][1]+" "+personne[2][1]+" ans");
// var Marie=["gilbert","Marie",30];
// var Sylvie=["gilbert","Sylvie",30];
// var Julie=["gilbert","Julie",30];
// var triple=[Marie,Sylvie,Julie];
// console.table(triple);
// console.log(triple[1][0]+" "+triple[1][1]+" "+triple[1][2]+" ans");
/*
Exercice
1/ Ecrire une fonction permettant d'effectuer le calcul du perimetre
Indice : l'équivalent de l'instruction Retourner vue en Algo est l'instruction return en JS

2/ Demander à l'utilisateur de saisir la longueur et la largeur

3/ Appeler la fonction précédemment créée avec les valeurs saisies par l'utilisateur

4/ Afficher le résultat dans la console
*/
// var longueur;
// var largeur;
// longueur=Number(prompt("Entrez la longueur"));
// largeur=Number(prompt("Entrez la largeur"));
// function perimetre(longueur,largeur){
//     return (longueur+largeur)*2;
// }

// console.log(perimetre(longueur,largeur));

/* Exercice
 * 
 * Nous disposons de deux variables email et mdp contenant respectivement l'email et le mot de passe pour accéder à un espace sécurisé
 */
var email = "contact@dwwm.fr";
var mdp = "dem1Cferie";

/**
 * 1/ Demander à l'utilisateur de saisir un email et un mot de passe
 * 2/ Vérifier que l'email est identique à la variable email
 * 3/ Vérifier que le mot de passe est identique à la variable mdp
 * 4/ Si OK alors on affiche un message de bienvenue
 * 5/ Sinon on indique à l'utilisateur l'information incorrecte
 */
// var email2 =prompt("Entrez votre email");
// var mdp2 =prompt("Entrez votre mot de passe");

// if (email==email2 && mdp===mdp2) {
//     console.log("bienvenue");
    
// } else {
//     console.log("invalide");
    
// }
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
// 2/ affichez Palpatine
// 3/ affichez les infos de Luke
// 4/ trouvez uniquement les Sith
// 5/ les dates de naissances et de mort sont des nombres, les nombres négatifs sont des dates sont avant la bataille de Yavin, Calculez l'age à leur mort, Attention un personnage n'a pas de date de décés: envoyez "encore en vie"
const listepersonnage = characters.map(function(character){
    return character.nom;
})
console.log(listepersonnage);

const Palpatine =characters.find(function(character){
    return character.nom.includes("Palpatine");
})
console.log(Palpatine);


const Luke =characters.find(function(character){
    return character.nom.includes("Luke Skywalker");
}).infos;
console.log(Luke);







const sith = characters.filter(function(character){
    return character.affiliation.includes("Sith");
});
console.log(sith);







const age = characters.map(function(character){
    
    if (character.infos.deces==null){

    return "encore en vie"; 
}else{
        return character.infos.deces-character.infos.naissance;
    }
})
console.log(age);