<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GenreDataSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'Action Movie Series',
        ]);
        DB::table('genres')->insert([
            'name' => 'Drama Movie Series',
        ]);
        DB::table('genres')->insert([
            'name' => 'Popular Movie Series',
        ]);
    }
}
