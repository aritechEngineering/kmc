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
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="project name" value="metro Rail" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Duration</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="client name" value="5 Years" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Client Name</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="founded by" value="Dhaka Mass Transit Company Limited" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Funded By</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="Sector" value="Dhaka Mass Transit Company Limited" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">sector</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="Sector" value="Transpost" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Project Location</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="firms name" value="https://www.google.com/maps/place/Dhaka/@23.7808405,90.419689,12z/data=!3m1!4b1!4m6!3m5!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.804093!4d90.4152376!16zL20vMGZuYjQ?entry=ttu" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Approx Contract Value</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="firms name" value="12,300,051236.00" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Associated Firm</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="firms name" value="XYZ Firm" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Status</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="firms name" value="Submitted" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Brief Description</label>
                                                    <textarea name="" id="" readonly rows="10" cols="48">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                            </textarea>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">PDS Location</label>
                                                    <input type="text" id="formtabs-seat-capacity" class="form-control" placeholder="link" value="value=Server-1, Disk- 5" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Documentation Evidence</label>
                                                    <input type="text" id="formtabs-seat-capacity" class="form-control" placeholder="link" value="Server-1, Disk- 5" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Agreement Copy Location</label>
                                                    <input type="text" id="formtabs-seat-capacity" class="form-control" placeholder="link" value="Server-4, Disk- 7" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Completion Certificate Location</label>
                                                    <input type="text" id="formtabs-seat-capacity" class="form-control" placeholder="link" value="Server-5, Disk- 8" />
                                                </div>

                                                <div class="col-12 d-flex gap-column-4 justify-content-start">
                                                    <button type="submit" class="btn btn-primary me-4">Save</button>
                                                    <button type="button" class="btn btn-label-danger" data-repeater-delete>
                                                        <i class="ti ti-x ti-xs me-1"></i>
                                                        <span class="align-middle">Delete</span>
                                                    </button>
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
