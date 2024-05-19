@extends('students.layout')

@section('content')

<div class="row mb-">
            <div class="col-lg-12">
                <div class="card bg-custom text-white">
                    <div class="card-body d-flex align-items-center">
                        <img src="{{ asset('images/slc.png') }}" style="height: 100px; margin-right: 20px;" alt="SLC Logo">
                        <div>
                            <h2 class="mb-0">Student Management System</h2>
                            <p class="mb-0">Saint Louis College</p>
                            <p class="mb-1">BSIT - 3A</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Student</h2>
        </div>
        
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('students.store') }}" method="POST">
    @csrf
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Number</strong>
                <input type="text" name="IdNumber" class="form-control" placeholder="Id Number" maxlength="8">
            </div>
        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="fname" class="form-control" placeholder="First Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Middle Name:</strong>
                <input type="text" name="mname" class="form-control" placeholder="Middle Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="lname" class="form-control" placeholder="Last Name">
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Gender</strong><br>
                    <input type="radio" name="gender" value="male" id="gender_male">
                    <label for="gender_male">Male</label>
                    <input type="radio" name="gender" value="female" id="gender_female">
                    <label for "gender_female">Female</label><br>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="form-group">
                    <strong>Birthdate</strong>
                    <input type="date" name="birthdate" class="form-control" placeholder="birthdate">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>

        <div class="row mb-4">
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('students.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

</form>
@endsection
