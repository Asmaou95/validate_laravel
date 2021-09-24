<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnageGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre_personnage')->insert([
            [
                'personnage_id' => 1,
                'genre_id' => 1
            ],
            [
                'personnage_id' => 2,
                'genre_id' => 1
            ],
            [
                'personnage_id' => 2,
                'genre_id' => 2
            ],
            [
                'personnage_id' => 3,
                'genre_id' => 1
            ],
            [
                'personnage_id' => 3,
                'genre_id' => 2
            ],
            [
                'personnage_id' => 3,
                'genre_id' => 3
            ],
        ]);
    }
}
