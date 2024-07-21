@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Schools</h1>
    <a href="{{ route('schools.create') }}" class="btn btn-primary">Add New School</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>District</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($schools as $school)
                <tr>
                    <td>{{ $school->school_id }}</td>
                    <td>{{ $school->name }}</td>
                    <td>{{ $school->district }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
