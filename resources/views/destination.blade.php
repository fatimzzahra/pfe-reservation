@extends('template')
@section('content')
<section>
    <div class="h-[500px] mx-auto" >
        <div class="  h-full flex flex-col justify-center items-center text-white ">
        <h1 class="text-3xl md:text-4xl font-bold mb-20 text-center mt-10">
        Meilleurs tarifs garantis via Silver Suites Hotel
        </h1>
        <div class="bg-white dark:bg-zinc-800 text-black dark:text-white p-4 rounded-lg shadow-lg flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 mb-8"    >
            <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4">
                <div class="flex flex-col items-start">
                    <label for="checkin" class="text-sm font-semibold mb-1">Check in</label>
                    <input
                        type="date"
                        id="checkin"
                        class="border border-yellow-500 p-2 rounded-md w-full md:w-auto"
                        placeholder="-- / -- / --"
                    />
                </div>
                <div class="flex flex-col items-start">
                    <label for="checkout" class="text-sm font-semibold mb-1">Check out</label>
                    <input
                        type="date"
                        id="checkout"
                        class="border border-yellow-500 p-2 rounded-md w-full md:w-auto"
                        placeholder="-- / -- / --"
                    />
                </div>
                <div class="flex flex-col items-start">
                    <label for="members" class="text-sm font-semibold mb-1">Members</label>
                    <input
                        type="text"
                        id="members"
                        class="border border-yellow-500 p-2 rounded-md w-full md:w-auto"
                        placeholder="2 Adults"
                    />
                    </div>
            </div>
            <button class="bg-yellow-500 text-white px-4 py-2 rounded-md font-semibold relative top-3">Check in</button>
            </div>
            <div class="bg-black bg-opacity-70 dark:bg-opacity-70 p-6 rounded-lg text-center mt-5">
                
                <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-8" >
                <p class="text-lg md:text-xl font-semibold mb-4">Lorem ipsum dolor, sit amet consectetur</p>
                    <div class="text-center">
                        <div class="bg-transparent border border-yellow-500 text-white rounded-full h-32 w-32  items-center justify-center p-2" >
                            <p class="text-2xl font-bold mt-5">100 +</p>
                            <p class="text-sm">Comfortable rooms</p>
                        </div>
                        
                    </div>
                    <div class="text-center">
                        <div
                            class="bg-transparent border border-yellow-500 text-white rounded-full h-32 w-32 items-center justify-center p-2 " >
                            <p class="text-2xl font-bold mt-5">5 M</p>
                            <p class="text-sm">Happy Customers</p>
                        </div>
                    
                    </div>
                    <div class="text-center">
                        <div class="bg-transparent border border-yellow-500 text-white rounded-full h-32 w-32  items-center justify-center p-2" >
                            <p class="text-2xl font-bold mt-5">23 +</p>
                            <p class="text-sm">Certificate Ment</p>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container bg-white">
    
    <section>
        <div class="container mx-auto p-4">
            <div class=" flex grid grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-4">
                <div class="bg-white dark:bg-zinc-800 shadow-md rounded-lg overflow-hidden">
                    <img src="../public/images/hotel.jpg" alt="Room Image 1" class=" h-48 object-cover" />
                    <div class="p-4">
                        <h2 class="text-xl font-bold">Room</h2>
                        <p class="text-zinc-600 dark:text-zinc-400">Lorem ipsum dolor, sit amet consectetur</p>
                        <button
                        class="mt-4 bg-zinc-200 dark:bg-zinc-700 text-zinc-800 dark:text-zinc-200 px-4 py-2 rounded-lg flex items-center"
                        >
                        View all
                        <span class="ml-2">→</span>
                        </button>
                    </div>
                </div>

                <div class="bg-white dark:bg-zinc-800 shadow-md rounded-lg overflow-hidden">
                <img src="../public/images/hotel.jpg" alt="Room Image 2" class=" h-48 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold">Room</h2>
                    <p class="text-zinc-600 dark:text-zinc-400">Lorem ipsum dolor, sit amet consectetur</p>
                    <button
                    class="mt-4 bg-zinc-200 dark:bg-zinc-700 text-zinc-800 dark:text-zinc-200 px-4 py-2 rounded-lg flex items-center"
                    >
                    View all
                    <span class="ml-2">→</span>
                    </button>
                </div>
                </div>

                <div class="bg-white dark:bg-zinc-800 shadow-md rounded-lg overflow-hidden">
                <img src="../public/images/hotel.jpg" alt="Room Image 3" class=" h-48 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold">Room</h2>
                    <p class="text-zinc-600 dark:text-zinc-400">Lorem ipsum dolor, sit amet consectetur</p>
                    <button
                    class="mt-4 bg-zinc-200 dark:bg-zinc-700 text-zinc-800 dark:text-zinc-200 px-4 py-2 rounded-lg flex items-center"
                    >
                    View all
                    <span class="ml-2">→</span>
                    </button>
                </div>
                </div>

                <div class="bg-white dark:bg-zinc-800 shadow-md rounded-lg overflow-hidden">
                <img src="../public/images/hotel.jpg" alt="Room Image 4" class=" h-48 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold">Room</h2>
                    <p class="text-zinc-600 dark:text-zinc-400">Lorem ipsum dolor, sit amet consectetur</p>
                    <button
                    class="mt-4 bg-zinc-200 dark:bg-zinc-700 text-zinc-800 dark:text-zinc-200 px-4 py-2 rounded-lg flex items-center"
                    >
                    View all
                    <span class="ml-2 text-lg">→</span>
                    </button>
                </div>
                </div>
            </div>
            <div class="mt-4 flex justify-end">
                <button class="bg-blue-800 text-white px-6 py-3 rounded-lg">See more</button>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container mx-auto p-4">
            <div class="border-b py-4 flex items-center">
                <img src="../public/images/hotel.jpg" alt="Service 1" class="w-[335px]" />
                <div class="ml-4 flex-1">
                    <h3 class="text-xl font-bold">Our services</h3>
                    <p class="text-zinc-600">
                        Lorem ipsum dolor, sit amet consectetur Lorem ipsum dolor, sit amet consectetur
                    </p>
                    <span class="text-2xl">&rarr;</span>
                </div>
            </div>
            <div class="border-b py-4 flex items-center">
                <img src="../public/images/hotel.jpg" alt="Service 2" class="w-[335px]" />
                <div class="ml-4 flex-1">
                    <h3 class="text-xl font-bold">Our services</h3>
                    <p class="text-zinc-600">
                        Lorem ipsum dolor, sit amet consectetur Lorem ipsum dolor, sit amet consectetur
                    </p>
                    <span class="text-2xl">&rarr;</span>
                </div>
            </div>
            <div class="py-4 flex items-center">
                <img src="../public/images/hotel.jpg" alt="Service 3" class="w-[335px]" />
                <div class="ml-4 flex-1">
                    <h3 class="text-xl font-bold">Our services</h3>
                    <p class="text-zinc-600">
                        Lorem ipsum dolor, sit amet consectetur Lorem ipsum dolor, sit amet consectetur
                    </p>
                    <span class="text-2xl">&rarr;</span>
                </div>
            </div>
        </div>

    </section>
    <section>
    <div class="bg-white dark:bg-zinc-900 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h2 class="text-3xl font-extrabold text-zinc-900 dark:text-white">Premium facilities</h2>
      <p class="mt-4 text-lg text-zinc-600 dark:text-zinc-300">
        Beach Beauty and Unforgettable Luxury. Enjoy a Luxurious Stay Experience at Our Beach Hotel
      </p>
    </div>
    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="text-center">
        <img
          class=" h-64 object-cover rounded-lg"
          src="https://placehold.co/300x200"
          alt="Exclusive Suite"
        />
        <h3 class="mt-4 text-xl font-semibold text-zinc-900 dark:text-white">Exclusive Suite</h3>
        <p class="mt-2 text-zinc-600 dark:text-zinc-300">
          Our spacious suites with private balconies
        </p>
      </div>
      <div class="text-center">
        <img
          class=" h-48 object-cover rounded-lg"
          src="https://placehold.co/300x200"
          alt="Infinity Pool"
        />
        <h3 class="mt-4 text-xl font-semibold text-zinc-900 dark:text-white">Infinity Pool</h3>
        <p class="mt-2 text-zinc-600 dark:text-zinc-300">
          Offers spectacular and unrestricted ocean views.
        </p>
      </div>
      <div class="text-center">
        <img
          class=" h-64 object-cover rounded-lg"
          src="https://placehold.co/300x200"
          alt="Spa and Beauty Center"
        />
        <h3 class="mt-4 text-xl font-semibold text-zinc-900 dark:text-white">
          Spa and Beauty Center
        </h3>
        <p class="mt-2 text-zinc-600 dark:text-zinc-300">
          Experience tranquility and relaxation at our luxurious spa.
        </p>
      </div>
      <div class="text-center">
        <img
          class=" h-48 object-cover rounded-lg"
          src="https://placehold.co/300x200"
          alt="Private Beach"
        />
        <h3 class="mt-4 text-xl font-semibold text-zinc-900 dark:text-white">Private Beach</h3>
        <p class="mt-2 text-zinc-600 dark:text-zinc-300">
          Indulge yourself at our private beach, complete with an exclusive gazebo.
        </p>
      </div>
    </div>
  </div>
</div>

    </section>

@endsection



