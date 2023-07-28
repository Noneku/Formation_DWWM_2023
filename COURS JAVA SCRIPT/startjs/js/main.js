import Voiture from "./modules/Voiture.js";
import Moto from "./modules/Moto.js";
// commentaire d'une ligne

/*
Commentaire en bloc
*/

/*******************************************************************
 *                         Les variables
 *******************************************************************/

// Déclarer une variable
var prenom;

// Affecter une valeur à notre variable
prenom = "David";

// Afficher la valeur de la variable dans la console
console.log(prenom);

// les types de variables
// On ne définit pas de type à la déclaration mais il y a quand même un type (variable auto typé)
console.log(typeof (prenom));

// déclarer et affecter sur une même ligne
var age = 99;
console.log(typeof (age));

// Concaténation de chaînes (se fait avec l'opérateur +)

// Mini exo : créer une concaténation pour afficher la console la phrase suivante : 
// Bonjour, je m'appelle Jean et j'ai XX ans
console.log("Bonjour, je m'appelle " + prenom + " et j'ai " + age + " ans");

/*******************************************************************
 *             Les opérateurs arithmétiques
 *******************************************************************/

var nb1 = 10, nb2 = 5, resultat;

// L'addition
resultat = nb1 + nb2;
console.log(resultat);

// La soustration
resultat = nb1 - nb2;
console.log(resultat);

// La multiplication
resultat = nb1 * nb2;
console.log(resultat);

// La division
resultat = nb1 / nb2;
console.log(resultat);

// Le modulo
resultat = nb1 % nb2;
console.log(resultat);

// Les écritures simplifiés
nb1 = nb1 + 5;
// peut s'écrire plus simplement comme ci-dessous :
nb1 += 5;
// Ceci marche pour tout les opérateurs précédents

/*******************************************************************
 *                Incrémentation et Décrémentation
 *******************************************************************/
// Incrémentation
nb1 = nb1 + 1;
// peut etre simplifié par
nb1 += 1;
//mais encore mieux
nb1++;

// Décrémentation
nb1 = nb1 - 1;
// peut etre simplifié par
nb1 -= 1;
//mais encore mieux
nb1--;

nb1 = 1;
console.log("nb1 :", nb1);
console.log(nb1++); // affiche la valeur de nb1 avant l'incrémentation
console.log("nb1 :", nb1);

console.log("nb1 :", nb1);
console.log(++nb1); // effectue l'incrémentation puis affiche nb1
console.log("nb1 :", nb1);

/*******************************************************************
 *                Les tableaux (numériques)
 *******************************************************************/

// Déclaration d'un tableau numérique (2 façons de faire)
var monTableau = [];
var monTableau2 = new Array();

// Affecter des valeurs à un tableau numérique
monTableau[0] = "Pomme"; //on affecte une valeur à la case en position 0 du tableau
monTableau[1] = "Poire";
monTableau[2] = "Ananas";

// Afficher des valeurs d'un tableau
console.table(monTableau);
console.log(monTableau[0]);

// Déclarer et Affecter en même temps un tableu numérique
var legumes = ["Carotte", "Chou", "Navet"];

// Réaffecter une valeur à une case du tableau
console.log(legumes[2]);
legumes[2] = "Tomate";
console.log(legumes[2]);

// Récuperer la taille d'un tableau
console.log(legumes.length);

// Ajouter un élément au tableau
legumes.push("Poireau"); // Ajoute 1 élément à la fin
legumes.push("Courgette", "Potiron", "Aubergine");

//Retirer un élément du tableau
// la méthode pop() va enlever le dernier élément du tableau
legumes.pop(); // retirer l'Aubergine

// La méthode shift va enlever le premier élément du tableau
legumes.shift(); // Retire la Carotte

// La méthode unshift qui va ajouter un élément au début du tableau
legumes.unshift("Avocat");

// La méthode splice() va nous permettre de retirer un ou plusieurs éléments d'un tableau à une position donnée
// tableau.splice(positionDeDémarrage , nbASupprimer)
console.table(legumes);
legumes.splice(2, 2); // On retire la tomate et le Poireau

