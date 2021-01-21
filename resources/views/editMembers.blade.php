@extends('layouts/master')

@section('content')

    <div class="card uper">
        <div class="card-header">
            <h2>Edit Member Data</h2>
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
            <form method="post" action="{{ route('mems.update', $mem->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="country_name">Name</label>
                    <input type="text" class="form-control" name="memName" value="{{ $mem->memName }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">Email :</label>
                    <input type="text" class="form-control" name="email" value="{{ $mem->email }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">Contact :</label>
                    <input type="text" class="form-control" name="contact" value="{{ $mem->contact }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">Address :</label>
                    <input type="text" class="form-control" name="address" value="{{ $mem->address }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">Department :</label>
                    <input type="text" class="form-control" name="dept" value="{{ $mem->dept }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">Password :</label>
                    <input type="password" class="form-control" name="password" value="{{ $mem->password }}"/>
                    <select class="form-control" id="memType" name="memType">
                        <option>--Member Type--</option>
                        <option>Student</option>
                        <option>Staff</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
@endsection

