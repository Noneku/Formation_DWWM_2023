class Character {
  constructor(name, imageLink) {
    this.name = name;
    this.imageLink = imageLink;
  }
}

const characters = [
  new Character("Adi Gallia", "../img/adi.png"),
  new Character("Aks Moe", "../img/aks.png"),
  new Character("Anakin Skywalker", "../img/anakin.png"),
  new Character("Bib Fortuna", "../img/bib.png"),
  new Character("Boss Nass", "../img/boss.png"),
  new Character("C-3PO", "../img/c3po.png"),
  new Character("Daultay Dofine", "../img/daultay.png"),
  new Character("Conte Dooku", "../img/dooku.png"),
  new Character("Fode Annodue", "../img/fode.png"),
  new Character("Général Grievous", "../img/grievous.png"),
  new Character("Jar Jar Binks", "../img/jarjar.png"),
  new Character("Ki-Adi-Mundi", "../img/ki.png"),
  new Character("Kitster", "../img/kitster.png"),
  new Character("Luke Skywalker", "../img/luke2.png"),
  new Character("Maul", "../img/maul.png"),
  new Character("Nute Gunray", "../img/nute.png"),
  new Character("Obi-Wan Kenobi", "../img/obiwan2.png"),
  new Character("Orn Free Taa", "../img/orn.png"),
  new Character("Padmé Amidala", "../img/padme.png"),
  new Character("Palpatine - Darth Sidius", "../img/palpatine.png"),
  new Character("Capitaine Panaka", "../img/panaka.png"),
  new Character("Plo Koon", "../img/plo.png"),
  new Character("Qui-Gon Jinn", "../img/qui.png"),
  new Character("R2D2", "../img/r2d2.png"),
  new Character("Rune Haako", "../img/rune.png"),
  new Character("Sebulba", "../img/sebulba.png"),
  new Character("Shmi Skywalker", "../img/shmi.png"),
  new Character("Anakin Skywalker - Darth Vader", "../img/vader.png"),
  new Character("Watto", "../img/watto.png"),
  new Character("Mace Windu", "../img/windu.png"),
  new Character("Yoda", "../img/yoda.png"),
];

let div = document.getElementById("divE");
let search = document.getElementById("search");



function Display() {
  div.innerHTML = ""; //supprimer la recherche d'avant
  const filtre = search.value.toLowerCase();
  
  for (let i = 0; i < characters.length; i++) {
    const character = characters[i];
    if (character.name.toLowerCase().indexOf(filtre) > -1) {
      let img = document.createElement("img");
      img.src = character.imageLink;
      div.appendChild(img);
    }
  }
}

Display();

// let test = document.createElement("img")
// test.src = characters[0].imageLink;
// document.body.appendChild(test);
// // console.table(characters)
