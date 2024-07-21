@extends('layouts.app', ['title' => 'Tables'])

@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Best Schools</h4>
                <a href="{{ route('tables.create') }}" class="btn btn-primary">Add Best School</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>School ID</th>
                            <th>Name</th>
                            <th>Position</th>
                        </thead>
                        <tbody>
                            @foreach($best_schools as $school)
                            <tr>
                                <td>{{ $school->school_id }}</td>
                                <td>{{ $school->name }}</td>
                                <td>{{ $school->position }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Worst Schools</h4>
                <!-- Link to create worst school form -->
                <a href="{{ route('tables.create') }}" class="btn btn-primary">Add Worst School</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>School ID</th>
                            <th>Name</th>
                            <th>Position</th>
                        </thead>
                        <tbody>
                            @foreach($worst_schools as $school)
                            <tr>
                                <td>{{ $school->school_id }}</td>
                                <td>{{ $school->name }}</td>
                                <td>{{ $school->position }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Best Participants</h4>
                <!-- Link to create best participant form -->
                <a href="{{ route('tables.create') }}" class="btn btn-primary">Add Best Participant</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Participant ID</th>
                            <th>Name</th>
                            <th>School</th>
                            <th>Position</th>
                        </thead>
                        <tbody>
                            @foreach($best_participants as $participant)
                            <tr>
                                <td>{{ $participant->participant_id }}</td>
                                <td>{{ $participant->name }}</td>
                                <td>{{ $participant->school }}</td>
                                <td>{{ $participant->position }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
