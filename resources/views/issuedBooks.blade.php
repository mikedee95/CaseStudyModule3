@extends('layouts.master')

@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">Books List</div>
        <div class="panel-body">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">Issue ID</th>
                    <th scope="col">Issue Date</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Book ID</th>
                    <th scope="col">Member Issued ID</th>
{{--                    <th scope="col">Action</th>--}}
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($books as $book)
                        <td>{{$book->id}}</td>
                        <td>{{$book->issueDate}}</td>
                        <td>{{$book->retDate}}</td>
                        <td>{{$book->bookId}}</td>
                        <td>{{$book->memId}}</td>
{{--                        <td>--}}
{{--                            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></span>--}}
{{--                            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button></span>--}}
{{--                        </td>--}}
                </tr>
            @endforeach
        </div>
    </div>

@endsection

