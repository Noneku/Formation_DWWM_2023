import React from 'react'
import{useParams} from 'react-router-dom'

const Profile = () => {


    const params = useParams()
    console.log(params);
  return (
    <div> Votre Profile{params.id}</div>
  )
}

export default Profile