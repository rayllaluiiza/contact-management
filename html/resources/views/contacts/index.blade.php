@extends('layouts.app') 

@section('title', 'List of Contacts')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Edit</th>
                <th scope="col">View</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <th>{{$contact->id}}</th>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->contact}}</td>
                    <td>{{$contact->email}}</td>
                    <td><a href="{{ route('contacts.show', $contact->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                    <td><a href="{{ route('contacts.edit', $contact->id) }}"><i class="fa-solid fa-pen"></i></a></td>
                    <td>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
@endsection