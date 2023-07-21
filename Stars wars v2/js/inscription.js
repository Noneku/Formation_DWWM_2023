class compte {
  constructor(id, email, password) {
    this.id = id;
    this.email = email;
    this.password = password;
  }
}

let dataClient = [];
let stringDataClient = localStorage.getItem("dataClient");
if (stringDataClient) {
  dataClient = JSON.parse(stringDataClient);
}

const inputId = document.getElementById("uname");
const password = document.getElementById("password");
let btnValider = document.getElementById("btn"); // Déclaration de btnValider ici

if (statut === "inscription") {
  const mailId = document.getElementById("mail");
  const confirmerPassword = document.getElementById("confirmerMdp");
  
  btnValider.addEventListener("click", (e) => {
    console.log("aaa");
    e.preventDefault();
    if (password.value === confirmerPassword.value) {
      dataClient.push(new compte(inputId.value, mailId.value, password.value));
      history.back();
    } else {
      alert("Le mot de passe et sa confirmation ne sont pas identiques !");
    }
    console.log(dataClient);
    localStorage.setItem("dataClient", JSON.stringify(dataClient));
  });
} else if (statut === "connexion") {
  console.log(statut);
} 
