// // let burger = ["Pain", "Cheddar", "Steak", "Bacon", "Sauce Burger", "Cornichon", "Salade", "Tomate", "Oigon"];

// // //1 Rendre le burger Halal : Enlever le bacon
// // //2 Rendre le burger végétarien : enlever le steack puis remplacer par une rondelle de champignon
// // //3 Les oignons font pleurer , enlevez les !
// // //4 Rendre le burger vegan : enlever le fromage
// // //5 personnalisez un peu
// // //Chaque étapes doivent être accompagner d'un console.log décrivant l'action effectué puis un console.table()

// // //Halal Burger
// // console.log("Menu Halal");
// //   burger.splice(3,1);
// //     console.table(burger);

// // //Vegan Burger
// // console.log("\nVegan Burger");
// // burger.splice(2,1, "rondelle de champigon");
// // console.table(burger);

// // //Sans oignons
// // console.log("\nNo oignons Burger");
// // burger.pop(burger);
// // console.table(burger);

// // //No cheese
// // console.log("\nNo cheese Burger");
// // burger.splice(1,1);
// // console.table(burger);

// // //Ajout
// // console.log("\nMenu Personnalisé");
// // burger.unshift("Steak Kangourou", "Carotte");
// // console.table(burger);

// // let personne1 = {
// //     nom : "Gacem",
// //     prenom : "Nassim",
// //     age : 26
// // }
// // let personne2 = {
// //     nom : "Nom de Famille",
// //     prenom : "Quentin",
// //     age : 32
// // }

// // let personne3 = {
// //     nom : "Nom de famille",
// //     prenom : "Nicolas",
// //     age : 47
// // }

// // let persone = [
// //     personne1,
// //     personne2,
// //     personne3
// // ]

// // console.log("Bonjour je m'appelle " + persone[1]["nom"] + " " + persone[1]["prenom"] + " et j'ai " + persone[1]["age"] + " ans");

// /*
// Exercice
// 1/ Ecrire une fonction permettant d'effectuer le calcul du perimetre
// Indice : l'équivalent de l'instruction Retourner vue en Algo est l'instruction return en JS

// 2/ Demander à l'utilisateur de saisir la longueur et la largeur

// 3/ Appeler la fonction précédemment créée avec les valeurs saisies par l'utilisateur

// 4/ Afficher le résultat dans la console
// */

// // function perimetre(a, b){
// //     return (a + b) * 2;
// // }

// // let longeur = Number(prompt("Longeur"));
// // let largeur = Number(prompt("Largeur"));

// // alert("Le périmetre est de " + perimetre(longeur, largeur) + " m");

// /**
//  * Exercice
//  * A partir du tableau numérique suivant :
//  */
// var names = ["Darth Vader", "Obi-Wan Kenobi", "Leila Organa", "R2-D2", "Luke Skywalker"];
// /**
//  * 1/ Gràce à une boucle FOR, afficher la liste des noms du tableau
//  * 2/ Gràce à une boucle WHILE, afficher la liste des noms du tableau
//  */

// for (let i = 0; i < names.length; i++) {
//     console.log(names[i]);
    
// }

// n = 0;

// while(n < names.length - 1){
//     n++;
//     console.log(names[n]);
// }

// console.log(n);

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
];

for (const personnage in personnages) {
    if (Object.hasOwnProperty.call(personnages, personnage)) {
        const nomPersonnages = personnages[personnage].nom;
        
        for (const info in personnages[personnage].infos) {
            if (Object.hasOwnProperty.call(personnages[personnage].infos, info)) {
                const element = info.infos;
                
                console.log(element);
            }
        }  
    }
}