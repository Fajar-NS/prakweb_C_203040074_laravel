<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
