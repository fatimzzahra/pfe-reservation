let currentSlide = 0;
    const slides = document.querySelectorAll('.offer-slide img');
    const totalSlides = slides.length;
    let slideInterval = setInterval(nextSlide, 3000);
    let isPaused = false;
    let resumeTimeout;
    const paginationContainer = document.querySelector('.pagination');

    // Generate pagination circles dynamically
    for (let i = 0; i < totalSlides; i++) {
        const circle = document.createElement('div');
        circle.classList.add('pagination-circle');
        circle.addEventListener('click', () => goToSlide(i));
        paginationContainer.appendChild(circle);
    }

    const paginationCircles = document.querySelectorAll('.pagination-circle');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? '1' : '0';
        });
        updatePagination(index);
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    function pauseSlide() {
        clearInterval(slideInterval);
        isPaused = true;
        clearTimeout(resumeTimeout);
        resumeTimeout = setTimeout(resumeSlide, 5000);
    }

    function resumeSlide() {
        if (isPaused) {
            slideInterval = setInterval(nextSlide, 3000);
            isPaused = false;
        }
    }

    function goToSlide(index) {
        currentSlide = index;
        showSlide(currentSlide);
        pauseSlide();
    }

    function updatePagination(index) {
        paginationCircles.forEach((circle, i) => {
            circle.classList.toggle('active', i === index);
        });
    }

    document.querySelectorAll('.arrow').forEach(button => {
        button.addEventListener('click', () => {
            pauseSlide();
        });
    });

    showSlide(currentSlide);