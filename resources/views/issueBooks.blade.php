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
            <form method="post" style="color: black" action="{{route('iss.create')}}">
                @csrf
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Issue Information</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="memberId">Member ID</label>
                                <input type="text" class="form-control" name="memId" placeholder="Member ID">
                            </div>
                            <div class="form-group">
                                <label for="bookName">Book Name</label>
                                <input type="text" class="form-control" name="bookName" value="" id="bookName" placeholder="Book Title">
                            </div>
                            <div class="form-group">
                                <label for="bookId">Book ID</label>
                                <input type="text" class="form-control" name="bookId" value="" id="bookId" placeholder="Book ID">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Date Information</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="issueDate">Issue Date</label>
                                <input type="date" class="form-control" name="issueDate" id="issueDate">
                            </div>
                            <div class="form-group">
                                <label for="returnDate">Return Date</label>
                                <input type="date" name="returnDate" class="form-control" id="returnDate">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="button">Issue Books</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('layouts.footer')

@endsection
