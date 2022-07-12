<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newTrain = new Train();

            $newTrain->company = $faker->word();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->train_code = $faker->randomNumber(5, true);
            $newTrain->carriages = rand(1, 100);

            $newTrain->save();
        }
    }
}
