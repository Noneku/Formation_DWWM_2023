import React from 'react'

const Login = () => {
  return (
    <div>
        <form action="#">

            <label htmlFor="id">Identifiant</label>
            <br/>
            <input type="text" />

            <label htmlFor="id">Mot de passe</label>
            <br/>
            <input type="text"  name = "id "/> 
            <br/>

            <button type = "submit " >SUBMIT</button>
        </form>
    </div>
  )
}

export default Login