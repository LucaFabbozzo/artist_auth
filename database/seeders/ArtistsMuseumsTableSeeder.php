<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Museum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistsMuseumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i++) {
            $artist = Artist::inRandomOrder()->first();
            $museum_id = Museum::inRandomOrder()->first()->id;
            $artist->museums()->attach($museum_id);
        }
    }
}
