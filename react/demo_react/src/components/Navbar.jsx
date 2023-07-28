import React  from 'react';
import {Link} from "react-router-dom"

const Navbar = () => {

    return (

        <nav className='Navbar'>

            <Link to = "/">Acceuil</Link>
            <Link to = "/Services">Services</Link>
            <Link to = "/composant-enfant">demo parent enfant </Link>
            <Link to = "/Composant-event">demo event</Link>
            <Link to = "/Composant-garage">demo garage</Link>
            <Link to = "/Composant-heros">demo heros</Link>
            <Link to = "/Composant-hnput">demo input</Link>
            <Link to = "/Composant-ligue">demo ligue</Link>
            <Link to = "/Composant-parent">demo parent</Link>
            <Link to = "/Login">connnexion</Link>
            <Link to = "/Formulaire">Formulaire</Link>
            <Link to = "/flags">flags</Link>

         
        </nav>


    )
}


export default Navbar