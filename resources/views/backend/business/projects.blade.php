@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->

        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">List of Proposal</h5>
                <div class="px-5">
                    <a href="{{ route('busi_projectview') }}" class="btn btn-primary">Proposal Entry</a>
                </div>
            </div>

            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Project Name</th>
                            <th>Duration</th>
                            <th>Client Name</th>
                            <th>Associated Firms</th>
                            <th>Approx Contract Value</th>
                            <th>Status</th>
                            <th>Result</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Metro Rail</td>
                            <td>5 Years</td>
                            <td>ABC</td>
                            <td>DMTS</td>
                            <td>12,300,051,236.00</td>
                            <td>Submitted</td>
                            <td>Accepted</td>
                            <td>
                                <a href="view-details.html" class="btn btn-primary btn-sm">Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Metro Rail</td>
                            <td>5 Years</td>
                            <td>ABC</td>
                            <td>DMTS</td>
                            <td>12,300,051,236.00</td>
                            <td>Submitted</td>
                            <td>Accepted</td>
                            <td>
                                <a href="view-details.html" class="btn btn-primary btn-sm">Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Metro Rail</td>
                            <td>5 Years</td>
                            <td>ABC</td>
                            <td>DMTS</td>
                            <td>12,300,051,236.00</td>
                            <td>Submitted</td>
                            <td>Accepted</td>
                            <td>
                                <a href="view-details.html" class="btn btn-primary btn-sm">Details</a>
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
