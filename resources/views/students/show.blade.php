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
                <h2> Show Student</h2>
            </div>
            
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Number:</strong>
                {{ $student->IdNumber }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fullname:</strong>
                {{ $student->fname }} {{ $student->mname}} {{ $student->lname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $student->gender }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Birthdate:</strong>
                {{ $student->birthdate }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $student->email }}
            </div>
        </div>
    </div>

        <div class="pull-right">
            <a class="btn btn-secondary" href="{{ route('students.index') }}"> Back</a>
        </div>
@endsection
