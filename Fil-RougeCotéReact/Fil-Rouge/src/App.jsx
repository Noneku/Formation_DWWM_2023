import React from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import Header from './components/Header';
import './assets/css/App.css'
import Footer from './components/Footer';
import { Routes, Route } from "react-router-dom";
import Reservations from './pages/Reservations';
import FormulaireChiffreAffaire from './components/FormulaireChiffreDaffaire';

function App() {
  

  return (
    <div className='App'>
      <Header/>
     
      
        <Routes>
          <Route path="/" element= {<Reservations/>} /> 
          <Route path="/Revenue" element= {<FormulaireChiffreAffaire/>} /> 
        </Routes>
      
      <Footer/>
    </div>
  )
}

export default App
