@extends('layout.main')
@section('custom_title')
<title>CC Bakery-Add_Employee</title>
@endsection
@section('custom_styles')

@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ url('/employee/add') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
                <label for="occupation" class="form-label">Occupation</label>
                <input type="text" name="occupation" class="form-control" id="occupation" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Employee</button>
        </form>
    </div>
</div>
@section('custom_scripts')

@endsection
@endsection
