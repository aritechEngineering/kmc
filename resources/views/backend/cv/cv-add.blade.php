@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
            
        <div class="container-xxl flex-grow-1 container-p-y">           
            <!-- Form with Tabs -->
            <div class="row">
                <div class="col">
                    <h6 class="mt-6"></h6>
                    <div class="card mb-6">
                    <div class="card-header px-0 pt-0">
                        <div class="nav-align-top">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" aria-controls="form-tabs-personal" role="tab" aria-selected="true"><span class="ti ti-user ti-lg d-sm-none"></span><span class="d-none d-sm-block">CV Entry</span></button>
                            </li>
                        </ul>
                        </div>
                    </div>
    
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                                <form class="form-repeater">
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item>  
                                            <div class="row g-6">
        
                                                <div class="col-md-4">
                                                  <label class="form-label" for="formtabs-first-name">First Name</label>
                                                  <input type="text" id="formtabs-first-name" class="form-control" placeholder="Md." />
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Last Name</label>
                                                    <input type="text" id="formtabs-last-name" class="form-control" placeholder="Mizanur" />
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="form-label" for="formtabs-country">CV Store Location</label>
                                                  <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                                      <option value="">Select</option>
                                                      <option value="Australia">Disk Numner 1</option>
                                                      <option value="Bangladesh">Disk Numner 2</option>
                                                      <option value="Belarus">Disk Numner 3</option>
                                                      <option value="Brazil">Disk Numner 4</option>
                                                  </select>
                                              </div>
                                
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-first-name">Father Name</label>
                                                    <input type="text" id="formtabs-father-name" class="form-control" placeholder="John" />
                                                  </div>
                                                  <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Mother Name</label>
                                                    <input type="text" id="formtabs-mother-name" class="form-control" placeholder="Doe" />
                                                  </div>
                                
                                                  <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country1">Gander</label>
                                                    <select id="formtabs-country1" class="select2 form-select" data-allow-clear="true">
                                                      <option value="">Select</option>
                                                      <option value="Australia">Male</option>
                                                      <option value="Bangladesh">Female</option>
                                                      <option value="Belarus">Others</option>
                                                    </select>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Phone Number</label>
                                                    <input type="text" id="formtabs-phone-number" class="form-control" placeholder="+880" />
                                                  </div>
                                
                                                  <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Alternate Phone Number</label>
                                                    <input type="text" id="formtabs-Alternate-phone-number" class="form-control" placeholder="+880" />
                                                  </div>
                                
                                                  <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">NID Number</label>
                                                    <input type="text" id="formtabs-nid-number" class="form-control" placeholder="nid" />
                                                  </div>
                                
                                                  <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Date of Birth (DOB)</label>
                                                    <input type="date" id="formtabs-dob" class="form-control" placeholder="D O B" />
                                                  </div>
                                
                                                  <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Age</label>
                                                    <input type="text" id="formtabs-age" class="form-control" placeholder="age" />
                                                  </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country2"> Area of Expertis</label>
                                                    <select id="formtabs-country2" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Australia">Bridge</option>
                                                        <option value="Bangladesh">Fly Over</option>
                                                        <option value="Belarus">Metro Rail</option>
                                                        <option value="Brazil">High Way Road</option>
                                                    </select>
                                                </div>
                                
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country3">Education Level</label>
                                                    <select id="formtabs-country3" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Australia">MBA</option>
                                                        <option value="Bangladesh">BBA</option>
                                                        <option value="Belarus">MSC</option>
                                                        <option value="Brazil">BSC</option>
                                                        <option value="Canada">MA</option>
                                                        <option value="China">BA</option>
                                                    </select>
                                                </div>
    
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country4">Category</label>
                                                    <select id="formtabs-country4" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Australia">Engineer</option>
                                                        <option value="Bangladesh">Doctor</option>
                                                    </select>
                                                </div>
    
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-country5">Sub Category</label>
                                                    <select id="formtabs-country5" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Australia">Civil Engineer</option>
                                                        <option value="Bangladesh">Medichine Doctor</option>
                                                    </select>
                                                </div>
    
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Job Start Date</label>
                                                    <input type="date" id="formtabs-dob1" class="form-control" placeholder="DD MM YY" />
                                                </div>
    
                                                <div class="col-md-3" id="jobEndDateDiv">
                                                    <label class="form-label" for="formtabs-last-name">Job End Date</label>
                                                    <input type="date" id="formtabs-dob" class="form-control" placeholder="DD MM YY" />
                                                </div>
    
                                                <div class="col-md-1">
                                                    <div class="form-check"  style="margin-top: 30px;">
                                                        <input class="form-check-input" type="checkbox" id="disableCheckbox">
                                                        <label class="form-check-label" for="disableCheckbox">
                                                            Continue
                                                        </label>
                                                    </div>
                                                </div>
                                                <script>
                                                    $(document).ready(function () {
                                                        $('#disableCheckbox').change(function () {
                                                            var isChecked = $(this).is(':checked');
                                                            $('#jobEndDateDiv input').prop('disabled', isChecked);
                                                        });
                                                    });
                                                </script>
    
                                                <div class="col-md-4">
                                                    <label class="form-label" for="formtabs-last-name">Experience</label>
                                                    <input type="text" id="formtabs-dob3" class="form-control" placeholder="Experience" />
                                                </div>
    
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-label-danger" data-repeater-delete>
                                                    <i class="ti ti-x ti-xs me-1"></i>
                                                    <span class="align-middle">Delete</span>
                                                    </button>
                                                </div>
                                            </div>
    
                                            <hr class="mt-0">
                                        </div>
                                    </div>
    
                                        <div class="">
                                            <button type="button" class="btn btn-primary" data-repeater-create>
                                            <i class="ti ti-plus ti-xs me-2"></i>
                                            <span class="align-middle">Add</span>
                                            </button>
                                        </div>
                                    
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary me-4">Submit</button>
                                        <button type="reset" class="btn btn-label-danger">Cancel</button>
                                    </div>
                                </form>
                               
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- / Content -->
@endsection
