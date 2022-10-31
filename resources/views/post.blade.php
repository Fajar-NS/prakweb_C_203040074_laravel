@extends('layouts.main')

@section('container')

    <div class="conainer">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                    
                <p>By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                
                <img src="https://source.unsplash.com/random/1200×400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                <article  class="my-3">

                    {!! $post->body !!}
                </article>
                
                <p></p><a href="/posts" class="text-decoration-none">back to post</a>
            </div>
        </div>
    </div>

    

@endsection