<!-- resources/views/employees/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $employee->name }}</h1>
        <p>{{ $employee->email }}</p>

        @if ($employee->photo)
        <img src="{{ asset('storage/' . $employee->photo) }}" alt="Photo of {{ $employee->name }}" class="img-fluid">
        @endif
        <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-3">Back to Employees</a>
    </div>
@endsection
