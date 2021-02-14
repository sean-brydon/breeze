<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creates a set of movies to populate the DB with.
        DB::table('products')->insert([
            'name'=>'The Avengers',
            'description'=>'The movie where avengers go pew pew',
            'photo'=>'https://upload.wikimedia.org/wikipedia/en/8/8a/The_Avengers_%282012_film%29_poster.jpg',
            'price'=>4.50,
            'stock'=>4,
            'category'=>'Action'
        ]);
        DB::table('products')->insert([
            'name'=>'Tenet',
            'description'=>'A secret agent is given a single word as his weapon and sent to prevent the onset of World War III. He must travel through time and bend the laws of nature in order to be successful in his mission.',
            'photo'=>'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSFjKwkEgropMVZAIFXUlImtxT2_lKjTzp1dMhQvlAhd9Hf0moa',
            'price'=>6.50,
            'stock'=>2,
            'category'=>'Action'
        ]);
        DB::table('products')->insert([
            'name'=>'T1917',
            'description'=>'Two soldiers, assigned the task of delivering a critical message to another battalion, risk their lives for the job in order to prevent them from stepping right into a deadly ambush.',
            'photo'=>'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS9KHHcZ77V9cPmxm5b0yAjefFIqgQU4uB13lLIGXU8Jvbr8xIs',
            'price'=>3.50,
            'stock'=>4,
            'category'=>'Action'
        ]);
        DB::table('products')->insert([
            'name'=>'Spider-Man: Far From Home',
            'description'=>'As Spider-Man, a beloved superhero, Peter Parker faces four destructive elemental monsters while on holiday in Europe. Soon, he receives help from Mysterio, a fellow hero with mysterious origins.',
            'photo'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTStY893W6Ihm3px1v-iJu3s0qVaAcyXdiE2ICo9bShiQgpCSbx',
            'price'=>8.50,
            'stock'=>4,
            'category'=>'Adventure'
        ]);
    }
}
