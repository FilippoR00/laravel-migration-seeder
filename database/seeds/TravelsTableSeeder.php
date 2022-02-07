<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $travel = new Travel();
            $travel->name = $faker->word();
            $travel->destination = $faker->state();
            $travel->date = $faker->dateTimeBetween('0 week', '+6 month');
            $travel->days = $faker->numberBetween(3, 14);
            $travel->price = $faker->numberBetween(600, 7000);
            $travel->avaiable_places = $faker->numberBetween(0, 150);
            $travel->flight_included = $faker->boolean();
            $travel->description = $faker->text();
            $travel->save();
        }
    }
}
