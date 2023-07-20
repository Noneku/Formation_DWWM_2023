// On crée un objet XMLHttpRequest
let xhr = new XMLHttpRequest();

//on initialise notre requête avec open()
xhr.open("GET", "https://restcountries.com/v3.1/all");

//on veut une réponse un format JSON
// xhr.responseType = "json";

let btn = document.createElement("button");
btn.textContent = "Cliquez moi";
document.body.appendChild(btn);


let p = document.createElement("p");

btn.addEventListener("click", () => {

    xhr.onload = () => {

        let data = JSON.parse(xhr.responseText);

        data.map(country => {
            let div = document.createElement("div");
            div.classList.add("post");
            let pBody = document.createElement("p");
            pBody.textContent = "region : " + country.region;
            let id = document.createElement("h3");
            id.textContent = "Pays : " + country.name.common;
            let drapeau = document.createElement("img");
            drapeau.src = country.flags.png;
            div.appendChild(id);
            div.appendChild(pBody);
            div.appendChild(drapeau);
            container.appendChild(div);
        })

    }

    // On envoie la requête 
    xhr.send();
})

fetch("https://restcountries.com/v3.1/all")
.then(response => (response.json()))
.then(json=>{
    let countries=json
    console.log(countries);
})
const response2 = await fetch("https://restcountries.com/v3.1/all")
const countries


