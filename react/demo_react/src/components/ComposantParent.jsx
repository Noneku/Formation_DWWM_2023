import React , {useState} from 'react';
import ComposantEnfant from './ComposantEnfant';

const ComposantParent = () => {

    const [variable, setVariable] = useState("je suis un enfant venant du parent");
function functionParentEnfant(){

    alert("je suis passe par les props")
}

  return (
    <div id= "parent">
    
      <ComposantEnfant data = {variable} transfert={functionParentEnfant}/>
    </div>
  );
}

export default ComposantParent;
