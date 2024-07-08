@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="attendance mb-8">
            <div class="card">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-header py-3">Attendance Sheet Lists</h5>
                </div>
                <div class="card-body">
                    <form class="dt_adv_search" method="GET">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-lg-11">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6 col-lg-4">
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
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label" for="notice_date">Month</label>
                                        <input type="date" id="notice_date" class="form-control" value="2021-06-18" />
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label" for="terminaton_date">Year</label>
                                        <input type="date" id="terminaton_date" class="form-control" value="2021-06-18" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-1">
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
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                                <th>11</th>
                                <th>12</th>
                                <th>13</th>
                                <th>14</th>
                                <th>15</th>
                                <th>16</th>
                                <th>17</th>
                                <th>18</th>
                                <th>19</th>
                                <th>20</th>
                                <th>22</th>
                                <th>23</th>
                                <th>24</th>
                                <th>25</th>
                                <th>26</th>
                                <th>27</th>
                                <th>28</th>
                                <th>29</th>
                                <th>30</th>
                                <th>31</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar me-4">
                                            <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div class="mb-0 text-truncate">Benedetto Rossiter</div>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <div class="half-day">
                                        <span class="first-off"><i class="fa fa-close text-danger"></i></span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td><i class="fa fa-close text-danger"></i></td>
                                <td><i class="fa fa-close text-danger"></i></td>
                                <td><i class="fa fa-close text-danger"></i></td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td><i class="fa fa-close text-danger"></i></td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <div class="half-day">
                                        <span class="first-off"><i class="fa fa-close text-danger"></i></span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td><i class="fa fa-close text-danger"></i></td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td><i class="fa fa-close text-danger"></i></td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar me-4">
                                            <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div class="mb-0 text-truncate">Benedetto Rossiter</div>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <div class="half-day">
                                        <span class="first-off"><i class="fa fa-close text-danger"></i></span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td><i class="fa fa-close text-danger"></i></td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td><i class="fa fa-close text-danger"></i></td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <div class="half-day">
                                        <span class="first-off"><i class="fa fa-close text-danger"></i></span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td><i class="fa fa-close text-danger"></i></td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td><i class="fa fa-close text-danger"></i></td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="fa-solid fa-check"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
