// commentaire d'une ligne4

/*
Commentaire en bloc
*/

/*********************************
 * Les varaibles 
 ********************************/

// Déclarer une variable
var prenom;

// Affecter une valeur à notre variable
prenom = "Julien";

//Afficher la valeur de la variable
console.log(prenom);

// les types de variables
/* on ne definit pas de type à la déclaration mais il y a quand même un type(variable auto typé), 
il va définir automatiquement le type par rapport à la valeur saisie */
console.log(typeof (prenom));

// Déclarer et affecter sur une même ligne
var age = 99;
console.log(typeof (age));

// Concaténation de chaînes (se fait avec l'opérateur +):

// Mini exo : créer une concaténation pour afficher la console la phrase suivante :
//Bonjour, je m'appelle XX et j'ai XX ans

console.log("Bonjour, je m'appelle " + prenom + " et j'ai " + age + " ans");

//LES OPERATEURS : ARITHMETIQUES

var nb1 = 10, nb2 = 5, resultat;

// L'addition
resultat = nb1 + nb2;
console.log(resultat);

// La soustraction
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

// Les écritures simplifiées
nb1 = nb1 + 5;

// peut s'écrire plus simplement comme ci-dessous :
nb1 += 5;

//Ceci fonctionne pour tout les opérateurs précedents


// Incrémentation et Décrémentation

// Incrémentation
nb1 = nb1 + 1

// peut etre simplifié par
nb1 += 1

//mais encore mieux
nb1++;

// Décrémentation
nb1 = nb1 - 1

// peut etre simplifié par
nb1 -= 1

//mais encore mieux
nb1--;


nb1 = 1;
console.log(nb1);
console.log(++nb1);// fait l'incrementation puis affiche nb1
console.log(nb1++);// affiche nb1 puis fait l'incrementation
console.log(nb1);

// Les tableaux (numériques)

// Déclaration d'un tableau numérique (2 façon de faire)
var monTableau = [];
var monTableau = new Array();

//Affecter des valeurs à un tableau numérique c'est les indices qui sont numérique pas les valeurs
monTableau[0] = "Pomme"; //on affecte une valeur à la case position 0 du tableau;
monTableau[1] = "Pomme"
monTableau[2] = "Pomme"
monTableau[3] = "PommePommePomme"

//Afficher des valeurs d'un tableau 
console.table(monTableau);
console.log(monTableau[0]);

//Déclaration et Affecter en même temps un tableau numérique
var legumes = ["Carotte", "Chou", "Navet"];
console.table(legumes);

//Réaffecter une valeur à case du tableau
console.log(legumes[2]);
legumes[2] = "Tomate";
console.log(legumes[2]);

//Récupérer la taille d'un tableau
console.log(legumes.length);

//Ajouter un élément au tableau
legumes.push("Poireau"); //Ajoute 1 élément à la fin 
legumes.push("Courgette", "Potiron", "Aubergin");

//Retirer un élément du tableau
//la méthode pop() va enlever le dernier élément du tabelau

legumes.pop(); // retirer l'Aubergine

//La méthode shift va enlever le premier élément du tableau
legumes.shift(); //Retire la Carotte

//La méthode unshift qui va ajouter un élément au début du tableau
legumes.unshift("Avocat");

//La méthode splice() va vous permmettre de retirer un ou plusieurs éléments d'un tableau à une position donnée
//tableau.splice(positionDeDemarrage, nbASupprimer)
console.table(legumes);
legumes.splice(2, 2); //On retire le poireaux et la courgette
console.table(legumes);

//Nous pouvons ajouter des éléments à une position donnée avec la méthode slice
legumes.splice(1, 0, "Cornichon");
console.table(legumes);

// Tableau associatif

var personnes = {
    Nom: "Le Peuch",
    Prenom: "Loïck",
    age: "20",
}

// dot.notation
console.log(personnes.Prenom)

//bracket notation
console.log(personnes | ["Nom"]); //utiliser celle-ci

//Les tableaux à 2 dimensions

var Prenoms = ["Mohamed", "Quentin", "Nassiml"];
var Noms = new Array("Lyagoubi", "M'hmemdi", "Gacem");


//à partir de ces 2 tableaux numériques nous allons créer un tableau à 2 dimensions

var annuaires = new Array(Prenoms, Noms);
console.table(annuaires);

console.log((annuaires[0][1]));// Affiche le prénom Quentin
console.log((annuaires[0][1] +" "+ annuaires[1][0]));// Affiche le prénom Quentin et le nom de Mohamed

// Affichez dans la console la concaténation du nom et du prénom de la 2eme personne

