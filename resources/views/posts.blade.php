@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        
        <h2>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
        <p>By <a class="text-decoration-none" href="">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
        {{ $post->excerpt }}
        
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more... </a>

    </article>
    @endforeach

@endsection