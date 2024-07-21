@extends('layouts.app', ['title' => 'Create Record'])

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Best School</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('tables.store_best_school') }}">
                    @csrf
                    <div class="form-group">
                        <label for="school_id">School ID</label>
                        <input type="text" class="form-control" id="school_id" name="school_id" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" name="position" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Worst School</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('tables.store_worst_school') }}">
                    @csrf
                    <div class="form-group">
                        <label for="school_id">School ID</label>
                        <input type="text" class="form-control" id="school_id" name="school_id" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" name="position" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Best Participant</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('tables.store_best_participant') }}">
                    @csrf
                    <div class="form-group">
                        <label for="participant_id">Participant ID</label>
                        <input type="text" class="form-control" id="participant_id" name="participant_id" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="school">School</label>
                        <input type="text" class="form-control" id="school" name="school" required>
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" name="position" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
