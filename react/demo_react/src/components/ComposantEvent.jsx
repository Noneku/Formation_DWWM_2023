import React from 'react';

const ComposantEvent = () => {

const btnAie = () =>
{

    alert("aie");

}

const changeColor = e  => {


  // event targer cible le class 
    e.target.classList.toggle("text-gold");
}
  return (
    <div>

        <h1 onMouseOver = {changeColor}>hello world !!!</h1>
        <button onClick={btnAie}>Click me !!</button> 
      
    </div>
  )
}

export default ComposantEvent;
