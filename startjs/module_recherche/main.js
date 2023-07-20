const searchBar = document.querySelector("#searchbar")



function filterElements(letters , elements){
    if(letters.length > 1 ){
        for(let i = 0 ; i<elements.length; i++){
            if(elements[i].textContent.toLowerCase().includes(letters)){
                elements[i].style.display = "block";
            }else{
                elements[i].style.display = "none";
            }
        }
    }
}




searchBar.addEventListener("keyup", (e) => 
{
    const searchedLetters = e.target.value;
    const cards = document.querySelectorAll('cards');
    filterElements(searchedLetters , cards);
})


