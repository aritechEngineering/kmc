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
                                    <!-- <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" aria-controls="form-tabs-personal"
                            role="tab" aria-selected="true"><span class="ti ti-user ti-lg d-sm-none"></span><span class="d-none d-sm-block">Vehicle Entry</span></button> -->
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
                                                    <label class="form-label" for="formtabs-first-name">Vehicle Model</label>
                                                    <input type="text" id="formtabs-first-name" class="form-control" value="Corolo-2015" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country0">Vehicle Brand</label>
                                                    <select id="formtabs-country0" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Toyota" selected>Toyota</option>
                                                        <option value="Bangladesh">Nissan</option>
                                                        <option value="Mazda">Mazda</option>
                                                        <option value="BMW">BMW</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country">Vehicle Type</label>
                                                    <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Australia" selected>Sedan</option>
                                                        <option value="Bangladesh">SUV</option>
                                                        <option value="Belarus">Micro</option>
                                                        <option value="Brazil">Truck</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Seat Capacity</label>
                                                    <input type="text" id="formtabs-seat-capacity" class="form-control" placeholder="how many seat" value="04" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Registration Number</label>
                                                    <input type="text" id="formtabs-registration" class="form-control" placeholder="registration" value="dha-11-2025" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Registration Issue Date</label>
                                                    <input type="date" id="formtabs-registration-issue" class="form-control" value="05-10-2015" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Tax Token Issue Date</label>
                                                    <input type="date" id="formtabs-tax-issue" class="form-control" placeholder="registration issue" value="05-15-2015" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Tax Token Expire Date</label>
                                                    <input type="date" id="formtabs-registration-expire" class="form-control" value="05-10-2025" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Vehicle Number</label>
                                                    <input type="text" id="formtabs-vehicle-number" class="form-control" value="dha-11-2025" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country1">Vendor</label>
                                                    <select id="formtabs-country1" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Australia" selected>Korim Motors</option>
                                                        <option value="Bangladesh">Korim Motors</option>
                                                        <option value="Belarus">Korim Motors</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country2">Ownership Type</label>
                                                    <select id="formtabs-country2" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Australia">Own</option>
                                                        <option value="Bangladesh" selected>Rent</option>
                                                        <option value="Belarus">Third Party Rent</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Previous KM</label>
                                                    <input type="text" id="formtabs-previous-km" class="form-control" placeholder="If purchase old car" value="115,535" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Previous Fuel Unit</label>
                                                    <input type="text" id="formtabs-previous-fuel" class="form-control" placeholder="If purchase old car" value="GAS" />
                                                </div>

                                                <div class="col-md-4" style="margin-top: 55px">
                                                    <label class="form-label" for="formtabs-last-name">Vehicle Papers</label>
                                                    <a id="downloadLink2" href="#" download>Download</a>
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
