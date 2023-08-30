import { characters } from "./data.js";

// console.log(characters);

const listepersonnage =document.querySelector("#personnages");

const searchpersonnage =document.querySelector("#site-search");

for (let i = 0; i < characters.length; i++) {

    const personnage=document.createElement('article');
    personnage.classList.add('personnage');
    personnage.innerHTML= `<h2 class="name">${characters[i].name}</h2>
        <img src="./images/${characters[i].imageLink}" alt="${characters[i].name}" class="portrait"></img>
        `;

        listepersonnage.appendChild(personnage);

    }

    searchpersonnage.addEventListener('keyup',e => {
        const searchletter=e.target.value;
        const personnages=document.querySelectorAll('.personnage');
        filterElements(personnages,searchletter);
    
    });
    
    function filterElements(personnages,searchletter) {
        
        if(searchletter.length>0){
            for(let i=0;i<personnages.length;i++){
                if(personnages[i].textContent.toLowerCase().includes(searchletter)){
                    personnages[i].style.display='block';
                }else{
                        personnages[i].style.display='none';
                }
            }
        }
        if (searchletter.length==0){
            for(let i=0;i<personnages.length;i++){
                personnages[i].style.display='block';
        }
    }
}

