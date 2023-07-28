// import { useEffect, useState } from 'react'
import "./App.css";
// import ComposantParent from './components/ComposantParent'
// import ComposantEvent from './components/ComposantEvent'
// import ComposantInput from './components/ComposantInput'
// import ComposantGarage from './components/ComposantGarage'
// import Garage from './components/ComposantGarage'
// import Ligue from './components/ComposantLigue'
import { Routes, Route } from "react-router-dom";
import Home from "./pages/Home";
import Services from "./pages/Services";
import Profile from "./pages/Profile";
import Navbar from "./components/Navbar";
import Developpement from "./pages/Services/Developpement";
import Marketing from "./pages/Services/Marketing";
import Login from "./pages/Login";
import ComposantEnfant from "./components/ComposantEnfant";
import Heros from "./components/ComposantHeros";
import ComposantInput from "./components/ComposantInput";
import ComposantParent from "./components/ComposantParent";
import ComposantEvent from "./components/ComposantEvent";
import ComposantGarage from "./components/ComposantGarage";
import ComposantLigue from "./components/ComposantLigue";
import Formulaire from "./components/Formulaire";
import Flags from "./pages/Flags";
import FlagDescription from "./pages/FlagDescription";

function App() {
  // const [prenom, setPrenom] = useState("karim");
  // const [age, setAge] = useState("35");
  // const [count, setCount] = useState(0);

  // function changerPrenom() {
  //   setPrenom("rimk");
  // }

  // useEffect(() => {
  //   changerPrenom();

  // },[]);

  // function changerAge() {
  //   setAge("20");
  // }

  // useEffect(() => {
  //   // changerAge();
  //   console.log(count);

  // },[count]);

  return (
    //   <>
    //     <h1>hello {prenom}</h1>
    //     <h1>vous avez {age} ans</h1>
    //     <button onClick = {()=>setCount(count+1)}>+</button>
    //  {/* <ComposantParent/>
    // <ComposantEvent/>
    // <ComposantInput/>

    // import du compsant garage
    // <Garage/> */}
    // {/* <Ligue/> */}

    //   </>

    <div className="App">
      <Navbar />

      <Routes>

        <Route path="/" element={<Home />} />
        <Route path="/services" element={<Services />} />
        <Route path="/services/Developpement" element={<Developpement />} />
        <Route path="/services/Marketing" element={<Marketing />} />
        <Route path="/Login" element={<Login />} />
        <Route path="/composant-enfant" element={<ComposantEnfant />} />
        <Route path="/Composant-event" element={<ComposantEvent />} />
        <Route path="/Composant-garage" element={<ComposantGarage />} />
        <Route path="/Composant-heros" element={<Heros />} />
        <Route path="/Composant-input" element={<ComposantInput />} />
        <Route path="/Composant-pigue" element={<ComposantLigue />} />
        <Route path="/Composant-parent" element={<ComposantParent />} />
        <Route path="/Formulaire" element={<Formulaire />} />
        <Route />
        <Route path="/profile/:id" element={<Profile />} />
        <Route path="/flags" element={<Flags/>} />
        <Route path="/flags/:id" element={<FlagDescription/>} />

      </Routes>

    </div>
  );
}

export default App;
