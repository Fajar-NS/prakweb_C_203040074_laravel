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

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
             <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>
   
            @else
             <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif
            
            <article  class="my-3">

                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection