@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->

        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">Product List</h5>
                <div class="px-5">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Product Entry</button>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="dt-responsive table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Sl No.</th>
                            <th class="text-center">Product Id</th>
                            <th class="text-center">Product name</th>
                            <th class="text-center">Name of Category</th>
                            <th class="text-center">Name of Sub Category</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">01</td>
                            <td class="text-center">TB01534</td>
                            <td class="text-center">Gree Ac</td>
                            <td class="text-center">AC</td>
                            <td class="text-center">2 Ton</td>
                            <td class="text-center"></td>
                            <td class="text-center">Active</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">02</td>
                            <td class="text-center">TB01534</td>
                            <td class="text-center">Gree Ac</td>
                            <td class="text-center">AC</td>
                            <td class="text-center">2 Ton</td>
                            <td class="text-center"></td>
                            <td class="text-center">Active</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">03</td>
                            <td class="text-center">TB01534</td>
                            <td class="text-center">Gree Ac</td>
                            <td class="text-center">AC</td>
                            <td class="text-center">2 Ton</td>
                            <td class="text-center"></td>
                            <td class="text-center">Active</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">04</td>
                            <td class="text-center">TB01534</td>
                            <td class="text-center">Gree Ac</td>
                            <td class="text-center">AC</td>
                            <td class="text-center">2 Ton</td>
                            <td class="text-center"></td>
                            <td class="text-center">Active</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">05</td>
                            <td class="text-center">TB01534</td>
                            <td class="text-center">Gree Ac</td>
                            <td class="text-center">AC</td>
                            <td class="text-center">2 Ton</td>
                            <td class="text-center"></td>
                            <td class="text-center">Active</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">06</td>
                            <td class="text-center">TB01534</td>
                            <td class="text-center">Gree Ac</td>
                            <td class="text-center">AC</td>
                            <td class="text-center">2 Ton</td>
                            <td class="text-center"></td>
                            <td class="text-center">Active</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
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
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel" class="offcanvas-title">Add Product</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr class="m-0" />
            <div class="offcanvas-body">
                <form action="" method="">
                    <div class="mb-6">
                        <label for="">Product Name</label>
                        <input type="text" class="form-control mt-1" />
                    </div>

                    <div class="mb-6">
                        <label class="form-label" for="formtabs-country">Category</label>
                        <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                            <option value="">Select any one</option>
                            <option value="Toyota">AC</option>
                            <option value="Bangladesh">Vehicle</option>
                            <option value="Mazda">Table</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label class="form-label" for="formtabs-country1">Sub Category</label>
                        <select id="formtabs-country1" class="select2 form-select" data-allow-clear="true">
                            <option value="">Select any one</option>
                            <option value="Toyota">2 Ton Ac</option>
                            <option value="Bangladesh">SUV</option>
                            <option value="Mazda">Meeting Table</option>
                        </select>
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <label class="form-label">Description</label>
                        <div class="form-control p-0 py-1">
                            <div class="comment-editor border-0" id="ecommerce-category-description"></div>
                            <div class="comment-toolbar border-0 rounded">
                                <div class="d-flex justify-content-end">
                                    <span class="ql-formats me-0">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                        <button class="ql-list" value="ordered"></button>
                                        <button class="ql-list" value="bullet"></button>
                                        <button class="ql-link"></button>
                                        <button class="ql-image"></button>
                                    </span>
                                </div>
                            </div>
                        </div>
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