// var Quentin = {
//     Nom: "Olivier",
//     Prenom:'Quentin',
//     Age: "28"
// };

// var Leila = {
//     Nom: "Mouaci",
//     Prenom:'Leila',
//     Age: "28"
// };

// var Nicolas = {
//     Nom: "Deweireld",
//     Prenom:'Nicolas',
//     Age: "34"
// };


// var annuaire = new Array(Quentin, Leila, Nicolas);

// console.table(annuaire);

// console.log(annuaire[1]["Nom"] + " " + annuaire[1]["Prenom"]);

//Afficher une alerte à l'utilisateur
// alert("Coucou toi");

//Demander une saisie à l'utilisateur
// prenom = prompt("Quel est votre prenom");
// console.log(prenom)

//Attention si ce n'est pas stocké dans une fonction la donnée est perdu

// LES FONCTIONS

// Lorsque les parenthèse d'une fonction sont vides cela signifie qu'elle ne prend pas de paramètre

// function hello() {
//     //Lors de l'appel à la fonction hello les instructions ci-dessous sont exécutés
//     alert("Hello world");   
// }

// //Appel de la fonction
// hello();

// function bonjour(){
//     alert("Bonjour" + prenom);
// }

// bonjour(prenom);

//Exercice
//1/ Ecrire une fonction permettant d'effectuer le calcul du perimetre
//Indice : l'équivalent de l'instruction Retourner vue en Algo est l'instruction return en JS
//2/ Demander à l'utilisateur de saisir la longueur et la largeur

// var largeur = prompt("Saississez la largeur");
// var longueur = prompt("Saississez la longueur");

// function périmètre(largeur,longueur) {

//     pm = (Number(largeur) + Number(longueur)) *2;
//     alert("Le périmètre est de " + pm);
//     return pm;
// }
//3/ Appeler la fonction précédemment créée avec les valeurs saisies par l'utilisateur

// console.log(périmètre(largeur,longueur));

//4/ Afficher le résultat dans la console


// Les conditions

// age = Number(prompt("Saisir un age"));

// if (age >= 18) {
//     alert("Bienvenue sur le site, petit coquinou")
// } else {
//     alert("Quitte ce site immédiatement !!!")
//     window.location = "http://google.fr"
// }

// Redirection vers Google
// window.location = "http://google.fr"

// Opérateurs de comparaison  " ==  " signifi  égale à
//Il permet de vérifier que la valeur de 2 variables sont identiques

// Opérateurs de comparaison  " ===  " signifi  égale à
//Il permet de vérifier que la valeur de 2 variables sont identiques ainsi que leur types

// Opérateurs de comparaison  " !=  " signifi  égale à
//Il permet de vérifier que la valeur de 2 variables sont différents

// Opérateurs de comparaison  " !==  " signifi  égale à
//Il permet de vérifier que la valeur  ou le type sont différent

// Exemples

// 1 == 1 --> Vrai
// "1" == 1 --> Vrai
// 1 != 2 --> Vrai
// 1 != "1" --> Vrai
//3 === 3 -- > Vrai
//3 !="3" --> Faux
// 3 !== "3" --> Vrai
// 4 !== 3 --> Vrai

//Exercice

//Nous dispons de 2 variables : email et mdp contenant respectivement l'email et le mot de passe pour accèder à un espace sécurisé

// var email = "conctact@dwwm.fr"
// var mdp = "dem1ceferie"

/**
 * 1/ Demander à l'utilisateur de saisir un email et un mot de passe
 * 2/ Vérifier que l'email est identique à la variable email
 * 3/ Vérifier que le mot de passe est identique à la variable mdp
 * 4/ Si OK alors on affiche un message de bienvenue
 * 5/ Sinon on indique à l'utilisateur l'information incorrecte
 */

// var email2 = prompt("Saisir votre identifiant");

// if (email2 === email) {
//     alert('Votre identifiant est correct, veuillez saisir votre mot de passe');
//    var mdp2 = prompt("Saisir votre mot de passe");

//     for (let index = 0; mdp2 !== mdp; index++) {
//         alert('veuillez saisir un autre mot de passe');
//         mdp2 = prompt("Saisir votre mot de passe");
        
//     }alert('Votre mot de passe est correct,Bienvenue chez nous !!');

// }else 
// {
//     alert('veuillez saisir un identifiant correct')
//     email2 = prompt("Saisir votre identifiant");
// }


// opérateurs logiques

//L'opérateur ET : &&

// Exemple on peut vérifier le mail et le mot de passer en même temps

