<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PersonnageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnages')->insert([
            [
                'name' => 'Kiri',
                'createur_id' => 1,
                'date' => 1990,
                /*'genre' => 'Acteur',*/
                'annonce' => 'Kirikou et le vilain sorcier',
                'detail' => 'un enfant du village qui combat le grand sorcier.'
            ],
    
            [
                'name' => 'Kirikou',
                'createur_id' => 1,
                'date' => 1990,
                /*'genre' => 'Acteur',*/
                'annonce' => 'Kirikou et le vilain sorcier',
                'detail' => 'un enfant du village qui combat le grand sorcier.'
            ],
    
            [
                'name' => 'Kirikou',
                'createur_id' => 1,
                'date' => 1990,
                /*'genre' => 'Acteur',*/
                'annonce' => 'Kirikou et le vilain sorcier',
                'detail' => 'un enfant du village qui combat le grand sorcier.'
            ],

            [
                'name' => 'Kirikou',
                'createur_id' => 1,
                'date' => 1990,
                /*'genre' => 'Acteur',*/
                'annonce' => 'Kirikou et le vilain sorcier',
                'detail' => 'un enfant du village qui combat le grand sorcier.'
            ],

            
            ]); 
    }
}