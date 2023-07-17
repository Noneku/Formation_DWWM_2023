// Création d'un utilisateur dans le local storage
localStorage.setItem('username', 'admin');
localStorage.setItem('password', 'admin');

// Écouteur d'événement pour le formulaire de connexion
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Empêche le rechargement de la page

    // Récupération des valeurs entrées par l'utilisateur
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Vérification des identifiants stockés dans le local storage
    var storedUsername = localStorage.getItem('username');
    var storedPassword = localStorage.getItem('password');

    if (username === storedUsername && password === storedPassword) {
        // Connexion réussie
        document.getElementById('message').innerHTML = 'Connexion réussie';
        // Ajoutez ici le code pour rediriger l'utilisateur vers une autre page, par exemple : window.location.href = 'page_principale.html';
    } else {
        // Identifiants incorrects
        document.getElementById('message').innerHTML = 'Identifiants incorrects';
    }
});
