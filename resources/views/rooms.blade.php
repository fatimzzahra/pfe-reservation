@extends('template')
@section('content')
<section>
    <div class="p-6 bg-white dark:bg-zinc-800">
    <div class="flex items-center mb-4">
        <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded">Makemytrip</span>
    </div>
    <h1 class="text-2xl font-bold mb-2">
        The Leela Palace New Delhi <span class="text-orange-500" style="color: #FBC403">★★★★★</span>
    </h1>
    <p class="text-zinc-600 dark:text-zinc-400 mb-4 flex items-center">
        <span class="mr-2">📍 Safdarjung, New Delhi</span>
        <span class="mr-2">🏨</span>
        <span class="mr-2">🌟🌟🌟🌟🌟 456 Reviews</span>
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
        <img
        class="w-full h-64 object-cover rounded"
        src="https://placehold.co/600x400"
        alt="Main Room Image"
        />
        <div class="grid grid-cols-2 gap-2">
        <img
            class="w-full h-32 object-cover rounded"
            src="https://placehold.co/300x200"
            alt="Room Image 1"
        />
        <img
            class="w-full h-32 object-cover rounded"
            src="https://placehold.co/300x200"
            alt="Room Image 2"
        />
        <img
            class="w-full h-32 object-cover rounded"
            src="https://placehold.co/300x200"
            alt="Room Image 3"
        />
        <div class="relative">
            <img
            class="w-full h-32 object-cover rounded"
            src="https://placehold.co/300x200"
            alt="Room Image 4"
            />
            <div
            class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-bold rounded"
            >
            +20 Photos
            </div>
        </div>
        </div>
    </div>
    <div class="flex justify-between items-center mb-6">
        <div>
        <span class="line-through text-zinc-500">₹ 85,000</span>
        <span class="text-2xl font-bold text-zinc-800 dark:text-zinc-200" style="color: #FBC403"
            >₹ 75,108</span
        >
        <span class="text-zinc-500">per night for 2 Rooms</span>
        </div>
        <button class="bg-orange-500 text-white px-4 py-2 rounded" style="background-color: #FBC403">
        Select Room
        </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
        <h2 class="text-lg font-bold mb-2">Popular Amenities</h2>
        <div class="grid grid-cols-2 gap-2">
            <div class="flex items-center"><span class="mr-2">📶</span> Free Wifi</div>
            <div class="flex items-center"><span class="mr-2">🍽️</span> Free Breakfast</div>
            <div class="flex items-center"><span class="mr-2">🕒</span> 24 Hours Front Desk</div>
            <div class="flex items-center"><span class="mr-2">❌</span> Free Cancellation</div>
            <div class="flex items-center"><span class="mr-2">❄️</span> Air Conditioning</div>
            <div class="flex items-center"><span class="mr-2">🏊‍♂️</span> Swimming Pool</div>
        </div>
        <a href="#" class="text-orange-500 mt-2 inline-block" style="color: #FBC403"
            >View All Amenities</a
        >
        </div>
        <div>
        <h2 class="text-lg font-bold mb-2">Location</h2>
        <img
            class="w-full h-32 object-cover rounded"
            src="https://placehold.co/600x400"
            alt="Map Image"
        />
        <button class="bg-zinc-800 text-white px-4 py-2 rounded mt-2">View Location</button>
        </div>
    </div>
    </div>
</section>
@endsection