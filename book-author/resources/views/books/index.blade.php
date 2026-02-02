@extends('layouts.app')

@section('content')
    <h3>Books</h3>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-2">Add Book</a>

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Action</th>
        </tr>

        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name }}</td>
                <td>{{ $book->published_year }}</td>
                <td>
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form method="POST" action="{{ route('books.destroy', $book) }}" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection