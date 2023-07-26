import React from 'react'
import {Link} from 'react-router-dom';
import Profile from '../pages/Profile';
import Services from '../pages/Services';
const Navbar = () => {
  return (
    <nav>
        <Link to='/'>Accueil</Link>
        <Link to='/Profile/Quentin'>Profil</Link>
        <Link to='/Services'>Services</Link>
        <Link to='/Login'>Login</Link>
       
        
    </nav>
  )
}

export default Navbar