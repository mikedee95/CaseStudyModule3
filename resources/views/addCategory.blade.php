@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <div class="panel-heading">Books List</div>
        <div class="panel-body">
            <form class="row" method="post" action="{{route('cats.create')}}">
                @csrf
                <div class="col-xs-8 inner-addon left-addon form-group">
                    <input type="text" name="catName" class="form-control" placeholder="Name of Category">
                </div>
                <div class="col-xs-4">
                    <button type="submit" name="button" class="btn btn-primary">Add Category</button>
                </div>

            </form>
        </div>
    </div>
@endsection
