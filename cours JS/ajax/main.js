// On crée un objet XMLHttpRequest
let xhr = new XMLHttpRequest();

//on initialise notre requête avec open()
xhr.open("GET", "https://restcountries.com/v3.1/all");

//on veut une réponse un format JSON
// xhr.responseType = "json";

let btn = document.createElement("button");
btn.textContent = "Cliquez moi";
document.body.appendChild(btn);
let container = document.getElementById("container");



btn.addEventListener("click", () => {
    xhr.onload = () => {

        let data = JSON.parse(xhr.responseText);
        data.map(country => {
            
            let div = document.createElement("div");
            div.classList.add("post");

            let pBody = document.createElement("p");
            pBody.textContent = "region : " + country.region;

            let id = document.createElement("h3");
            id.textContent = country.name.common;

            let drapeau = document.createElement("img");
            drapeau.src = country.flags.png;

            div.appendChild(id);
            div.appendChild(pBody);
            div.appendChild(drapeau);
            container.appendChild(div);
        });
    }
    //On envoie la requête
    xhr.send();
})


// le fetch recupere le lien
fetch ("./data.js", {method:'GET'})
.then(response =>response.json())
.then(json => {let countries = json
    console.log(countries);
});

// attend une reponse
const response = await fetch ("https://restcountries.com/v3.1/all%22");
const countries2 = await response.json();

console.log(countries2);



