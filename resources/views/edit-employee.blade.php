@extends('layout.main')
@section('custom_title')
<title>CC Bakery-Edit_Customer</title>
@endsection
@section('custom_styles')

@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ url('/employees/update/'.$employees->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employees->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email" value="{{ $employees->email }}" required>
            </div>

            <div class="mb-3">
                <label for="occupation" class="form-label">Occupation</label>
                <input type="text" name="occupation" class="form-control" id="occupation" value="{{ $employees->occupation }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
</div>
@section('custom_scripts')

@endsection
@endsection
