/* Le DOM

  Document Objet Model 
  Jl fournit une représentation du document sous forme d'un arbre et définit la façon dont la structure peut etre manipulée par votre programme (le JS dans notre cas)

  On peut dire qu'il s'aggit d'une sorte de "passerelle" entre le HTML et le JS

  Grace au dom nous allons être en mesure de venir accéder et/ou modifier notre HTML depuis le JS

  Chaque page chargée dans notre navigateur dispose d'un objet "document" utilisable en Js
  Cet objet "document" est notre point d'entrée vers notre contenu HTML

  Comment récupéré les différentes informations de notre HTML ?
*/
//.getElementsById() : récupère un élément HTML  par son id elle prend en paramètre l'id de l'élément que l'on souhaite récupérer
const welcome = document.getElementById("welcome");
console.log(welcome);

//.getElementsBYClassName() : récupère un élément HTML  par son classe elle prend en paramètre la classe que l'on souhaite récupérer

let data = document.getElementsByClassName("contenu");
console.log(data);
console.log(data[0]);
console.log(data[1]);
/*
contrairement a .getElementsById() on récupère une HTMLCollection qui ressemble a un tableau numérique
attention même si je recupere qu'un seul element je le recupere sous forme de tableau.
*/
//.getElementsByTagName() : récupère un ou plusieur élément HTML a partir de son nom de balise.

let p = document.getElementsByTagName("p");
console.log(p);

//.querySelector:va prendre en parametre un selecteur "CSS".
/*
  Attention : il va prendre le 1er element .
*/
let contenu = document.querySelector(".contenu");
console.log(contenu);

let contenus = document.querySelectorAll(".contenu");
console.log(contenus);

let googlelink=document.querySelector("a");
console.log(googlelink);
//ou mene le lien
console.log(googlelink.href);
//l'id
console.log(googlelink.id);

//class
console.log(googlelink.className);

//contenu de l'element
console.log(googlelink.textContent);

/*
  Comme une variable classique on va pouvoir lui affecté une nouvelle valeur.
*/
googlelink.textContent="GOOGLE";

// innerHTML permet d'inserer des balise et du texte ceci sous forme de string.

contenu.innerHTML='<img src="af766f4912396761dfb36ba337a1290e.jpg" alt="lion">';
/** 
 * ajouter des elements
*/
//1 Creation d'un element (methode create sur l'objet document)
let p1 = document.createElement("p");

//2 definir l'element
p1.textContent = "mon paragraphe en JS :)";

//3 ajouter l'element dans l'html
//3.1 via le body
document.body.appendChild(p1);
//il le met a la fin d doc html
//3.2 dans une autre balise
contenus[1].appendChild(p1);
// p1.style.color = "green";

/*
  Dans un soucis de respect de la séparation des concepts, on évite au maximum de manipuler les styles de cette façon. Il vaut mieux privilaigions  l'utilisation des classes pour ajouter ou supprimer des styles
*/
//propriété classList
p1.classList.add("color-red","text-uppercase");

p1.classList.remove("text-uppercase");  

/*
  Les evenenements


    le sevenement vont nouus permettre de declencher une fonction (une serie d'instruction )suite a une interaction /action de l'utilisateur

    notre objectif :entr een mesure de capter /capturer ces evenenment afin d'executer une fonction.
    nous allons trover plusieurs types d'evenenments 
     les evenenemnt a la souris 
     click -->au click sur un element
     mouseenter -->au survol d'un elelment
     mouseleave -->au retour d'un element

     evenement au clavier
    keydown -->au clavier pressé
     keyup -->au clavier relâche
     keypress -->au clavier pressé et relâche
     
     les evenenements sur la fenetre
     scroll -->au défilement de la page
     resize -->redimensionnement de la fenetre

     evenenment sur formulaire

     change-->au changement de valeur pour les elements <input>,<select>, <textarea>

     submit-->avant l'envoi du formulaire

     les evenement su rmle dom
     DOMcontent -->lorsque le document HTML est completement chargé


********************************************************************************
les ecouteurs d'elements 

nous allons avoir besoin d'attacher un evenement a un l'élément (declaré un ecouteur d'évènement)qui se chargera de lancer une action lorsque l'eveneemnt ce produira-->cette action sera une fonction(cette fonction sera a l'interieur d'une autre fonction nous appeleorns donc cette fonction une callback  
)
la fonction que nous allons utiliser pouyr declarer un écouteur d'evenement est addEventListener

exemple de structure:

element.addEventListener("type d'evenenement",function de call back ou nom d'une fonction existante)

exemple: au click le paragraphe portant l'id  welcome,afficher le texte en jaune

*/
welcome.addEventListener("click",()=>{
  if (welcome.style.color=="gold"){
    welcome.style.color="black";
  }else welcome.style.color="gold";
})

function toUppercase(){
  if (p1.classList.contains("text-uppercase")){
    p1.classList.remove("text-uppercase");
  }else p1.classList.add("text-uppercase");
}

p1.addEventListener("click",toUppercase);
//créer un input puis faire un ecouteur d'évenement de type submit
let input = document.createElement("input");
input.type = "text";
input.id= "mon input";
document.body.appendChild(input);
input.addEventListener("change",()=>{
    alert(input.value);
})

/*
  evenement DOMContentLoaded
  cet evenement est déclenché lorsquele DOM est complement chargé, sans atendre les images et les feuilles de style

  une courante vise a utiliser l'evenement load plutot 
*/
Document.addEventListener("DOMContentLoaded",()=>{

  console.log("DOM chargé");

})

window.addEventListener("scroll",()=>{

  console.log(window.scroll);
  if(window.scrollY>100){
    console.log("tu as scroller a plus de 100px");
  }
  console.log("Bravo!");

});


/* 

la methode prevent sur l'objet event

elle va nous permettre d'indiquer que nous ne souhaitons pas que l'action par defaut soit prise ne compte

la fonction de call back
passé en parametre peut prnedre un paramettre 
ce parametre represent l'objet event 
il es tgeneralement nommé e,evt ou event
exemple empecher d'aller sur google au click 

*/