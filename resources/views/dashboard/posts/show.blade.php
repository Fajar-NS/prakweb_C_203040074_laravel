@extends('dashboard.layouts.main')

@section('container')

<div class="conainer">
    <div class="row mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
                
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to my posts</a>      
            <a href="" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> edit</a>      
            <a href="" class="btn btn-danger"><span data-feather="x-cricle" class="align-text-bottom"></span> delete</a>      
            <img src="https://source.unsplash.com/random/1200×400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            <article  class="my-3">

                {!! $post->body !!}
            </article>
            
            <p></p><a href="/posts" class="text-decoration-none">back to post</a>
        </div>
    </div>
</div>

@endsection