// if (userEmail == email && userPwd == mdp) {
//     alert("Bienvenu sur notre espace sécurisé");
// } else {
//     alert("Email non reconnu ou mot de passe incorrect");
// }

//L'Opérateur  ou : ||

// Exemple tester si un nombre est inférieur à 1 ou supérieur à 3
//  var nb = 5

// if (nb < 1 || nb > 3) {
//     console.log("Le nombre n'est pas compris entre 1 et 3");
// } else {
//     alert("Le nombre est compris entre 1 et 3");
// }

// L'opérateur NON / contraire de : !
// var pause = true;
// if (!pause) {
//     console.log("Ce n'est pas encore l'heure de la pause");
// }

//SWITCH
//Switch permet de sélectionner  une condition en fonction d'un cas (case)
// var feu = "vert";
// switch (feu) {
//     case "vert":
//         console.log("vous pouvez passer")
//         break;
//     case "Orange":
//         console.log("Ralentissez")
//         break;
//     case "Rouge":
//         console.log("Arrêtez-vous")
//         break;
//     default:
//         console.log("Feu défectueux")
//         break;
// }

// age = Number(prompt("Quel âge as-tu ?"))

// switch (true) {
//     case age <= 6:
//         console.log("bébé");
//     break;
//     case age > 3 && age <= 12:
//         console.log("enfant");
//     break;
//     case age > 12 && age <= 18:
//         console.log("ado");
//         break;
//     case age > 18:
//         console.log("majeur");
//     break;
//     default:
//         console.log("erreur");
// }

//boucle

//boucle while
// var i = 1
// while (i <= 10) {
//     console.log("Instruction while exécuté " + i + " fois");
//     i++;
// }

//boucle do...While
// do {
//     //A la différence du WHILE, Les instructions d'un DO...WHILE seront exécuté au moins une fois
//     console.log("Instruction while exécuté " + i + " fois");
//     i++;
// } while (i <= 10);

// // La boucle FOR
// for (let i = 0; i < array.length; i++) {
//     console.log("Instruction while exécuté " + i + " fois");
// }

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

//FOR ... IN
//Ideal pour parcourir un tableau associatif
//Pourquoi ? car elle va nous permettre de parcourir chauque "clef" du tableau/objet et donc nous permettre de récupérer la valeur associé à cette clef

var contact = {
    nom: "Lemoine",
    prenom: "Jovany",
    telephone: "0123456789",
};

for (const key in contact) {
    console.log(key + ":" + contact[key]);
}

/**
 * Exercice
 */
var personnages = [
    {
        nom : "Darth Vader",
        affiliation : "Sith",
        grade : "Seigneur",
        infos :{
            origine : "Tatooine",
            naissance : "41 av. BY",
            deces : "4 ap. BY"
        }
    },
    {
        nom : "Luke Skywalker",
        affiliation : "Jedi",
        grade : "Maitre",
        infos :{
            origine : "Polis Massa",
            naissance : "19 av. BY",
            deces : "34 ap. BY"
        }
    }
]

// A partir du tableau ci-desssus

// 1/ affichez les personnages


// for (const key in personnages,infos) {
//     console.log(key + ":" + personnages[key]);
//     console.log(key + ":" + infos[key]);

// }

for(let i = 0; i < personnages.lenght; i++) {
    console.log(personnages[i].nom + "est un" + personnages[i].grade + " " + personnages[i].affiliation);

    for (const key in personnages[i].infos){
        console.log(key + ": " + personnages[i].infos[key])
    }
}
//     for (const key in infos){
//         console.log(key + ":" + infos[key])
//     }
   
// }
// 2/ pour chaque personnages affichez leurs infos
 
    // for (const key in infos) {
    //     console.log(key + ":" + infos[key])

//for ... of
//on parcourt tous les éléments d'un tableaux, La variable qui présente L'élément prend un nouvel élément à chauque tour de boucle
// pour un tableau associatif utilisation d'un for in non un for of, for of pour un tableau numérique. For ... In on va visé la place de l'élément,
// le for ... of on va viser directement l'élément.

for (var personnage of personnages) {
    console.log(personnage.nom + "est un " + personnage.grade + " " + personnage.affiliation);
        
    for (var key in personnage.infos) {
        console.log(key +" : " + personnage.infos[key]);
            
        }
}
    

// Objets

/**Avant ES6, les objets se déclaraient avec des fonctions
*/
function Voiture(marque, modele, kilometrage, annee){
    // mot clef this : symbolise l'instance qui a déclanchée l'appel
    this.marque = marque;
    this.modele = modele;
    this.kilometrage = kilometrage
    this.annee = annee;
//fonction anomyme et  n'a pas de paramètre
    this.display = function () {
        var result = this.marque + " - " + this.modele + " - " + this.kilometrage + " - " + this.annee
        return result;
    }
}

