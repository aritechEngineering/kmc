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
                                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" 
                                    aria-controls="form-tabs-personal" role="tab" aria-selected="true"><span class="ti ti-user ti-lg d-sm-none">
                                        </span><span class="d-none d-sm-block">CV Details</span></button>
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
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">First Name</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" value="MD." />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Last Name</label>
                                                    <input type="text" id="formtabs-last-name" class="form-control" value="Rahman" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-location">CV Store Location</label>
                                                    <select id="formtabs-location" class="select2 form-select" data-allow-clear="true">
                                                        <option value="1">Select</option>
                                                        <option value="2">Disk Numner 1</option>
                                                        <option value="3" selected>Disk Numner 2</option>
                                                        <option value="4">Disk Numner 3</option>
                                                        <option value="5">Disk Numner 4</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Father Name</label>
                                                    <input type="text" id="formtabs-father-name" class="form-control" value="John" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Mother Name</label>
                                                    <input type="text" id="formtabs-mother-name" class="form-control" value="Doe" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country1">Gander</label>
                                                    <select id="formtabs-country1" class="select2 form-select" data-allow-clear="true">
                                                        <option value="1">Select</option>
                                                        <option value="2" selected>Male</option>
                                                        <option value="3">Female</option>
                                                        <option value="4">Others</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Phone Number</label>
                                                    <input type="text" id="formtabs-phone-number" class="form-control" value="01516105208" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Alternate Phone Number</label>
                                                    <input type="text" id="formtabs-Alternate-phone-number" class="form-control" value="01235498521" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">NID Number</label>
                                                    <input type="text" id="formtabs-nid-number" class="form-control" value="2359824558" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Date of Birth (DOB)</label>
                                                    <input type="date" id="formtabs-dob" class="form-control" value="1881-11-16" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Age</label>
                                                    <input type="text" id="formtabs-age" class="form-control" value="43" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country"> Area of Expertis</label>
                                                    <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                                        <option value="1">Select</option>
                                                        <option value="2" selected>Bridge</option>
                                                        <option value="3">Fly Over</option>
                                                        <option value="4">Metro Rail</option>
                                                        <option value="5">High Way Road</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country3">Education Level</label>
                                                    <select id="formtabs-country3" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Australia">MBA</option>
                                                        <option value="Bangladesh">BBA</option>
                                                        <option value="Belarus" selected>MSC</option>
                                                        <option value="Brazil">BSC</option>
                                                        <option value="Canada">MA</option>
                                                        <option value="China">BA</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country4">Category</label>
                                                    <select id="formtabs-country4" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Australia" selected>Engineer</option>
                                                        <option value="Bangladesh">Doctor</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country3">Sub Category</label>
                                                    <select id="formtabs-country3" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Australia" selected>Civil Engineer</option>
                                                        <option value="Bangladesh">Medichine Doctor</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Job Start Date</label>
                                                    <input type="date" id="formtabs-dob1" class="form-control" value="2005-01-01" />
                                                </div>

                                                <div class="col-md-3" id="jobEndDateDiv">
                                                    <label class="form-label" for="formtabs-last-name">Job End Date</label>
                                                    <input type="date" id="formtabs-dob" class="form-control" value="2023-01-01" />
                                                </div>

                                                <div class="col-md-1">
                                                    <div class="form-check" style="margin-top: 30px">
                                                        <input class="form-check-input" type="checkbox" id="disableCheckbox" />
                                                        <label class="form-check-label" for="disableCheckbox"> Continue </label>
                                                    </div>
                                                </div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $("#disableCheckbox").change(function() {
                                                            var isChecked = $(this).is(":checked");
                                                            $("#jobEndDateDiv input").prop("disabled", isChecked);
                                                        });
                                                    });
                                                </script>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Experience</label>
                                                    <input type="text" id="formtabs-dob3" class="form-control" value="18" />
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
