import React from 'react'

const Hero = ({name , civilName, mainColor, photo}) => {

//destructuring//
  // const {marque , couleur, annee} = props ; 

  return (
    <div className='hero'>
      <p>
        name : {name}
      </p>
      <p>
        civilName : {civilName}
      </p>
      <p>
        mainColor : {mainColor}
      </p>
  
         <img src= {photo}>
           

         </img>


    </div>
  )
}

export default Hero