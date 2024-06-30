function showHotels() {
    document.getElementById('hotel-fields').classList.remove('hidden');
    document.getElementById('flight-fields').classList.add('hidden');
    document.getElementById('hotels-tab').classList.add('border-b-2','border-yellow-500','text-yellow-500','font-semibold');
    document.getElementById('flights-tab').classList.remove('border-b-2','border-yellow-500','text-yellow-500','font-semibold');
}

function showFlights() {
    document.getElementById('hotel-fields').classList.add('hidden');
    document.getElementById('flight-fields').classList.remove('hidden');
    document.getElementById('hotels-tab').classList.remove('border-b-2','border-yellow-500','text-yellow-500','font-semibold');
    document.getElementById('flights-tab').classList.add('border-b-2','border-yellow-500','text-yellow-500','font-semibold');
}
const carousel = document.getElementById('carousel');

carousel.addEventListener('mouseover', () => {
carousel.style.animationPlayState = 'paused';
});

carousel.addEventListener('mouseout', () => {
carousel.style.animationPlayState = 'running';
});



let slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
let i;
let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";  
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " active";
}