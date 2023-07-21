/* Le DOM

  Document Objet Model 
  Jl fournit une représentation du document sous forme d'un arbre et définit la façon dont la structure peut etre manipulée par votre programme (le JS dans notre cas)

  On peut dire qu'il s'agit d'une sorte de "passerelle" entre le HTML et le JS

  Grace au dom nous allons être en mesure de venir accéder et/ou modifier notre HTML depuis le JS

  Chaque page chargée dans notre navigateur dispose d'un objet "document" utilisable en Js
  Cet objet "document" est notre point d'entrée vers notre contenu HTML

  Comment récupéré les différentes informations de notre HTML ?
*/
//.getElementById()

/**
 * Cette méthode permet de récupérer un élément HTML à partir de son id 
 * Elle prend en paramètre l'id de l'élément qu'on souhaite récupérer
 */


const welcome = document.getElementById("welcome");
console.log(welcome);

//getElementByClassName()

let data = document.getElementsByClassName("contenu");
console.log(data);
console.log(data[0]);
console.log(data[1]);

/**
 * Contrairement à .getElementById(), 
 * on récupère une HTMLcollection qui ressemble à un tableau numérique
 * qui ressemble à un tableau numérique, attention même si je récuypère qu'un seul élément, je le récupère sous forme de tableau.
 */

/**
 * Cette méthode va nous permettre de récupérer un ou plusieurs éléments
 * HTML à partir de son nom de balise
 */

let p = document.getElementsByTagName("p");
console.log(p[0]);

//.querySelector

/**
 * .querySelector() va prendre en paramètre un sélecteur "CSS"
 * attention il va prendre uniquement le 1er éléments 
 * même s'il y en a plusieur.
 */

let contenu = document.querySelector(".contenu");
console.log(contenu);

//Ajouter All pour avoir tous les éléments
let contenus = document.querySelectorAll(".contenu");
console.log(contenus);

let googleLink = document.querySelector("a");

//où mène le lien

console.log(googleLink.href);

//L'id
console.log(googleLink.id);

//La class
console.log(googleLink.className);

//contenu de l'élément
console.log(googleLink.textContent);

/**
 * Comme une variable classique, 
 * on va pouvoir réaffecter une nouvelle valeur
 */

googleLink.textContent = "GOOGLE";

//innerHTML permet d'insèrer des balises HTML et du texte ceci sous forme de string
contenu.innerHTML = "<img src='PandaRoux.jpg' alt='panda roux'/>";

/**
 * Ajouter des éléments (ne pas utiliser inner Html, parce que ce n'est pas sécurisé)
 */

// 1/ Création d'un élément (méthode create sur l'objet document)
let p1 = document.createElement("p");

//2/ définir l'élément
p1.id = "newParagraphe";
p1.textContent = "Mon paragraphe en JS :)";

//3/ Ajouter à l'élément dans HTML
//3.1/ via le body
document.body.appendChild(p1);
// il le met à la fin du document HTML

//3.2/ dans une autre balise
contenus[1].appendChild(p1)

// p1.style.color = "red";
// p1.style.backgroundColor = 'blue';

/**
 * Dans un soucis de respectde la séparation des concepts nous évitons au maximum de manipuler
 * les styles de cette façon. 
 * En effet, nous privilègirons l'utilisation des classes pour ajouter ou supprimer des styles.
 */

//propriété classList
p1.classList.add("color-red", "text-uppercase");
console.log(p1.classList);

p1.classList.remove("text-uppercase"); // Supprimer la classe text-uppercase

