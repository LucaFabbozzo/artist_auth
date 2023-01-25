<?php

namespace Database\Seeders;

use App\Models\Artwork;
use App\Models\Museum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtworkMuseumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artworks = Artwork::all();
        foreach($artworks as $artwork) {
            $artwork->museum_id = Museum::inRandomOrder()->first()->id;
            $artwork->update();
        }
    }
}
