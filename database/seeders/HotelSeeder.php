<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\Models\Client;
use App\Models\Hotel;
use App\Models\Destination; 
use App\Models\Classes; 
use Faker\Factory as Faker;

class HotelSeeder extends Seeder
{
    public function run()
    {
        $destinations = Destination::all();
        $classes = Classes::all();

        $hotels = [
            [
                'name' => 'Hotel Paris',
                'address' => '123 Paris St, Paris',
                'description' => 'A beautiful hotel in Paris.',
                'email' => 'paris@example.com',
                'phone' => '1234567890',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel New York',
                'address' => '456 New York St, New York',
                'description' => 'A luxurious hotel in New York.',
                'email' => 'newyork@example.com',
                'phone' => '0987654321',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Tokyo',
                'address' => '789 Tokyo St, Tokyo',
                'description' => 'An elegant hotel in Tokyo.',
                'email' => 'tokyo@example.com',
                'phone' => '1122334455',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel London',
                'address' => '101 London St, London',
                'description' => 'A cozy hotel in London.',
                'email' => 'london@example.com',
                'phone' => '2233445566',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Berlin',
                'address' => '202 Berlin St, Berlin',
                'description' => 'A modern hotel in Berlin.',
                'email' => 'berlin@example.com',
                'phone' => '3344556677',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Sydney',
                'address' => '303 Sydney St, Sydney',
                'description' => 'A stunning hotel in Sydney.',
                'email' => 'sydney@example.com',
                'phone' => '4455667788',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Rome',
                'address' => '404 Rome St, Rome',
                'description' => 'A charming hotel in Rome.',
                'email' => 'rome@example.com',
                'phone' => '5566778899',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Amsterdam',
                'address' => '505 Amsterdam St, Amsterdam',
                'description' => 'A picturesque hotel in Amsterdam.',
                'email' => 'amsterdam@example.com',
                'phone' => '6677889900',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Madrid',
                'address' => '606 Madrid St, Madrid',
                'description' => 'A delightful hotel in Madrid.',
                'email' => 'madrid@example.com',
                'phone' => '7788990011',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Lisbon',
                'address' => '707 Lisbon St, Lisbon',
                'description' => 'A charming hotel in Lisbon.',
                'email' => 'lisbon@example.com',
                'phone' => '8899001122',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Bangkok',
                'address' => '808 Bangkok St, Bangkok',
                'description' => 'A vibrant hotel in Bangkok.',
                'email' => 'bangkok@example.com',
                'phone' => '9900112233',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Dubai',
                'address' => '909 Dubai St, Dubai',
                'description' => 'A luxurious hotel in Dubai.',
                'email' => 'dubai@example.com',
                'phone' => '0011223344',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Hong Kong',
                'address' => '1010 Hong Kong St, Hong Kong',
                'description' => 'A dynamic hotel in Hong Kong.',
                'email' => 'hongkong@example.com',
                'phone' => '1122334455',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Singapore',
                'address' => '1111 Singapore St, Singapore',
                'description' => 'A splendid hotel in Singapore.',
                'email' => 'singapore@example.com',
                'phone' => '2233445566',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Beijing',
                'address' => '1212 Beijing St, Beijing',
                'description' => 'An exquisite hotel in Beijing.',
                'email' => 'beijing@example.com',
                'phone' => '3344556677',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Moscow',
                'address' => '1313 Moscow St, Moscow',
                'description' => 'A grand hotel in Moscow.',
                'email' => 'moscow@example.com',
                'phone' => '4455667788',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Rio de Janeiro',
                'address' => '1414 Rio de Janeiro St, Rio de Janeiro',
                'description' => 'A lively hotel in Rio de Janeiro.',
                'email' => 'rio@example.com',
                'phone' => '5566778899',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Cape Town',
                'address' => '1515 Cape Town St, Cape Town',
                'description' => 'A scenic hotel in Cape Town.',
                'email' => 'capetown@example.com',
                'phone' => '6677889900',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Mumbai',
                'address' => '1616 Mumbai St, Mumbai',
                'description' => 'A bustling hotel in Mumbai.',
                'email' => 'mumbai@example.com',
                'phone' => '7788990011',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Buenos Aires',
                'address' => '1717 Buenos Aires St, Buenos Aires',
                'description' => 'A sophisticated hotel in Buenos Aires.',
                'email' => 'buenosaires@example.com',
                'phone' => '8899001122',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Cairo',
                'address' => '1818 Cairo St, Cairo',
                'description' => 'A historic hotel in Cairo.',
                'email' => 'cairo@example.com',
                'phone' => '9900112233',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Seoul',
                'address' => '1919 Seoul St, Seoul',
                'description' => 'A vibrant hotel in Seoul.',
                'email' => 'seoul@example.com',
                'phone' => '0011223344',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel Los Angeles',
                'address' => '2020 Los Angeles St, Los Angeles',
                'description' => 'A glamorous hotel in Los Angeles.',
                'email' => 'losangeles@example.com',
                'phone' => '1122334455',
                'destination_id' => $destinations->random()->id,
                'hotel_class_id' => $classes->random()->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('hotels')->insert($hotels);
        // $faker = Faker::create();

        // for ($i = 0; $i < 50; $i++) {
        //     Hotel::create([
        //         'name' => $faker->company,
        //         'address' => $faker->address,
        //         'description' => $faker->sentences(4 , true),
        //         'email' => $faker->unique()->safeEmail,
        //         'phone' => $faker->phoneNumber,
        //         'destination_id' => Destination::factory()->create()->id, 
        //         'hotel_class_id' => Classes::factory()->create()->id, 
        //     ]);
        // }
    //     Hotel::factory()->count(10)->create();
    // }
    
   
    }
}
