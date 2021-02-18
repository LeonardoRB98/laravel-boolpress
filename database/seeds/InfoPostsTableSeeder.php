<?php

use Illuminate\Database\Seeder;
use App\InfoPost;
use Faker\Generator as Faker;
use App\Post;
class InfoPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker  $faker)
    {   

        $posts = Post::all(); //recupero tutti post (aggiugere use\Post)
        // per ogni post crea un nuovo postinfo
        foreach($posts as $post) {
            $newInfoPost = new InfoPost();
           
            $newInfoPost->post_id = $post->id;
            $newInfoPost->post_status = $faker->randomElement(['public', 'private', 'draft']);
            $newInfoPost->comment_status= $faker->randomElement(['open', 'private', 'closed']);
            //salvo le nuove istanze
            $newInfoPost->save();
        
        }
        
    }
}
