@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->

        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">Product Sub Category List</h5>
                <div class="px-5">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add Sub Category</button>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th class="text-center">Name of Category</th>
                            <th class="text-center">Name of Sub Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td class="text-center">Vehicle</td>
                            <td class="text-center">Micro</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td class="text-center">AC</td>
                            <td class="text-center">2 ton AC</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td class="text-center">Table</td>
                            <td class="text-center">Desk Table</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>04</td>
                            <td class="text-center">Chair</td>
                            <td class="text-center">Meeting room chair</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>05</td>
                            <td class="text-center">Laptop</td>
                            <td class="text-center">Asus laptop</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>06</td>
                            <td class="text-center">Fan</td>
                            <td class="text-center">Table Fan</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>07</td>
                            <td class="text-center">Laptop</td>
                            <td class="text-center">HP Laptop</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>08</td>
                            <td class="text-center">Laptop</td>
                            <td class="text-center">Dell Laptop</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>09</td>
                            <td class="text-center">Laptop</td>
                            <td class="text-center">15" Laptop</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td class="text-center">Laptop</td>
                            <td class="text-center">14" Laptop</td>
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
                <h5 id="offcanvasRightLabel" class="offcanvas-title">Add Sub Category</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr class="m-0" />
            <div class="offcanvas-body">
                <form action="" method="">
                    <div class="mb-6">
                        <label for="">Sub Category Name</label>
                        <input type="text" class="form-control mt-1" />
                    </div>
                    <div class="mb-6">
                        <label for="">Colour</label>
                        <input type="text" class="form-control mt-1" />
                    </div>
                    <div class="mb-6">
                        <label for="">Product Brand</label>
                        <input type="text" class="form-control mt-1" />
                    </div>
                    <div class="mb-6">
                        <label for="">Model</label>
                        <input type="text" class="form-control mt-1" />
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

                    {{-- <div class="mb-6">
                        <label class="form-label" for="formtabs-country">License Type</label>
                        <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                            <option value="">Select</option>
                            <option value="Toyota">Light</option>
                            <option value="Bangladesh">Heavy</option>
                            <option value="Mazda">2 Wheel</option>
                        </select>
                    </div> --}}
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