// Instancier un objet

var v1 = new Voiture("renault", "clio", 12000, 2010);
console.log(v1.marque + " " + v1.modele);
console.log(v1.display());


/*******************************************************************************************************
 *                                                      ES6
 * ****************************************************************************************************************************************************************
*/
/**
 * Jusqu'à présent nous avons déclaré nos variables avec le mot clé var
 * Dès maintenant nous allons utilisé le mot clé let à la place de var
 * Voici pourquoi : 
 */
console.log(testPrenomVar); // résultat "Undifined" -- > pour lui la variable est déjà déclarée --> 
//problème de hoisting(remonter de la délcaration de la variable)
var testPrenomVar = "Jean";

// console.log(testPrenomLet);
// let testPrenomLet = "Pierre";

// const attention de base on ne peut pas modifier le contenu d'une constante
// const nbMax = 6;
// nbMax = 7; //erreur synthaxe

const fruits = ["pomme"];
//fruits = ["pomme", "poire"];
fruits.push("poire"); // Possible car on ne touche pas à la structure de la constante à savoir un tableau numérique.
console.table(fruits);

// .map .find .filler

const vegetables = [
    {
        code: 11,
        name: "carotte",
        price: 1.99,
    },
    {
        code: 12,
        name: "Poivron vert",
        price: 2.99,
    },
    {
        code: 13,
        name: "Poivron rouge",
        price: 2.99,
    },
    {
        code: 14,
        name: "chou",
        price: 3.99,
    }
];

//.map

const listLegumes = vegetables.map(function (vegetable) {
    return vegetable.name;
})

console.log(listLegumes);

//trouver un élement --> .find
const carotte = vegetables.find(function (vegetable) {
    return vegetable.name.includes("carotte");
});
console.log(carotte);

//trouver tous les éléments --> .filter
// const poivrons = vegetables.filter(function (vegetable) {
//     return vegetable.name.includes("Poivron");
// });
// console.log(poivrons);

//fonctions fléchées ---> Arrow functions
//Pour écrire une fonction fléchée nous allopns utiliser un opérateur que l'on appelle fat arrowx =>
// function test() {
//     return "Toto";
// }

// let test = function () {
//     return "Toto";
// }

// test = () => {
//     return "Toto";
// }


const poivrons2 = vegetables.filter((vegetable) => vegetable.name.includes("Poivron"));

console.log(poivrons2);

const test2 = (nom, prenom) => nom + " " + prenom;

console.log(test2("Wils", "David"));

// Rest operator

// let chou = vegetables[3];  cause une référence au tableau et la copie n'en est pas vraiment une ...

// welcome rest operator


//welcome rest operator
let chou = { ...vegetables[3] };
chou.price = 2.99;
console.log(chou);
console.log(vegetables[3]);

/**
 * Il s'agit d'une sort de templating 
 * en JS permettant de simplifier la concaténation de chaines et de variables
 * Avec cette notation on utlise des anti quotes (` `) à la place des doubles quotes (" ")
 */

let monNom = "Balloy";
let monPrenom = 'Julien';

console.log("Bonjour " + monPrenom + " " + monNom);
console.log(`Bonjour ${monPrenom} ${monNom}, tu va bien ?`);

//valeurs par défauts pour les paramètres d'une fonction
function carre(nb = 10) {
    return nb * nb;
}

console.log(carre(5));
console.log(carre());

/**
 * Classes
 * ES6
 */

class Developper{
    // Constructeur de la classe Developper, 
    //on peut le voir comme une "usine" à objet Developper,
    constructor(firstname, lastname) {
        
        this.firstname = firstname;
        this.lastname = lastname;
    }
    // Méthode de la classe Developper, 
    //on ne pourra l'appeler que sur une instance de la classe Developper

    getName() {
        return `${this.firstname} ${this.lastname}`
    }
}

/**
 * Héritage
 * on va utiliser le mot clef extends suivi de la classe mère
 */

class JSDevelopper extends Developper{
    getJob() {
        return "Développer JS";
    }

    display() {
        // Le mot clé super, fait référence à la class parente
        return `${super.getName()}- ${this.getJob()}`
    }
}

//Exemple

let dev = new Developper("Peter", "Mollet");// appel du constructeur
console.log(dev.getName());

let jsdev = new JSDevelopper("Jane", "Foster");
console.log(jsdev.display());