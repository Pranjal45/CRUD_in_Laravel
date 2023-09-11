<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Yahoo;

class YahooSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //for fake data
        for($i=0;$i<10;$i++){
            yahoo::create([
                'name'=> fake()->name(),
                'email'=> fake()->unique()->email()
            ]);
        }
    }
}
