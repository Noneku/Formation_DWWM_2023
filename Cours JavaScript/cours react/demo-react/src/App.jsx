import { useState } from 'react'
import './App.css'
import ComposantParent from './components/ComposantParent'
import ComposantEnfant from './components/ComposantEnfant'
import ComposantEvent from './components/ComposantEvent'
import ComposantInput from './components/ComposantInput'
import Garage from './components/Garage'

function App() {
//   const [prenom,setPrenom] = useState("Alex");
//   const [age, setAge] = useState(21);

//   function changeName() {
//     setPrenom("Nomu");
//   }
  return (
    <>
      {/* <h1>Hello {prenom} !!!</h1>
      <h1>Vous avez {age} ans</h1> */}
      {/* <ComposantParent/>
      <ComposantEvent/>
      <ComposantInput/> */}
      <Garage/>
    </>
  )
}

export default App
