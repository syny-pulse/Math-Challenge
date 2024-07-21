@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Challenge</h1>

    <form action="{{ route('challenges.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="challenge_id" class="form-label">Challenge ID</label>
            <input type="text" class="form-control" id="challenge_id" name="challenge_id" required>
        </div>

        <div class="mb-3">
            <label for="starting_date" class="form-label">Starting Date</label>
            <input type="date" class="form-control" id="starting_date" name="starting_date" required>
        </div>

        <div class="mb-3">
            <label for="ending_date" class="form-label">Ending Date</label>
            <input type="date" class="form-control" id="ending_date" name="ending_date" required>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration (minutes)</label>
            <input type="number" class="form-control" id="duration" name="duration" required>
        </div>

        <div class="mb-3">
            <label for="number_of_questions" class="form-label">Number of Questions</label>
            <input type="number" class="form-control" id="number_of_questions" name="number_of_questions" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
