@extends('layouts.app', ['activePage' => 'questions', 'activeButton' => 'questions', 'navName' => 'Questions/Answers'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Upload Questions and Answers</h4>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('questions.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="questions_file">Select Questions Excel File</label>
                        <input type="file" name="questions_file" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="answers_file">Select Answers Excel File</label>
                        <input type="file" name="answers_file" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
