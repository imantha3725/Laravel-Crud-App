@extends('layout.main')
@section('custom_title')
<title>CC Bakery-Add_Customer</title>
@endsection
@section('custom_styles')

@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ url('/products/add') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="text" name="amount" class="form-control" id="amount" required>
            </div>


            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</div>
@section('custom_scripts')

@endsection
@endsection
