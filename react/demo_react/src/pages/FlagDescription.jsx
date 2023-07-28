import React , {useEffect , useState }from "react";
import { useParams } from "react-router-dom";

const FlagDescription = () => {
  const params = useParams();

const [country, setCountry] = useState([])
;

  useEffect(() => {
    fetch("https://restcountries.com/v3.1/alpha/" +params.id)
    .then(response => response.json())
    .then(data => setCountry(data ))

   }, []);

  return (
  
 
    
   <div>
Description du pays : {country[0]?.translations.fra.official}
<br />
Nom commun : {country[0]?.name.common}
<br />
Nom officiel : {country[0]?.name.official}
<br />
Population : {country[0]?.population}
<br />
Capital : {country[0]?.capital}
<br />
{/* Drapeau :<img src =  {country[0]?.flags.png}/> */}
Coordonne gps de la capitale : {country[0]?.capitalInfo.latlng}
<br />
continent: {country[0]?.continents}
<br />
nom des habitants : {country[0]?.demonyms.fra.m}



   </div>
  

)}

export default FlagDescription;
