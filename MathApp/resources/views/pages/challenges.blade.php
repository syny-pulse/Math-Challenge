@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Challenges</h1>
    <a href="{{ route('challenges.create') }}" class="btn btn-primary">Add New Challenge</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Challenge ID</th>
                <th>Starting Date</th>
                <th>Ending Date</th>
                <th>Duration per Challenge</th>
                <th>Number of Questions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($challenges as $challenge)
                <tr>
                    <td>{{ $challenge->id }}</td>
                    <td>{{ $challenge->challenge_id }}</td>
                    <td>{{ $challenge->starting_date }}</td>
                    <td>{{ $challenge->ending_date }}</td>
                    <td>{{ $challenge->duration_per_challenge }}</td>
                    <td>{{ $challenge->number_of_questions }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
