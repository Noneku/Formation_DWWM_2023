import React, {useState} from 'react';
import Hero from './Heros.';
import Batman from '../../public/images/batman.jpg';
import Superman from '../../public/images/superman.jpeg';
import Wonder from '../../public/images/wonderwoman.jpg';



const Ligue = () => {

    const [heros, setHeros] = useState([
    {
        name: "Batman",
        civilName: "Bruce Wayne",
        mainColor: "black",
        photo : {Batman}
    },
    {
        name: "Superman",
        civilName: "Clark Kent",
        mainColor: "blue",
        photo : {Superman}
    },
    {
        name: "Wonder Woman",
        civilName: "Diana Prince",
        mainColor: "red",
        photo : {Wonder}
    },
])

return (
    <div id="hero_aff">
        <h1>La ligue</h1> 
   
  
   {
       heros.map((hero, index) => <Hero key = {index} name={hero.name} civilName ={hero.civilName} mainColor={hero.mainColor} photo = {hero.photo}/>)
   }
    </div>
    
)
}
export default Ligue
