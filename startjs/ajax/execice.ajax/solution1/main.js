const searchBar =document.querySelector('#site-search');

searchBar.addEventListener('keyup',e => {
    const searchletter=e.target.value;
    const personnages=document.querySelectorAll('.personnage');
    filterElements(personnages,searchletter);

});

function filterElements(personnages,searchletter) {

    if(searchletter.length>0){
        for(let i=0;i<personnages.length;i++){
            if(personnages[i].textContent.toLowerCase().includes(searchletter)){
                personnages[i].style.display='block';
            }else{
                    personnages[i].style.display='none';
            }
        }
    }
}