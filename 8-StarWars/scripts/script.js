// Form Traitement
    //Register
    const formRegister = document.querySelector('#formRegister');
    const buttonDisconnect = document.querySelector('.buttonConnexion');
    const infoUser = document.createElement('p');

    console.log(buttonDisconnect);

    formRegister.addEventListener("submit", function(event){
        event.preventDefault();
        
        let clientData = {
            "nameClient" : formRegister.registerName.value + " " + formRegister.registerUsername.value,
            "email" : formRegister.registerEmail.value,
            "password" : formRegister.registerPassword.value
        };
        
        localStorage.setItem('clientData', JSON.stringify(clientData));
    });
    //Register 
    //Connexion
    const formConnexion = document.querySelector('#formConnexion');

    formConnexion.addEventListener("submit", function(event){
        event.preventDefault();

        let currentLoginEmail = formConnexion.loginName.value;
        let currentLoginPassword = formConnexion.loginPassword.value;

        let clientData = JSON.parse(localStorage.getItem('clientData'));

        if(currentLoginEmail === clientData.email
        && currentLoginPassword === clientData.password){
            buttonDisconnect.innerHTML = `DECONNEXION, bonjour <br> <i class="me-2 fa-solid fa-book-journal-whills" style="color: #ba9011;"></i> ${clientData.nameClient}`;
            // infoUser.appendChild(buttonDisconnect).innerHTML("test");
            console.log("Succes");
        }else {
            console.log("Failed");
        }
        
        
    });
    //Connexion 
// Form Traitement