@extends('layouts.main')

@section('container')

    
        <h2 class="mb-5">{{ $post->title }}</h2>
        
        <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
        {!! $post->body !!}
    
    <p></p><a href="/posts" class="text-decoration-none">back to post</a>

@endsection