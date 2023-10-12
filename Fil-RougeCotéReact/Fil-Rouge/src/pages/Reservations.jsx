import React from 'react';
import { useState,useEffect } from 'react';
import axios from 'axios';

const Reservations = () => {

const [messages, setMessages] = useState([]);



useEffect(() =>{

    const api = axios.create({ baseURL: 'https://127.0.0.1:8000/reservations' });
    api.get('https://127.0.0.1:8000/reservations')
        .then((response) => {
            setMessages(response.data.messages)
        })

        .catch((error) => console.log(error));




},[]);


    return (

        <>

        <h1>Liste des reservations pour l'hotel ViceCity</h1>

<ul>

        {messages
        
        .map((message,index) =>(
 <li key={index} className='at'>

date de reseravtion : {message.dateReservation} <br />
date d'entrer:{message.dateEntree} <br />
date de sortie: {message.dateSortie} <br />
user :{message.id} <br />
chambre: {message.id}


</li>
))}        
</ul>
      
       </>
    );
}

export default Reservations;
