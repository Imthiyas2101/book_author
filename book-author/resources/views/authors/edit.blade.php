@extends('layouts.app')

@section('content')
    <h3>Edit Author</h3>

    <form method="POST" action="{{ route('authors.update', $author) }}">
        @csrf @method('PUT')
        <input class="form-control mb-2" name="name" value="{{ $author->name }}">
        <input class="form-control mb-2" name="email" value="{{ $author->email }}">
        <button class="btn btn-success">Update</button>
    </form>
@endsection