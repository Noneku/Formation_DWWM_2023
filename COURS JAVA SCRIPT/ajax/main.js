//on crée un objet XMLHttpRequest
let xhr = new XMLHttpRequest();

//on initialisation notre requête avec open()
xhr.open("GET","https://restcountries.com/v3.1/all");

//on veut une réponse au format JSON 
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
        pBody.textContent = "région : " + country.region;
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
//on envoie la requête 
xhr.send();
})

fetch("https://restcountries.com/v3.1/all", {method: 'GET'})
.then(response=>console.log(response.json()));
