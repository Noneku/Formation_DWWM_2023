import React, { useState } from "react";


const Formulaire = () => {
  const [nom, setNom] = useState("");
  const [prenom, setPrenom] = useState("");

  function handleSubmit() {
    alert("bonjour " + prenom + " " + nom);
  }

  function handleChange(e) {

    e.preventDefault();
    console.log(e.target.value, e.target.name);

    if (e.target.name == "nom" ){
      setNom(e.target.value);
    }

    if (e.target.name =="prenom" ){
      setPrenom(e.target.value);
      
    }
  }
  return (
    <div>
      <form onSubmit={handleSubmit}>
        Nom : <input onChange={handleChange} type="text" name="nom" />
        Prenom : <input onChange={handleChange} type="text" name="prenom" />
        Rue: <input onChange={handleChange} type="text" name="rue" />
        Code postal :{" "}
        <input onChange={handleChange} type="text" name="codePostal" />
        Ville : <input onChange={handleChange} type="text" name="ville" />
        <input type="submit" value="Envoyer" />
      </form>
    </div>
  );
};

export default Formulaire;
