@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="app-ecommerce-category">
            <!-- Category List Table -->
            <div class="card">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-header py-3">State Lists</h5>
                    <div class="px-5">
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBoth" aria-controls="offcanvasBoth">
                            <span><i class="ti ti-plus ti-xs me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add State</span></span>
                        </button>
                    </div>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="dt-responsive table">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>State</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><span class="fw-medium">Country name</span></td>
                                <td><span class="fw-medium">State name</span></td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-success">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Country</th>
                                <th>State</th>
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
                    <h5 id="" class="offcanvas-title">Add State</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body border-top">
                    <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">
                        <!-- Country -->
                        <div class="mb-6 ecommerce-select2-dropdown">
                            <label class="form-label" for="parent-country">Parent Country</label>
                            <select id="parent-country" class="select2 form-select" data-placeholder="Select country">
                                <option value="">Select country</option>
                                <option value="Household">Household</option>
                                <option value="Management">Management</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Office">Office</option>
                                <option value="Automotive">Automotive</option>
                            </select>
                        </div>
                        <!-- Title -->
                        <div class="mb-6">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter State title" name="title" aria-label="State title" />
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
