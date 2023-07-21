let btnInscription = document.getElementById("btnInscription");
let inputNomUtilisateur = document.getElementById("uname");
let inputPassword = document.getElementById("password");
let titre = document.getElementById("titre");
let form = document.getElementById("form");

let inputMail = document.createElement("input");
inputMail.placeholder = "Adresse mail";
inputMail.setAttribute("type", "text");
inputMail.setAttribute("name", "inscription");
inputMail.setAttribute("id", "mail");

let inputConfirmerMotDePasse = document.createElement("input");
inputConfirmerMotDePasse.placeholder = "Confirmer le mot de passe";
inputConfirmerMotDePasse.setAttribute("type", "password");
inputConfirmerMotDePasse.setAttribute("name", "confirmerMotDePasse");
inputMail.setAttribute("id", "confirmerMdp");

btnInscription.addEventListener("click", () => {
  if (statut === "connexion") {
    // inputNomUtilisateur.value = "Inscription";
    titre.textContent = "Inscription";
    inputNomUtilisateur = inputMail;
    form.insertBefore(inputMail, inputPassword);
    form.insertBefore(inputConfirmerMotDePasse, btnValider);
    btnInscription.textContent = "Déjà un compte ? connexion";
    statut = "inscription";
    console.log(statut);
  } else {
    // inputNomUtilisateur.value = "Nom d'utilisateur";
    titre.textContent = "Connexion";
    inputNomUtilisateur = inputMail;
    form.removeChild(inputMail);
    form.removeChild(inputConfirmerMotDePasse);
    btnInscription.textContent = "Pas encore de compte ? inscription";
    statut = "connexion";
    console.log(statut);
  }
});
