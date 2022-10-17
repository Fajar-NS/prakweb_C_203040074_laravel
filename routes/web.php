<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" =>"About",
        "name" => "Fajar NS",
        "kelas"=> "IF B",
        "image" => "Fajar.png"
    ]);
});


Route::get('/posts', function () {
    $blog_posts =[
            [
                "title"=> "judul 1",
                "slug"=> "judul-1",
                "author" =>"XGO",
                "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit praesentium dolorem quae quis porro aliquam, saepe officia quisquam labore consequatur magni nam officiis necessitatibus assumenda, hic ullam. Odio deserunt libero totam ab illum iusto rem veniam nobis obcaecati similique ipsa eligendi ut quidem, in, enim corrupti! Aperiam voluptate reiciendis placeat facilis, in tempora dolore distinctio illo excepturi hic esse! Temporibus pariatur neque facilis, doloribus nobis voluptates maiores enim, eius quo, vitae libero sapiente rerum sint. Corporis, vel est? Facilis fuga ut similique deleniti numquam totam ea natus dolor dolore odio."
            ],
            [
                "title"=> "judul 2",
                "slug"=> "judul-2",
                "author" =>"XGO",
                "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit praesentium dolorem quae quis porro aliquam, saepe officia quisquam labore consequatur magni nam officiis necessitatibus assumenda, hic ullam. Odio deserunt libero totam ab illum iusto rem veniam nobis obcaecati similique ipsa eligendi ut quidem, in, enim corrupti! Aperiam voluptate reiciendis placeat facilis, in tempora dolore distinctio illo excepturi hic esse! Temporibus pariatur neque facilis, doloribus nobis voluptates maiores enim, eius quo, vitae libero sapiente rerum sint. Corporis, vel est? Facilis fuga ut similique deleniti numquam totam ea natus dolor dolore odio."
            ]
        ];

        $new_post = [];
        foreach($blog_posts as $post){
            if($post["slug"] === $slug){
                $new_post = $post;
            }
        }

        


    // halaman single post
    Route::get('posts/{slug}', function($slug){
        return view('post',[
            "title"=>"awalun",
            "post"=> $new_post
        ]);
    });
    


});