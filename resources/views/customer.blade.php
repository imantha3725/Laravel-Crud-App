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

                            <a href="{{ url('/customers/new') }}"><button class="btn btn-primary ms-2" data-bs-toggle="modal" >
                                <i class="fas fa-plus"></i> Add Customer
                            </button></a>
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


                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customer as $customer )


                                <tr>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->company }}</td>
                                    <td>{{ $customer->phone_number }}</td>
                                    <td>{{ $customer->email }}</td>


                                    <td>
                                        <a href="{{ url('/customers/edit/'.$customer->id) }}"><button class="btn btn-sm btn-info btn-action" ><i class="fas fa-edit"></i></button></a>
                                        <a href="{{ url('customers/delete'.$customer->id) }}"><button class="btn btn-sm btn-danger btn-action" ><i class="fas fa-trash"></i></button></a>
                                        <button class="btn btn-sm btn-warning btn-action"><i class="fas fa-sync"></i></button>
                                    </td>
                                </tr>
                                @endforeach







                            </tbody>
                        </table>
                    </div>


@section('custom_scripts')

@endsection
@endsection
