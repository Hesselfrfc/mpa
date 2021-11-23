<?php

namespace Database\Seeders;
use App\Models\Genre;
use App\Models\Song;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Genre::truncate();
        Song::truncate();

        Genre::create([
            'genre_name' => 'Pop'
        ]);

        Genre::create([
            'genre_name' => 'Rock'
        ]);

        Song::create([
            'song_name' => 'PopSong 1',
            'genre_id' => '1',
            'genre_name' => 'Pop'
        ]);

        Song::create([
            'song_name' => 'RockSong 1',
            'genre_id' => '2',
            'genre_name' => 'Rock'
        ]);
    }
}
