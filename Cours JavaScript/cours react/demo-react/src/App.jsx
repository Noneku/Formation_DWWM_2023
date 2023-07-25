import { useState } from 'react'
import './App.css'
import ComposantParent from './components/ComposantParent'
import ComposantEvent from './components/ComposantEvent'
import ComposantInput from './components/ComposantInput'
import Garage from './components/Garage'
import TestImage from './components/TestImage'
import Ligue from './components/Ligue'

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
      {/* <Garage/> */}
      {/* <TestImage/> */}
      <Ligue/>
    </>
  )
}

export default App
