@extends('layouts.main')

@section('container')

    
        <h2 class="mb-5">{{ $post->title }}</h2>
        
        <p>By <a class="text-decoration-none" href="#">{{ $post->user->name }}</a>in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
        {!! $post->body !!}
    
    <a href="/posts" class="d-block">back to post</a>

@endsection