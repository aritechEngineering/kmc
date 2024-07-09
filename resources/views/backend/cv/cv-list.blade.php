@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Datatable -->

        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">List of CV</h5>
                <div class="px-5">
                    <a href="{{ route('cv_add')}}" class="btn btn-primary btn-sm">Add CV</a>
                </div>
            </div>

            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                        <div class="row p-1 px-2 bg-label-primary">
                            <div class="col-2">
                                <label class="form-label" for="formtabs-country5">Category</label>
                                <select id="formtabs-country5" class="select2 form-select" data-allow-clear="true" style="line-height: 17px">
                                    <option value="" class="data-text-direction"></option>
                                    <option value="Australia">Engineer</option>
                                    <option value="Bangladesh">Doctor</option>
                                    <option value="Belarus">Professor</option>
                                </select>
                            </div>

                            <div class="col-2">
                                <label class="form-label" for="formtabs-country6">Sub Category</label>
                                <select id="formtabs-country6" class="select2 form-select" data-allow-clear="true" style="line-height: 17px">
                                    <option value=""></option>
                                    <option value="Australia">Civil Engineer</option>
                                    <option value="Bangladesh">Medicine Doctor</option>
                                    <option value="Belarus">Bangla Professor</option>
                                </select>
                            </div>

                            <div class="col-2">
                                <label class="form-label" for="formtabs-country7">Experties</label>
                                <select id="formtabs-country7" class="select2 form-select" data-allow-clear="true" style="line-height: 17px">
                                    <option value=""></option>
                                    <option value="Australia">Bridge</option>
                                    <option value="Bangladesh">High Way Road</option>
                                    <option value="Belarus">Fly Over</option>
                                </select>
                            </div>

                            <div class="col-2">
                                <label class="form-label" for="formtabs-country8">Education Level</label>
                                <select id="formtabs-country8" class="select2 form-select" data-allow-clear="true" style="line-height: 17px">
                                    <option value=""></option>
                                    <option value="Australia">MBA</option>
                                    <option value="Bangladesh">BBA</option>
                                    <option value="Belarus">MSC</option>
                                </select>
                            </div>
                            <div class="col-2 mt-6">
                                <a href="#" class="btn btn-primary btn-sm">Search</a>
                            </div>
                        </div>

                        <tr>
                            <th>Sl No.</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Sub Department</th>
                            <th>Area of Expertis</th>
                            <th>High Edu Level</th>
                            <th>Total Experience</th>
                            <th>Age</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Mr. Mizanur Rahman</td>
                            <td>Human Resources</td>
                            <td>Training</td>
                            <td>Corporate Training</td>
                            <td>MBA</td>
                            <td>18 Years</td>
                            <td>48 Years</td>
                            <td>
                                <a href="{{route('cv_details')}}" class="btn btn-sm btn-success">View Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>Mr. Motiur Rahman</td>
                            <td>Administration</td>
                            <td>Transport</td>
                            <td>Recruitment</td>
                            <td>MA</td>
                            <td>16 Years</td>
                            <td>46 Years</td>
                            <td>
                                <a href="{{route('cv_details')}}" class="btn btn-sm btn-success">View Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>Mr. Motiur Rahman</td>
                            <td>Administration</td>
                            <td>Transport</td>
                            <td>Recruitment</td>
                            <td>MA</td>
                            <td>16 Years</td>
                            <td>46 Years</td>
                            <td>
                                <a href="{{route('cv_details')}}" class="btn btn-sm btn-success">View Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>04</td>
                            <td>Mr. Motiur Rahman</td>
                            <td>Administration</td>
                            <td>Transport</td>
                            <td>Recruitment</td>
                            <td>MA</td>
                            <td>16 Years</td>
                            <td>46 Years</td>
                            <td>
                                <a href="{{route('cv_details')}}" class="btn btn-sm btn-success">View Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>05</td>
                            <td>Mr. Motiur Rahman</td>
                            <td>Administration</td>
                            <td>Transport</td>
                            <td>Recruitment</td>
                            <td>MA</td>
                            <td>16 Years</td>
                            <td>46 Years</td>
                            <td>
                                <a href="{{route('cv_details')}}" class="btn btn-sm btn-success">View Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>06</td>
                            <td>Mr. Motiur Rahman</td>
                            <td>Administration</td>
                            <td>Transport</td>
                            <td>Recruitment</td>
                            <td>MA</td>
                            <td>16 Years</td>
                            <td>46 Years</td>
                            <td>
                                <a href="{{route('cv_details')}}" class="btn btn-sm btn-success">View Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>07</td>
                            <td>Mr. Motiur Rahman</td>
                            <td>Administration</td>
                            <td>Transport</td>
                            <td>Recruitment</td>
                            <td>MA</td>
                            <td>16 Years</td>
                            <td>46 Years</td>
                            <td>
                                <a href="{{route('cv_details')}}" class="btn btn-sm btn-success">View Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>08</td>
                            <td>Mr. Motiur Rahman</td>
                            <td>Administration</td>
                            <td>Transport</td>
                            <td>Recruitment</td>
                            <td>MA</td>
                            <td>16 Years</td>
                            <td>46 Years</td>
                            <td>
                                <a href="{{route('cv_details')}}" class="btn btn-sm btn-success">View Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>09</td>
                            <td>Mr. Motiur Rahman</td>
                            <td>Administration</td>
                            <td>Transport</td>
                            <td>Recruitment</td>
                            <td>MA</td>
                            <td>16 Years</td>
                            <td>46 Years</td>
                            <td>
                                <a href="{{route('cv_details')}}" class="btn btn-sm btn-success">View Details</a>
                            </td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>Mr. Motiur Rahman</td>
                            <td>Administration</td>
                            <td>Transport</td>
                            <td>Recruitment</td>
                            <td>MA</td>
                            <td>16 Years</td>
                            <td>46 Years</td>
                            <td>
                                <a href="{{route('cv_details')}}" class="btn btn-sm btn-success">View Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="ms-5">Showing 1 to 10 of 5000 entries</div>
            </div>
        </div>
        <!--/ Responsive Datatable -->
    </div>
    <!-- / Content -->
@endsection
