import { useState } from 'react'
import './App.css'
import ComposantParent from './components/ComposantParent'
import ComposantEvent from './components/ComposantEvent'
import ComposantInput from './components/ComposantInput'
import Garage from './components/Garage'

function App() {
  
  // const [prenom, setPrenom] = useState("David");
  // const [age, setAge] = useState(36);

  // function changeName() {
  //   setPrenom("Matthieu");
  // }

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
