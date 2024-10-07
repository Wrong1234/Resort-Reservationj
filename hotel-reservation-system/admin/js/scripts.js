const canBtn  = document.querySelector('.can-btn');
const subBtn  = document.querySelector('.sub-btn');
const editBtn  = document.querySelector('.btn');
const modal = document.querySelector('.modal');
let count = 0; 
editBtn.addEventListener('click' , () =>{
   editBtn.style.display = 'none'; 
   modal.style.display = 'block'; 
})

canBtn.addEventListener('click' , () =>{
    modal.style.display = 'none'; 
    editBtn.style.display = 'inline'; 
})