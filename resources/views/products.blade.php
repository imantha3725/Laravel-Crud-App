@extends('layout.main')
@section('custom_title')
<title>CC Bakery - Products</title>
@endsection
@section('custom_styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection
@section('content')
<div class="col-md-12">
    <div class="row">
<div class="col-md-6">
<h4 class="mb-4">Bakery Products</h4>
</div>
<div class="col-md-6 d-flex justify-content-end">
    <a href="{{ url('/products/new') }}"><button class="btn btn-primary ms-2 " data-bs-toggle="modal">
            <i class="fas fa-plus"></i> Add Product
        </button></a>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-10 col-md-9 product-grid">


    <!-- Product Grid - Using CSS Grid for perfect 3x3 layout -->
    <div class="grid-container">
        <!-- Product 1 -->
        @foreach ($products as $products )


        <div class="card product-card p-4 position-relative">
            <div class="action-buttons">
                <a href="{{ url('/products/edit/'.$products->id) }}">
                <div class="action-btn edit-btn">
                    <i class="bi bi-pencil-square"></i>
                </div>
                </a>
                <a href="{{ url('/products/delete/'.$products->id) }}">
                <div class="action-btn delete-btn">
                    <i class="bi bi-trash"></i>
                </div>
                </a>

                <div class="action-btn refresh-btn">
                    <i class="bi bi-arrow-repeat"></i>
                </div>

            </div>
            <div class="text-center mb-3">
                <div class="product-image">
                    <i class="bi bi-cake2 fs-1 text-success"></i>
                </div>
            </div>
            <p class="text-muted text-center mb-2">{{ $products->name }}</p>
            <h5 class="product-count text-center">{{ $products->id }}</h5>
            <p class="text-muted text-center small">Available:{{ $products->amount }}</p>
        </div>

        @endforeach
        </div>













    </div>
</div>
@section('custom_scripts')

@endsection
@endsection
