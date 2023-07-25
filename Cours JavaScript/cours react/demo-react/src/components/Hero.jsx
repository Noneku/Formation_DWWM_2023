import React from 'react'

const Hero = ({name, civilName, mainColor}) => {
  return (
    <div>
        <p>
            nom : {name}
        </p>
        <p>
            nom civil : {civilName}
        </p>
        <p>
            couleur principale : {mainColor}
        </p>
    </div>
  )
}

export default Hero