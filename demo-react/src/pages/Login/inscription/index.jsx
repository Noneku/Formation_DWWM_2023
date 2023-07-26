import React from 'react'

const Inscription = () => {
  return (
    <div id="connexion">
        <h1>Inscription</h1>

        <form action="" method='post' id='inscription'>
            <label htmlFor="Id">Identifiant</label>
            <input type="text" name='id' placeholder='votre identifiant' required />
            <label htmlFor="mdp">Mot de Passe</label>
            <input type="password" name='mdp' placeholder='********' required  />
            <label htmlFor='date'>Date de naissance</label>
            <input type="date" required/>



            <input type="submit" value="S'inscrire"/>

        </form>

    </div>
  )
}

export default Inscription