// Commentaire d'une ligne

/*
Commentaire en bloc
*/

/**
 * Les variables
 */

// Déclarer une variable
var prenom;

// Affecter une valeur à notre variable
prenom = "Alex";

// Afficher la valeur de la variable dans la console
console.log(prenom);

// Les types de variables
// On ne définit pas de type à la déclaration mais il y a quand même un type (variable auto typé)
console.log(typeof(prenom));

// Déclarer et affecter sur une même ligne
var age = 99;
console.log(typeof(age));

// Concaténation de chaines (se fait avec l'opérateur +)

// Mini exo : créer une concaténation pour afficher la console la phrase suivante :
// Bonjour, je m'appelle Jean et j'ai XX ans
console.log("Bonjour, je m'appelle " + prenom + " et j'ai " + age + " ans");

/**
 * Les opérateurs arithmétiques
 */

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

// Peut s'écrire plus simplement comme ci-dessous :
nb1 += 5;

// Ceci marche pour tout les opérateurs précédents

/**
 * Incrémentation et décrémentation
 */

// Incrémentation
nb1 = nb1 + 1;

// Peut être simplifié par
nb1 += 1;

// Mais encore mieux
nb1++;

// Décrémentation
nb1 = nb1 - 1;

// Peut être simplifié par
nb1 -= 1;

// Mais encore mieux
nb1--;

nb1 = 1;
console.log("nb1 :", nb1);
console.log(nb1++); // Affiche la valeur de nb1 avant l'incrémentation
console.log("nb1 :", nb1);

console.log("nb1 :", nb1);
console.log(++nb1); // Affiche l'incrémentation puis affiche nb1
console.log("nb1 :", nb1);

/**
 * Les tableaux (numériques)
 */

// Déclaration d'un tableau numérique (2 façons de faire)
var monTableau = [];
var monTableau2 = new Array();

// Affecter des valeurs à un tableau numérique
monTableau[0] = "Pomme"; // On affecte une valeur à la case en position 0 du tableau
monTableau[1] = "Poire";
monTableau[2] = "Ananas";

// Afficher des valeurs d'un tableau
console.table(monTableau);
console.log(monTableau[0]);

// Déclarer et affecter en même temps un tableau numérique
var legumes = ["Carotte", "Chou", "Navet"];

// Réaffecter une valeur à une case du tableau
console.log(legumes[2]);
legumes[2] = "Tomate";
console.log(legumes[2]);

// Récupérer la taille d'un tableau
console.log(legumes.length);

// Ajouter un élément au tableau
legumes.push("Poireau"); //Ajoute 1 élément à la fin
legumes.push("Courgette", "Potiron", "Aubergine");

// Retirer un élément du tableau
// La méthode pop() va enlever le dernier élément du tableau
legumes.pop(); // Retirer l'aubergine

// La méthode shift va enlever le premier élément du tableau
legumes.shift(); // Retire la carotte

// La méthode unshift qui va ajouter un élément au début du tableau
legumes.unshift("Avocat");

// La méthode splice() va nous permettre de retirer un ou plusieurs éléments d'un tableau à une position donnée
// Tableau.splice(positionDeDemarrage, nbASupprimer)
console.table(legumes);
legumes.splice(2, 2); // On retire la tomate et le poireau

// Nous pouvons ajouter des éléments à une position donnée avec la méthode splice()
legumes.splice(1, 0, "Cornichon");
console.table(legumes);

/**
 * Les tableaux associatifs
 */

var personne = {
    nom : "Boucher",
    prenom : "Alex",
    age : 21
}

console.table(personne);

// Dot notation
console.log(personne.prenom);

// Bracket notation
console.log(personne["nom"]);

// Je peux préparer ma clé avant avec la bracket notation
var unAge = "age";
console.log(personne[unAge]);

/**
 * Les tableaux à 2 dimensions
 */

var prenoms = ["Mohamed", "Quentin", "Nassim"];
var noms= new Array("Lyagoubi", "M'Hemdi", "Gacem");

// A partr de ces 2 tableaux numériques nous allons créer un tableau à 2 dimensions
var annuaire = new Array(prenoms, noms);
console.table(annuaire);

console.log(annuaire[0][1]); // Affiche le prénom Quentin
console.log(annuaire[0][1] + " " + annuaire[1][0]); // Affiche le prénom de Quentin avec le nom de Mohamed

/*
Exercice
1/ Créer un tableau à 2 dimensions contenant 3 personnes
Chaque personne est représentée par son prénom, son nom et son age

2/ Affichez dans la console la concaténation du nom et du prénom de la 2ème personne
*/
var personne1 = {
    prenom : "Alex",
    nom : "Boucher",
    age : 21
}

var personne2 = {
    prenom : "Sandrine",
    nom : "Sablerine",
    age : 39
}

var personne3 = {
    prenom : "Sandra",
    nom : "Sablera",
    age : 45
}

var annuaire = [personne1, personne2, personne3];
console.table(annuaire);

console.log(personne2.nom + " " + personne2.prenom);

// Afficher une alerte à l'utilisateur
// Alert("Coucou toi !");

