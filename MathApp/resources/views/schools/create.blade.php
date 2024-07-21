@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create School</h1>

    <form action="{{ route('schools.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="school_id" class="form-label">School ID</label>
            <input type="text" class="form-control" id="school_id" name="school_id" required>
        </div>

        <div class="mb-3">
            <label for="school_regno" class="form-label">School Registration Number</label>
            <input type="text" class="form-control" id="school_regno" name="school_regno" required>
        </div>

        <div class="mb-3">
            <label for="district" class="form-label">District</label>
            <input type="text" class="form-control" id="district" name="district" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">School Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="representative_name" class="form-label">Representative Name</label>
            <input type="text" class="form-control" id="representative_name" name="representative_name" required>
        </div>

        <div class="mb-3">
            <label for="representative_email" class="form-label">Representative Email</label>
            <input type="email" class="form-control" id="representative_email" name="representative_email" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
