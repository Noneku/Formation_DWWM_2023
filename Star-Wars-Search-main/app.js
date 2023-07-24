document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.querySelector(".search-input");
    const searchButton = document.querySelector(".search-button");
    const gridContainer = document.querySelector(".grid-container");

    // Fonction pour afficher les images des personnages
    function showImages(characters) {
        // Vide le conteneur avant d'afficher les nouvelles images
        gridContainer.innerHTML = "";

        characters.forEach(character => {
            const img = document.createElement("img");
            img.src = `images/${character.imageLink}`; // Chemin vers les images dans le dossier "images"
            img.alt = character.name;
            gridContainer.appendChild(img);
        });
    }

    // Événement de clic du bouton Rechercher
    searchButton.addEventListener("click", () => {
        const query = searchInput.value.trim().toLowerCase();
        const filteredCharacters = characters.filter(character =>
            character.name.toLowerCase().includes(query)
        );
        showImages(filteredCharacters);
    });

    // Affiche toutes les images lors du chargement initial
    showImages(characters);
});