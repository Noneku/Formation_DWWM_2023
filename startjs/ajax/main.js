//on creer un ojet xmlhttRequest
let xhr = new XMLHttpRequest();

//on initialise notre requete avec open()

xhr.open("Get","https://restcountries.com/v3.1/all");

//on veut une reponse au format json


xhr.onload = ()=>{

    // console.log(xhr.responseText);
    let  data = JSON.parse(xhr.responseText);
}

// on envoie la requete 

let btn = document.createElement("button");
btn.textContent = "Cliquez moi";
document.body.appendChild(btn);
let container = document.getElementById("container");



btn.addEventListener("click",() => {
//  permet de charger le reponse "onload"   
xhr.onload = ()=>{
    


let data = JSON.parse(xhr.responseText);

data.map(country=>{

    
    let div = document.createElement("div");
div.classList.add("post");

    let pBody = document.createElement("p");
    pBody.textContent = "region : " + country.region;
    pBody.textContent = country.region;
    let id = document.createElement("h3");
    id.textContent = country.name.common;
    let drapeau = document.createElement("img");
    drapeau.src = country.flags.png ;    

     div.appendChild(id);
    div.appendChild(pBody);
    div.appendChild(drapeau);
    container.appendChild(div);
} );


}

xhr.send();

})

// le fetch recupere le lien
fetch ("https://restcountries.com/v3.1/all", {method:'GET'})
.then(response =>response.json())
.then(json => {let countries = json
    console.log(countries);
});

// attend une reponse
const response = await fetch ("https://restcountries.com/v3.1/all");
const countries2 = await response.json();

console.log(countries2);
