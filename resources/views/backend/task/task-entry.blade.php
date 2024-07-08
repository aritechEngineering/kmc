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
                                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" aria-controls="form-tabs-personal" role="tab" aria-selected="true"><span class="ti ti-user ti-lg d-sm-none"></span><span class="d-none d-sm-block">Task Entry</span></button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2" style="margin: 0; padding: 0; margin-left: 24px; margin-right: -7rem; margin-top: 10px">
                            <label class="form-label ms-4 fw-medium" for="formtabs-countryd">Employee Name :</label>
                        </div>
                        <div class="col-md-3">
                            <select id="formtabs-countryd" class="select2 form-select d-flex justify-content-between" data-allow-clear="true">
                                <option value="" selected>Select Employee</option>
                                <option value="Australia">jamil</option>
                                <option value="Bangladesh">Rasel</option>
                                <option value="Belarus">Mizan</option>
                                <option value="Brazil">Emon</option>
                            </select>
                        </div>

                        <div class="row mt-5" style="padding-left: 38px">
                            <div class="col-md-2">
                                <label class="form-label" for="formtabs-countryda">Project Name :</label>
                                <select id="formtabs-countryda" class="select2 form-select" data-allow-clear="true">
                                    <option value="" selected>Select Project Name</option>
                                    <option value="1">Dhaka</option>
                                    <option value="2">CTG</option>
                                    <option value="3">Khulna</option>
                                    <option value="4">Rajshahi</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label" for="formtabs-countrydb">Work Location :</label>
                                <select id="formtabs-countrydb" class="select2 form-select" data-allow-clear="true">
                                    <option value="" selected>Select Location</option>
                                    <option value="1">Dhaka</option>
                                    <option value="2">CTG</option>
                                    <option value="3">Khulna</option>
                                    <option value="4">Rajshahi</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label" for="formtabs-first-name">From Date :</label>
                                <input type="datetime-local" id="formtabs-first-name" class="form-control" placeholder="Days or Hours" />
                            </div>

                            <div class="col-md-2">
                                <label class="form-label" for="formtabs-first-name">To Date :</label>
                                <input type="datetime-local" id="formtabs-first-name" class="form-control" placeholder="Days or Hours" />
                            </div>

                            <div class="col-md-2">
                                <label class="form-label" for="formtabs-first-name">Duration :</label>
                                <input type="text" id="formtabs-first-name" class="form-control" placeholder="Days or Hours" />
                            </div>

                            <div class="col-md-2">
                                <label class="form-label" for="formtabs-countrydc">Duration Unit :</label>
                                <select id="formtabs-countrydc" class="select2 form-select" data-allow-clear="true">
                                    <option value="" selected>Select Unit</option>
                                    <option value="1">Days</option>
                                    <option value="2">Hours</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="tab-content p-0">
                            <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                                <form class="form-repeater">
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item>
                                            <div class="row g-6 py-2">
                                                <div class="col-10 col-md-11">
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="Enter Task" />
                                                </div>
                                                <div class="col-2 col-md-1 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-label-danger w-100" data-repeater-delete>
                                                        <i class="ti ti-x ti-xs me-1"></i>
                                                        <span class="align-middle"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <button type="button" class="btn btn-primary" data-repeater-create>
                                            <i class="ti ti-plus ti-xs me-2"></i>
                                            <span class="align-middle">Add more task</span>
                                        </button>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary me-4">Assign Task</button>
                                        <button type="reset" class="btn btn-label-danger">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
