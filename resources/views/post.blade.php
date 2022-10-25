@extends('layouts.main')

@section('container')

    
        <h2 class="mb-5">{{ $post->title }}</h2>
        
        <p>By fajar <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
        {!! $post->body !!}
    
    <a href="/posts">back to post</a>

@endsection