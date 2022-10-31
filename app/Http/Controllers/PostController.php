<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        
       $title = '';
       if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' .$category->name;
       }

       if(request('author')){
        $author = User::firstWhere('username', request('author'));
        $title = ' By ' .$author->name;
       }
        // dd(request('search')); ngambil apa aja kata dari search terbut
        return view('posts',[
            "title"=>"All Posts". $title,
            "active"=> 'posts',
            "posts" => Post::latest()->filter(Request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

   public function show(Post $post){

    return view('post',[
        "title"=>"single Post",
        "active"=> 'posts',
        "post"=> $post
    ]);
    
   } 

}
