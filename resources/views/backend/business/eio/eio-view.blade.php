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
                                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" aria-controls="form-tabs-personal" role="tab" aria-selected="true">
                                        <span class="ti ti-user ti-lg d-sm-none"></span>
                                        <span class="d-none d-sm-block">EOI Details</span>
                                    </button>
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
                                            <div class="row g-6 py-4">
                                                <!-- <h5>EIO</h5> -->
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Project Name</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="project name" value="XYZ" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Client Name</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="client name" value="XYZ" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Founded by</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="founded by" value="XYZ" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Sector</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="Sector" value="XYZ" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Associated Firms</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="firms name" value="XYZ" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Issue Date</label>
                                                    <input type="date" id="formtabs-first-name" class="form-control" placeholder="firms name" value="05-28-2023" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Submission Date</label>
                                                    <input type="date" id="formtabs-first-name" class="form-control" placeholder="firms name" value="05-28-2023" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">EOI file location</label>
                                                    <input type="text" id="formtabs-seat-capacity" class="form-control" placeholder="link" value="www.exaple.com" />
                                                </div>
                                            </div>
                                        </div>
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
