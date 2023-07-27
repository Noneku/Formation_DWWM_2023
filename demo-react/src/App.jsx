import { Routes , Route } from 'react-router-dom'
import './App.css';
import Home from './pages/Home';
import Services from './pages/Services';
import Profile from './pages/Profile';
import Navbar from "./components/Navbar"
import Developpement from './pages/Services/Developpement';
import Marketing from './pages/Services/Marketing';
import Login from './pages/Login';
import Connexion from './pages/Login/connexion';
import Inscription from './pages/Login/inscription';
import ComposantFormulaire from './components/ComposantFormulaire';
import Flags from './pages/Flags';
import './App.css'
import ComposantParent from './components/ComposantParent'
import ComposantEvent from './components/ComposantEvent'
import ComposantInput from './components/ComposantInput'
import Garage from './components/Garage';
import React, {useState , useEffect} from 'react';

function App() {
  
return(
  <div className='App'>
    <Navbar/>
     <Routes>
      <Route path="/" element = {<Home/>} />

      <Route path="/services" element = {<Services/>}>
      <Route path='/services/Developpement' element={<Developpement/>}/>
      <Route path='/services/Marketing' element={<Marketing/>}/>
      </Route>

      <Route path="/profile/:id" element = {<Profile/>} />

      <Route path="/login" element = {<Login/>} >
        <Route path="connexion" element = {<Connexion/>}/>
        <Route path="Inscription" element = {<Inscription/>}/>
        </Route>
      <Route path="/formulaire" element = {<ComposantFormulaire/>}/>
      <Route path="/flags" element = {<Flags/>}/>
      <Route path="/flags/:id" element = {<FlagsDescription/>}/>

     </Routes>

     
    <Flags/>
  
  
  </div>
);
/*
  // const [prenom, setPrenom] = useState("David");
  // const [age, setAge] = useState(36);

  // function changeName() {
  //   setPrenom("Matthieu");
  // }

//   return (
//     <>
//       {/* <h1>Hello {prenom} !!!</h1>
//       <h1>Vous avez {age} ans</h1> */}
//       {<ComposantParent/>
//       // <ComposantEvent/>
//       // <ComposantInput/> 
//                           }
//       <Garage/>
//     </>
//   )
// }*/




export default App
