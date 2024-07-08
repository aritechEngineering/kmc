@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->

        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">List of Vehicle</h5>
                <div class="px-5">
                    <a href="vehicle-entry.html" class="btn btn-primary btn-sm">Vehicle Entry</a>
                </div>
            </div>

            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Vehicle Number</th>
                            <th>Vehicle Model</th>
                            <th>Vehicle Brand</th>
                            <th>Seat Capacity</th>
                            <th>Registration Number</th>
                            <th>Registration Issue Date</th>
                            <th>Tax Token Expire Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Dhaka 11-253625</td>
                            <td>Corola</td>
                            <td>Toyota</td>
                            <td>04</td>
                            <td>21359842452</td>
                            <td>11-06-2015</td>
                            <td>30-06-2025</td>
                            <td>
                                <a href="vehicle-details.html" class="btn btn-sm btn-success">Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>Dhaka 11-253625</td>
                            <td>Corola</td>
                            <td>Toyota</td>
                            <td>04</td>
                            <td>21359842452</td>
                            <td>11-06-2015</td>
                            <td>30-06-2025</td>
                            <td>
                                <a href="vehicle-details.html" class="btn btn-sm btn-success">Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>Dhaka 11-253625</td>
                            <td>Corola</td>
                            <td>Toyota</td>
                            <td>04</td>
                            <td>21359842452</td>
                            <td>11-06-2015</td>
                            <td>30-06-2025</td>
                            <td>
                                <a href="vehicle-details.html" class="btn btn-sm btn-success">Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>04</td>
                            <td>Dhaka 11-253625</td>
                            <td>Corola</td>
                            <td>Toyota</td>
                            <td>04</td>
                            <td>21359842452</td>
                            <td>11-06-2015</td>
                            <td>30-06-2025</td>
                            <td>
                                <a href="vehicle-details.html" class="btn btn-sm btn-success">Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>05</td>
                            <td>Dhaka 11-253625</td>
                            <td>Corola</td>
                            <td>Toyota</td>
                            <td>04</td>
                            <td>21359842452</td>
                            <td>11-06-2015</td>
                            <td>30-06-2025</td>
                            <td>
                                <a href="vehicle-details.html" class="btn btn-sm btn-success">Details</a>
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
