<!-- resources/views/employees/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employees</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Create New Employee</a>
        <div class="row">
            @foreach ($employees as $employee)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3>{{ $employee->name }}</h3>
                            <p>{{ $employee->email }}</p>
                            @if ($employee->photo)
                                <img src="{{ asset('storage/' . $employee->photo) }}" alt="Photo of {{ $employee->name }}" class="img-fluid">
                            @endif
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
