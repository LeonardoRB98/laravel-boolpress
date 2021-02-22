<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Post;
use Faker\Generator as Faker;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            // creazione 3 commenti per ogni post
            for($i = 0; $i < 3; $i++) {
                $date = $faker->dateTime();
                $newComment = new Comment();
                $newComment->post_id = $post->id;
                $newComment->author = $faker->userName;
                $newComment->text = $faker->sentence(20);
                $newComment->created_at = $date;
                $newComment->updated_at = $date;
                // salvataggio
                $newComment->save();
            }
        }
    }
}
