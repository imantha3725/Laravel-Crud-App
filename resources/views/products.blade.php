@extends('layout.main')
@section('custom_title')
<title>CC Bakery - Products</title>
@endsection
@section('custom_styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection
@section('content')
<div class="col-lg-10 col-md-9 product-grid">
                <h4 class="mb-4">Bakery Products</h4>

                <!-- Product Grid - Using CSS Grid for perfect 3x3 layout -->
                <div class="grid-container">
                    <!-- Product 1 -->
                    <div class="card product-card p-4 position-relative">
                        <div class="action-buttons">
                            <div class="action-btn edit-btn">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <div class="action-btn delete-btn">
                                <i class="bi bi-trash"></i>
                            </div>
                            <div class="action-btn refresh-btn">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <div class="product-image">
                                <i class="bi bi-cake2 fs-1 text-success"></i>
                            </div>
                        </div>
                        <p class="text-muted text-center mb-2">CHOCOLATE CAKE</p>
                        <h5 class="product-count text-center">112</h5>
                        <p class="text-muted text-center small">Available: 85 pieces</p>
                    </div>

                    <!-- Product 2 -->
                    <div class="card product-card p-4 position-relative">
                        <div class="action-buttons">
                            <div class="action-btn edit-btn">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <div class="action-btn delete-btn">
                                <i class="bi bi-trash"></i>
                            </div>
                            <div class="action-btn refresh-btn">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <div class="product-image">
                                <i class="bi bi-baguette fs-1 text-success"></i>
                            </div>
                        </div>
                        <p class="text-muted text-center mb-2">CINNAMON ROLLS</p>
                        <h5 class="product-count text-center">112</h5>
                        <p class="text-muted text-center small">Available: 92 pieces</p>
                    </div>

                    <!-- Product 3 -->
                    <div class="card product-card p-4 position-relative">
                        <div class="action-buttons">
                            <div class="action-btn edit-btn">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <div class="action-btn delete-btn">
                                <i class="bi bi-trash"></i>
                            </div>
                            <div class="action-btn refresh-btn">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <div class="product-image">
                                <i class="bi bi-egg-fried fs-1 text-success"></i>
                            </div>
                        </div>
                        <p class="text-muted text-center mb-2">CROISSANTS</p>
                        <h5 class="product-count text-center">112</h5>
                        <p class="text-muted text-center small">Available: 67 pieces</p>
                    </div>

                    <!-- Product 4 -->
                    <div class="card product-card p-4 position-relative">
                        <div class="action-buttons">
                            <div class="action-btn edit-btn">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <div class="action-btn delete-btn">
                                <i class="bi bi-trash"></i>
                            </div>
                            <div class="action-btn refresh-btn">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <div class="product-image">
                                <i class="bi bi-cookie fs-1 text-success"></i>
                            </div>
                        </div>
                        <p class="text-muted text-center mb-2">COOKIES</p>
                        <h5 class="product-count text-center">112</h5>
                        <p class="text-muted text-center small">Available: 120 pieces</p>
                    </div>

                    <!-- Product 5 -->
                    <div class="card product-card p-4 position-relative">
                        <div class="action-buttons">
                            <div class="action-btn edit-btn">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <div class="action-btn delete-btn">
                                <i class="bi bi-trash"></i>
                            </div>
                            <div class="action-btn refresh-btn">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <div class="product-image">
                                <i class="bi bi-pie-chart fs-1 text-success"></i>
                            </div>
                        </div>
                        <p class="text-muted text-center mb-2">FRUIT PIES</p>
                        <h5 class="product-count text-center">112</h5>
                        <p class="text-muted text-center small">Available: 45 pieces</p>
                    </div>

                    <!-- Product 6 -->
                    <div class="card product-card p-4 position-relative">
                        <div class="action-buttons">
                            <div class="action-btn edit-btn">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <div class="action-btn delete-btn">
                                <i class="bi bi-trash"></i>
                            </div>
                            <div class="action-btn refresh-btn">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <div class="product-image">
                                <i class="bi bi-cup fs-1 text-success"></i>
                            </div>
                        </div>
                        <p class="text-muted text-center mb-2">CUPCAKES</p>
                        <h5 class="product-count text-center">112</h5>
                        <p class="text-muted text-center small">Available: 76 pieces</p>
                    </div>

                    <!-- Product 7 -->
                    <div class="card product-card p-4 position-relative">
                        <div class="action-buttons">
                            <div class="action-btn edit-btn">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <div class="action-btn delete-btn">
                                <i class="bi bi-trash"></i>
                            </div>
                            <div class="action-btn refresh-btn">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <div class="product-image">
                                <i class="bi bi-bread fs-1 text-success"></i>
                            </div>
                        </div>
                        <p class="text-muted text-center mb-2">SOURDOUGH BREAD</p>
                        <h5 class="product-count text-center">112</h5>
                        <p class="text-muted text-center small">Available: 53 pieces</p>
                    </div>

                    <!-- Product 8 -->
                    <div class="card product-card p-4 position-relative">
                        <div class="action-buttons">
                            <div class="action-btn edit-btn">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <div class="action-btn delete-btn">
                                <i class="bi bi-trash"></i>
                            </div>
                            <div class="action-btn refresh-btn">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <div class="product-image">
                                <i class="bi bi-egg fs-1 text-success"></i>
                            </div>
                        </div>
                        <p class="text-muted text-center mb-2">MACARONS</p>
                        <h5 class="product-count text-center">112</h5>
                        <p class="text-muted text-center small">Available: 98 pieces</p>
                    </div>

                    <!-- Product 9 -->
                    <div class="card product-card p-4 position-relative">
                        <div class="action-buttons">
                            <div class="action-btn edit-btn">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <div class="action-btn delete-btn">
                                <i class="bi bi-trash"></i>
                            </div>
                            <div class="action-btn refresh-btn">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <div class="product-image">
                                <i class="bi bi-layers fs-1 text-success"></i>
                            </div>
                        </div>
                        <p class="text-muted text-center mb-2">PASTRIES</p>
                        <h5 class="product-count text-center">112</h5>
                        <p class="text-muted text-center small">Available: 104 pieces</p>
                    </div>
                </div>
            </div>
@section('custom_scripts')

@endsection
@endsection
