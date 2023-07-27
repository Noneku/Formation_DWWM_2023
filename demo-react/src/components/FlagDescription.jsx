import React, {useEffect} from 'react'
import {useParams} from "react-router-dom"

const FlagDescription = ({flag}) => {


    const params = useParams();


    console.log(params);

useEffect(() => {
 fetch()
},[]) 




  return (
    <div>

        Description de {flag.name.official}

    </div>
  )
}

export default FlagDescription