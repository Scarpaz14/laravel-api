<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class PostsUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::where('user_id', NULL)->get();

        foreach ($posts as $post ) {
                //prendiamo utente in maniera randomica
                $user = User::inRandomOrder()->first();
                // assoiciamo lo user_id del post con lo user specifico
                $post->user_id = $user->id;
                $post->save();
        }

    }
}