// Nous pouvons ajouter des éléménts à une position donnée avec la méthode splice()
legumes.splice(1, 0, "Cornichon");
console.table(legumes);

/*******************************************************************
 *                Les tableaux associatifs
 *******************************************************************/

var personne = {
    nom: "Le Peuch",
    prenom: "Loïck",
    age: 20
}

console.table(personne);
// dot notation
console.log(personne.prenom);
// bracket notation
console.log(personne["nom"]);
// Je peux préparer ma clé avant avec la bracket notation
var unAge = "age";
console.log(personne[unAge]);

/*******************************************************************
 *                Les tableaux à 2 dimensions
 *******************************************************************/

var prenoms = ["Mohamed", "Quentin", "Nassim"];
var noms = new Array("Lyagoubi", "M'Hmemdi", "Gacem");

// à partir de ces 2 tableaux numériques nous allons créer un tableau à 2 dimmensions
var annuaire = new Array(prenoms, noms);
console.table(annuaire)

console.log(annuaire[0][1]); // Affiche le prénom Quentin

console.log(annuaire[0][1] + " " + annuaire[1][0]); // affiche le prénom de Quentin avec le nom de Mohamed

/* 
Exercice 
1/ Créer un Tableau à 2 dimmensions contenant 3 personnes
chaque personnes est représenté par son prénom, son nom et son age.

2/ Affichez dans la console la concaténation du nom et du prénom de la 2eme personne
*/

annuaire = [
    {
        nom: "Balloy",
        prenom: "Julien",
        age: 15
    },
    {
        nom: "Sahli",
        prenom: "Asaad",
        age: 16
    },
    {
        nom: "Delourme",
        prenom: "Amaury",
        age: 17
    },
]

console.log(annuaire[1].prenom + " " + annuaire[1]["nom"]);

console.table(annuaire);

// Afficher une alerte à l'utilisateur
// alert("Coucou toi !");

// Demander une saisie à l'utilisateur
// prenom = prompt("Quel est ton prénom ?");
// console.log(prenom);
// Attention si la valeur n'est pas stocké dans une variable, la valeur sera perdu

/*******************************************************************
 *                          Les fonctions
 *******************************************************************/

// Lorsque les parenthèses d'une fonction sont vides cela signifie q'ellle ne prend pas de paramètre
function hello() {
    // Lors de l'appel à la fonction hello les instructions ci-dessous sont exécutés
    alert("Hello World !");
}

// Appel de la fonction
// hello();

function bonjour(prenom) {
    alert("Bonjour " + prenom)
}

// bonjour(prenom);

/*
Exercice
1/ Ecrire une fonction permettant d'effectuer le calcul du perimetre
Indice : l'équivalent de l'instruction Retourner vue en Algo est l'instruction return en JS

2/ Demander à l'utilisateur de saisir la longueur et la largeur

3/ Appeler la fonction précédemment créée avec les valeurs saisies par l'utilisateur

4/ Afficher le résultat dans la console
*/
// 1
function perimetre(longueur, largeur) {
    // resultat est une variable locale, elle n'existe que dans la fonction perimetre
    var resultat = (longueur + largeur) * 2

    return resultat;
}

//console.log(perimetre(10, 5));

// 2
// var long = Number(prompt("Saisir une longueur"));
// var larg = Number(prompt("Saisir une largeur"));
// console.log(typeof(long)); // Attention le prompt retourne une chaine même pour les nombres ! Solution --> Number() ou parseInt() pour tranformer une chaine en nombre

// // 3 & 4
// var result = perimetre(long, larg);
// console.log(result);

/*******************************************************************
 *                          les conditions
 *******************************************************************/

// age = Number(prompt("Saisir un age"));

// if (age >= 18) {
//     alert("Bienvenue sur le site, tu es majeur !");
// } else {
//     alert("tu n'es pas majeur ! ciao!");

//     // Redirection vers Google
//     window.location = "http://google.fr";
// }

