@extends('layouts.master')

@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">Members List</div>
        <div class="panel-body">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Department</th>
                    <th scope="col">Address</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($members as $mem)
                    <tr>
                        <td>{{$mem->id}}</td>
                        <td>{{$mem->memName}}</td>
                        <td>{{$mem->email}}</td>
                        <td>{{$mem->contact}}</td>
                        <td>{{$mem->dept}}</td>
                        <td>{{$mem->address}}</td>
                        <td>{{$mem->memType}}</td>
                        <td>
                            <span><a href="{{route('mems.edit', $mem->id)}}" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a></span>
                            <span>
                        <form action="{{ route('mems.destroy', $mem->id)}}" method="post">
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
