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

        $packages = [
            [
                'name' => 'Summer Rome ☀️',
                'description' => 'Passa un magnifica estate nella splendida ROMA',
                'departure_from' => 'Palermo',
                'destination' => 'Roma',
                'departure_date' => '2022-07-10',
                'return_date' => '2022-07-18',
                'price' => '1500.99'
            ],
            [
                'name' => 'White Winter ❄️',
                'description' => 'Inverno Bianco sulle Montagne',
                'departure_from' => 'Palermo',
                'destination' => 'Cortina',
                'departure_date' => '2023-01-3',
                'return_date' => '2023-07-7',
                'price' => '2100.99'
            ],
            [
                'name' => 'Travel in Love 💞',
                'description' => 'Passa una settimana romantica a Parigi',
                'departure_from' => 'Palermo',
                'destination' => 'Parigi',
                'departure_date' => '2022-03-10',
                'return_date' => '2022-03-15',
                'price' => '1100.89'
            ],
            [
                'name' => 'Sicily ☀️',
                'description' => 'Passa un magnifica settimana nella meravigliosa Sicilia',
                'departure_from' => 'Milano',
                'destination' => 'Palermo',
                'departure_date' => '2022-08-01',
                'return_date' => '2022-08-08',
                'price' => '800.69'
            ]
        ];

        foreach ($packages as $package) {
            $_package = new TravelPackage();
            $_package->name = $package['name'];
            $_package->description = $package['description'];
            $_package->departure_from = $package['departure_from'];
            $_package->destination = $package['destination'];
            $_package->departure_date = $package['departure_date'];
            $_package->return_date = $package['return_date'];
            $_package->price = $package['price'];
            $_package->save();
        };

        for ($i = 0; $i < 48; $i++) {
            $_package = new TravelPackage();
            $_package->name = $faker->name();
            $_package->description = $faker->paragraph();
            $_package->departure_from = $faker->city();
            $_package->destination = $faker->city();
            $_package->departure_date = $faker->date();
            $_package->return_date = $faker->date();
            $_package->price = $faker->randomFloat(2, 0, 5000);
            $_package->save();
        };
    }
}