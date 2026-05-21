@extends('layouts.app') 

@section('title', 'Edit Contact')

@section('content')

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{ $contact->email }}">
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" value="{{ $contact->contact }}">
        </div>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>

@endsection