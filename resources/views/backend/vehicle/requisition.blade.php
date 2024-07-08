@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Form with Tabs -->
        <div class="row">
            <div class="col">
                <h6 class="mt-6"></h6>
                <div class="card mb-6">
                    <div class="card-header px-0 pt-0">
                        <div class="nav-align-top">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" aria-controls="form-tabs-personal" role="tab" aria-selected="true"><span class="ti ti-user ti-lg d-sm-none"></span><span class="d-none d-sm-block">Vehicle Requisition</span></button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="tab-content p-0">
                            <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                                <form class="form-repeater">
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item>
                                            <div class="row g-6">
                                                <div class="col-md-3">
                                                    <label class="form-label" for="formtabs-first-name">Requisition by</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control d-flex justify-content-between" placeholder="Search by ID" />
                                                </div>
                                                <div class="col-1" style="margin-top: 3rem">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#" class="fs-4 text-end mt-5"></a> search</button>
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label" for="formtabs-first-name">Requisition for</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control d-flex justify-content-between" placeholder="Search by ID" />
                                                </div>
                                                <div class="col-1" style="margin-top: 3rem">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#" class="fs-4 text-end mt-5"></a> search</button>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country0">Requisition Type</label>
                                                    <select id="formtabs-country0" class="select2 form-select" data-allow-clear="true">
                                                        <option value="Visit">Site Visit</option>
                                                        <option value="Maintenance">Maintenance</option>
                                                        <option value="Tour">Tour</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Requisition from</label>
                                                    <input type="datetime-local" id="formtabs-seat-capacity" class="form-control" placeholder="High Medium Low" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Requisition to</label>
                                                    <input type="datetime-local" id="formtabs-seat-capacity" class="form-control" placeholder="High Medium Low" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Duration</label>
                                                    <input type="text" id="formtabs-seat-capacity" class="form-control" placeholder="" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Distination</label>
                                                    <input type="text" id="formtabs-seat-capacity" class="form-control" placeholder="Location" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country">Vehicle Type</label>
                                                    <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Australia">Sedan</option>
                                                        <option value="Bangladesh">Micro</option>
                                                        <option value="Belarus">Mini Micro</option>
                                                        <option value="Brazil">SUV</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Purpose</label>
                                                    <textarea name="" id="" cols="45" rows="3" class="form-control" placeholder="purpose"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end mt-5">
                                        <button type="submit" class="btn btn-primary me-4">Submit</button>
                                        <button type="reset" class="btn btn-label-danger">Cancel</button>
                                    </div>
                                </form>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Employee Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">SL No.</th>
                                                            <th scope="col">Employee ID</th>
                                                            <th scope="col">Employee Name</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">01</th>
                                                            <td>DR152498</td>
                                                            <td>Md. Azizur Rahman</td>
                                                            <td>
                                                                <a href="#" class="btn btn-sm btn-info">select</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Employee Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">SL No.</th>
                                                            <th scope="col">Employee ID</th>
                                                            <th scope="col">Employee Name</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">01</th>
                                                            <td>DR152498</td>
                                                            <td>Md. Azizur Rahman</td>
                                                            <td>
                                                                <a href="#" class="btn btn-sm btn-info">select</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
