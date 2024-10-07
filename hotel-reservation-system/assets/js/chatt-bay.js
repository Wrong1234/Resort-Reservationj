const sliders = document.querySelector('.slider');
const left = document.querySelector('.left');
const right = document.querySelector('.right');
const images = document.querySelectorAll('.slide');

let counter = 1;
let length = images.length;
length = length/3;
right.addEventListener('click' , () =>{
    if(counter<length){
        sliders.style.transform = `TranslateX(-${counter * 800}px)`;
        counter++;
    }
    else{
        sliders.style.transform = `TranslateX(-${0}px)`;
        counter = 1; 
    }
})

left.addEventListener('click' , () =>{
    if(counter>1){
        sliders.style.transform = `TranslateX(-${(counter-2) * 800}px)`;
        counter--;
    }
    else{
        sliders.style.transform = `TranslateX(-${0}px)`;
    }
})


// document.addEventListener("DOMContentLoaded", function() {
//     console.log("DOM fully loaded and parsed");
//     const loginLink = document.querySelector('.login');
//     const registerLink = document.querySelector('.register');
//     const profileShow = document.querySelector('.showprofile');
//     const logout = document.querySelector('.logout');

//     if (<?php echo isset($_SESSION['username']) ? 'true' : 'false'; ?>) {
//         loginLink.style.display = 'none';
//         registerLink.style.display = 'none';
//         profileShow.style.display = 'inline';
//         logout.style.display = 'inline';
//     }
// });

