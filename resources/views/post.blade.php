@extends('layouts.main')

@section('container')

    <article class="mb-5">
        <h2>{!! $post->title !!}</h2>
        <h5>By: {{ $post->excerpt }}</h5>
        {!! $post->body !!}
    </article>
    <a href="/posts">back to post</a>

@endsection