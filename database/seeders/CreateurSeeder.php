<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;

class CreateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('createurs')->insert([
                [
                    'name' => 'Française',
                ],
        
                [
                    'name' => 'Belge',
                ],
        
                [
                    'name' => 'Americain',
                ],

                [
                    'name' => 'Togolais',
                ]
                
                ]); 
    }
}