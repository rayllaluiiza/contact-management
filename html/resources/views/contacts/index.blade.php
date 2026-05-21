@extends('layouts.app') 

@section('title', 'List of Contacts')

@section('content')
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Email</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            <th scope="col">View</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <th>{{$contact->id}}</th>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->contact}}</td>
                    <td>{{$contact->email}}</td>
                    <td><a href="#"><i class="fa-solid fa-pen"></i></a></td>
                    <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                    <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
@endsection