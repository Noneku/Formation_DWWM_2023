import React, { useState } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import axios from 'axios';



function FormulaireChiffreAffaire() {
    const [post, setPost] = useState({
        DateEntree: '',
        DateSortie: '',
    });

    const handleInput = (event) => {
        setPost({ ...post, [event.target.name]: event.target.value });
    };

    function handleSubmit(event) {
        event.preventDefault();

     

        const sendData = new FormData();
        sendData.set("DateEntree", post.DateEntree);  
        sendData.set("DateSortie", post.DateSortie); 

        axios.post("https://127.0.0.1:8000/api", sendData)
            .then((response) => {
                if (response) {
                    if (response.status === 200) {
                        setPost({ ...post, responseData: response.data });
                        console.log(response.data);
                    }
                }
            })
            .catch(err => console.log(err));
            
    }

    return (
        <div id='chiffre' className='d-flex align-items-center justify-content-center vh-100 w-100'>
            <div className='w-50 text-center'>
                <form onSubmit={handleSubmit}>
                    <div className='mb-3'>
                        <label htmlFor='DateEntree' className='form-label'>Date de début :</label>
                        <input type='date' className='form-control' id='DateEntree' name='DateEntree' onChange={handleInput} />
                    </div>
                    <div className='mb-3'>
                        <label htmlFor='DateSortie' className='form-label'>Date de Fin :</label>
                        <input type='date' className='form-control' id='DateSortie' name='DateSortie' onChange={handleInput} />
                    </div>
                    <button className='btn btn-primary'>Submit</button>
                </form>
            </div>
            <div className='w-50'>
                <p>Chiffre d'affaires :</p>
                  <ul className='list-group'>
        {post.responseData && post.responseData.chiffreDaffaire && post.responseData.chiffreDaffaire.length > 0 ? (
            post.responseData.chiffreDaffaire.map((item, index) => (
                <li key={index} className='list-group-item'>
                    Année : {item.annee}<br />
                    Mois : {item.mois}<br />
                    Chiffre : {item.chiffre} euro
                </li>
            ))
        ) : (
            <li className='list-group-item'>Aucun chiffre d'affaires disponible.</li>
        )}
    </ul>
            </div>
        </div>
    
    );
}

export default FormulaireChiffreAffaire;
