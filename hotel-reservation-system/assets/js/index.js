// Bangladesh hotel and accommodations
const sliders = document.querySelector('.slider');
const left = document.querySelector('.left');
const right = document.querySelector('.right');
const images = document.querySelectorAll('.container');

let counter = 1;
let lenght = images.length;
length = lenght/3;

right.addEventListener( 'click' , () =>{
    if(counter<length){
        sliders.style.transform = `TranslateX(-${counter * 1000}px)`;
        counter++;
    }
    else{
        sliders.style.transform = `TranslateX(-${0}px)`; 
        counter = 1;
    }
})

left.addEventListener( 'click' , () =>{
    if(counter>1){
        sliders.style.transform = `TranslateX(-${(counter -2) * 1000}px)`;
        counter--;
    }
    else{
        sliders.style.transform = `TranslateX(-${0}px)`; 
    }
})


// Most booked hotels in Bangladesh in the past month

const sliderss = document.querySelector('.sliderr');
const leftt = document.querySelector('.leftt');
const rightt = document.querySelector('.rightt');
const imagess = document.querySelectorAll('.containerr');

let cnt = 1;
let len = imagess.length;
len = len/3;

rightt.addEventListener( 'click' , () =>{
    if(cnt<len){
        sliderss.style.transform = `TranslateX(-${cnt * 1000}px)`;
        cnt++;
    }
    else{
        sliderss.style.transform = `TranslateX(-${0}px)`; 
        cnt = 1;
    }
})

leftt.addEventListener( 'click' , () =>{
    if(cnt>1){
        sliderss.style.transform = `TranslateX(-${(cnt -2) * 1000}px)`;
        cnt--;
    }
    else{
        sliderss.style.transform = `TranslateX(-${0}px)`; 
    }
})

// connect read more button index 

// const btnText = document.querySelectorAll('.myBtn');
// const dots = document.querySelectorAll('.dots');
// const moreText = document.querySelectorAll('.more');

document.querySelectorAll('.myBtn').forEach(function(myBtn) {
    myBtn.addEventListener('click', function() {
      const contentContainer = this.previousElementSibling;
      const dots = contentContainer.querySelector('.dots');
      const moreText = contentContainer.querySelector('.more');
  
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        moreText.style.display = "none";
        this.innerText = "Read More";
      } else {
        dots.style.display = "none";
        moreText.style.display = "inline";
        this.innerText = "Read Less";
      }
    });
  });
  