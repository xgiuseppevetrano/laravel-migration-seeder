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
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();

            $start_date = strtotime('1 january 2022');
            $end_date = strtotime('31 december 2022');

            $date = mt_rand($start_date, $end_date);

            $newTrain->departure_date = date('Y-m-d', $date);
            $newTrain->arrival_date = date('Y-m-d', $date);
            $newTrain->train_code = $faker->randomNumber(5, true);
            $newTrain->carriages = rand(1, 100);

            $newTrain->save();
        }
    }
}
