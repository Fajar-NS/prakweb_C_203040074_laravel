<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
            //     'name'=> 'Fajar NS',
            //     'email'=>'FajarNS@example.com',
            //     'password'=> bcrypt('FajarNS')
            // ]);
            
        User::factory(10)->create();
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web-Programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Post::factory(5)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id'=> 1,
        //     'user_id' =>1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'wiwidiwdiwdiwidi',
        //     'body' =>'dwijdaiwdjiad<i>dwdwadad</i>'
        // ]);

        // Post::create([
        //     'title' => 'Judul keDua',
        //     'category_id'=> 1,
        //     'user_id' =>1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'wiwidiwdwwiwdiwidi',
        //     'body' =>'dwijdaiwdjiad<i>ddawdwadad</i>'
        // ]);

        // Post::create([
        //     'title' => 'Judul keTiga',
        //     'category_id'=> 1,
        //     'user_id' =>1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'wiwidiwdwwiwdiwidi',
        //     'body' =>'dwijdaiwdjiad<i>ddawdwadad</i>'
        // ]);
    }
}
