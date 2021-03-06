<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::transaction(function () {
            $this->call(RealSongSeeder::class);
            $this->call(RealPackSeeder::class);

            // $this->call(ArtistSeeder::class);
            // $this->call(PackSeeder::class);
            // $this->call(SongSeeder::class);
            // $this->call(TuningsSeeder::class);
        });
    }
}
