@extends('template')
@section('content')
<!-- <div class=" absolute bg-[url('images/hotel-lobby.jpg')] mx-auto w-full  h-fully"> -->
    <!-- <div class=" bg-white-500 bg-sky-500/0 border-8 border-white w-[1100px] mt-5 rounded-t-lg mx-auto" id="global"> -->

<section class="container mx-auto mt-8 px-4 flex">

<!-- Statistics Section -->
<div class="statistic w-1/2">
    <h1 class="ml-16 w-[400px] text-4xl font-bold pl-5 relative top-20 text-white ">Explore the World with our Website
    </h1>
    <div class="ml-16 w-[400px] flex space-x-8 justify-around p-4 rounded-lg relative top-40 bg-white-500 bg-sky-200/25">
      <div class="text-center text-white">
        <i class="plane fas fa-plane text-blue-500 text-3xl mx-auto mb-2 "></i>
        <p class="text-yellow-400 text-lg font-bold">19,000</p>
        <p>Travel Experiences</p>
      </div>
      <div class="text-center text-white">
         <i class="fas fa-globe text-blue-500 text-3xl mx-auto mb-2"></i>
        <p class="text-yellow-400 text-lg font-bold">100</p>
        <p>Countries</p>
      </div>
      <div class="text-center text-white">
        <i class="fas fa-users text-blue-500 text-3xl mx-auto mb-2"></i>
        <p class="text-yellow-400 text-lg font-bold">1,240,000</p>
        <p>User Per Year</p>
      </div>
    </div>
</div>

<!-- Form Section -->

<div class=" w-[370px] mx-auto bg-white dark:bg-zinc-800 p-4 rounded-lg shadow-lg relative left-5 mb-4">
        <div class="form flex justify-around mb-4 ">
            <button id="hotels-tab" class="flex-1 text-center py-2 border-b-2 border-yellow-500 text-yellow-500 font-semibold" onclick="showHotels()">
                <span aria-label="location"><i class="fas fa-hotel w-6 h-6"></i></span>
                Hotels
            </button>

            <button id="flights-tab" class="flex-1 text-center py-2 text-black border-b-2 border-black-500 " 
            onclick="showFlights()">
                <span aria-label="location"><i class="plane fas fa-plane w-4 h-4 mr-1"></i></span>
                Vols
            </button>
        </div>
        <!-- Hotels Form -->
        <div id="hotel-fields" class="space-y-4" >
            <form method="post" >
                <div class="mb-3 ">
                    <label for="hotel" class="block text-gray-700">Hotel</label>
                    <input type="text" id="hotel" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Hotel name">
                </div>
                <div class="mb-3">
                    <label for="checkin" class="block text-gray-700">Check-in</label>
                    <input type="date" id="checkin" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-3">
                    <label for="checkout" class="block text-gray-700">Check-out</label>
                    <input type="date" id="checkout" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                </div>

                <!-- rooms -->
                <div class="flex items-center justify-between mb-2">
                  <div class="flex items-center">
                    <button class="w-[30px] h-[30px] text-center border rounded-full">-</button>
                    <span class="px-4">2</span>
                    <button class="w-[30px] h-[30px] text-center border rounded-full">+</button>
                  </div>
                  <span class="text-zinc-500 dark:text-zinc-300">2 rooms</span>
                </div>

                <!-- persons -->
                <div class="flex items-center justify-between mb-3">
                  <div class="flex items-center">
                    <button class=" border w-[30px] h-[30px] rounded-full text-center">-</button>
                    <span class="px-4">3</span>
                    <button class="w-[30px] h-[30px] text-center border rounded-full">+</button>
                  </div>
                  <span class="text-zinc-500 dark:text-zinc-300">3 persons</span>
                </div>

                <button class="w-full py-2 bg-black text-yellow-500 font-semibold rounded-lg">Book Now</button>
            </form>
        </div>
        <!-- Flights Form -->
        <div id="flight-fields" class="hidden space-y-4">
            <form method="post" >

                <div class="mb-3 ">
                    <label for="hotel" class="block text-gray-700">Fly from</label>
                    <input type="text" id="hotel" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Departure">
                </div>
                <div class="mb-3 ">
                    <label for="hotel" class="block text-gray-700">Fly to</label>
                    <input type="text" id="hotel" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Arrival">
                </div>
                <div class="mb-2">
                    <div class="flex gap-2">
                        <label for="checkin" class="px-4 block text-gray-700">Departure Date</label>
                        <label for="checkout" class="px-4 block text-gray-700">Return Date</label>
                    </div>
                    <div class="flex gap-2">
                        <input type="date" id="checkin" class="px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                        <input type="date" id="checkout" class="px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="checkout" class="block text-gray-700">Passengers</label>
                    <input type="text" id="checkout" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="1 Person">
                </div>

                <button class="w-full py-2 bg-black text-yellow-500 font-semibold rounded-lg">Book Now</button>
            </form>
        </div>
    
