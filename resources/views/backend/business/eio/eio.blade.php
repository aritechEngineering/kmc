@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->

        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">List of EOI</h5>
                <div class="px-5">
                    <a href="{{ route('busi_eioadd') }}" class="btn btn-primary">EOI Entry</a>
                </div>
            </div>

            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Project Name</th>
                            <th>Client Name</th>
                            <th>Founded by</th>
                            <th>Sector</th>
                            <th>Associated Firms</th>
                            <th>Status</th>
                            <th>Result</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>XYZ</td>
                            <td>ZYZ</td>
                            <td>ABC</td>
                            <td>ABC</td>
                            <td>EFG</td>
                            <td>Submitted</td>
                            <td>Accepted</td>
                            <td>
                                <a href="{{ route('busi_eioview') }}" class="btn btn-primary btn-sm">Details</a>
                                <a href="#" class="btn btn-info btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>XYZ</td>
                            <td>ZYZ</td>
                            <td>ABC</td>
                            <td>ABC</td>
                            <td>EFG</td>
                            <td>Submitted</td>
                            <td>Accepted</td>
                            <td>
                                <a href="{{ route('busi_eioview') }}" class="btn btn-primary btn-sm">Details</a>
                                <a href="#" class="btn btn-info btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>XYZ</td>
                            <td>ZYZ</td>
                            <td>ABC</td>
                            <td>ABC</td>
                            <td>EFG</td>
                            <td>Submitted</td>
                            <td>Accepted</td>
                            <td>
                                <a href="{{ route('busi_eioview') }}" class="btn btn-primary btn-sm">Details</a>
                                <a href="#" class="btn btn-info btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="ms-5">Showing 1 to 03 of 5000 entries</div>
            </div>
        </div>
        <!--/ Responsive Datatable -->
    </div>
    <!-- / Content -->
@endsection
