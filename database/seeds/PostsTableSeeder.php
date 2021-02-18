<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            // creazione 20 nuove istanze
            $newPost = new Post();

            $newPost->title = $faker->sentence(3);
            $newPost->author = $faker->name;
            $newPost->text_article = $faker->text(3000);
            $newPost->pubblication_date = $faker->date();
            $newPost->save();
        }
    }
}
