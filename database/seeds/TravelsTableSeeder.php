<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
            $single_travel = new Travel();
            $single_travel->locality = $faker->city();
            $single_travel->people = rand(1,5);
            $single_travel->days = rand(2,7);
            $single_travel->description = $faker->paragraph(2);
            $single_travel->price = $faker->randomFloat(2, 1, 99);
            $single_travel->save();
        }
    }
}
