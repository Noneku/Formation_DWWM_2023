import { useState } from "react";
import "./styles.css";

export default function App() {
//state ( état , données)
const [compteur, setCompteur] = useState(1) ;

//comportements
const handleClick = () => {
  alert()
}

  //affichage (render) 
  return (
    <div className="App">
      <h1>{compteur}</h1>
      <h2>Start editing to see some magic happen!</h2>

      <button onClick={handleClick}>Incrémente</button>
      
    </div>
  );
}