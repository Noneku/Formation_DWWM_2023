import React from 'react'

const Connexion = () => {
  return (
    <div id='connexion'>
        <h1>Connexion</h1>

        <form action="" method='post'>
            <label htmlFor="Id">Identifiant</label>
            <input type="text" name='id' placeholder='votre identifiant' />
            <label htmlFor="mdp">Mot de Passe</label>
            <input type="password" name='mdp' placeholder='********'  />
            <input type="submit" value='envoyer'/>

        </form>
    </div>
  )
}

export default Connexion