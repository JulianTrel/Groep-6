let slides = document.getElementsByClassName('slides');
let teller = 0;
function slideshow(){
    for(let slide of slides){
        slide.style.display = 'none'
    }
    slides[teller].style.display = 'flex'
    teller++;
    if(teller == slides.length){
        teller = 0
    }
}
setInterval(slideshow, 1000)

let message = document.getElementsByClassName('form');
