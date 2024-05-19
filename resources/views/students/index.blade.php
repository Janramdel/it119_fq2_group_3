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
                            <p class="mb-1">BSIT - 3A Group 3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-striped">
            <tr>
                <th>No.</th>
                <th>Fullname</th>
                <th>ID Number</th>
                <th>Gender</th>
                <th>Birthdate</th>
                <th>Email</th>
                <th align="right">Action</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->fname }} {{ $student->mname ? strtoupper(substr($student->mname, 0, 1)).'.' : '' }} {{ $student->lname }}</td>
                <td>{{ $student->IdNumber }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->birthdate }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('students.show',$student->id) }}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}"><i class="fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('students.create') }}"> Create New Student</a>
        </div>
    </div>
@endsection
