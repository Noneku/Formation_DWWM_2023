


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
burger.splice(3,1);

console.log(burger);

console.table(burger);

burger[2]="rondelle de champignon";
console.table(burger);

burger.pop();
console.table(burger);

burger.splice(1,1);
console.table(burger);

//exercice 

//1 creer un tableau a 2 dimensions contenant 3 personnes chaque personne est representé par son prenom son nom et son age


var personne = {

    nom : "la peug" ,
    prenom : " loic" ,
    age : 20
    
    
    };




var personne1 = {

    nom : "adjal" ,
    prenom : " karim" ,
    age : 20
    
    
    };




var personne2 = {

    nom : "mohammedi" ,
    prenom : " quentin " ,
    age : 20
    
    
    };




 array2 = new Array (personne,personne1,personne2);
 console.table(array2);


 // afficher le nom et prenom de la deuxieme personne

 console.log(array2[1].nom  + " " + array2 [1].prenom); //affiche la deuxieme personne

 

//Exercice
//1/ Ecrire une fonction permettant d'effectuer le calcul du perimetre
//Indice : l'équivalent de l'instruction Retourner vue en Algo est l'instruction return en JS

function perimetre (longueur,largeur){
    var perimetre = (longueur + largeur) * 2;
    
    
    return perimetre ;
    
}

//2/ Demander à l'utilisateur de saisir la longueur et la largeur


// var longueur = Number(prompt("saisir longueur"));
// var largeur = Number(prompt("saisir largeur"));


//3/ Appeler la fonction précédemment créée avec les valeurs saisies par l'utilisateur

// console.log(perimetre(longueur,largeur));

//4/ Afficher le résultat dans la console

// perimetre();

//Exercice : 
//Nous disposons de 2 variables : email et mot de passe contenant respectivement l'email et le mot de passe pour accéder à un espace sécurisé



//Exercice2: 
//Nous disposons de 2 variables : email et mot de passe contenant respectivement l'email et le mot de passe pour accéder à un espace sécurisé


var email = "karim@live.fr";
var mdp = "dem1Cferie";

emailPrompt = prompt("Entrer votre e-mail");
mdpPrompt = prompt("Entrer mot de passe");

if (emailPrompt === email && mdpPrompt === mdp) {
    alert("Vous pouvez accéder au site, bienvenue " ); 
    window.location = "https://www.glorykickboxing.com";
} else {
    alert("Erreur dans vos identifiants, au revoir !");
}
