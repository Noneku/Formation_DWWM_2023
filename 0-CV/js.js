const sounds = document.querySelectorAll(".sound");

sounds.forEach(sound => {
  const button = sound.querySelector('button');
  const audio = sound.querySelector('audio');
  
  button.addEventListener('mouseover', () => {
    audio.play();
  });
  
   button.addEventListener('mouseout', () => {
     if(!audio.paused) {
       audio.pause();
     }
  });
})


window.onload = () => {
// on va chercher tous les éléments
  const elts = document.querySelectorAll(".accordion-element");
// on récupère l'élément actif
const firstActive = document.querySelector(".accordion .active");
//on va chercher la balise p qui se trouve à l'interieur

let section = firstActive.children[1].querySelector("p");

//on récupère la hauteur de section

let sectionHeight = section.offsetHeight + 20;

// on défini la hauteur de accordion content
firstActive.children[1].style.height = sectionHeight+"px";

for(let elt of elts){
  elt.addEventListener("click", function(){
//On récupère l'élément actif
const active = document.querySelector(".accordion .active");
// on lui retire l'élement active

active.classList.remove("active");
// on réduit la hauteur
active.children[1].style.height = 0;

//on met la classe active à l'élément cliqué
this.classList.add("active");
//on récupère la hauteur de la balise p

let section = this.children[1].querySelector("p");

//on récupère la hauteur de section

let sectionHeight = section.offsetHeight + 20;

// on défini la hauteur de accordion content
this.children[1].style.height = sectionHeight+"px";

    });
  }
}