</div>

</section>
</div>

<div class="w-[1100px] mx-auto bg-white border-8 border-white rounded-b-lg mb-5">

<!-- title section -->
<section>
    <div class="container">
        <!-- Section Separator with Title -->
        <div class="section-header">
            <div class="line"></div>
            <h2 class="section-title">Section Title</h2>
            <div class="line"></div>
        </div>
    </div>
</section>
<!-- Inspiration section  -->
<section class="dest slide-container text-center " id="slide-wrapper">
       <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <div class="slide-wrapper  h-[360px] gap-4 p-4  border-8 border-white w-[1100px] mx-auto" id="carousel" >
        @foreach($topDestinations as $destination)
        
        <a href="{{ route('destination.index', ['destination_id' => $destination->id]) }}">
          <div class="slide relative h-full rounded-lg overflow-hidden shadow ml-2">
            <img src="{{ asset('images/hotel7.jpg') }}" alt="Hotel Image" class="w-full h-full object-cover" />
            <div class="content absolute h-[120px] bottom-0 left-0 right-0 p-2">
              <h3 class="text-white font-bold text-lg text-center pb-1">{{ $destination->name }}</h3>
              <p class="text-white text-m text-center">
                {{ $destination->description }}  
              </p>
            </div>
          </div>
        </a>
        @endforeach
      
    </div>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
</section>

<script>
    let currentIndex = 0;
    let isAnimating = true;
    let animationTimeout;

    function plusSlides(n) {
        const carousel = document.getElementById('carousel');
        const slideWidth = carousel.querySelector('.slide').clientWidth;
        const gap = parseInt(window.getComputedStyle(carousel).getPropertyValue('gap')) || 0;
        const slidesToShow = Math.floor(carousel.clientWidth / (slideWidth + gap));
        const totalSlides = carousel.children.length;
        const maxIndex = Math.ceil(totalSlides / slidesToShow) - 1;

        currentIndex += n;
        if (currentIndex < 0) {
            currentIndex = maxIndex;
        } else if (currentIndex > maxIndex) {
            currentIndex = 0;
        }

        const newTransformValue = -(currentIndex * (slideWidth + gap) * slidesToShow);
        carousel.style.transform = `translateX(${newTransformValue}px)`;

        // Stop the CSS animation
        if (isAnimating) {
            carousel.style.animation = 'none';
            isAnimating = false;
        }

        // Clear any existing timeout and set a new one to reactivate the animation
        clearTimeout(animationTimeout);
        animationTimeout = setTimeout(() => {
            carousel.style.animation = 'slide 10s linear infinite';
            isAnimating = true;
        }, 10000);  // Reactivate animation after some seconds of no interaction
    }
</script>

<!-- <section class="dest slide-container text-center" id="slide-wrapper">
        <div class="carousel-container">
            <button class="prev carousel-btn" onclick="plusSlides(-1)">&#10094;</button>
            <div class="slide-wrapper  h-[360px] gap-4 p-4  border-8 border-white w-[1100px] mx-auto"" id="carousel">
                <div class="carousel-images">
                    @foreach($topDestinations as $destination)
                    <a href="{{ route('destination.index', ['destination_id' => $destination->id]) }}">
                        <div class="slide relative h-full rounded-lg overflow-hidden shadow ml-2">
                            <img src="{{ asset('images/hotel7.jpg') }}" alt="Hotel Image" class="w-full h-full object-cover">
                            <div class="content absolute h-[120px] bottom-0 left-0 right-0 p-2">
                                <h3 class="text-white font-bold text-lg text-center pb-1">{{ $destination->name }}</h3>
                                <p class="text-white text-m text-center">
                                  {{ $destination->description }}
                                </p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <button class="next carousel-btn" onclick="plusSlides(1)">&#10095;</button>
        </div>
    </section> -->


    <!-- <script>
        let currentIndex = 0;

        function plusSlides(n) {
            const carouselImages = document.querySelector('.carousel-images');
            const totalImages = carouselImages.children.length;
            const imagesPerSlide = 4;
            if (n === -1 && currentIndex > 0) {
                currentIndex -= imagesPerSlide;
            } else if (n === 1 && currentIndex < totalImages - imagesPerSlide) {
                currentIndex += imagesPerSlide;
            }
            carouselImages.style.transform = `translateX(-${currentIndex * 25}%)`;
        }
    </script> -->


