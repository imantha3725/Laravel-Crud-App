@extends('layout.main')
@section('custom_title')
<title>CC Bakery - Employees</title>
@endsection
@section('custom_styles')

@endsection
@section('content')
<!-- Customers Table -->
<div class="table-container">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h5 class="mb-1">Employees</h5>
                            <p class="text-muted mb-0 small">Active Employees</p>
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

                            <a href="{{ url('/employees/new') }}"><button class="btn btn-primary ms-2" data-bs-toggle="modal" >
                                <i class="fas fa-plus"></i> Add Employee
                            </button></a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover" id="customersTable">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Employee Name</th>
                                    <th>Email</th>
                                    <th>Occupation</th>



                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employees )


                                <tr>
                                    <td>{{ $employees->id }}</td>
                                    <td>{{ $employees->name }}</td>
                                    <td>{{ $employees->email }}</td>
                                    <td>{{ $employees->occupation }}</td>


                                    <td>
                                        <a href="{{ url('/employees/edit/'.$employees->id) }}"><button class="btn btn-sm btn-info btn-action" ><i class="fas fa-edit"></i></button></a>
                                        <a href="{{ url('employees/delete'.$employees->id) }}"><button class="btn btn-sm btn-danger btn-action" ><i class="fas fa-trash"></i></button></a>
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

