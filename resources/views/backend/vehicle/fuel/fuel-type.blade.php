@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->

        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">Fuel Type</h5>
                <div class="px-5">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add Fuel type</button>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th class="text-center">Fuel type</th>
                            <th class="text-center">Fuel unit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td class="text-center">Octain</td>
                            <td class="text-center">liter</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td class="text-center">GAS</td>
                            <td class="text-center">Cubic meter</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td class="text-center">Petrol</td>
                            <td class="text-center">loter</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="ms-5">Showing 1 to 3 of 5000 entries</div>
            </div>
        </div>
        <!--/ Responsive Datatable -->

        <!-- Off Canvas start -->

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header py-6">
                <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add fuel type</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr class="m-0" />
            <div class="offcanvas-body">
                <form action="" method="">
                    <div class="mb-6">
                        <label for="">Name of fuel type</label>
                        <input type="text" class="form-control mt-1" />
                    </div>
                    <div class="mb-6">
                        <label for="" class="mt-5"> Fuel Unit</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select any one</option>
                            <option value="1">Liter</option>
                            <option value="2">Cubic Meter</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label class="form-check-label fs-6" for="flexSwitchCheckChecked">Status</label>
                        <div class="col-2 form-check form-switch" style="padding-left: 50px">
                            <input class="form-check-input fs-5" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked />
                        </div>
                    </div>
                    <div class="mb-6">
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
