import { characters } from "../Star-Wars-Search/data.js";

const listPersonnages = document.querySelector('.blockListPersonnages');
const listPersonnagesFilter = document.querySelector('.blockListPersonnagesFilter');
const formSearch = document.querySelector('#formSearch');

console.log();

//Display all elements (Personnages)
for (let i = 0; i < characters.length; i++) {
    const cardPersonnageHTML = document.createElement('div');
    cardPersonnageHTML.innerHTML = `<div class="card" style="width: 18rem;">
    <img src="Star-Wars-Search/images/${characters[i].imageLink}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">${characters[i].name}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Consulter Biographie</a>
    </div>
    </div>`;
    
    listPersonnages.appendChild(cardPersonnageHTML);
};

//Filter Elements
formSearch.addEventListener("keyup", function(event){
    event.preventDefault();
    
    listPersonnages.classList.add("d-none");
    
    listPersonnagesFilter.classList.add("d-flex");
    listPersonnagesFilter.classList.remove("d-none");
    
    if(formSearch.searchValue.value.length > 0){
        let valueSearch = event.target.value;
        let newArrayFilter = characters.filter(character => character.name.includes(valueSearch)); 
        
        getArrayFilter(newArrayFilter);
        
    }else {
        listPersonnages.classList.remove("d-none");
        
        listPersonnagesFilter.classList.add("d-none");
        listPersonnagesFilter.classList.remove("d-flex");
    };
    // console.log(newArrayFilter.length);
});

function getArrayFilter(arrayFilter){ 
    for (let i = 0; i < arrayFilter.length; i++) {
        
            const cardPersonnageHTML = document.createElement('div');
            cardPersonnageHTML.innerHTML = `<div class="card" style="width: 18rem;">
            <img src="Star-Wars-Search/images/${arrayFilter[i].imageLink}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">${arrayFilter[i].name}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Consulter Biographie</a>
            </div>
            </div>`;
            
            listPersonnagesFilter.appendChild(cardPersonnageHTML);
            while(listPersonnagesFilter.firstChild){
                listPersonnagesFilter.removeChild(listPersonnagesFilter.firstChild);
            }
        }
       


}