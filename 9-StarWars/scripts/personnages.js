import { characters } from "../Star-Wars-Search/data.js";

console.log(characters);

const listPersonnages = document.querySelector('.blockListPersonnages');
const formSearch = document.querySelector('.formSearch');

console.log(listPersonnages);

for (let i = 0; i < characters.length; i++) {
    
    const cardPersonnageHTML = document.createElement('div');
    cardPersonnageHTML.innerHTML = `<div class="card" style="width: 18rem;">
        <img src="Star-Wars-Search/images/${characters[i].imageLink}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">${characters[i].name}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>`;
    
    listPersonnages.appendChild(cardPersonnageHTML);
       
}