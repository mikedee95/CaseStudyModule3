@extends('layouts.master')
{{--@include('layouts/navbar')--}}
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <div style="margin-top: 3%">
            <a href="{{'addBooks'}}" class="btn btn-success">Add new book</a>
            </div>
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Book Title</td>
                <td>Category</td>
                <td>Author</td>
                <td>Publication</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->category}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->publication}}</td>
                    <td><a href="{{ route('books.edit', $book->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('books.destroy', $book->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')" >Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
    @include('layouts.footer')
@endsection

