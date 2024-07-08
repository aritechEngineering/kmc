@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="app-ecommerce-category">
            <!-- Category List Table -->
            <div class="card">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-header py-3">Termination Lists</h5>
                    <div class="px-5">
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBoth" aria-controls="offcanvasBoth">
                            <span><i class="ti ti-plus ti-xs me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add Termination</span></span>
                        </button>
                    </div>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="dt-responsive table">
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>Termination Type</th>
                                <th>Notice Date</th>
                                <th>Termination Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>Employee name</td>
                                <td>Termination name</td>
                                <td>10/12/2024</td>
                                <td>10/12/2024</td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-success">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Employee</th>
                                <th>Termination Type</th>
                                <th>Notice Date</th>
                                <th>Termination Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- Offcanvas to add new customer -->
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasBoth" aria-labelledby="offcanvasBothLabel">
                <div class="offcanvas-header">
                    <h5 id="" class="offcanvas-title">Add Termination</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body border-top">
                    <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">
                        <!-- Employee -->
                        <div class="mb-6 ecommerce-select2-dropdown">
                            <label class="form-label" for="employee">Employee</label>
                            <select id="employee" class="select2 form-select" data-placeholder="Select employee">
                                <option value="">Select Employee</option>
                                <option value="Dipankar">Dipankar</option>
                                <option value="Sajol">Sajol</option>
                                <option value="Jamil">Jamil</option>
                                <option value="John Smith">John Smith</option>
                                <option value="Wilmer Deluna">Wilmer Deluna</option>
                                <option value="Mike Litorus">Mike Litorus</option>
                            </select>
                        </div>
                        <!-- Termination Type -->
                        <div class="mb-6">
                            <label class="form-label" for="termination_type">Termination Name</label>
                            <input type="text" id="notice_date" class="form-control" value="" placeholder="Termination Name" />
                        </div>
                        <!-- Notice Date -->
                        <div class="mb-6">
                            <label class="form-label" for="notice_date">Notice Date</label>
                            <input type="date" id="notice_date" class="form-control" value="2021-06-18" />
                        </div>
                        <!-- Terminaton Date -->
                        <div class="mb-6">
                            <label class="form-label" for="terminaton_date">Terminaton Date</label>
                            <input type="date" id="terminaton_date" class="form-control" value="2021-06-18" />
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
                        <!-- Status -->
                        <div class="mb-6">
                            <label class="form-label">Status</label>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="status" checked />
                            </div>
                        </div>
                        <!-- Submit and reset -->
                        <div class="mb-6">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                            <button type="reset" class="btn btn-label-danger" data-bs-dismiss="offcanvas">Discard</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
