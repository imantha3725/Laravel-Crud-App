@extends('layout.main')
@section('custom_title')
<title>CC Bakery - Customers</title>
@endsection
@section('custom_styles')

@endsection
@section('content')
<!-- Customers Table -->
<div class="table-container">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h5 class="mb-1">All Customers</h5>
                            <p class="text-muted mb-0 small">Active Members</p>
                        </div>
                        <div class="d-flex">
                            <div class="search-container me-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-text bg-white border-start-0">
                                        <i class="fas fa-search text-muted"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort by: <span class="fw-bold">Newest</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                                    <li><a class="dropdown-item" href="#">Newest</a></li>
                                    <li><a class="dropdown-item" href="#">Oldest</a></li>
                                    <li><a class="dropdown-item" href="#">Name (A-Z)</a></li>
                                    <li><a class="dropdown-item" href="#">Name (Z-A)</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
                                <i class="fas fa-plus"></i> Add Customer
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover" id="customersTable">
                            <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Company</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jane Cooper</td>
                                    <td>Microsoft</td>
                                    <td>(225) 555-0118</td>
                                    <td>jane@microsoft.com</td>
                                    <td>United States</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info btn-action" ><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger btn-action" ><i class="fas fa-trash"></i></button>
                                        <button class="btn btn-sm btn-warning btn-action"><i class="fas fa-sync"></i></button>
                                    </td>
                                </tr>







                            </tbody>
                        </table>
                    </div>


@section('custom_scripts')

@endsection
@endsection
