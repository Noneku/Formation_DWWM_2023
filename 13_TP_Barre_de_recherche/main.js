let btn = document.querySelector("button");
let search = document.querySelector(".champ");
let img = document.querySelector(".response");
let form = document.querySelector(".formulaire");

img.addEventListener("mouseover", () => {
  search.style.opacity = 1;
  search.style.width = "50%";
  search.style.visibility = "visible";
});

// img.addEventListener("mouseout", () => {
//   input.style.opacity = 0;
//   input.style.width = "0%";
//   input.style.visibility = "hidden";
// });

// form.addEventListener("submit", (event) => {
//     event.preventDefault(); // Empêcher le comportement par défaut du formulaire (rechargement de la page)
  
//     const searchText = input.value; // Récupérer le texte de recherche saisi par l'utilisateur
//     console.log("Recherche effectuée avec le texte :", searchText);
  
//     // Vous pouvez ajouter d'autres traitements ici en fonction de vos besoins
  
//     input.value = ""; // Réinitialiser la valeur de l'input à vide
//     input.style.opacity = 0;
//     input.style.width = "0%";
//     input.style.visibility = "hidden";
// });
  
const chercher = document.querySelector(".champ");

chercher.addEventListener("keyup", (e) => {
    const chercherLettre = e.target.value;
    const personnages = document.querySelectorAll(".perso"); 
    filtreElements(chercherLettre, personnages);
});

function filtreElements(letters, elements) {
    if (letters.length > 0) {
        for (let i = 0; i < elements.length; i++) {
            const personnage = elements[i].querySelector(".personnage");
            if (personnage) {
                if (personnage.textContent.toLowerCase().includes(letters.toLowerCase())) {
                    elements[i].style.display = "block";
                } else {
                    elements[i].style.display = "none";
                }
            } else {
                
                personnage.textContent ="Personnage inconnu";
                
                
            }
        }
    } else {
        for (let i = 0; i < elements.length; i++) {
            elements[i].style.display = "block";
        }
    }
}






