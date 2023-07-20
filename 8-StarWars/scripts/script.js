// Form Traitement
    //Register
    const formRegister = document.querySelector('#formRegister');

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
            console.log("Succes");
        }else {
            console.log("Failed");
        }
        
        
    });
    //Connexion 
// Form Traitement