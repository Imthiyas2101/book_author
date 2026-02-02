@extends('layouts.app')

@section('content')
    <h3>Add Author</h3>

    <form method="POST" action="{{ route('authors.store') }}">
        @csrf
        <input class="form-control mb-2" name="name" placeholder="Name">
        <input class="form-control mb-2" name="email" placeholder="Email">
        <button class="btn btn-success">Save</button>
    </form>
@endsection