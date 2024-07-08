@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="attendance mb-8">
            <div class="row">
                <!-- Timesheet -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center">
                                <h5 class="card-title m-0 me-2">Timesheet</h5>
                                <p class="card-subtitle">11 Mar 2019</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="badge rounded bg-label-primary p-2 w-100 mb-10">
                                <h5 class="mb-2">Punch In at</h5>
                                <p class="mb-0">Wed, 11th Mar 2019 10.00 AM</p>
                            </div>
                            <div class="d-inline-flex flex-column align-items-center w-100 mb-10">
                                <div class="border border-5 rounded-circle d-inline-flex justify-content-center align-items-center mb-4" style="width: 120px; height: 120px">
                                    <span class="fw-semibold fs-5">3.45 hrs</span>
                                </div>
                                <button type="button" class="btn btn-warning">Punch Out</button>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="badge rounded bg-label-success p-2 w-100 mb-3">
                                        <h6 class="mb-1">Break</h6>
                                        <p class="mb-0">1.21 hrs</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="badge rounded bg-label-info p-2 w-100 mb-3">
                                        <h6 class="mb-1">Overtime</h6>
                                        <p class="mb-0">3 hrs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistics -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center"><i class="ti ti-package me-3"></i> Statistics</h5>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0 list-unstyled">
                                <li class="mb-6">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="mb-0">Today</h6>
                                        <span class="text-muted">65%</span>
                                    </div>
                                    <div class="progress w-100 me-4" style="height: 8px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="mb-6">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="mb-0">This Week</h6>
                                        <span class="text-muted">25%</span>
                                    </div>
                                    <div class="progress w-100 me-4" style="height: 8px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="mb-6">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="mb-0">This Month</h6>
                                        <span class="text-muted">50%</span>
                                    </div>
                                    <div class="progress w-100 me-4" style="height: 8px">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="mb-6">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="mb-0">Remaining</h6>
                                        <span class="text-muted">70%</span>
                                    </div>
                                    <div class="progress w-100 me-4" style="height: 8px">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="mb-6">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="mb-0">Overtime</h6>
                                        <span class="text-muted">45%</span>
                                    </div>
                                    <div class="progress w-100 me-4" style="height: 8px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="mb-6">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="mb-0">Figma</h6>
                                        <span class="text-muted">65%</span>
                                    </div>
                                    <div class="progress w-100 me-4" style="height: 8px">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Today Activity -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center"><i class="ti ti-list-details me-3"></i> Activity Timeline</h5>
                        </div>
                        <div class="card-body pb-xxl-0">
                            <ul class="timeline mb-0">
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-success"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-3">
                                            <h6 class="mb-0">Punch In at</h6>
                                            <small class="text-muted">0 min ago</small>
                                        </div>
                                        <p class="mb-2 d-flex align-items-center"><i class="ti ti-clock me-1"></i>10:00 Am</p>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-danger"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-3">
                                            <h6 class="mb-0">Punch Out at</h6>
                                            <small class="text-muted">12 min ago</small>
                                        </div>
                                        <p class="mb-2 d-flex align-items-center"><i class="ti ti-clock me-1"></i>10:15 Am</p>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-success"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-3">
                                            <h6 class="mb-0">Punch In at</h6>
                                            <small class="text-muted">45 min ago</small>
                                        </div>
                                        <p class="mb-2 d-flex align-items-center"><i class="ti ti-clock me-1"></i>11:50 Am</p>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-danger"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-3">
                                            <h6 class="mb-0">Punch Out at</h6>
                                            <small class="text-muted">4:35 min ago</small>
                                        </div>
                                        <p class="mb-2 d-flex align-items-center"><i class="ti ti-clock me-1"></i>2:15 Pm</p>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-success"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-3">
                                            <h6 class="mb-0">Punch In at</h6>
                                            <small class="text-muted">6:10 min ago</small>
                                        </div>
                                        <p class="mb-2 d-flex align-items-center"><i class="ti ti-clock me-1"></i>4:50 Pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-ecommerce-category">
            <!-- Category List Table -->
            <div class="card">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-header py-3">Attendance schedule</h5>
                    <div class="px-5">
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBoth" aria-controls="offcanvasBoth">
                            <span><i class="ti ti-plus ti-xs me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add Attendance Schedule</span></span>
                        </button>
                    </div>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="dt-responsive table">
                        <thead>
                            <tr>
                                <th>Department</th>
                                <th>Punch In</th>
                                <th>Punch Out</th>
                                <th>Break</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>Marketing</td>
                                <td>09:00 Am</td>
                                <td>06:00 Pm</td>
                                <td>1 Hours</td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-success">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Developer</td>
                                <td>10:00 Am</td>
                                <td>07:00 Pm</td>
                                <td>1 Hours</td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-success">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Department</th>
                                <th>Punch In</th>
                                <th>Punch Out</th>
                                <th>Break</th>
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
                    <h5 id="" class="offcanvas-title">Add Attendance</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body border-top">
                    <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">
                        <!-- Department -->
                        <div class="ecommerce-select2-dropdown">
                            <label class="form-label" for="department">Department</label>
                            <select id="department" class="select2 form-select" data-placeholder="Select department">
                                <option value="">Select Department</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Designer">Designer</option>
                                <option value="Developer">Developer</option>
                                <option value="Management">Management</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="punch_in">Punch In</label>
                            <input type="text" class="form-control" id="punch_in" placeholder="Enter Punch In" name="punch_in" />
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="punch_out">Punch Out</label>
                            <input type="text" class="form-control" id="punch_out" placeholder="Enter Punch Out" name="punch_out" />
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="break">Break</label>
                            <input type="text" class="form-control" id="break" placeholder="Enter Break" name="break" />
                        </div>
                        <!-- Remark -->
                        <div class="mb-6">
                            <label class="form-label">Remark</label>
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