/**
 * Les évenements
 * 
 * Les évenements vont nous permettre de déclancher une fonction (une série d'instruction) 
 * suite à une intération/action de l'utilisatisateur.
 * 
 * Notre Objectif : Entre en mesure de capter/capturer ces évênements, 
 * afin d'executer une fonction.
 * 
 * Nous allons trouver plusieurs types d'évenments
 * 
 * - les évènements à la souris
 *       *click --> au click sur un élément
 *       *mousenter --> au survol d'un élément
 *       *mouseleave --> Lorsque l'on quitte le survol d'un élement
 * 
 * - Les évènements du clavier
 *      *keydown --> une touche du clavier enfoncée
 *      *keyup --> une touche du clavier relachée
 * 
 * - Les évenements sur la fenêtre
 *      *scroll --> défilement de la fenêtre
 *      *resize --> redimentionnement de la fenêtre
 * -Les évènements sur le formulaire
 *      *change --> au changement de valeur pour les éléments <input>,<select>,<textarea>
 *      *submit --> avant l'envoi du formulaire
 
 * -Les évenements sur le DOM
 *      *DOMContentLoades --> lorsque le document HTML est complètement chargé.
 
 * ************************************************************************************
 * Les Ecouteurs d'évènements
  
 * Nous allons avoir besoin d'"attacher" un évènement à un élément 
 * ou autrement dit délcarer un écouteur d'évènement 
 * qui se chargera de lancer une action lorsque l'évènement se produira ---> 
 * cette action sera une focntion (cette fonction sera à l'intérieur 
 * d'une autre fonction et nous appellerons donc cette fonction une fonction callback)
 
 * la fonction que nous allons utiliser pour déclarer un écouteur d'évènement 
    est addEventListner
 
 * exemple de struture : element.addEventListner("type d'evenement", 
 * fonction de callback ou nom d'une fonction existante)
 * 
 * Exemple : Au clic le titre portant d'id welcome, afficher Le texte en jaune
 
 */

welcome.addEventListener("click", () => {
  if (welcome.style.color == "gold") {
    welcome.style.color = "black"
  } else {
    welcome.style.color = "gold";
  }
})
  
function toUpperCase() {
  if (p1.classList.contains("text-uppercase")) {
    p1.classList.remove("text-uppercase");
  } else {
    p1.classList.add("text-uppercase");
  }
}

p1.addEventListener("click", toUpperCase);

// créer un input puis faire un écouteur d'évènement de type submit

let input = document.createElement("input");
input.type = "text";
input.id = "monInput";
document.body.appendChild(input);
input.addEventListener("change", () => {
  alert(input.value);
})

/**
 *évèvenemnt DOMContentLoaded
  
 * Cet évènement est déclenché lorsque le DOM est complément chargé, sans attendra
 * les images et les feuilles de style.
 
 * Une erreur courante vise à utiliser l'évènement load pluto que DOMContentloaeded
 
 * Le problème est que load ne se déclenche que lorsque la page est entièrement chargé.
*/ 
document.addEventListener("DomContentLoaded", () => {
  console.log("Le DOM est bien chargé !")
})

/**
 * évenement scroll
 */

window.addEventListener("scroll", () => {

  console.log(window.scrollY);

  if (window.scrollY >100) {
    console.log("tu as scrollé à plus de 100px");
  }
  console.log("bravo");
})


/**
 * La méthode préventDefault sur l'objet event
 * 
 * Elle va nous permettre d'indiquer 
 * que nous ne souhaitons pas que l'action par défault soit prise en compte.
 * 
 * La fonction de callback passée en paramètre d'addEventListner peut prendre un paramètre.
 * Ce paramètre représente l'objet event.
 * il est généralement nommé e, evt ou event.
 * 
 * La méthode préventDefault de cet objet récupéré 
 * en paramètre permet d'empêcher le navigateur de déclancher son comportement par défault
 * 
 * Exemple: empêcher d'aller sur google  au click sur le lien portant l'id google
 */

googleLink.addEventListener("click", e => {
  //annuler le comportement par défault
  e.preventDefault();

  alert("VOUS NE PASSEREZ PAS !");

  console.log(e.target);
  console.log(e.target.classList);
})

// evenement submit

const form = document.querySelector("form");
const inputs = document.getElementsByTagName("input");
const [inputNom, inputPrenom, submitBtn] = inputs;
const ul = document.querySelector("ul");

console.log(inputs)
console.log(form, inputNom, inputPrenom, submitBtn);

form.addEventListener("submit", e =>{
  e.preventDefault();
  console.log(inputNom.value + " " + inputPrenom.value);
  const li = document.createElement("li");
  li.textContent = inputNom.value + " " + inputPrenom.value;
  ul.appendChild(li);
  inputNom.value = "";
  inputPrenom.value = "";
})


