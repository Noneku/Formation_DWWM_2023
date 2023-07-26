import { Routes , Route } from 'react-router-dom'
import Home from './pages/Home';
import Services from './pages/Services';
import Profile from './pages/Profile';

// import './App.css'
// import ComposantParent from './components/ComposantParent'
// import ComposantEvent from './components/ComposantEvent'
// import ComposantInput from './components/ComposantInput'
// import Garage from './components/Garage'

function App() {
  
return(
  <div className="App">
     <Routes>
      <Route path="/" element = {<Home/>} />
      <Route path="/service" element = {<Services/>} />
      <Route path="/profile" element = {<Profile/>} />
     </Routes>
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
