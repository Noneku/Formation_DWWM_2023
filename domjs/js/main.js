/* Le DOM

  Document Objet Model 
  Jl fournit une représentation du document sous forme d'un arbre et définit la façon dont la structure peut etre manipulée par votre programme (le JS dans notre cas)

  On peut dire qu'il s'aggit d'une sorte de "passerelle" entre le HTML et le JS

  Grace au dom nous allons être en mesure de venir accéder et/ou modifier notre HTML depuis le JS

  Chaque page chargée dans notre navigateur dispose d'un objet "document" utilisable en Js
  Cet objet "document" est notre point d'entrée vers notre contenu HTML

  Comment récupéré les différentes informations de notre HTML ?
*/

//getElementById permet de récuperer un élément HTML à partir de son id //

const welcome = document.
getElementById("welcome");

console.log(welcome);



//getElementByClassName//

let data = document.
getElementsByClassName("contenu");

console.log(welcome);

console.log(data[0]);
console.log(data[1]);

//Contrairement à getElementById on récupère un HTML collection qui ressemble à un tableau numérique//




//GetElementByTagName//

//Cette méthode va récuperer un ou plusieur élément HTML à partir de son nom de balise

let p = document.getElementsByTagName("p");

console.log(p);



// .querySelector

/*

.querySelector() va prendre en paramètre un selecteur "CSS"

attention il va prendre uniquement le 1er élément même si il y en a plusieurs 

*/

let contenu = document.querySelector(".contenu")

console.log(".contenu");


/* Pour avoir tout les éléments*/
let contenus = document.querySelectorAll(".contenu")

console.log(".contenu");

let googlelink = document.querySelector("a");
console.log(googlelink);


