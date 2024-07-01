@extends('template')
@section('content')

    <script src="https://cdn.tailwindcss.com"></script>
    
<div class="bg-white relative top-[70px]">
    <section class="best-offer flex flex-col md:flex-row bg-white dark:bg-zinc-900 w-full">
  
  <div class="w-full md:w-1/2 p-6">
    <!-- <h1 class="text-4xl font-bold text-black dark:text-white">Reserve Your Ideal Holiday</h1> -->
    <div class="flex ">
        <p class="text-zinc-700 dark:text-zinc-300 mt-4 mr-4 ">Reserve Your Ideal Holiday</p>
        <div class="h-[1px] bg-slate-400 w-[300px] mt-8 "></div>
    </div>

    <div class="flex">
        <p class="text-black dark:text-zinc-400 mt-2 text-sm w-[320px] ">
        We specialize in curating exceptional villa rentals, providing an unparalleled level of comfort, privacy, and convenience for your dream vacation.
        </p>
    <button class="mt-4 bg-black text-white dark:bg-white dark:text-black px-4 h-[40px] rounded-lg ml-20">More →</button>
    
    </div>
    <div class="mt-8">

    <div class="flex space-x-3">
    <?php for($i=0 ; $i<3 ; $i++){ ?>
        <div class="statistic-line flex w-full ">
            <img src="{{asset('images/image_reservation.png')}}" alt="Stat Icon" class="w-10 h-10 rounded-full relative top-2 mr-1">
            <div class="">
                <p class="text-black dark:text-white text-xl font-bold">115k+</p>
                <p class="text-zinc-500 dark:text-zinc-400">Capital Raised</p>
            </div>
        </div>
        <!-- <div class="statistic-line relative h-10 w-1 border-l border-black top-4"></div> -->
    <?php } ?>
</div>

      <div class="offer-slide mt-10 relative">
      <img src="{{asset('images/hotel5.webp')}}" alt="Vancouver, Canada" class="rounded-lg">
    <img src="{{asset('images/hotel6.jpg')}}" alt="Vancouver, Canada" class="rounded-lg">
    <img src="{{asset('images/hotel7.jpg')}}" alt="Vancouver, Canada" class="rounded-lg">
    <div class="absolute top-2 left-2 bg-white text-black px-4 py-1 rounded-full">Popular</div>
    <div class="absolute bottom-2 left-2 flex items-center">
        <div class="absolute bottom-10 left-1 border-gray-300 border-2 text-gray-300 px-4 py-1 rounded-full">Popular</div>
        <div class="etoiles 400 text-amber-400 px-4 py-1 rounded-full">★★★★★</div>
    </div>
    <div class="absolute top-2 right-2 flex items-center">
        <button class="arrow w-8 h-8 text-white rounded-full" onclick="prevSlide()">←</button>
        <button class="arrow text-white w-8 h-8 rounded-full ml-2" onclick="nextSlide()">→</button>
    </div>
    <div class="pagination"></div>
</div>

    </div>
  </div>
  
  <div class="w-full md:w-1/2 relative rounded-lg">
    <img src="{{asset('images/hotel1.jpg')}}" alt="Background Image" class="w-full h-full object-cover rounded-lg">
    <div class="absolute inset-0 bg-black opacity-50 rounded-lg"></div>

    <!-- <div class="absolute top-4 left-4 bg-white p-2 rounded-lg flex items-center">
      <img src="https://placehold.co/40x40" alt="Location Icon" class="rounded-full">
      <p class="ml-2 text-black dark:text-white">Melbourne VIC, Australia</p>
    </div> -->
    
    <div class="absolute top-[200px] left-4 text-white flex ">
        <input class="bg-white w-80 text-black rounded-full mr-3 ml-6 text-center" placeholder="choose your destination"/>
        <button class="bg-black text-white px-4 py-2 rounded-full">Search</button>
      </div>

    <div class="absolute bottom-8 left-4 text-white">
        <div class="absolute h-10 w-1 border-l border-white top-3"></div>
      <h2 class="text-sm font-bold ml-4 mr-12">Enjoy a luxurious Melbourne vacation in a villa with breathtaking city views and easy access to the vibrant city life and culinary delights.</h2>
    </div>
  </div>


</section>
 
<script src="{{ asset('js/scriptOffer.js') }}"></script>

<section>
    <div class="container">
        <!-- Section Separator with Title -->
        <div class="section-header">
            <div class="line"></div>
            <h2 class="section-title">Curious? Browse our selection now!</h2>
            <div class="line"></div>
        </div>
    </div>
</section>

