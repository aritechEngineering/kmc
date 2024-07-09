@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->

        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">Task List</h5>
                <div class="px-5">
                    <a href="{{ route('task_entry')}}" class="btn btn-primary btn-sm">Assign Task</a>
                </div>
            </div>

            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                        <div class="row p-1 px-2">
                            <div class="col-12 col-md-11">
                                <div class="row">
                                    <div class="col-2">
                                        <label class="form-label" for="formtabs-country5">Project Location</label>
                                        <select id="formtabs-country5" class="select2 form-select" data-allow-clear="true" style="line-height: 17px">
                                            <option value="" class="data-text-direction"></option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Khulna</option>
                                            <option value="3">Rangpur</option>
                                        </select>
                                    </div>

                                    <div class="col-2">
                                        <label class="form-label" for="formtabs-country4">Project Name</label>
                                        <select id="formtabs-country4" class="select2 form-select" data-allow-clear="true" style="line-height: 26px">
                                            <option value=""></option>
                                            <option value="Australia">Project 1</option>
                                            <option value="Bangladesh">Project 2</option>
                                            <option value="Belarus">Project 3</option>
                                        </select>
                                    </div>

                                    <div class="col-2">
                                        <label class="form-label" for="formtabs-country6">Employee Name</label>
                                        <select id="formtabs-country6" class="select2 form-select" data-allow-clear="true" style="line-height: 17px">
                                            <option value=""></option>
                                            <option value="1">Mr. x</option>
                                            <option value="2">Mr. Y</option>
                                            <option value="3">Mr. Z</option>
                                        </select>
                                    </div>

                                    <div class="col-2">
                                        <label class="form-label" for="formtabs-country7">From Date</label>
                                        <input type="date" class="form-control" placeholder="DD MM YY" style="line-height: 26px" />
                                    </div>

                                    <div class="col-2">
                                        <label class="form-label" for="formtabs-country7">To Date</label>
                                        <input type="date" class="form-control" placeholder="DD MM YY" style="line-height: 26px" />
                                    </div>

                                    <div class="col-2">
                                        <label class="form-label" for="formtabs-country8">View Type</label>
                                        <select id="formtabs-country8" class="select2 form-select" data-allow-clear="true" style="line-height: 17px">
                                            <option value=""></option>
                                            <option value="Australia">Search With Details</option>
                                            <option value="Bangladesh">Searct Without Details</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 d-flex align-items-end">
                                <button type="button" class="btn btn-primary w-100">Search</button>
                            </div>
                        </div>

                        <tr>
                            <th>Sl No.</th>
                            <th>Employee Name</th>
                            <th>Project Location</th>
                            <th>Project Name</th>
                            <th>From Date</th>
                            <th>To Date</th>
                            <th>Duration Unit</th>
                            <th>Duration</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Mr. Rakibul Islam</td>
                            <td>Dhaka</td>
                            <td>Metro Rail- 5</td>
                            <td>10-05-2024</td>
                            <td>15-05-2024</td>
                            <td>Days</td>
                            <td>6</td>
                            <td>
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><a href="../cv/show-details.html"></a>Task Details</button>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>Mr. Shohel Khan</td>
                            <td>Dhaka</td>
                            <td>Metro Rail- 5</td>
                            <td>10-05-2024</td>
                            <td>15-05-2024</td>
                            <td>Hours</td>
                            <td>8</td>
                            <td>
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><a href="../cv/show-details.html"></a>Task Details</button>
                            </td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>Mr. Rashedul Islam</td>
                            <td>Dhaka</td>
                            <td>Metro Rail- 5</td>
                            <td>10-05-2024</td>
                            <td>15-05-2024</td>
                            <td>Days</td>
                            <td>6</td>
                            <td>
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><a href="../cv/show-details.html"></a>Task Details</button>
                            </td>
                        </tr>

                        <tr>
                            <td>04</td>
                            <td>Mr. Rashedul Islam</td>
                            <td>Dhaka</td>
                            <td>Metro Rail- 5</td>
                            <td>10-05-2024</td>
                            <td>15-05-2024</td>
                            <td>Days</td>
                            <td>6</td>
                            <td>
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><a href="../cv/show-details.html"></a>Task Details</button>
                            </td>
                        </tr>

                        <tr>
                            <td>05</td>
                            <td>Mr. Rashedul Islam</td>
                            <td>Dhaka</td>
                            <td>Metro Rail- 5</td>
                            <td>10-05-2024</td>
                            <td>15-05-2024</td>
                            <td>Days</td>
                            <td>6</td>
                            <td>
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><a href="../cv/show-details.html"></a>Task Details</button>
                            </td>
                        </tr>

                        <tr>
                            <td>06</td>
                            <td>Mr. Rashedul Islam</td>
                            <td>Dhaka</td>
                            <td>Metro Rail- 5</td>
                            <td>10-05-2024</td>
                            <td>15-05-2024</td>
                            <td>Days</td>
                            <td>6</td>
                            <td>
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><a href="../cv/show-details.html"></a>Task Details</button>
                            </td>
                        </tr>

                        <tr>
                            <td>07</td>
                            <td>Mr. Rashedul Islam</td>
                            <td>Dhaka</td>
                            <td>Metro Rail- 5</td>
                            <td>10-05-2024</td>
                            <td>15-05-2024</td>
                            <td>Days</td>
                            <td>6</td>
                            <td>
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><a href="../cv/show-details.html"></a>Task Details</button>
                            </td>
                        </tr>

                        <tr>
                            <td>08</td>
                            <td>Mr. Rashedul Islam</td>
                            <td>Dhaka</td>
                            <td>Metro Rail- 5</td>
                            <td>10-05-2024</td>
                            <td>15-05-2024</td>
                            <td>Days</td>
                            <td>6</td>
                            <td>
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><a href="../cv/show-details.html"></a>Task Details</button>
                            </td>
                        </tr>

                        <tr>
                            <td>09</td>
                            <td>Mr. Rashedul Islam</td>
                            <td>Dhaka</td>
                            <td>Metro Rail- 5</td>
                            <td>10-05-2024</td>
                            <td>15-05-2024</td>
                            <td>Days</td>
                            <td>6</td>
                            <td>
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><a href="../cv/show-details.html"></a>Task Details</button>
                            </td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>Mr. Rashedul Islam</td>
                            <td>Dhaka</td>
                            <td>Metro Rail- 5</td>
                            <td>10-05-2024</td>
                            <td>15-05-2024</td>
                            <td>Days</td>
                            <td>6</td>
                            <td>
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><a href="../cv/show-details.html"></a>Task Details</button>
                            </td>
                        </tr>
                    </tbody>

                    <!--  Off Canvas-->

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header py-6">
                            <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Task Details</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <hr class="m-0" />
                        <div class="offcanvas-body">
                            <label for="">Task 1</label>
                            <textarea name="" id="" rows="3" cols="35" class="form-control" readonly>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>

                            <label for="" class="mt-5">Task 2</label>
                            <textarea name="" id="" rows="3" cols="35" class="form-control" readonly>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>

                            <label for="" class="mt-5">Task 3</label>
                            <textarea name="" id="" rows="3" cols="35" class="form-control" readonly>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                        </div>
                    </div>

                    <!--/  Off Canvas-->
                </table>
                <div class="ms-5">Showing 1 to 10 of 5000 entries</div>
            </div>
        </div>
        <!--/ Responsive Datatable -->
    </div>
    <!-- / Content -->
@endsection