/* Opérateurs de comparaison

    == signifie égal à
    Il permet de vérifier que la valeur de 2 variables sont identiques

    === signifie strictement égal à
    Il permet de vérifier que la valeur de 2 variables sont identiques ainsi que leur type

    != signifie différent de
    il permet de vérifier que la valeur de 2 variables sont différentes

    !== signifie strictement différent de
    Il va vérifier si la valeur OU le type sont différent

    Exemples

    1 == 1 --> Vrai
    "1" == 1 --> Vrai
    1 != 2 --> Vrai
    1 != "1" --> Faux
    3 === 3 --> Vrai
    3 != "3" --> Faux
    3 !== "3" --> Vrai
    4 !== 3 --> Vrai
*/

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

//1
// var userEmail = prompt("Saisir votre email");
// var userPwd = prompt("Saisir votre mot de passe");

// // 2
// if (userEmail == email) {
//     // 3
//     if (userPwd == mdp) {
//         // 4 
//         alert("Bienvenue sur notre espace sécurisé");
//     } else {
//         // 5
//         alert("Mot de passe incorrect");
//     }
// } else {
//     alert("Email non reconnu");
// }

// opérateurs logiques

// L'opérateur ET : &&

// Exemple on peut vérifier le mail et le mot de passe en même temps
// if (userEmail == email && userPwd == mdp) {
//     alert("Bienvenue sur notre espace sécurisé");
// } else {
//     alert("Email non reconnu ou Mot de passe incorrect");
// }

// L'opérateur OU : ||
// Exemple : Tester si un nombre est inférieur à 1 ou supérieur à 3
var nb = 5;
if (nb < 1 || nb > 3) {
    console.log("Le nombre n'est pas compris entre 1 et 3");
    // La condition sera remplie si l'une des 2 conditions est vraie
}

// L'opérateur NON / CONTRAIRE DE : !
var pause = true;
if (!pause) {
    console.log("Ce n'est pas encore l'heure de la pause");
}

// switch
// Switch permet de sélectionner une condition en fonction d'un cas (case)
var feu = "vert";
switch (feu) {
    case "vert":
        console.log("vous pouvez passer")
        break; // break permet d'arreter la comparaison sinon il va lire l'instruction suivante
    case "orange":
        console.log("ralentissez !")
        break;
    case "rouge":
        console.log("Arretez-vous !")
        break;

    default:
        console.log("Feu en panne")
        break;
}

// age = Number(prompt("Quel age as-tu ?"))

switch (true) {
    case age <= 3:
        console.log("bébé");
        break;
    case age > 3 && age <= 12:
        console.log("enfant");
        break;
    case age > 12 && age < 18:
        console.log("ado");
        break;
    case age >= 18:
        console.log("majeur");
        break;
    default:
        console.log("erreur")
}

/*******************************************************************
 *                          les boucles
 *******************************************************************/

// boucle WHILE
var i = 1;
while (i <= 10) {
    console.log("Instruction while exécuté " + i + " fois");
    i++;
}

// bouble DO...WHILE
do {
    // A la différence du WHILE, les instructions d'un DO...WHILE seront éxécutées au moins une fois
    console.log("Instruction while exécuté " + i + " fois");
    i++
} while (i <= 10);

// La boucle FOR
for (var i = 0; i < 10; i++) {
    console.log("Instruction while exécuté " + i + " fois");
}

/**
 * Exercice
 * A partir du tableau numérique suivant :
 */
var names = ["Darth Vader", "Obi-Wan Kenobi", "Leia Organa", "R2-D2", "Luke Skywalker"];
/**
 * 1/ Gràce à une boucle FOR, afficher la liste des noms du tableau
 * 2/ Gràce à une boucle WHILE, afficher la liste des noms du tableau
 */

for (var i = 0; i < names.length; i++) {
    console.log(names[i]);
}

i = 0;
while (i < names.length) {
    console.log(names[i]);
    i++;
}

// FOR ... IN
/**
 *  Ideale pour parcourir un tableau associatif
 *  Pourquoi ? Car elle va nous permettre de parcourir chaque "clé" du tableau/     objet et donc nous permettre de récupérer la valeur associée à cette clé
 */

