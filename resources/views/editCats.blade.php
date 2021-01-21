@extends('layouts/master')

@section('content')
    {{--    <style>--}}
    {{--        .uper {--}}
    {{--            margin-top: 40px;--}}
    {{--        }--}}
    {{--    </style>--}}
    <div class="card uper">
        <div class="card-header">
            <h2>Edit Category</h2>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('cats.update', $cat->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="country_name">Category:</label>
                    <input type="text" class="form-control" name="catName" value="{{ $cat->catName }}"/>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="cases">Category :</label>--}}
{{--                    <input type="text" class="form-control" name="category" value="{{ $book->category }}"/>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="cases">Author :</label>--}}
{{--                    <input type="text" class="form-control" name="author" value="{{ $book->author }}"/>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="cases">Publication :</label>--}}
{{--                    <input type="text" class="form-control" name="publication" value="{{ $book->publication }}"/>--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
@endsection

