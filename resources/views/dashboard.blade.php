@extends('layout.main')
@section('custom_title')
<title>CC Bakery</title>
@endsection
@section('custom_styles')

@endsection
@section('content')
<div class="row g-4">
                    <div class="col-12 col-md-4">
                        <div class="card stat-card h-100">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon-container bg-primary-subtle me-3">
                                    <i class="fas fa-users text-primary"></i>
                                </div>
                                <div>
                                    <p class="card-text text-muted mb-0">Total Customers</p>
                                    <h4 class="card-title mb-0">5,423</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card stat-card h-100">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon-container bg-success-subtle me-3">
                                    <i class="fas fa-user text-success"></i>
                                </div>
                                <div>
                                    <p class="card-text text-muted mb-0">Employees</p>
                                    <h4 class="card-title mb-0">1,893</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card stat-card h-100">
                            <div class="card-body d-flex align-items-center">
                                <div class="icon-container bg-info-subtle me-3">
                                    <i class="fas fa-desktop text-info"></i>
                                </div>
                                <div>
                                    <p class="card-text text-muted mb-0">Items</p>
                                    <h4 class="card-title mb-0">189</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@section('custom_scripts')

@endsection
@endsection