<!-- title section -->
<section>
    <div class="container">
        <!-- Section Separator with Title -->
        <div class="section-header">
            <div class="line"></div>
            <h2 class="section-title">Section Title</h2>
            <div class="line"></div>
        </div>
    </div>
</section>

<!-- hotels section -->

<section class="hotel flex w-full mx-auto mt-4 p-2">

@foreach($topHotels as $index => $hotel)
    <div class="hotel-card {{ $index === 0 ? 'hovered' : '' }} h-[370px]">
        <img src="{{ asset('images/img3_hotel.png') }}" alt="Hotel Image" class="object-cover w-full h-[143px]" />
        <div class="content ">
            <h3 class="text-lg font-bold h-[60px]">{{ $hotel->hotel_name }}</h3>
            <p class="text-sm">3-persons</p>
            <div class="flex justify-between text-sm mt-2">
                <span>310 m²</span>
                <span>3-persons</span>
            </div>
            <div class="flex items-center mt-2">
                @php
                $stars = $hotel->class_stars ?? 0;
                @endphp
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $stars)
                        <span class="text-orange-500">★</span>
                    @else
                        <span class="text-gray-400">★</span>
                    @endif
                @endfor
            </div>
            <p class="text-2xl font-bold mt-2 text-black">
            {{ $hotel->price_per_night }}$
            </p>
        </div>
        <!-- <div class="arrow">
            <button class="text-xl font-bold text-white">→</button>
        </div> -->
        <div class="hover-content">
            <div class="top-left">{{ $hotel->destination_name }}</div>
            <div class="bottom-left mb-2">
                <h2 class="text-xl font-bold">{{ $hotel->hotel_name }}</h2>
                <p>description</p>
                <p>3-persons</p>
                <p>310 m²</p>
                <div class="flex items-center mt-2">
                @php
                $stars = $hotel->class_stars ?? 0;
                @endphp
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $stars)
                        <span class="text-orange-500">★</span>
                    @else
                        <span class="text-gray-400">★</span>
                    @endif
                @endfor
            </div>
               
                <p class="text-2xl font-bold mt-2">{{ $hotel->price_per_night }}$</p>
            </div>
            <div class="bottom-right">
            <a href="{{ route('hotel.show', $hotel->id) }}">
               <button class="text-xl font-bold text-[#1E3A8A]">→</button>
            </a>
            </div>
        </div>
    </div>
@endforeach
<script src="{{ asset('js/hotelSectionHome.js') }}"></script>

<!-- publicite -->

  <div class="max-w-xs ml-4 my-auto">
  <div class="relative slideshow-container">
    <?php for($i = 1; $i <= 3; $i++) { ?>
      <div class="mySlides">
        <img
          src="https://placehold.co/300x500?text=Slide+<?= $i ?>"
          alt="carousel image <?= $i ?>"
          class="w-full h-auto shadow-lg"
        />
      </div>
    <?php } ?>

    <div class="absolute bottom-2 left-1/3 transform -translate-x-1/2 flex space-x-2">
      <?php for($i = 1; $i <= 3; $i++) { ?>
        <span class="dot" onclick="currentSlide(<?= $i ?>)"></span>
      <?php } ?>
    </div>
  </div>
</div>
</section>

<!-- title section -->
<section>
    <div class="container">
        <!-- Section Separator with Title -->
        <div class="section-header">
            <div class="line"></div>
            <h2 class="section-title">Section Title</h2>
            <div class="line"></div>
        </div>
    </div>
</section>
<!-- flight offers section -->
<section class="flight-offers w-full pl-3 pb-10">
    <div class="flights flex space-x-4 my-2 ">
    @foreach($topFlightOffers as $offer)
          <div class="flight relative w-[260px] h-[320px] overflow-hidden group">
            <img
              src="{{ asset('images/vol2.jpg') }}"
              alt="Travel Image 1"
              class="w-full h-full object-cover transition-transform duration-300 ease-in-out transform group-hover:scale-110"
            />
            <div class="content absolute bottom-0 left-0 right-0 bg-slate-950/50 py-2 pl-2 pr-7 h-50">
              <div class="text-yellow-400 font-bold">{{ $offer->departure_name }} to {{ $offer->arrival_name }}</div>
              <div class="text-white text-xs">{{ $offer->departure_time }} → {{ $offer->arrival_time  }}.</div>
              <div class="text-amber-500 text-sm text-right">Vols directs - A/R</div>
              <div class="text-yellow-400 text-2xl font-bold mt-2 text-center">{{ $offer->discount_percentage }}%</div>
              <div class="text-white text-xl text-center">{{ $offer->price }}$</div>
              <!-- {{ $offer->flight_number }} -->
            </div>
          </div>
    @endforeach
  
    </div>
</section>
<!-- </div> -->

     <!-- </div> -->
@endsection