@extends('layouts.app')

@section('content')
    <h3>Authors</h3>
    <a href="{{ route('authors.create') }}" class="btn btn-primary mb-2">Add Author</a>

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Books</th>
            <th>Action</th>
        </tr>

        @foreach($authors as $author)
            <tr>
                <td>{{ $author->name }}</td>
                <td>{{ $author->email }}</td>
                <td>{{ $author->books->count() }}</td>
                <td>
                    <a href="{{ route('authors.edit', $author) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('authors.destroy', $author) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection