//URLSearchParams objet qui va permettre de traiter tous ce qui a dans l'URL
const urlParams = new URLSearchParams(window.location.search);

const nameCharacter = urlParams.get('nameCharacter');
const imgCharacter = urlParams.get('imgCharacter');
const bioCharacter = urlParams.get('bioCharacter');

let imgOfCharacter = document.getElementById("imgOfCharacter").src = `Star-Wars-Search/images/${imgCharacter}`;
let nameOfCharacter = document.getElementById("nameOfCharacter").textContent = `${nameCharacter}`;
let bioOfCharacter = document.getElementById("bioOfCharacter").textContent = `${bioCharacter}`;


console.log(imgOfCharacter);

// console.log(nameCharacter);