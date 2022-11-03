@extends('layouts.main')

@section('container')

    <main class="form-registration w-100 m-auto">
        <form action="/register" method="POST">
            @csrf
            {{-- logo --}}
        {{-- <img class="mb-4" src="..." alt="" width="72" height="57"> --}}
        <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
    
        <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-bottom @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
            <label for="name">name</label>
            @error('name')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
            <label for="username">username</label>
            @error('username')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password"name="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
        <small class="d-block mt-3">already registered?<a href="/login"> login Now!</a></small>
    </main>

@endsection