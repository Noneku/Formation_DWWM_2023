import React, { useState } from 'react';
import Hero from './ComposantHeros';
import Batman from "../images/batman.jpg"
import Superman from "../images/superman.jpeg"
import Wonderwoman from "../images/Wonderwoman.jpg"

const Ligue = () => {

  const initialHeroes = [
    {
      name: "Batman",
      civilName: "Bruce Wayne",
      mainColor: "black",
      photo : Batman 
    },
    {
      name: "Superman",
      civilName: "Clark Kent",
      mainColor: "blue",
      photo : Superman
    },
    {
      name: "Wonder Woman",
      civilName: "Diana Prince",
      mainColor: "red",
      photo : Wonderwoman

    },
  ];

  // Utilisation de useState pour stocker les données des héros
  const [heroes , setHeros]  = useState(initialHeroes);

  return (
    <div>
      <h1>Ligue des Héros</h1>
      <div id =  "herocontainer">
       
      {heroes.map((hero, index) => (
          <Hero key={index} name={hero.name} civilName={hero.civilName}  mainColor = {hero.mainColor} photo= {hero.photo}/>
        ))}

      </div>
    </div>
  );
};

export default Ligue