// Demander une saisie à l'utilisateur
// prenom = prompt("Quel est ton prénom ?");
// console.log(prenom);
// Attention si la valeur n'est pas stocké dans une variable, la valeur sera perdue

/**
 * Les fonctions
 */

// Lorsque les parenthèses d'une fonction sont vides, cela signifie qu'elle ne prend pas de paramètre
function hello(){
    // Lors de l'appel à la fonction hello, les instructions ci-dessous sont exécutés
    alert("Hello World !");
}

// Appel de la fonction
// hello();

function Bonjour(prenom) {
    alert("Bonjour " + prenom)
}

// Bonjour(prenom);

/*
Exercice
1/ Ecrire une fonction permettant d'effectuer le calcul du perimetre
Indice : l'équivalent de l'instruction Retourner vue en Algo est l'instruction return en JS

2/ Demander à l'utilisateur de saisir la longueur et la largeur

3/ Appeler la fonction précédemment créée avec les valeurs saisies par l'utilisateur

4/ Afficher le résultat dans la console
*/

function perimetre(){
    longueur = Number(prompt("Saisissez la longueur"));
    largeur = Number(prompt("Saisissez la largeur"));
    perimetre = (longueur + largeur) * 2;
    perimetre = "Le périmètre est de : " + perimetre + "cm";
    return perimetre;
}

// console.log(perimetre());

/**
 * Les conditions
 */

// age = Number(prompt("Saisir un age"));

// if (age >= 18) {
//     alert("Bienvenue sur le site, tu es majeur !");
// }else{
//     alert("Tu n'es pas majeur ! Ciao !");

//     // Redirection vers Google
//     window.location = "http://google.fr";
// }

/*
Opérateurs de comparaison
=== signifie égal à
Il permet de vérifier que la valeur de 2 variables sont identiques ainsi que leur type

!= signifie différent de
Il permet de vérifier que la valeur de 2 variables sont différentes

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
4 != 3 --> Vrai

Exercice
Nous disposons de 2 variables : email et mdp contenant respectivement l'email et le mot de passe pour accéder à un espace sécurisé
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

function connexion(){
    saisieEmail = prompt("Saisir un email");
    saisieMdp = prompt("Saisir un mot de passe");
    if (saisieEmail === email && saisieMdp === mdp) {
        alert("Bienvenue sur le site !");
    }else{
        alert("Les informations entrées sont incorrectes");
        window.location = "index.html";
    }
}

// console.log(connexion());

// L'opérateur  OU : ||
// Exemple : tester si un nombre est inférieur à 1 ou supérieur à 3
var nb = 5;
if (nb < 1 || nb > 3) {
    console.log("Le nombre n'est pas compris entre 1 et 3");
    // La condition sera remplie si l'une des 2 conditions est vraie
}

// L'opérateur NON / CONTRAIRE DE : !
var pause = true;
if(!pause){
    console.log("Ce n'est pas encore l'heure de la pause");
}

// Switch
// Switch permet de sélectionner une condition en fonction d'un cas (case)
var feu = "vert";
switch (feu) {
    case "vert":
        console.log("Vous pouvez passer");
        break; // Break permet d'arrêter la comparaison sinon il va lire l'instruction suivante
    case "orange":
        console.log("Ralentissez !");
        break;
    case "rouge":
        console.log("Arrêtez-vous !");
        break;
    default:
        console.log("Feu en panne");
        break;
}

// age = Number(prompt("Quel âge as-tu?"));1

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
    case age > 18:
        console.log("majeur");
        break;
    default:
        console.log("erreur");
        break;
}

/**
 * Les boucles
 */

// Boucle WHILE
var i = 1;
while (i <= 10) {
    console.log("Instruction while exécutée " + i + " fois");
    i++;
}

// Boucle DO...WHILE
do {
    // A la différence de WHILE, les instructions d'un DO...WHILE seront exécutées au moins une fois
    console.log("Instruction while executée " + i + " fois");
    i++;
} while (i <= 10);

// La boucle FOR
for (var i = 0; i < 10; i++) {
    console.log("Instruction while executée " + i + " fois");
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

var i = 0;
while (i < names.length) {
    console.log(names[i]);
    i++;
}

// FOR...IN
/**
 * Idéale pour parcourir un tableau associatif
 * Pourquoi? Car elle va nous permettre de parcourir chaque "clé" du tableau/objet et donc nous permettre de récupérer la valeur associée à cette clé
 */
var contact = {
    nom : "Lemoine",
    prenom : "Jovany",
    telephone : "0123456789"
};

for (const key in contact) {
    console.log(key + " : " + contact[key]);
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

/**
 * A partir du tableau ci-dessus
 * 1/ Afficher les personnages
 * 2/ Pour chaque personnage, afficher leurs infos
 */
for (const key in personnages) {
    console.log("Nom : " + personnages[key].nom);
    console.log("Affiliation : " + personnages[key].affiliation);
    console.log("Grade : " + personnages[key].grade);
    console.log("Origine : " + personnages[key].infos.origine);
    console.log("Naissance : " + personnages[key].infos.naissance);
    console.log("Décès : " + personnages[key].infos.deces);
    console.log("--------------------------------");
}