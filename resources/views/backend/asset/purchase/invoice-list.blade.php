@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Invoice List Table -->
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">All Invoice</h5>
                <div class="px-5">
                    <!-- <a href="cv-add.html" class="btn btn-primary btn-sm">Create Invoie</a> -->
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="invoice-list-table table border-top">
                    <thead>
                        <div class="row p-1 px-2 mb-4">
                            <div class="col-2">
                                <label class="form-label" for="formtabs-country5">By Supplier</label>
                                <select id="formtabs-country5" class="select2 form-select" data-allow-clear="true" style="line-height: 17px">
                                    <option value="" class="data-text-direction"></option>
                                    <option value="Australia">Engineer</option>
                                    <option value="Bangladesh">Doctor</option>
                                    <option value="Belarus">Professor</option>
                                </select>
                            </div>

                            <div class="col-2">
                                <label class="form-label" for="formtabs-country6">By Product</label>
                                <select id="formtabs-country6" class="select2 form-select" data-allow-clear="true" style="line-height: 17px">
                                    <option value=""></option>
                                    <option value="Australia">Civil Engineer</option>
                                    <option value="Bangladesh">Medicine Doctor</option>
                                    <option value="Belarus">Bangla Professor</option>
                                </select>
                            </div>

                            <div class="col-2">
                                <label class="form-label" for="formtabs-country7">By Date (From)</label>
                                <input type="date" class="form-control" />
                            </div>

                            <div class="col-2">
                                <label class="form-label" for="formtabs-country8">By Date (To)</label>
                                <input type="date" class="form-control" />
                            </div>
                            <div class="col-2 mt-6">
                                <a href="#" class="btn btn-primary">Search</a>
                            </div>
                        </div>
                        <tr>
                            <th>Sl No.</th>
                            <th>Invoice No.</th>
                            <th>Supplier Name</th>
                            <th>Product Item</th>
                            <th class="text-truncate">Issued Date</th>
                            <th>Delivery Date</th>
                            <th>Delivery Status</th>
                            <th>Action<span></span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>IN0125485</td>
                            <td>Korim Motors Ltd.</td>
                            <td>Air Filter</td>
                            <td>21-06-2024</td>
                            <td>21-07-2024</td>
                            <td>Undelivery</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>IN0125485</td>
                            <td>Korim Motors Ltd.</td>
                            <td>Air Filter</td>
                            <td>21-06-2024</td>
                            <td>21-07-2024</td>
                            <td>Undelivery</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>IN0125485</td>
                            <td>Korim Motors Ltd.</td>
                            <td>Air Filter</td>
                            <td>21-06-2024</td>
                            <td>21-07-2024</td>
                            <td>Undelivery</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
