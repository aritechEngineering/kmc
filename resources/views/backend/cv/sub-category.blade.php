@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->

        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">Sub Category List</h5>
                <div class="px-5">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add Sub Category</button>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Name of Category</th>
                            <th class="text-center">Name of Sub Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td class="text-center">Engineer</td>
                            <td class="text-center">Civil Engineer</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td class="text-center">Doctor</td>
                            <td class="text-center">Medicine Doctor</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td class="text-center">Professor</td>
                            <td class="text-center">English Professor</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>04</td>
                            <td class="text-center">Professor</td>
                            <td class="text-center">English Professor</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>05</td>
                            <td class="text-center">Professor</td>
                            <td class="text-center">English Professor</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>06</td>
                            <td class="text-center">Engineer</td>
                            <td class="text-center">CSE Engineer</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>07</td>
                            <td class="text-center">Engineer</td>
                            <td class="text-center">CSE Engineer</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>08</td>
                            <td class="text-center">Doctor</td>
                            <td class="text-center">Medicine Doctor</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>09</td>
                            <td class="text-center">Doctor</td>
                            <td class="text-center">Medicine Doctor</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td class="text-center">Doctor</td>
                            <td class="text-center">Medicine Doctor</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="ms-5">Showing 1 to 10 of 5000 entries</div>
            </div>
        </div>
        <!--/ Responsive Datatable -->

        <!-- Off Canvas start -->

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header py-6">
                <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add Sub Category</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr class="m-0" />
            <div class="offcanvas-body">
                <form action="" method="">
                    <div class="mb-6">
                        <label for="">Sub Category Name</label>
                        <input type="text" class="form-control mt-3" />
                    </div>
                    <div class="mb-6">
                        <label for="">Category Name</label>
                        <select class="form-select mt-3" aria-label="Default select example">
                            <option selected>Select any one</option>
                            <option value="1">Engineer</option>
                            <option value="2">Doctor</option>
                            <option value="3">Professor</option>
                            <option value="4">Cricker</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label class="form-check-label fs-6" for="flexSwitchCheckChecked">Status</label>
                        <div class="col-2 form-check form-switch" style="padding-left: 50px">
                            <input class="form-check-input fs-5" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked />
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light" type="submit">Add</button>
                        <button type="reset" class="btn btn-label-danger waves-effect">Discard</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Off Canvas end -->
    </div>
    <!-- / Content -->
@endsection
