import React from 'react'

const Voiture = props => {
  return (
    <div className='voiture'>
        marque : {props.marque}
        couleur : {props.couleur}
        annee : {props.annee}
    </div>
  )
}

export default Voiture