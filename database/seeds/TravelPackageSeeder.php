<?php

use App\Models\TravelPackage;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 84; $i++) {
            $_package = new TravelPackage();
            $_package->name = $faker->name();
            $_package->description = $faker->paragraph();
            $_package->departure_from = $faker->city();
            $_package->destination = $faker->city();
            $_package->departure_date = $faker->date();
            $_package->return_date = $faker->date();
            $_package->price = $faker->randomFloat(2, 0, 5000);
            $_package->save();
        }
    }
}