var contact = {
    nom: "Lemoine",
    prenom: "Jovany",
    telephone: "0123456789"
};

for (var key in contact) {
    console.log(key + " : " + contact[key]);
}

/**
 * Exercice
 */
var personnages = [
    {
        nom: "Darth Vader",
        affiliation: "Sith",
        grade: "Seigneur",
        infos: {
            origine: "Tatooine",
            naissance: "41 av. BY",
            deces: "4 ap. BY"
        }
    },
    {
        nom: "Luke Skywalker",
        affiliation: "Jedi",
        grade: "Maitre",
        infos: {
            origine: "Polis Massa",
            naissance: "19 av. BY",
            deces: "34 ap. BY"
        }
    }
]

/**
 * A partir du tableau ci-dessus
 * 
 * 1/ affichez les personnages
 * 
 * 2/ pour chaque personnages affichez leurs infos
 */

// 1/
for (let i = 0; i < personnages.length; i++) {
    console.log(personnages[i].nom + " est un " + personnages[i].grade + " " + personnages[i].affiliation);

    // 2/
    for (const key in personnages[i].infos) {
        console.log(key + ": " + personnages[i].infos[key])
    }
}

// for ... of
// On parcourt tous les elements d'un tableaux, la variable qui représente l'élement prend un nouvel élement à chaque tour de boucle
for (var personnage of personnages) {
    console.log(personnage.nom + " est un " + personnage.grade + " " + personnage.affiliation);
    for (var key in personnage.infos) {
        console.log(key + ": " + personnage.infos[key])
    }
}

/*******************************************************************
 *                          Objets
 *******************************************************************/
/**
 * Avant ES6, les objets se déclaraient avec des fonctions
 **/
// function Voiture(marque, modele, kilometrage, annee) {
//     //mot clé this : symbolise l'instance qui a déclenché l'appel
//     this.marque = marque;
//     this.modele = modele;
//     this.kilometrage = kilometrage;
//     this.annee = annee;

//     this.display = function() {
//         var result = this.marque + " - " + this.modele + " - " + this.kilometrage + " - " + this.annee;
//         return result;
//     }
// }

// Instancier un objet
// var v1 = new Voiture("Renault","Clio", 12000, 2010);
// console.log(v1.marque + " " + v1.modele);
// console.log(v1.display());

/*******************************************************************
 *                          ES6
 *******************************************************************/
// let
/**
 * Jusqu'à présent nous avons déclaré nos variables avec le mot clé var
 * Dès maintenant nous allons utiliser le mot clé let à la place de var
 * voici pourquoi :
 */
console.log(testPrenomVar); // undefined --> pour lui la variable est déjà déclaré -->
// probleme de hoisting (remontée de la déclaration de la variable)
var testPrenomVar = "Jean";

// console.log(testPrenomLet); // erreur variable non déclaré
let testPrenomLet = "Pierre";

// const
const nbMax = 6;
// nbMax = 7; //erreur de syntaxe

const fruits = ["Pomme"];
// fruits = ["Pomme", "Poire"]; //erreur de syntaxe
fruits.push("Poire"); // Possible car on ne touche pas la structure à la constante à savoir un tableau numérique 
console.table(fruits);

// .map  .find  .filter

const vegetables = [
    {
        code: 11,
        name: "Carotte",
        price: 1.99
    },
    {
        code: 12,
        name: "Poivron vert",
        price: 2.99
    },
    {
        code: 13,
        name: "Poivron rouge",
        price: 2.99
    },
    {
        code: 14,
        name: "Chou",
        price: 3.99
    }
];

//.map
const listeLegumes = vegetables.map(function(vegetable){
    return vegetable.name;
})
console.log(listeLegumes);

// Trouver un élement --> .find
const carotte = vegetables.find(function(vegetable){
    return vegetable.name.includes("Carotte");
});
console.log(carotte);

// Trouver tous les éléments --> .filter
const poivrons = vegetables.filter(function(vegetable){
    return vegetable.name.includes("Poivron");
});
console.log(poivrons);

