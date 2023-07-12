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