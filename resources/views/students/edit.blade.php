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
                <h2>Edit Student</h2>
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

    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Number</strong>
                    <input type="text" name="IdNumber" value="{{ $student->IdNumber }}" class="form-control" placeholder="Id Number" readonly>
                </div>
            </div>

           
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong>First Name:</strong>
                        <input type="text" name="fname" value="{{ $student->fname }}" class="form-control" placeholder="First Name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong>Middle Name:</strong>
                        <input type="text" name="mname" value="{{ $student->mname }}" class="form-control" placeholder="Middle Name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong>Last Name:</strong>
                        <input type="text" name="lname" value="{{ $student->lname }}" class="form-control" placeholder="Last Name">
                    </div>
                </div>
           

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender_male" value="male" {{ $student->gender == 'male' ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender_male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender_female" value="female" {{ $student->gender == 'female' ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender_female">Female</label>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Birthdate:</strong>
                    <input type="date" name="birthdate" value="{{ $student->birthdate }}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value="{{ $student->email }}" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="row mb-4">
                <div class="pull-right">
                    <a class="btn btn-secondary" href="{{ route('students.index') }}"> Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

    </form>
@endsection
