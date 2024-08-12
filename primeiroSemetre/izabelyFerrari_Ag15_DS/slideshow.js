var index = 0;
carousel();

function carousel() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    index++;
    if (index > slides.length) { 
        index = 1;
    }
    slides[index - 1].style.display = "block";
    setTimeout(carousel, 9000); 
}

function plusSlides(n) {
    index += n;
    carousel();
}