@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->

        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">Driver List</h5>
                <div class="px-5">
                    <a href="driver-entry.html" class="btn btn-primary btn-sm">Driver Entry</a>
                </div>
            </div>

            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>License Type</th>
                            <th>License Number</th>
                            <th>License Issue Date</th>
                            <th>License Expire Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>DR012546</td>
                            <td>Md. Azizur Rahman</td>
                            <td>Light</td>
                            <td>0213542</td>
                            <td>10-10-2022</td>
                            <td>10-10-2025</td>
                            <td>
                                <a href="details.html" class="btn btn-sm btn-info">Details</a>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>DR012546</td>
                            <td>Md. Azizur Rahman</td>
                            <td>Light</td>
                            <td>0213542</td>
                            <td>10-10-2022</td>
                            <td>10-10-2025</td>
                            <td>
                                <a href="details.html" class="btn btn-sm btn-info">Details</a>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>DR012546</td>
                            <td>Md. Azizur Rahman</td>
                            <td>Light</td>
                            <td>0213542</td>
                            <td>10-10-2022</td>
                            <td>10-10-2025</td>
                            <td>
                                <a href="details.html" class="btn btn-sm btn-info">Details</a>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>04</td>
                            <td>DR012546</td>
                            <td>Md. Azizur Rahman</td>
                            <td>Light</td>
                            <td>0213542</td>
                            <td>10-10-2022</td>
                            <td>10-10-2025</td>
                            <td>
                                <a href="details.html" class="btn btn-sm btn-info">Details</a>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>05</td>
                            <td>DR012546</td>
                            <td>Md. Azizur Rahman</td>
                            <td>Light</td>
                            <td>0213542</td>
                            <td>10-10-2022</td>
                            <td>10-10-2025</td>
                            <td>
                                <a href="details.html" class="btn btn-sm btn-info">Details</a>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="ms-5">Showing 1 to 05 of 5000 entries</div>
            </div>
        </div>
        <!--/ Responsive Datatable -->
    </div>
    <!-- / Content -->
@endsection
