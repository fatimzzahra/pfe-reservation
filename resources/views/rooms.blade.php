@extends('templateHotel')

@section('sousContent')
<section class="bg-white pb-10">

    <div>
    <div class="flex justify-around items-center py-4 mb-4">
        @foreach($roomTypes as $roomType)
            <div class="text-center cursor-pointer room-type-filter" data-type-id="{{ $roomType->id }}">
                <div>
                    <!-- Utilisation de l'icône spécifique au type de chambre -->
                    <i class="{{ $roomTypeIcons[$roomType->type_name] }} text-[#2840A8] text-4xl transform transition-transform duration-300 hover:scale-125 hover:text-[#5b70cc]"></i>
                </div>
                <span class="text-zinc-600">{{ $roomType->type_name }}</span>
            </div>
        @endforeach
    </div>
        <div class="relative bottom-8 border-2 border-zinc-200 w-[945px] mx-auto"></div>

        @foreach($rooms as $room)
            <div class="room bg-white rounded-xl shadow-lg overflow-hidden mb-6 border-2 border-zinc-200" data-type-id="{{ $room->room_type_id }}">
                <div class="flex">
                    <img src="{{asset('images/home.jpg')}}" alt="Room Image" class="w-1/3">
                    <div class="w-2/3 p-4">
                        <div class="flex justify-between items-center">
                            <h2 class="text-xl font-semibold">Premium</h2>
                            <a href="#" class="text-blue-500">Détails</a>
                        </div>
                        <p class="text-zinc-600 mt-2">Elles disposent de services supplémentaires par rapport aux autres chambres.</p>

                        <ul class="list-disc list-inside text-zinc-600 mt-2">
                            <div class="flex items-center space-x-2">
                                <span class="flex items-center justify-center h-4 w-4 bg-green-500 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span>Assortiment de café et thé</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="flex items-center justify-center h-4 w-4 bg-green-500 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span>Canapé-lit</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="flex items-center justify-center h-4 w-4 bg-green-500 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span>Double lavabo</span>
                            </div>
                        </ul>
                        <p class="text-zinc-600 mt-2 flex items-center font-semibold">
                            <span class="mr-2"><i class="fas fa-users text-xl mx-auto"></i></span> 4 personnes <span class="font-normal text-gray-400 ml-2"> • 3 adultes max. / 2 enfants max.</span>
                        </p>
                    </div>
                    <div class="w-1/3 py-4 border-l my-auto px-6">
                        <p class="text-zinc-600 text-sm">À partir de</p>
                        <div class="flex">
                            <p class="text-2xl font-bold text-[#2840A8]">{{ $room->price_per_night }}$</p>
                            <p class="text-zinc-600 mt-2">/nuit</p>
                        </div>
                        <button class="w-full border-2 border-[#2840A8] text-[#2840A8] px-4 py-2 rounded-full mt-4">Réserver</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</section>

<style>
    .room-type-filter-active {
        border-bottom: 4px solid #2840A8; 
        top: 4px;
        position: relative;
        z-index: 1000;
        width: 100px;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.room-type-filter').click(function() {
            var typeId = $(this).data('type-id');
            $('.room-type-filter').removeClass('text-[#2840A8]').removeClass('room-type-filter-active');
            $(this).addClass('text-[#2840A8]').addClass('room-type-filter-active');
            if (typeId) {
                $('.room').hide();
                $('.room[data-type-id="' + typeId + '"]').show();
            } else {
                $('.room').show();
            }
        });

      
    });
</script>
@endsection
