@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="app-ecommerce-category">
            <!-- Category List Table -->
            <div class="card">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-header py-3">Employee Lists</h5>
                    <div class="px-5">
                        <a href="{{ route('hr_employeeadd') }}" class="btn btn-primary">
                            <span><i class="ti ti-plus ti-xs me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add Employee</span></span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form class="dt_adv_search" method="GET">
                        <div class="row">
                            <div class="col-12">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label">Name:</label>
                                        <input type="text" class="form-control dt-input dt-full-name" data-column="1" placeholder="Alaric Beslier" data-column-index="0" />
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label">Email:</label>
                                        <input type="text" class="form-control dt-input" data-column="2" placeholder="demo@example.com" data-column-index="1" />
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label">Post:</label>
                                        <input type="text" class="form-control dt-input" data-column="3" placeholder="Web designer" data-column-index="2" />
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label">City:</label>
                                        <input type="text" class="form-control dt-input" data-column="4" placeholder="Balky" data-column-index="3" />
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label">Date:</label>
                                        <div class="mb-0">
                                            <input type="text" class="form-control dt-date flatpickr-range dt-input" data-column="5" placeholder="StartDate to EndDate" data-column-index="4" name="dt_date" />
                                            <input type="hidden" class="form-control dt-date start_date dt-input" data-column="5" data-column-index="4" name="value_from_start_date" />
                                            <input type="hidden" class="form-control dt-date end_date dt-input" name="value_from_end_date" data-column="5" data-column-index="4" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label">Salary:</label>
                                        <input type="text" class="form-control dt-input" data-column="6" placeholder="10000" data-column-index="5" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="dt-responsive table">
                        <thead>
                            <tr>
                                <th class="control dtr-hidden" rowspan="1" colspan="1" style="display: none"></th>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Email</th>
                                <th rowspan="1" colspan="1">Post</th>
                                <th rowspan="1" colspan="1">City</th>
                                <th rowspan="1" colspan="1">Date</th>
                                <th rowspan="1" colspan="1">Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td class="control sorting_1" tabindex="0" style="display: none"></td>
                                <td>Korrie O'Crevy</td>
                                <td>kocrevy0@thetimes.co.uk</td>
                                <td>Nuclear Power Engineer</td>
                                <td>Krasnosilka</td>
                                <td>09/23/2021</td>
                                <td>$23896.35</td>
                            </tr>
                            <tr class="even">
                                <td class="control sorting_1" tabindex="0" style="display: none"></td>
                                <td>Bailie Coulman</td>
                                <td>bcoulman1@yolasite.com</td>
                                <td>VP Quality Control</td>
                                <td>Hinigaran</td>
                                <td>05/20/2021</td>
                                <td>$13633.69</td>
                            </tr>
                            <tr class="odd">
                                <td class="control sorting_1" tabindex="0" style="display: none"></td>
                                <td>Stella Ganderton</td>
                                <td>sganderton2@tuttocitta.it</td>
                                <td>Operator</td>
                                <td>Golcowa</td>
                                <td>03/24/2021</td>
                                <td>$13076.28</td>
                            </tr>
                            <tr class="even">
                                <td class="control sorting_1" tabindex="0" style="display: none"></td>
                                <td>Dorolice Crossman</td>
                                <td>dcrossman3@google.co.jp</td>
                                <td>Cost Accountant</td>
                                <td>Paquera</td>
                                <td>12/03/2021</td>
                                <td>$12336.17</td>
                            </tr>
                            <tr class="odd">
                                <td class="control sorting_1" tabindex="0" style="display: none"></td>
                                <td>Harmonia Nisius</td>
                                <td>hnisius4@gnu.org</td>
                                <td>Senior Cost Accountant</td>
                                <td>Lucan</td>
                                <td>08/25/2021</td>
                                <td>$10909.52</td>
                            </tr>
                            <tr class="even">
                                <td class="control sorting_1" tabindex="0" style="display: none"></td>
                                <td>Genevra Honeywood</td>
                                <td>ghoneywood5@narod.ru</td>
                                <td>Geologist</td>
                                <td>Maofan</td>
                                <td>06/01/2021</td>
                                <td>$17803.80</td>
                            </tr>
                            <tr class="odd">
                                <td class="control sorting_1" tabindex="0" style="display: none"></td>
                                <td>Eileen Diehn</td>
                                <td>ediehn6@163.com</td>
                                <td>Environmental Specialist</td>
                                <td>Lampuyang</td>
                                <td>10/15/2021</td>
                                <td>$18991.67</td>
                            </tr>
                            <tr class="even">
                                <td class="control sorting_1" tabindex="0" style="display: none"></td>
                                <td>Richardo Aldren</td>
                                <td>raldren7@mtv.com</td>
                                <td>Senior Sales Associate</td>
                                <td>Skoghall</td>
                                <td>11/05/2021</td>
                                <td>$19230.13</td>
                            </tr>
                            <tr class="odd">
                                <td class="control sorting_1" tabindex="0" style="display: none"></td>
                                <td>Allyson Moakler</td>
                                <td>amoakler8@shareasale.com</td>
                                <td>Safety Technician</td>
                                <td>Mogilany</td>
                                <td>12/29/2021</td>
                                <td>$11677.32</td>
                            </tr>
                            <tr class="even">
                                <td class="control sorting_1" tabindex="0" style="display: none"></td>
                                <td>Merline Penhalewick</td>
                                <td>mpenhalewick9@php.net</td>
                                <td>Junior Executive</td>
                                <td>Kanuma</td>
                                <td>04/19/2021</td>
                                <td>$15939.52</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="control dtr-hidden" rowspan="1" colspan="1" style="display: none"></th>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Email</th>
                                <th rowspan="1" colspan="1">Post</th>
                                <th rowspan="1" colspan="1">City</th>
                                <th rowspan="1" colspan="1">Date</th>
                                <th rowspan="1" colspan="1">Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
