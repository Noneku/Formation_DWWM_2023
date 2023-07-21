class Character{
    constructor(name, imageLink ){
        this.name = name;
        this.imageLink = "../IMG/" + imageLink;
    }
}

const characters = [
    new Character("Adi Gallia", "adi.png"),
    new Character("Aks Moe", "aks.png"),
    new Character("Anakin Skywalker", "anakin.png"),
    new Character("Bib Fortuna", "bib.png"),
    new Character("Boss Nass", "boss.png"),
    new Character("C-3PO", "c3po.png"),
    new Character("Daultay Dofine", "daultay.png"),
    new Character("Conte Dooku", "dooku.png"),
    new Character("Fode Annodue", "fode.png"),
    new Character("Général Grievous", "grievous.png"),
    new Character("Jar Jar Binks", "jarjar.png"),
    new Character("Ki-Adi-Mundi", "ki.png"),
    new Character("Kitster", "kitster.png"),
    new Character("Luke Skywalker", "luke.png"),
    new Character("Maul", "maul.png"),
    new Character("Nute Gunray", "nute.png"),
    new Character("Obi-Wan Kenobi", "obiwan.png"),
    new Character("Orn Free Taa", "orn.png"),
    new Character("Padmé Amidala", "padme.png"),
    new Character("Palpatine - Darth Sidius", "palpatine.png"),
    new Character("Capitaine Panaka", "panaka.png"),
    new Character("Plo Koon", "plo.png"),
    new Character("Qui-Gon Jinn", "qui.png"),
    new Character("R2D2", "r2d2.png"),
    new Character("Rune Haako", "rune.png"),
    new Character("Sebulba", "sebulba.png"),
    new Character("Shmi Skywalker", "shmi.png"),
    new Character("Anakin Skywalker - Darth Vader", "vader.png"),
    new Character("Watto", "watto.png"),
    new Character("Mace Windu", "windu.png"),
    new Character("Yoda", "yoda.png"),
]

console.log(characters);

// Function to filter characters based on the search input
function filterCharacters(searchText) {
    return characters.filter(character =>
        character.name.toLowerCase().includes(searchText.toLowerCase())
    );
}

// Function to display characters on the page
function displayCharacters(characters) {
    const characterGrid = document.getElementById('characterGrid');
    const noResultsMessage = document.getElementById('noResultsMessage');
    characterGrid.innerHTML = '';
    noResultsMessage.style.display = 'none';

    if (characters.length === 0) {
        noResultsMessage.style.display = 'block';
    } else {
        characters.forEach(character => {
            const characterCard = document.createElement('div');
            characterCard.className = 'characterCard';

            const characterImage = document.createElement('img');
            characterImage.className = 'characterImage';
            characterImage.src = character.imageLink;
            characterImage.alt = character.name;

            const characterName = document.createElement('p');
            characterName.textContent = character.name;

            characterCard.appendChild(characterImage);
            characterCard.appendChild(characterName);
            characterGrid.appendChild(characterCard);
        });
    }
}

// Function to handle the search input
function handleSearchInput() {
    const searchInput = document.getElementById('searchInput');
    const searchText = searchInput.value;
    const filteredCharacters = filterCharacters(searchText);
    displayCharacters(filteredCharacters);
}

// Initial display of all characters
displayCharacters(characters);

// Event listener for search input
const searchInput = document.getElementById('searchInput');
searchInput.addEventListener('input', handleSearchInput);
