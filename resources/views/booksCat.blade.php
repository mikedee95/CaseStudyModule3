@extends('layouts.master')

@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Categories List</h1></div>
        <div class="panel-body">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">Category ID</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->catName}}</td>
                        <td>
                            <span><a href="{{route('cats.edit', $cat->id)}}" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a></span>
                            <span>
                        <form action="{{ route('cats.destroy', $cat->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button>
                    </form>
                        </span>

                        </td>
                    </tr>
            @endforeach
        </div>
    </div>


@endsection
