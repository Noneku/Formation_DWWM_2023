import React from 'react'
import 'bootstrap/dist/css/bootstrap.min.css';
import { Navbar, Nav, NavDropdown } from 'react-bootstrap';

const Header = () => {
    return (
        
        <Navbar className='na' bg="dark" variant="dark" expand="lg">
            
                <Navbar.Brand href="/home"><img src="/img/VCH-removebg-preview_1.png" alt="Logo" /></Navbar.Brand>
                <Navbar.Toggle aria-controls="navbarNav" />
                <Navbar.Collapse id="navbarNav">
                    
                        
                            <Nav>
                                <NavDropdown title="Hébergements" id="basic-nav-dropdown">
                                    <NavDropdown.Item href="/deluxe">Chambre double deluxe</NavDropdown.Item>
                                    <NavDropdown.Item href="/superieure">Chambre double supérieure</NavDropdown.Item>
                                    <NavDropdown.Item href="/junior">Suite Junior</NavDropdown.Item>
                                </NavDropdown>
                                <Nav.Link href="/vister/lhotel">Visiter l'hôtel</Nav.Link>
                                <Nav.Link href="/"><img className="bl" src="/img/Vector (1).png" alt="" />Mes réservations</Nav.Link>
                                <Nav.Link href="/Revenue"><img className="bl" src="/img/noto-v1_money-bag.png" alt="" />Chiffres d'affaires</Nav.Link>

                            </Nav>
                        
                        
                            <Nav>
                                <NavDropdown title={<img className="bl" src="/img/Vector.png" alt="" />}>
                                    <Nav.Link href="/login"><img className="bl" src="/img/Vector.png" alt="" />Se connecter</Nav.Link>
                                    <NavDropdown.Item href="/user">Gérer mon profil</NavDropdown.Item>
                                    <NavDropdown.Item href="/logout">Déconnexion</NavDropdown.Item>
                                </NavDropdown>
                                <NavDropdown title={<img className="bl" src="/img/Vector.png" alt="" />}>
                                    <Nav.Link href="/admin/dashboard"><img className="bl" src="/img/Vector (2).png" alt="" />Admin</Nav.Link>
                                    <NavDropdown.Item href="/user">Gérer mon profil</NavDropdown.Item>
                                    <NavDropdown.Item href="/logout">Déconnexion</NavDropdown.Item>
                                </NavDropdown>
                                <Nav.Link href="/contact"><img src="/img/Vector (3).png" alt="" />Contactez-nous</Nav.Link>
                            </Nav>
                        
                   
                </Navbar.Collapse>
           
        </Navbar>
        
    )
}





export default Header