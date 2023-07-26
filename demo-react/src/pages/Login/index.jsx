import React from 'react'
import {Link, Outlet} from 'react-router-dom';

const Login = () => {
  return (
    <div>

    <h1>Login</h1>
    <nav>
        <Link to="/Login/connexion">Connexion</Link>
        <Link to="/Login/inscription">Inscription</Link>
    </nav>
    <Outlet/>

    </div>
  )
}
export default Login; 