// fonctions fléchées ---> Arrow functions
// Pour écrire une fonction fléchée nous allons utiliser un opérateur que l'on appelle fat arrow  =>
// function test (){
//     return "Toto";
// }

let test = function(){
    return "Toto";
}

test = () => {
    return "Toto";
}

test = () => "Toto";

const poivrons2 = vegetables.filter(vegetable => vegetable.name.includes("Poivron"));

const test2 = (nom, prenom) => nom + " " + prenom;

console.log(test2("Wils","David"));

// rest operator
// ...

// let chou = vegetables[3]; // cause une référence au tableau et la copie n'en est vraiment pas une ...

// Welcome rest operator
let chou = {...vegetables[3]};
chou.price = 2.99;
console.log(chou);
console.log(vegetables[3]);

// littéraux de gabarits
/**
 * Il s'agit d'une sorte de templating en JS premettant de simplifier la concaténation de chaines et de variables
 * Avec cette notation on utilise les anti quotes (` `) à la place des double quotes (" ")
 */
let monNom = "WILS";
let monPrenom = "David";

console.log("Bonjour " + monPrenom + " " + monNom); // ça c'était avant
console.log(`Bonjour ${monPrenom} ${monNom}, tu va bien ?`) // c'est pas mieux ?

// Valeurs par défaut pour les paramètres d'une fonction
function carre(nb = 10){
    return nb*nb
}

console.log(carre(5));
console.log(carre());

/**
 * Classes
 * ES6 introduit les classes
 */

class Developer{
    // Constructeur de la classe Developer, on peut le voir comme une "usine" à objet Developper
    constructor(firstname, lastname){
        this.firstname = firstname;
        this.lastname = lastname;
    }

    //méthode de la classe Developper, on ne pourra l'appeler que sur une instance de la classe Developper
    getName(){
        return `${this.firstname} ${this.lastname}`
    }
}

/**
 * Héritage
 * on va utiliser le mot clé extends suivi de la classe mère
 */
class JSDeveloper extends Developer{
    getJob(){
        return "Développeur JS";
    }

    display(){
        //le mot clé super fait référence à la classe parente
        return `${super.getName()} - ${this.getJob()}`;
    }
}

let dev = new Developer("Peter", "Mollet"); // appel du constructeur
console.log(dev.getName());

let jsdev = new JSDeveloper("Jane", "Foster");
console.log(jsdev.display());

let voiture = new Voiture("Citroen", "C4", 100000, 2011, true);
let moto = new Moto("Kawazaki", "Z900", 10000, 2015);

console.log(voiture.display());
console.log(moto.display());

// Ternaire : ?
let connected = false;
if(connected){
    console.log("vous etes connecté");
}else{
    console.log("vous n'êtes pas connecté");
}

// équivalent avec une ternaire
connected ? console.log("vous etes connecté") : console.log("vous n'êtes pas connecté");

let typeVehicule = "Motos";

const monVehicule = typeVehicule == "Moto" ? 
    new Moto("Kawazaki", "Z900", 10000, 2015) : 
    typeVehicule == "Voiture" ?
    new Voiture("Citroen", "C4", 100000, 2011, true) :
    null;

// tips : si l'objet n'existe pas (null) la réponse sera undefined grace au ? car display() est une méthode de vehicule et de ses enfants
console.log(monVehicule?.display());

// destructuring
// récupérer des infos d'un objet ou d'un tableau sous forme de variable

const {nom, affiliation, infos} = personnages[0];
console.log(infos);

const [legume1, legume2, legume3] = legumes;
console.log(legume1, legume2, legume3);

// Spread operator ...
const notes = [15,8,20]

const somme = (v1,v2,v3) =>  {
    return v1 + v2 + v3
}

console.log(somme(...notes));

const [v1, ...reste] = notes

console.log(v1);
console.log(reste);

const contact2 = {
    nom2 : "Johns",
    prenom2 : "Helen",
    age2 : 45,
    profession : "animatrice",
    passions : ["tenis", "surf", "tuto beauté"]
}

const {nom2, prenom2, ...infoContact} = contact2;
console.log(nom2, prenom2);
console.log(infoContact);




























