@extends('template')
@section('content')
<div class="container ">
    <section class="{{-- slider-section --}} {{-- custom-bg h-[550px] --}} ">
         {{--<div class=" absolute  h-[550px]    ">
            <div class="slider-background "></div>
            <div class="slider-background"></div>
            <div class="slider-background"></div>
            <div class="content">
        </div> --}}
        <div class="justify-center items-center w-full">
            <h1 class=" text-white font-bold text-center text-5xl  py-28 px-8">Choisissez votre destination  vivez votre aventure !</h1>
            <section class=" w-1/2 mx-auto ">
                <div class="searchSection mb-6 mx-5 ">
                  <form action="{{ route('destinations.search') }}" method="GET">
                    <div class="flex items-center ">
                        <div class="flex items-center bg-white  border-white border-2  px-5 flex-grow rounded-s-full">
                          <svg class="h-6 w-6 text-[#0E153A]"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />  <circle cx="12" cy="10" r="3" /></svg>
                          <input
                            type="text"
                            name="query"
                            placeholder="Search for your destination"
                            id="search"
                            class="bg-transparent focus:outline-none w-full text-zinc-600 border-none focus:border-none "
                          />
                        </div>
                        <button class="bg-[#0E153A] border-white border-2 text-white px-4 py-2  rounded-e-full">search</button>
                      </div> 
                      </form>                     
                </div>
            </section>
            <div class="px-4 py-10 w-1/2 ">
                <button class="bg-white/0 border-white border text-white px-4 py-2  rounded-full">search</button>
                <p class="text-white">
                  Book your travel and transportation service with us and enjoy a hassle-free and memorable journey
                </p>
            </div>
    
          </div>
    </section>

    @if(isset($isSearch) && $isSearch)
    <section class="bg-white"><!--top destinations section-->
        <div class=" dark:bg-zinc-900 p-8">
            <div class="max-w-7xl mx-auto">
              <h2 class="text-2xl font-bold text-zinc-800 dark:text-zinc-200">Explore Destinations</h2>
              <p class="text-zinc-600 dark:text-zinc-400 mt-2">
                Choose a city below to explore destinations and attractions.
              </p>
              <a href="#" class="text-blue-500 dark:text-blue-400 mt-4 inline-block">See All Cities →</a>
              <div class="grid grid-cols-4 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                
              @foreach($destinations as $destination)
              <a href="{{ route('destination.index', ['destination_id' => $destination->id]) }}">
                <div class="relative flex">
                  <img
                  src="{{asset('https://media.istockphoto.com/id/903417402/photo/luxury-construction-hotel-with-swimming-pool-at-sunset.jpg?s=612x612&w=0&k=20&c=NyPC_c-wE3W_CImA4t57FpyGy6f428CYROd80jxVC4A=')}} "
                  alt="Dallas"
                    class="w-full h-full object-cover rounded-lg shadow-md"
                    crossorigin="anonymous"
                  />
                  <div class="absolute bottom-0 left-0 right-0 bg-black/50 bg-opacity-50 p-4 rounded-b-lg">
                    <h3 class="text-white text-lg font-semibold">{{ $destination->name }}</h3>
                    <p class="text-zinc-300">85 Properties</p>
                  </div>
                </div>
                </a>
                @endforeach
              </div>
            </div>
          </div>
          
    </section>
    @else
        @if($isDestinationSelected)
         <section><!--description of destination choosen-->
            <div class="container mx-auto px-4">
                <div class="flex justify-center items-center">
                    <div class="w-1/2 absolute z-10 left-20">
                        <div class="bg-white   px-8 py-1">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ $destination->id }}---{{ $destination->name }}</h3>
                            <h4 class="text-xl font-bold text-gray-800 mb-4">MAROMA SPA BY GUERLAIN</h4>
                            <p class="text-gray-600 mb-4">{{ $destination->description }}</p>
                        </div>
                    </div>
                    <div class="w-1/2 relative left-1/4 bottom-3  h-[350px]  border-t-4 border-l-4  border-yellow-500">
                        <img src="{{ asset('images/hotel2.jpg') }}" alt="Spa Image" class=" w-full h-full">
                    </div>
                </div>
        </section>
         <section class="bg-white"><!--result of serch-->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-2xl font-bold mb-2">Top travel packages this month</h2>
        <p class="text-zinc-600 mb-8">Explore most trending tour packages indonesia</p>
        <div class="grid grid-cols-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($hotels as $hotel)
        <a href="{{ route('hotel.show', $hotel->id) }}">
        <div class="bg-white rounded-md border  overflow-hidden">
          <img
          src="{{asset('https://media.istockphoto.com/id/907614450/photo/luxury-resort-hotel-with-swimming-pool-at-sunset.jpg?s=612x612&w=0&k=20&c=eUijzw-MkPw00HAw464I3mwa4b17yhrfvh5HiGZiEqo=')}} "
          alt="Trip to Bromo"
          class="w-full h-48 object-cover"
          />
          <div class="p-4">
          <h3 class="text-lg font-semibold">{{ $hotel->name }}</h3>
          <p class="text-zinc-500">{{ $hotel->destination_name }}</p>
          <div class="flex items-center text-zinc-500 mb-2">
          <span class="text-orange-500">{{ $hotel->class_stars}}★</span>
          <span>(492 Reviews)</span>
          </div>
          <p class="text-base ">{{ $hotel->address }} </p>
          <p class="text-zinc-500 text-sm">Includes taxes & fees</p>
          </div>
          </div>
        </a>
        @endforeach
       
        </div>
        <div class="flex justify-center mt-8">
        <button class="bg-zinc-200 text-zinc-700 px-4 py-2 rounded-lg">See More</button>
        </div>
        </div>

            </section>
            @else
            <section class="bg-white w-full"><!--top destinations section-->
        <div class=" p-8">
            <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl font-bold text-zinc-800 ">Explore Destinations</h2>
              <p class="text-zinc-600  mt-2">
                Choose a city below to explore destinations and attractions.
              </p>
              <a href="#" class="text-blue-500 dark:text-blue-400 mt-4 inline-block">See All Cities →</a>
              <div class="grid grid-cols-4 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                
              @foreach($destinations as $destination)
              <a href="{{ route('destination.index', ['destination_id' => $destination->id]) }}">
                <div class="relative flex">
                  <img
                  src="{{asset('https://media.istockphoto.com/id/903417402/photo/luxury-construction-hotel-with-swimming-pool-at-sunset.jpg?s=612x612&w=0&k=20&c=NyPC_c-wE3W_CImA4t57FpyGy6f428CYROd80jxVC4A=')}} "
                  alt="Dallas"
                    class="w-full h-full object-cover rounded-lg shadow-md"
                    crossorigin="anonymous"
                  />
                  <div class="absolute bottom-0 left-0 right-0 bg-black/50 bg-opacity-50 p-4 rounded-b-lg">
                    <h3 class="text-white text-lg font-semibold">{{ $destination->name }}</h3>
                    <p class="text-zinc-300">85 Properties</p>
                  </div>
                </div>
                </a>
                @endforeach
              </div>
            </div>
          </div>
          
    </section>
    <section class="bg-white"><!--result of serch-->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-2xl font-bold mb-2">Top travel packages this month</h2>
        <p class="text-zinc-600 mb-8">Explore most trending tour packages indonesia</p>
        <div class="grid grid-cols-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($hotels as $hotel)
        <a href="{{ route('hotel.show', $hotel->id) }}">
        <div class="bg-white rounded-md border  overflow-hidden">
          <img
          src="{{asset('https://media.istockphoto.com/id/907614450/photo/luxury-resort-hotel-with-swimming-pool-at-sunset.jpg?s=612x612&w=0&k=20&c=eUijzw-MkPw00HAw464I3mwa4b17yhrfvh5HiGZiEqo=')}} "
          alt="Trip to Bromo"
          class="w-full h-48 object-cover"
          />
          <div class="p-4">
          <h3 class="text-lg font-semibold">{{ $hotel->hotel_name }}</h3>
          <p class="text-zinc-500">{{ $hotel->destination_name }}</p>
          <div class="flex items-center text-zinc-500 mb-2">
          <span class="text-orange-500 mr-1">★ {{ $hotel->class_stars}} </span>
          <span>(492 Reviews)</span>
          </div>
          <p class="text-lg font-bold">$700 <span class="text-sm font-normal">/pax</span></p>
          <p class="text-zinc-500 text-sm">Includes taxes & fees</p>
          </div>
          </div>
        </a>
        @endforeach
       
        </div>
        <div class="flex justify-center mt-8">
            {{ $hotels->links() }}
        </div>
        </div>

            </section>
            @endif
    @endif
            
    <!-- <section class="bg-white">
            <div class="container mx-auto p-6">
        <h1 class="text-5xl font-bold text-center mb-8">Things to do in Seoul</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
        <img 
        src="{{asset('https://media.istockphoto.com/id/119926339/photo/resort-swimming-pool.jpg?s=612x612&w=0&k=20&c=9QtwJC2boq3GFHaeDsKytF4-CavYKQuy1jBD2IRfYKc=')}} "
        alt="Seoul cityscape" class="w-full h-auto" />
        </div>
        <div>
        <p class="text-lg mb-8">
        The capital of South Korea blends traditional places with high-rises amid a cutting-edge
        fashion and design scene
        </p>
        <div class="grid grid-cols-2 gap-4">
        <img 
        src="{{asset('https://media.istockphoto.com/id/119926339/photo/resort-swimming-pool.jpg?s=612x612&w=0&k=20&c=9QtwJC2boq3GFHaeDsKytF4-CavYKQuy1jBD2IRfYKc=')}} "
        alt="Traditional place" class="w-full h-auto" />
        <img 
        src="{{asset('https://media.istockphoto.com/id/119926339/photo/resort-swimming-pool.jpg?s=612x612&w=0&k=20&c=9QtwJC2boq3GFHaeDsKytF4-CavYKQuy1jBD2IRfYKc=')}} "
        alt="Modern architecture" class="w-full h-auto" />
        </div>
        <a href="#" class="text-blue-600 mt-4 inline-block">Book a tour</a>
        </div>
        </div>
        </div>

    </section> -->
            
    <!-- <section class="bg-white">
        <div class="bg-white dark:bg-zinc-900 p-6">
            <div class="max-w-7xl mx-auto">
              <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-zinc-900 dark:text-white">
                Exclusive flight deals just for you!
                </h2>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="relative">
                  <img
                    src="https://arcmaxarchitect.com/sites/default/files/resort_hotel_design_sample_-11.jpg"
                    alt="Exclusive Travel Offers"
                    class="w-full h-full object-cover rounded-lg"
                    />
                <div
                    class="absolute inset-0 bg-black/50 bg-opacity-50 rounded-lg p-4 flex flex-col justify-between"
                    >
              <div class="flex justify-between items-center">
                  <div class="bg-yellow-500 p-2 rounded-full">
                    <img src="https://placehold.co/24x24" alt="Icon" />
                  </div>
            <span class="bg-zinc-800 text-white text-sm px-2 py-1 rounded-lg"
            >Valid only on 2 Jan - 24 Jan 2024</span
            >
        </div>
        <div class="text-white mt-4">
            <h3 class="text-xl font-bold">Exclusive Travel Offers Just For You!</h3>
            <p class="text-4xl font-bold">30%</p>
            <p class="text-sm">*with Terms and Condition</p>
        </div>
        </div>
        </div>
        <div class="relative">
        <img
        src="https://arcmaxarchitect.com/sites/default/files/resort_hotel_design_sample_-11.jpg"
        alt="Enjoy Cashback on Your Journey"
        class="w-full h-full object-cover rounded-lg"
        />
        <div
        class="absolute inset-0 bg-black/50 bg-opacity-50 rounded-lg p-4 flex flex-col justify-between"
        >
        <div class="flex justify-between items-center">
            <div class="bg-yellow-500 p-2 rounded-full">
            <img src="https://placehold.co/24x24" alt="Icon" />
            </div>
            <span class="bg-zinc-800 text-white text-sm px-2 py-1 rounded-lg"
            >Valid only on 10 Jan - 10 Feb 2024</span
            >
        </div>
        <div class="text-white mt-4">
            <h3 class="text-xl font-bold">Enjoy Cashback on Your Journey</h3>
            <p class="text-4xl font-bold">Up to 500k</p>
            <p class="text-sm">*with Terms and Condition</p>
        </div>
        </div>
        </div>
        </div>
        
        </div>
    </div>
    </section> -->

<script>
    $(function() {
        $('#destination-search').autocomplete({
            source: "{{ route('autocomplete.destination') }}",
            minLength: 2,
            select: function(event, ui) {
                window.location.href = '/destinations?destination_id=' + ui.item.id;
            }
        });
    });
</script>

@endsection