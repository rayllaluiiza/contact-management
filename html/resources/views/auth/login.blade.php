@php($hideNavbar = true)

@extends('layouts.app') 

@section('title', 'Sign-in')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="col-md-4 mx-auto">
            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="d-grid gap-2 col-2 mx-auto">
            <button class="btn btn-primary mt-4" type="submit">Login</button>
        </div>
    </form>
@endsection
