 // commmentaire d'une ligne
 /* commentaire en bloc
*/

// declarer variable 

var prenom;


// Affecter une valeur à notre variable 
prenom = "Karim";

// afficher la valeur de la variable dans la console
console.log(prenom);


// les types de variable
//  on ne definit pas de type a la declaration il y a quand meme un type : type (variable auto typé)
console.log(typeof (prenom));

// declarer et affecter sur une meme ligne
var age = 99 ;
console.log(typeof (age));

// concatenation de chaines (se fait avec  l'operation +)


// mini exo : creer une concatenation pour afficher la console de la phrase suivante 
// Bonjour je m'appel jean et j'ai xx ans

console.log("bonjour,je m' appelle " +prenom+ " et j'ai " +age +" ans ");

// les operations arithmetiques 

var nb1 = 10 , nb2 = 5 , resultat ;

// l'addition 

resultat = nb1 + nb2 ;
console.log(resultat);

// la soustraction


resultat = nb1 - nb2 ;
console.log(resultat);

// la multiplication

resultat = nb1 * nb2 ;
console.log(resultat);

// la division

resultat = nb1 / nb2 ;
console.log(resultat);

// le modulo


resultat = nb1 %  nb2 ;
console.log(resultat);


// les ecritures simplifiees 

nb1 = nb1 + 5 ;

// peut s'ecrire plus simplement comme ci dessous 4

nb1 += 5 ;

//  ceci marche pour tout les operateurs differents


// incrementation et decrementation

// incrementation 

nb1 = nb1 + 1 

// peut etre simplifie par 

nb1 += 1 ;

// mais encore mieux

nb1 ++ ;

// decrementation

nb1 = nb1 - 1 

// peut etre simplifie par 

nb1 -= 1 ;

// mais encore mieux

nb1 -- ;


nb1 = 1 ;
console.log("nb1:", nb1);
console.log(nb1++);
console.log("nb1 :" , nb1);

// pour voir le resultat de l incrementation directement il faut 
console.log(++nb1);

// les tableau (numerique)

// declaration d'un tableau numerique (2 facons de faire )
var monTableau = [];
var monTableau2 = new Array();

// affecter des valeurs à un tableau numerique 
monTableau[0] = "pomme"; // on affecte une valeur a la case position 0 du tableau
monTableau[1] = "poire";
monTableau[2] = "Ananas";

console.log(monTableau);
console.table(monTableau);
console.log(monTableau[0]);

// declarer et affecter en meme temps un tableau numerique 
var legumes = ["carotte","chou","navet"];

// reaffecter une valeur a une case du tableau
console.log(legumes[2]);
legumes[2]="tomate";
console.log(legumes[2]);

// recuper la taille du tableau

console.log(legumes.length);

// ajouter un element au tableau

legumes.push("poireau");//ajouter un element a la fin
legumes.push("poireau","potiron","aubergine");

// retirer un element du tableau 
// la methode pop () va enlever le dernier element du tableau 


// la methode shift va enlever le premier element du tableau

legumes.shift();

//  la methode unshift qui va ajouter un element au debut du tableau

legumes.unshift("avocat");

console.log(legumes);

// la methode splice () va vous permetttre de retirer un ou plusieurs elements d'un tableau a une position donnees

// tableau.splice(positionDemarrage , nbASupprimer) 
legumes.splice(2,2)//on retire la tomate et le poireau
console.log(legumes);


//nous pouvons ajouter des elements a une position avec la methode  splice ()
legumes.splice(1,0,"cornichon");

console.log(legumes);

// les tableau associatifs 

var personne = {

nom : "prenom" ,
prenom : " loic" ,
age : 20


}


console.table(personne);
//dot notation

console.log(personne , prenom);
//bracket notation

console.log(personne ["nom"]);
//je peux preparer ma clé avant avec la bracket notation

var unAge = "age ";
console.log(personne [unAge]);

// tableaux a 2 dimensions

var prenoms = ["mohammed","quentin","nassim"];
var noms = new Array ("lyagoubi","mhemmdi","gacem");




// a partir de ces 2 tableaux numeriques nous allons creer un tableau a 2 dimensions 
var annuaire = new Array (prenoms,noms);
console.table(annuaire)


//afficher une alerte à l'utilisateur
// alert("coucou toi !");

//Demander une saisie a l'utilisateur

// prenom = prompt("saisir prenom");
// 
// console.log(prenom);
//attention si valeur n'est pas stockée dans une variable la valeur sera perdu

// lorsque les parentheses d'une fonction sont vide cela signifie qu elle ne prend pas de parametre
function hello(){

    //lors de l appel de la fonction  les instructions ci dessous sont executes 
    alert("hello world");
}

//appel de la fonction 
// hello();


function bonjour (prenom){

    alert(" bonjour " + prenom) ;
}

// bonjour(prenom);

/***
 
Les fonctions***/

age = Number(prompt("Veuillez saisir votre âge : "));

if (age >= 18) {
    alert("Bienvenue sur le site, tu es majeur !");
} else {
    alert("Tu n'es pas majeur, tu ne peux rester ici !");

    // Redirection vers Google
    window.location = "http://google.fr/";
}


/* Opérateurs de comparaison :

'==' : signifie égal à / permet de vérifier que la valeur de 2 variables sont identiques 

'===' : signigie strictement égale à / permet de vérifier que la valeur de 2 variables sont identiques ainsi que leur type 

'!=' : signifie différent de / permet devérifier que la valeur de 2 variables sont différentes 

'!==' : signigie strictement différent de / permet de vérifier si la valeur OU le type sont différents

Exemples : 

1 == 1 -> Vrai 
"1" == 1 -> Vrai 
1 != 2 -> Vrai 
1 != "1" -> Vrai 
3 === 3 -> Vrai 
3 != "3" -> Faux
3 !== "3" -> Vrai 
4 !== 3 -> Vrai 

*/





