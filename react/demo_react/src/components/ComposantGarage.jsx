import React, {useState} from "react";
// import du composant voiture 
import Voiture from "./Voiture";

const Garage = () => {
  const [voitures, setVoitures] = useState([
    {
      marque: "Mercedes",
      couleur: "gris",
      annee: 1999,
    },
    {
      marque: "Audi",
      couleur: "noir",
      annee: 2021,
    },
    {
      marque: "Bmw",
      couleur: "Jaune",
      annee: 2006,
    }
]);
  return <div id = "garage "> Mon Garage se compose de ces voitures : 

    <Voiture marque = {voitures[0].marque} couleur = {voitures[0].couleur} annee = {voitures[0].annee}/>
    <Voiture marque = {voitures[1].marque} couleur = {voitures[1].couleur} annee = {voitures[1].annee}/>
    <Voiture marque = {voitures[2].marque} couleur = {voitures[2].couleur} annee = {voitures[2].annee}/>

     </div>;

};

export default Garage;