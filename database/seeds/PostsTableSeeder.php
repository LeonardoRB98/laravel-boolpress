<?php

use Illuminate\Database\Seeder;
// aggiungo model faker
use Faker\Generator as Faker;
//aggiungo model Post
use App\Post;
use Illuminate\Support\Str;

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
            //associo dati casuali con faker
            $newPost->title = $faker->sentence(3);
            $newPost->slug = Str::slug($newPost->title);
            $newPost->author = $faker->name;
            $newPost->text_article = $faker->text(3000);
            $newPost->pubblication_date = $faker->date();
            //salvo la la nuova istanza delal classe Post
            $newPost->save();
        }
    }
}
