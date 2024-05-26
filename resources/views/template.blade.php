<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--     <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
 --}}    <style>
        .custom-bg {
            background-image: url('{{ asset('images/bg.jpg') }}');
            background-size: cover;
            background-position: center;
        }
    </style>

</head>
<body >
    <div class="custom-bg absolute  mx-auto w-full  h-fully">
    <div class=" bg-white-500 bg-sky-500/0 border-8 border-white w-[1100px] mt-5 rounded-t-lg mx-auto" id="global">
    <header>
        <nav class="bg-white-500 bg-sky-200/25 pb-2 ">
            <div class="float-start ">
                <img class="h-[130px] w-auto relative -top-3 ml-2" src="{{ asset('images/logo.png') }}"  alt="Your Company">
              </div>
            <div class="flex space-x-4  justify-end mb-3">
                <i class="fas fa-search relative  top-3 transform translate-y-2 text-white transform rotate-90"></i>
                <a href="#" class=" text-white rounded-md px-3 py-2 text-m font-medium" aria-current="page">Contact</a>
                <a href="#" class="text-white   active:underline-offset-8 focus:outline-none rounded-md pr-6 py-2 text-m font-medium">Log in</a>
            </div>
            <div class="w-[920px] ml-auto my-2 border-t border-white-600 "></div>
            <div class="flex space-x-5 pl-3">
                <a href="#" class=" text-white rounded-md px-8 py-2 text-m font-medium" aria-current="page">Acceuil</a>
                <a href="#" class="text-white   active:underline-offset-8 focus:outline-none rounded-md px-3 py-2 text-m font-medium">Destination</a>
                <a href="#" class="text-white  hover:underline-offset-8 rounded-md px-3 py-2 text-m font-medium">Vols</a>
                <a href="#" class="text-white  hover:underline-offset-8 rounded-md px-3 py-2 text-m font-medium">Offres</a>
            </div>
        </nav>
    </header>
        <section>
        @yield('content')
        </section>
        <!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <footer class="relative bg-blueGray-200 pt-8 pb-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap text-left lg:text-left">
        <div class="w-full lg:w-6/12 px-4">
            <h4 class="text-3xl fonat-semibold text-blueGray-700">Let's keep in touch!</h4>
            <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
            Find us on any of these platforms, we respond 1-2 business days.
            </h5>
            <div class="mt-6 lg:mb-0 mb-6">
            <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                <i class="fab fa-twitter"></i></button><button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                <i class="fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                <i class="fab fa-dribbble"></i></button><button class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                <i class="fab fa-github"></i>
            </button>
            </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="flex flex-wrap items-top mb-6">
            <div class="w-full lg:w-4/12 px-4 ml-auto">
                <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful Links</span>
                <ul class="list-unstyled">
                <li>
                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
                </li>
                <li>
                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://blog.creative-tim.com?ref=njs-profile">Blog</a>
                </li>
                <li>
                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.github.com/creativetimofficial?ref=njs-profile">Github</a>
                </li>
                <li>
                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Free Products</a>
                </li>
                </ul>
            </div>
            <div class="w-full lg:w-4/12 px-4">
                <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Other Resources</span>
                <ul class="list-unstyled">
                <li>
                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT License</a>
                </li>
                <li>
                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                </li>
                <li>
                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                </li>
                <li>
                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                </li>
                </ul>
            </div>
            </div>
        </div>
        </div>
        <hr class="my-6 border-blueGray-300">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
        <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-blueGray-500 font-semibold py-1">
            Copyright © <span id="get-current-year">2021</span><a href="https://www.creative-tim.com/product/notus-js" class="text-blueGray-500 hover:text-gray-800" target="_blank"> Notus JS by
            <a href="https://www.creative-tim.com?ref=njs-profile" class="text-blueGray-500 hover:text-blueGray-800">Creative Tim</a>.
            </div>
        </div>
        </div>
    </div>
    </footer>
          
    </div>
</div>
</body>
</html>