<section>

    <div class="p-6 bg-white  text-zinc-900 ">
  <div class="grid grid-cols-4 gap-4 sm:grid-cols-2 lg:grid-cols-4 ">
    
  <?php for($i=0; $i<7; $i++){?>
    <div class=" rounded-lg border p-4">
      <img src="{{asset('images/hotel7.jpg')}}" alt="California Hotel" class="rounded-lg mb-4">
      <h3 class="text-lg font-semibold">California Hotel</h3>
      <p class="text-black">Kota Malang</p>
      <div class="flex items-center justify-between mt-2">
        <span class="text-black dark:text-zinc-100">$150 /Night</span>
        <span class="flex items-center">
          <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.974a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.39 2.46a1 1 0 00-.364 1.118l1.286 3.974c.3.921-.755 1.688-1.54 1.118l-3.39-2.46a1 1 0 00-1.175 0l-3.39 2.46c-.784.57-1.84-.197-1.54-1.118l1.286-3.974a1 1 0 00-.364-1.118l-3.39-2.46c-.784-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.974z"/></svg>
          <span class="ml-1">4.5</span>
        </span>
      </div>
    </div>
    <?php } ?>
    <div class="bg-black dark:bg-zinc-800 rounded-lg shadow p-4 border-2 border-teal-500">
      <img src="https://placehold.co/300x200" alt="Villa Bromo" class="rounded-lg mb-4">
      <h3 class="text-lg font-semibold">Villa Bromo</h3>
      <p class="text-zinc-500">Pasuruan</p>
      <div class="flex items-center justify-between mt-2">
        <span class="text-zinc-900 dark:text-zinc-100">$85 /Night</span>
        <span class="flex items-center">
          <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.974a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.39 2.46a1 1 0 00-.364 1.118l1.286 3.974c.3.921-.755 1.688-1.54 1.118l-3.39-2.46a1 1 0 00-1.175 0l-3.39 2.46c-.784.57-1.84-.197-1.54-1.118l1.286-3.974a1 1 0 00-.364-1.118l-3.39-2.46c-.784-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.974z"/></svg>
          <span class="ml-1">4.6</span>
        </span>
      </div>
      <!-- <button class="mt-4 w-full bg-teal-500 text-white py-2 rounded-lg">View Availability</button> -->
    </div>
    
  </div>
  <div class="text-right mt-6 ">
    <button class="bg-[#0E153A] text-white py-2 px-4 rounded-lg">See All</button>
  </div>
</div>
  
</section>


<section>
<div class="flex flex-wrap justify-center space-x-4 pb-4 mb-20">

  <!-- <div class="max-w-xs bg-white rounded-lg shadow-md p-4">
    <div class="relative">
      <img src="https://placehold.co/100x100" alt="Tunis" class="w-full rounded-t-lg" />
      <div
        class="absolute top-0 left-0 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-br-lg"
      >
        OFFRE BIENTÔT ÉPUISÉE
      </div>
    </div>
    <div class="p-4">
      <div class="text-zinc-500 text-sm">sept. - 1 oct.</div>
      <div class="text-xl font-bold">Tunis</div>
      <div class="text-zinc-500 text-sm">À partir de</div>
      <div class="flex items-center justify-between mt-2">
        <div class="text-zinc-400 line-through">131 €</div>
        <div class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-lg">-26%</div>
        <div class="text-red-500 text-xl font-bold">97 €</div>
      </div>
      <div class="text-zinc-500 text-sm mt-2">Prix Prime par passager</div>
    </div>
  </div> -->
<?php for($i=0; $i<3 ; $i++){ ?>
  <div class="max-w-xs bg-white rounded-lg shadow-md grid grid-cols-2 border">
  <div class="relative w-40 h-50 overflow-hidden">
  <img src="{{asset('images/vol1.jpg')}}" alt="Alger" class="w-full h-full object-cover rounded-tl-none rounded-tr-full rounded-bl-[10] rounded-br-full " />
</div>
    <div class="p-4">
      <div class="text-zinc-500 text-sm">18 juin - 17 juil.</div>
      <div class="text-xl font-bold">Alger</div>
      <div class="text-zinc-500 text-sm">À partir de</div>
      <div class="flex items-center justify-between mt-2">
        <div class="text-zinc-400 line-through">156 €</div>
        <div class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-lg">-26%</div>
        <div class="text-red-500 text-xl font-bold">115 €</div>
      </div>
      <div class="text-zinc-500 text-sm mt-2">Prix Prime par passager</div>
    </div>
  </div>

  <?php } ?>
</div>

</section>
</div>
@endsection