@extends('layouts/master')
@section('content')
    <div class="card uper">
        <div class="card-header">
            <h2 style="color: black">Add Book Data</h2>
        </div>
        <div class="card-body" >
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" style="color: black" action="{{route('books.create')}}">
                <div class="form-group">
                    @csrf
                    <label for="country_name">Book Title:</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="cases">Author :</label>
                    <input type="text" class="form-control" name="author"/>
                </div>
                <div class="form-group">
                    <label for="cases">Publication :</label>
                    <input type="text" class="form-control" name="publication"/>
                </div>
                <div class="form-group">
                    <label for="cases">Category :</label>
                    <select class="form-control" name="category">
                        @foreach($category as $value)
                            <option>{{$value['catName']}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Book</button>
            </form>
        </div>
    </div>


{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-4 col-md-offset-3">--}}
{{--            <div class="panel panel-default">--}}

{{--                <div class="panel-body">--}}
{{--                    <div class="panel-heading text-center form_head"><h2><b>Add</b> New Books</h2></div>--}}
{{--                    <form class="form-horizontal" method="post" action="{{route('books.create')}}">--}}
{{--                        @csrf--}}

{{--                        <div class="custom_field form-group ">--}}
{{--                            <div class="inner-addon left-addon">--}}
{{--                                <i class="glyphicon glyphicon-tag"></i>--}}
{{--                                <input id="title" type="text" class="form-control" name="name" required autofocus placeholder="Book Title">--}}
{{--                            </div>--}}
{{--                        <!----}}
{{--                                @if ($errors->has('name'))--}}
{{--                            <span class="help-block">--}}
{{--                                <strong>{{ $errors->first('name') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                        {{ $errors->has('name') ? ' has-error' : '' }}--}}
{{--                            -->--}}

{{--                        </div>--}}

{{--                        <div class=" custom_field form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--                            <div class="inner-addon left-addon">--}}
{{--                                <i class="glyphicon glyphicon-tasks"></i>--}}
{{--                                <input id="edition" type="number" class="form-control" name="edition" required placeholder="Book Edition">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    <!----}}
{{--                                @if ($errors->has('email'))--}}
{{--                        <span class="help-block">--}}
{{--                            <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                        -->--}}

{{--                        <div class="row" style="margin-left: 0px; margin-right: -57px;">--}}
{{--                            <div class="custom_field form-group col-sm-10">--}}

{{--                                <select class="form-control" id="sel1" name="authId">--}}
{{--                                    <option>--Select Author--</option>--}}
{{--                                    <option></option>--}}
{{--                                    @foreach($auths as $auth)--}}
{{--                                        <option> {{$auth->name}} </option>--}}
{{--                                    @endforeach--}}
{{--                                    @foreach($auths as $value)--}}
{{--                                        <option>{{$value['name']}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-2 ">--}}
{{--                                <button type="button" class="btn btn-primary btn-circle btn-sm"><a href="addAuthor" class="glyphicon glyphicon-plus"></a></button>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                        <div class="row" style="margin-left: 0px; margin-right: -57px;">--}}
{{--                            <div class="custom_field form-group col-sm-10">--}}

{{--                                <select class="form-control" id="sel1" name="catId">--}}
{{--                                    <option>--Select Category--</option>--}}
{{--                                    @foreach($category as $value)--}}
{{--                                        <option>{{$value['catName']}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-2 ">--}}
{{--                                <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="glyphicon glyphicon-plus"></i></button>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                        <div class="custom_field form-group">--}}
{{--                            <div class="inner-addon left-addon">--}}
{{--                                <i class="glyphicon glyphicon-question-sign"></i>--}}
{{--                                <input id="booksAvail" type="number" class="form-control" name="booksAvail" required placeholder="No of Books Available">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <div class="col-md-6 col-md-offset-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    Save--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
