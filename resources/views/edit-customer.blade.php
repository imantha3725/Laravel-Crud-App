@extends('layout.main')
@section('custom_title')
<title>CC Bakery-Edit_Customer</title>
@endsection
@section('custom_styles')

@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ url('/customers/update/'.$customer->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $customer->name }}" required>
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Company</label>
                <input type="text" name="company" class="form-control" id="company" value="{{ $customer->company }}" required>
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" id="phone_number"value="{{ $customer->phone_number }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Customer</button>
        </form>
    </div>
</div>
@section('custom_scripts')

@endsection
@endsection
