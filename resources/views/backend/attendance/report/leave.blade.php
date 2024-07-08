@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="app-ecommerce-category">
            <!-- Category List Table -->
            <div class="card">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-header py-3">Employee Leave Lists</h5>
                </div>
                <div class="card-body">
                    <form class="dt_adv_search" method="GET">
                        <div class="row">
                            <div class="col-11">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <label class="form-label" for="department">Department</label>
                                        <select id="department" class="select2 form-select" data-placeholder="Select department">
                                            <option value="">Select Department</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Designer">Designer</option>
                                            <option value="Developer">Developer</option>
                                            <option value="Management">Management</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3">
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
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <label class="form-label" for="notice_date">Form Date</label>
                                        <input type="date" id="notice_date" class="form-control" value="2021-06-18" />
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <label class="form-label" for="terminaton_date">To Date</label>
                                        <input type="date" id="terminaton_date" class="form-control" value="2021-06-18" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="d-flex align-items-end h-100">
                                    <button type="button" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="dt-responsive table">
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>Leave Type</th>
                                <th>Form</th>
                                <th>To</th>
                                <th>No of Days</th>
                                <th>Reason</th>
                                <th>Status</th>
                                <th>Approved by</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar me-4">
                                            <img src="../../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div class="mb-0 text-truncate">Benedetto Rossiter</div>
                                    </div>
                                </td>
                                <td>Leave Type</td>
                                <td>08/12/2024</td>
                                <td>10/12/2024</td>
                                <td>2 Days</td>
                                <td>Going to Hospital</td>
                                <td><span class="badge bg-label-primary me-1">Approved</span></td>
                                <td>IEW</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="assignmentProgress" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti ti-dots-vertical ti-md text-muted"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="assignmentProgress">
                                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar me-4">
                                            <img src="../../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div class="mb-0 text-truncate">Benedetto Rossiter</div>
                                    </div>
                                </td>
                                <td>Leave Type</td>
                                <td>08/12/2024</td>
                                <td>10/12/2024</td>
                                <td>2 Days</td>
                                <td>Going to Hospital</td>
                                <td><span class="badge bg-label-primary me-1">Approved</span></td>
                                <td>IEW</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="assignmentProgress" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti ti-dots-vertical ti-md text-muted"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="assignmentProgress">
                                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar me-4">
                                            <img src="../../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div class="mb-0 text-truncate">Benedetto Rossiter</div>
                                    </div>
                                </td>
                                <td>Leave Type</td>
                                <td>08/12/2024</td>
                                <td>10/12/2024</td>
                                <td>2 Days</td>
                                <td>Going to Hospital</td>
                                <td><span class="badge bg-label-primary me-1">Approved</span></td>
                                <td>IEW</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="assignmentProgress" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti ti-dots-vertical ti-md text-muted"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="assignmentProgress">
                                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Employee</th>
                                <th>Leave Type</th>
                                <th>Form</th>
                                <th>To</th>
                                <th>No of Days</th>
                                <th>Reason</th>
                                <th>Status</th>
                                <th>Approved by</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
