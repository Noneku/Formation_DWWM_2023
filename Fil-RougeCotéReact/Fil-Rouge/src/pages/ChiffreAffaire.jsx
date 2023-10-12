import React from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';

function ChiffreAffaire({ chiffreDaffaire }) {
    return (
        <div>
            <h2>Chiffre d'Affaires par Mois</h2>
            <table>
                <thead>
                    <tr>
                        <th>Année</th>
                        <th>Mois</th>
                        <th>Chiffre d'Affaires</th>
                    </tr>
                </thead>
                <tbody>
                    {chiffreDaffaire.map((item, index) => (
                        <tr key={index}>
                            <td>{item.annee}</td>
                            <td>{item.mois}</td>
                            <td>{item.chiffre}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
}

export default ChiffreAffaire;