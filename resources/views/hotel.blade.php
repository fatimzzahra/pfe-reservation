@extends('templateHotel')
@section('sousContent')

<div class="container bg-white">
  <!--description of hotel-->
    <section>
        <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-between p-6 lg:p-6">
            <div class="lg:w-1/2 space-y-4">
              <p class="text-sm text-zinc-600 dark:text-zinc-400">Welcome To</p>
              <h1 class="text-4xl font-serif text-yellow-700">{{ $hotel->name }}</h1>
              <p class="text-zinc-700 -300 pl-2 p-2">
              {{ $hotel->description }}
              </p>
              <p class="text-zinc-700 -300 pl-2 p-2">
              {{ $hotel->address }}
              </p>
              <a href="#" class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:underline">
                Learn More
                <svg
                  class="ml-2 w-4 h-4"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                  ></path>
                </svg>
              </a>
            </div>
            <div class="lg:w-1/2 mt-8 lg:mt-0">
              <img
                src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg?cs=srgb&dl=pexels-pixabay-261102.jpg&fm=jpg"
                alt="Hotel Lobby"
                class="w-full h-auto rounded-lg shadow-lg"
              />
            </div>
          </div>
    </section>
    <!--rooms-->
    <section>
        <div class="bg-white dark:bg-zinc-900 py-12 ">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="text-center">
                <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Our Choice</h2>
                <p
                  class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-zinc-900 sm:text-4xl"
                >
                  The best room just for you!
                </p>
                <p class="mt-4 max-w-2xl text-xl text-zinc-500 dark:text-zinc-400 mx-auto">
                  All of these rooms we serve based on your taste. We try to understand your favorite room.
                  You can choose the one that suits you.
                </p>
              </div>
              <div class="mt-10">
                <div class="grid grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-6">
                @foreach($hotel->rooms as $room)
                  <div class="bg-white dark:bg-zinc-800 overflow-hidden  ">
                    <img
                      class="w-full h-72 object-cover"
                      src="https://media.istockphoto.com/id/1216598702/photo/3d-rendering-modern-luxury-bedroom-suite-and-bathroom.webp?b=1&s=170667a&w=0&k=20&c=7lIyMpm47CXl_gmVKKA_KB0Bi02eAQxZovA6FhRW27w="
                      alt="Connecting Room"
                    />
                    <div class="p-2">
                    @if($room->roomType)
                        <h3 class="text-lg leading-6 font-medium text-zinc-900">
                            {{ $room->roomType->type_name }}
                        </h3>
                    @else
                        <h3 class="text-lg leading-6 font-medium text-zinc-900">
                            No Room Type
                        </h3>
                    @endif
                      <p>{{ $room->price_per_night }}$</p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <a href="{{ route('hotel.rooms', $hotel->id) }}" ><button class="bg-gray-200 text-[#0E153A] px-3 py-1 relative left-[975px]  text-end mb-4 mt-4">See more →</button></a> 

          </div>
          
    </section>
    <!--Services-->
    <section>
    <div class="max-w-6xl mx-auto p-4">
      <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-semibold">Enjoy complete and best quality facilities</h2>
      </div>
      <div class="space-y-6">
        <div class="flex items-center space-x-4 border-b pb-4">
          <img
            class="w-1/3 h-40 object-cover rounded"
            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/76/7f/c7/iberostar-founty-beach.jpg?w=500&h=500&s=1"
            alt="Indoor Swimming Pool"
            crossorigin="anonymous"
          />
          <div class="flex-1 space-y-4">
            <div class="flex items-center justify-between ">
              <span class="text-zinc-500">01</span>
            </div>
            <h3 class="text-xl font-semibold">Indoor Swimming Pool</h3>
            <p class="text-zinc-600">
              It is a long established fact that a reader will be distracted by the readable content of
              a page
            </p>
          </div>
        </div>
        <div class="flex items-center space-x-4 border-b pb-4">
          <img
            class="w-1/3 h-40 object-cover rounded"
            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/74/43/c6/welcome-to-riad-verus.jpg?w=500&h=500&s=1"
            alt="Gym Training Ground"
            crossorigin="anonymous"
          />
          <div class="flex-1 space-y-4">
            <div class="flex items-center justify-between">
              <span class="text-zinc-500">02</span>
            </div>
            <h3 class="text-xl font-semibold">Gym Training Ground</h3>
            <p class="text-zinc-600">
              It is a long established fact that a reader will be distracted by the readable content of
              a page
            </p>
          </div>
        </div>
        <div class="flex items-center space-x-4">
          <img
            class="w-1/3 h-40 object-cover rounded"
            src="https://miro.medium.com/v2/resize:fit:1027/1*7BhETl0R80lWMVTT-4wh_g.jpeg"
            alt="Caffe & Restaurant"
            crossorigin="anonymous"
          />
          <div class="flex-1 space-y-4">
            <div class="flex items-center justify-between">
              <span class="text-zinc-500">03</span>
            </div>
            <h3 class="text-xl font-semibold">Caffe & Restaurant</h3>
            <p class="text-zinc-600">
              It is a long established fact that a reader will be distracted by the readable content of
              a page
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>
    <button class="bg-gray-200 text-[#0E153A] px-3 py-1 relative left-[975px]  text-end mb-4">See more →</button>

    
     
      <!--comments-->
      <section class="comments">
            
 
    <section class="relative  bg-white">
    <div class="relative pt-2 pb-32 flex content-center items-center justify-center ">
            <div class="absolute top-0 w-full h-[300px] bg-center bg-cover" style="
                background-image: url('https://digital.ihg.com/is/image/ihg/ihgor-member-rate-web-offers-1440x720');
              ">
              <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
              <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                  <div class="pr-12">
                    <h1 class="text-white font-semibold text-4xl p-4">
                      Your story starts with us.
                    </h1>
                    <p class="mt-4 text-lg text-blueGray-200">
                      This is a simple example of a Landing Page you can build using
                      Notus JS. It features multiple CSS components based on the
                      Tailwind CSS design system.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
              <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
              </svg>
            </div>
          </div>
          <section class="pb-10 bg-white -mt-24">
            <div class="container mx-auto px-4">
              <div class="flex flex-wrap">
                <div class="lg:pt-2 pt-2 w-full md:w-4/12 px-2 text-center">
                  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-2 shadow-lg rounded-lg">
                    <div class="px-2 py-2 flex-auto">
                        <div class=" bg-white flex items-center justify-center ">
                            <div class="w-full mx-auto  bg-white shadow-lg px-2 pt-2 pb-4 text-gray-800" style="max-width: 500px">
                                <div class="w-full pt-1 pb-2">
                                    <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
                                        <img src="https://randomuser.me/api/portraits/men/15.jpg" alt="">
                                    </div>
                                </div>
                                <div class="w-full mb-10">
                                    <div class="text-3xl text-indigo-500 text-left leading-tight h-3">“</div>
                                    <p class="text-sm text-gray-600 text-center px-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.</p>
                                    <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">”</div>
                                </div>
                                <div class="w-full">
                                    <p class="text-md text-indigo-500 font-bold text-center">Scott Windon</p>
                                    <p class="text-xs text-gray-500 text-center">@scott.windon</p>
                                </div>
                            </div>
                        </div>
                        
                        
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-2 text-center pt-2">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-2 py-2 flex-auto">
                  <div class=" bg-gray-200 flex items-center justify-center ">
                    <div class="w-full mx-auto  bg-white shadow-lg px-2 pt-2 pb-4 text-gray-800" style="max-width: 500px">
                        <div class="w-full pt-1 pb-2">
                            <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
                                <img src="https://randomuser.me/api/portraits/men/15.jpg" alt="">
                            </div>
                        </div>
                        <div class="w-full mb-10">
                            <div class="text-3xl text-indigo-500 text-left leading-tight h-3">“</div>
                            <p class="text-sm text-gray-600 text-center px-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.</p>
                            <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">”</div>
                        </div>
                        <div class="w-full">
                            <p class="text-md text-indigo-500 font-bold text-center">Scott Windon</p>
                            <p class="text-xs text-gray-500 text-center">@scott.windon</p>
                        </div>
                    </div>
                </div>
                </div>
              </div>
            </div>
            <div class=" w-full md:w-4/12 px-2 text-center pt-2">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-2 py-2 flex-auto">
                  <div class=" bg-gray-200 flex items-center justify-center ">
                    <div class="w-full mx-auto  bg-white shadow-lg px-2 pt-2 pb-4 text-gray-800" style="max-width: 500px">
                        <div class="w-full pt-1 pb-2">
                            <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
                                <img src="https://randomuser.me/api/portraits/men/15.jpg" alt="">
                            </div>
                        </div>
                        <div class="w-full mb-10">
                            <div class="text-3xl text-indigo-500 text-left leading-tight h-3">“</div>
                            <p class="text-sm text-gray-600 text-center px-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.</p>
                            <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">”</div>
                        </div>
                        <div class="w-full">
                            <p class="text-md text-indigo-500 font-bold text-center">Scott Windon</p>
                            <p class="text-xs text-gray-500 text-center">@scott.windon</p>
                        </div>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
           
      </section>
      </section>      
                 
                  
      </section>
      
    
@endsection



