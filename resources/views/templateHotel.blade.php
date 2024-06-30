@extends('template')
@section('content')
<section class=" ">
    <div class=" justify-center items-center w-full" >
        
        <div class=" h-full  flex flex-col justify-center items-center text-white    ">
        <h1 class="text-3xl md:text-4xl font-bold text-center mt-6 py-24" >
        Meilleurs tarifs garantis via Silver Suites Hotel
        </h1>
        <div class="bg-white dark:bg-zinc-800 text-[#0E153A] dark:text-[#0E153A] p-4 rounded-lg shadow-lg flex flex-col md:flex-row  items-center space-y-4 md:space-y-0 md:space-x-4 mb-6">
            <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4">
                <div class="flex flex-col items-start">
                    <label for="checkin" class="text-sm font-semibold mb-1">Search</label>
                    <input
                        id="search"
                        type="date"
                        id="checkin"
                        class="border border-[#FBC403] p-2 rounded-md w-full md:w-auto"
                        placeholder="-- / -- / --"
                    />
                </div>
                <div class="flex flex-col items-start">
                    <label for="checkout" class="text-sm font-semibold mb-1">Check out</label>
                    <input
                        id="search"
                        type="date"
                        id="checkout"
                        class="border border-[#FBC403] p-2 rounded-md w-full md:w-auto"
                        placeholder="-- / -- / --"
                    />
                </div>
                <div class="flex flex-col items-start">
                    <label for="members" class="text-sm font-semibold mb-1">Members</label>
                    <input
                        id="search"
                        type="text"
                        id="members"
                        class="border border-[#FBC403] p-2 rounded-md w-full md:w-auto"
                        placeholder="2 Adults"
                    />
                    </div>
            </div>
            <button class="bg-[#FBC403] text-[#0E153A] px-4 py-2 rounded-md font-semibold relative top-3">Check in</button>
            </div>
            <div class="bg-[#0E153A]/60  dark:bg-opacity-70 p-2 rounded-lg text-center my-4 ">
                
                <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-8" >
                <p class="text-lg md:text-xl font-semibold mb-4">Lorem ipsum dolor, sit amet consectetur</p>
                    <div class="text-center">
                        <div class="bg-transparent border border-[#FBC403] text-white rounded-full h-32 w-32  items-center justify-center p-2" >
                            <p class="text-2xl font-bold mt-5">100 +</p>
                            <p class="text-sm">Comfortable rooms</p>
                        </div>
                        
                    </div>
                    <div class="text-center">
                        <div
                            class="bg-transparent border border-[#FBC403] text-white rounded-full h-32 w-32  items-center justify-center p-2 relative right-12" >
                            <p class="text-2xl font-bold mt-5">5 M</p>
                            <p class="text-sm">Happy <br> Customers</p>
                        </div>
                    
                    </div>
                    <div class="text-center">
                        <div class="bg-transparent border border-[#FBC403] text-white rounded-full h-32 w-32   items-center justify-center p-2 relative right-24" >
                            <p class="text-2xl font-bold mt-5">23 +</p>
                            <p class="text-sm">Certificate <br> Ment</p>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
@yield('sousContent')
</section>
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<script src="{{ asset('js/script.js') }}"></script>
@endsection