<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 48; $i++) {
            $_post = new Post();
            $_post->title = $faker->sentence();
            $_post->image = 'https://picsum.photos/id/' . $faker->numberBetween(1000, 1084) . '/200/300';
            $_post->text = $faker->text();
            $_post->author = $faker->name();
            $_post->date = $faker->date();
            $_post->save();
        };
    }
}