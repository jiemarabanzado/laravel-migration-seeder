<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        //Istanzio un nuovo oggetto train
        $new_train = new Train();

        $new_train->company = $faker->company(); 
        $new_train->trip_day = $faker->date();
        $new_train->departure_station = $faker->city();
        $new_train->arrival_station = $faker->city();
        $new_train->departure_time = $faker->time();
        $new_train->arrival_time = $faker->time();
        $new_train->train_number = $faker->randomDigit();
        $new_train->carriages_number = $faker->numberBetween(1, 20);

        //Salvo l'oggetto nel db
        $new_train->save();
    }
}