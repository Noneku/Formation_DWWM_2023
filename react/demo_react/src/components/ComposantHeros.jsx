import React from 'react';


const Heros  = (props ) => {



      
    
  return (
      <div>
        <img src={props.photo} alt={props.name} />
      <h2>{props.name}</h2>
      <p>Nom civil: {props.civilName}</p>
      <p>Couleur principale: {props.mainColor}</p>
    </div>
  );
};

export default Heros