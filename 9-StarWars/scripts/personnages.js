import { characters } from "../Star-Wars-Search/data.js";

const listPersonnages = document.querySelector('.blockListPersonnages');
const listPersonnagesFilter = document.querySelector('.blockListPersonnagesFilter');
const formSearch = document.querySelector('#formSearch');


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

//Search Bar Filter Personnages
    formSearch.addEventListener("keyup", function(event){
        event.preventDefault();
        
        //Disappearance of principal block characters
        listPersonnages.classList.add("d-none");
        
        //Display block Filter characters
        listPersonnagesFilter.classList.add("d-flex");
        listPersonnagesFilter.classList.remove("d-none");
        
        if(formSearch.searchValue.value.length > 0){
            let valueSearch = event.target.value;
            let newArrayFilter = characters.filter(character => character.name.includes(valueSearch)); 
            
            // To erase the old characters of blockListePersonnagesFilter for display new characters 
        while (listPersonnagesFilter.firstChild) {
            listPersonnagesFilter.removeChild(listPersonnagesFilter.firstChild);
        }
            //Display new characters 
            getArrayFilter(newArrayFilter);

    
        }else {
            //Display Basic block Characters
            listPersonnages.classList.remove("d-none");
            //To erase blockPersonnagesFilter
            listPersonnagesFilter.classList.add("d-none");
            listPersonnagesFilter.classList.remove("d-flex");
        };
        // console.log(newArrayFilter.length);
    });

//FUNCTIONS BLOCK--------------------
    function getArrayFilter(arrayFilter){ 
        for (let i = 0; i < arrayFilter.length; i++) {

            const cardPersonnageHTML = document.createElement('div');
                
                cardPersonnageHTML.innerHTML = `<div class="card ${i}" style="width: 18rem;">
                <img src="Star-Wars-Search/images/${arrayFilter[i].imageLink}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">${arrayFilter[i].name}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Consulter Biographie</a>
                </div>
                </div>`;
                
                    listPersonnagesFilter.appendChild(cardPersonnageHTML);
                
            }
    }