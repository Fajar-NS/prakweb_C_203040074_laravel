@extends('dashboard.layouts.main')

@section('container')

<div class="conainer">
    <div class="row mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
                
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to my posts</a>      
            <a href="" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> edit</a>      
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Are you sure brody?')"><span data-feather="x-circle"></span> Delete</button>
            </form>     
            <img src="https://source.unsplash.com/random/1200×400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            <article  class="my-3">

                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection