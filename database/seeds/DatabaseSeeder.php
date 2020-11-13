<?php

use App\Genres;
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
        $this->call(GenreDataSeeders::class);
        $this->call(MoviesDataSeeders::class);
        $this->call(EpisodesDataSeeders::class);
    }
}
