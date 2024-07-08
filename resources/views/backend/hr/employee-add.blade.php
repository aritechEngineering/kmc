@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="app-employee">
            <!-- Employee Entry -->
            <div class="nav-align-top mb-6">
                <ul class="nav nav-pills mb-4 nav-fill" role="tablist">
                    <li class="nav-item mb-1 mb-sm-0">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-personal" aria-controls="navs-pills-justified-personal" aria-selected="true">
                            <span class="d-none d-sm-flex flex-sm-column"><i class="tf-icons ti ti-home ti-sm me-1_5 align-text-bottom"></i> Personal </span><i class="ti ti-home ti-sm d-sm-none"></i>
                        </button>
                    </li>
                    <li class="nav-item mb-1 mb-sm-0">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-education" aria-controls="navs-pills-justified-education" aria-selected="false">
                            <span class="d-none d-sm-flex flex-sm-column"><i class="tf-icons ti ti-user ti-sm me-1_5 align-text-bottom"></i> Education/Training</span><i class="ti ti-user ti-sm d-sm-none"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-employment" aria-controls="navs-pills-justified-employment" aria-selected="false">
                            <span class="d-none d-sm-flex flex-sm-column"><i class="tf-icons ti ti-message-dots ti-sm me-1_5 align-text-bottom"></i> Employment</span><i class="ti ti-message-dots ti-sm d-sm-none"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-others" aria-controls="navs-pills-justified-others" aria-selected="false">
                            <span class="d-none d-sm-flex flex-sm-column"><i class="tf-icons ti ti-message-dots ti-sm me-1_5 align-text-bottom"></i> Others Information</span><i class="ti ti-message-dots ti-sm d-sm-none"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-photograph" aria-controls="navs-pills-justified-photograph" aria-selected="false">
                            <span class="d-none d-sm-flex flex-sm-column"><i class="tf-icons ti ti-message-dots ti-sm me-1_5 align-text-bottom"></i> Accomplishment</span><i class="ti ti-message-dots ti-sm d-sm-none"></i>
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Personal Information -->
                    <div class="tab-pane fade show active" id="navs-pills-justified-personal" role="tabpanel">
                        <div>
                            <div class="accordion mt-4" id="accordionExampleOne">
                                <div class="card accordion-item active">
                                    <h2 class="accordion-header" id="headingPI1">
                                        <button type="button" class="accordion-button py-4" data-bs-toggle="collapse" data-bs-target="#accordionPI1" aria-expanded="true" aria-controls="accordionPI1">Personal Details</button>
                                    </h2>

                                    <div id="accordionPI1" class="accordion-collapse collapse show" data-bs-parent="#accordionExampleOne">
                                        <div class="accordion-body">
                                            <div class="row py-5">
                                                <div class="col-lg-8 mx-auto">
                                                    <div class="row g-6">
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="fullname">Full Name</label>
                                                            <input type="text" id="fullname" class="form-control" placeholder="John Doe" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="father">Father's Name</label>
                                                            <input type="text" id="father" class="form-control" placeholder="Father's Name Enter" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="mother">Mother's Name</label>
                                                            <input type="text" id="mother" class="form-control" placeholder="Mother's Name Enter" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="dob">Date of Birth</label>
                                                            <input type="date" id="dob" class="form-control" value="2021-06-18" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="gender">Gender</label>
                                                            <select id="gender" class="select2 form-select" data-placeholder="Select gender">
                                                                <option value="">Select gender</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="religion">Religion</label>
                                                            <select id="religion" class="select2 form-select" data-placeholder="Select gender">
                                                                <option value="">Select religion</option>
                                                                <option value="Buddhism">Buddhism</option>
                                                                <option value="Hinduism">Hinduism</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Jainism">Jainism</option>
                                                                <option value="Judaism">Judaism</option>
                                                                <option value="Sikhism">Sikhism</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="marital">Marital</label>
                                                            <select id="marital" class="select2 form-select" data-placeholder="Select marital">
                                                                <option value="">Select marital</option>
                                                                <option value="Unmarried">Unmarried</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Single">Single</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="bloodgroup">Blood Group</label>
                                                            <select id="bloodgroup" class="select2 form-select" data-placeholder="Select blood group">
                                                                <option value="">Select blood group</option>
                                                                <option value="A+">A+</option>
                                                                <option value="A-">A-</option>
                                                                <option value="AB+">AB+</option>
                                                                <option value="AB-">AB-</option>
                                                                <option value="B+">B+</option>
                                                                <option value="B-">B-</option>
                                                                <option value="O+">O+</option>
                                                                <option value="O-">O-</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="nid">NID</label>
                                                            <input type="number" id="nid" class="form-control" placeholder="2547846512" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="phone">Contact Number</label>
                                                            <input type="text" id="phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="alt-num">Alternate Number</label>
                                                            <input type="text" id="alt-num" class="form-control phone-mask" placeholder="658 799 8941" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="alt-num">Emergency Number</label>
                                                            <input type="text" id="alt-num" class="form-control phone-mask" placeholder="658 799 8941" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="email">Email</label>
                                                            <div class="input-group input-group-merge">
                                                                <input class="form-control" type="text" id="email" name="email" placeholder="john.doe" aria-label="john.doe" aria-describedby="email3" />
                                                                <span class="input-group-text" id="email3">@example.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="email">Alternate Email</label>
                                                            <div class="input-group input-group-merge">
                                                                <input class="form-control" type="text" id="email" name="email" placeholder="john.doe" aria-label="john.doe" aria-describedby="email3" />
                                                                <span class="input-group-text" id="email3">@example.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="d-flex align-items-center column-gap-4">
                                                                <button type="button" class="btn btn-primary">Save</button>
                                                                <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingPI2">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionPI2" aria-expanded="false" aria-controls="accordionPI2">Address Details</button>
                                    </h2>
                                    <div id="accordionPI2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExampleOne">
                                        <div class="accordion-body">
                                            <div class="row py-5">
                                                <div class="col-lg-8 mx-auto">
                                                    <div class="row g-6">
                                                        <!-- Personal Address -->
                                                        <h5 class="mb-3">Personal Address</h5>
                                                        <div class="col-md-12">
                                                            <div class="form-check form-check-inline">
                                                                <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-home" checked="" />
                                                                <label class="form-check-label" for="collapsible-address-type-home">Inside Bangladesh</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-office" />
                                                                <label class="form-check-label" for="collapsible-address-type-office">Outside Bangladesh</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label" for="state">State</label>
                                                            <select id="state" class="select2 form-select" data-placeholder="Select state">
                                                                <option value="">Select state</option>
                                                                <option value="Brahmanbaria">Brahmanbaria</option>
                                                                <option value="Bandarban">Bandarban</option>
                                                                <option value="Cumilla">Cumilla</option>
                                                                <option value="Dhaka">Dhaka</option>
                                                                <option value="Jashore">Jashore</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label" for="district">District</label>
                                                            <select id="district" class="select2 form-select" data-placeholder="Select district">
                                                                <option value="">Select district</option>
                                                                <option value="Badda">Badda</option>
                                                                <option value="Bangsal">Bangsal</option>
                                                                <option value="Dhanmondi">Dhanmondi</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label" for="thana">City/Thana</label>
                                                            <select id="thana" class="select2 form-select" data-placeholder="Select thana">
                                                                <option value="">Select thana</option>
                                                                <option value="Shantinagr">Shantinagr</option>
                                                                <option value="Romna">Romna</option>
                                                                <option value="Banashree">Banashree</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label" for="area">Area</label>
                                                            <select id="area" class="select2 form-select" data-placeholder="Select blood group">
                                                                <option value="">Select blood group</option>
                                                                <option value="Shantinagr">Shantinagr</option>
                                                                <option value="Romna">Romna</option>
                                                                <option value="Banashree">Banashree</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label" for="address">Address</label>
                                                            <textarea name="address" class="form-control" id="address" rows="2" placeholder="1456, Mall Road"></textarea>
                                                        </div>

                                                        <!-- Permanent Address -->
                                                        <h5 class="mb-3 mt-8">Permanent Address</h5>
                                                        <div class="col-md-12">
                                                            <div class="form-check form-check-inline">
                                                                <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-home" checked="" />
                                                                <label class="form-check-label" for="collapsible-address-type-home">Inside Bangladesh</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-office" />
                                                                <label class="form-check-label" for="collapsible-address-type-office">Outside Bangladesh</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label" for="state">State</label>
                                                            <select id="state" class="select2 form-select" data-placeholder="Select state">
                                                                <option value="">Select state</option>
                                                                <option value="Brahmanbaria">Brahmanbaria</option>
                                                                <option value="Bandarban">Bandarban</option>
                                                                <option value="Cumilla">Cumilla</option>
                                                                <option value="Dhaka">Dhaka</option>
                                                                <option value="Jashore">Jashore</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label" for="district">District</label>
                                                            <select id="district" class="select2 form-select" data-placeholder="Select district">
                                                                <option value="">Select district</option>
                                                                <option value="Badda">Badda</option>
                                                                <option value="Bangsal">Bangsal</option>
                                                                <option value="Dhanmondi">Dhanmondi</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label" for="thana">City/Thana</label>
                                                            <select id="thana" class="select2 form-select" data-placeholder="Select thana">
                                                                <option value="">Select thana</option>
                                                                <option value="Shantinagr">Shantinagr</option>
                                                                <option value="Romna">Romna</option>
                                                                <option value="Banashree">Banashree</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label" for="area">Area</label>
                                                            <select id="area" class="select2 form-select" data-placeholder="Select blood group">
                                                                <option value="">Select blood group</option>
                                                                <option value="Shantinagr">Shantinagr</option>
                                                                <option value="Romna">Romna</option>
                                                                <option value="Banashree">Banashree</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label" for="address">Address</label>
                                                            <textarea name="address" class="form-control" id="address" rows="2" placeholder="1456, Mall Road"></textarea>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="d-flex align-items-center column-gap-4">
                                                                <button type="button" class="btn btn-primary">Save</button>
                                                                <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingPI3">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionPI3" aria-expanded="false" aria-controls="accordionPI3">Career and Application Information</button>
                                    </h2>
                                    <div id="accordionPI3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExampleOne">
                                        <div class="accordion-body">Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish cookie caramels muffin.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Education/Training -->
                    <div class="tab-pane fade" id="navs-pills-justified-education" role="tabpanel">
                        <div>
                            <div class="accordion mt-4" id="accordionExampleTwo">
                                <div class="card accordion-item active">
                                    <h2 class="accordion-header" id="headingET1">
                                        <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionET1" aria-expanded="true" aria-controls="accordionET1">Academic Summary</button>
                                    </h2>

                                    <div id="accordionET1" class="accordion-collapse collapse show" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            <div class="row py-5">
                                                <div class="col-lg-8 mx-auto">
                                                    <div class="form-repeater">
                                                        <div data-repeater-list="group-a">
                                                            <div data-repeater-item class="list-gap">
                                                                <!-- Academic Information -->
                                                                <div class="row g-6">
                                                                    <h5 class="mb-0">Academic</h5>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="level">Level of Education</label>
                                                                        <select id="level" class="select2 form-select" data-placeholder="Select level">
                                                                            <option value="">Select level</option>
                                                                            <option value="-2">JSC/JDC/8 pass</option>
                                                                            <option value="1" selected="">Secondary</option>
                                                                            <option value="2">Higher Secondary</option>
                                                                            <option value="3">Diploma</option>
                                                                            <option value="4">Bachelor/Honors</option>
                                                                            <option value="5">Masters</option>
                                                                            <option value="6">PhD (Doctor of Philosophy)</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="degree">Exam/Degree Title</label>
                                                                        <select id="degree" class="select2 form-select" data-placeholder="Select degree">
                                                                            <option value="">Select degree</option>
                                                                            <option value="O Level">O Level</option>
                                                                            <option value="Dakhil (Madrasah)">Dakhil (Madrasah)</option>
                                                                            <option value="SSC (Vocational)">SSC (Vocational)</option>
                                                                            <option value="Other">Other</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="group">Concentration/ Major/Group</label>
                                                                        <input type="text" id="group" class="form-control phone-mask" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="board">Board</label>
                                                                        <select id="board" class="select2 form-select" data-placeholder="Select board">
                                                                            <option value="">Select board</option>
                                                                            <option value="6">Barishal</option>
                                                                            <option value="5">Chattogram</option>
                                                                            <option value="3">Cumilla</option>
                                                                            <option value="1">Dhaka</option>
                                                                            <option value="10">Dinajpur</option>
                                                                            <option value="4">Jashore</option>
                                                                            <option value="11">Mymensingh</option>
                                                                            <option value="2">Rajshahi</option>
                                                                            <option value="7">Sylhet</option>
                                                                            <option value="8">Madrasah</option>
                                                                            <option value="9">Technical</option>
                                                                            <option value="12">BOU</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label class="form-label" for="nid">Institute Name</label>
                                                                        <input type="text" id="nid" class="form-control" placeholder="2547846512" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="result">Result</label>
                                                                        <select id="result" class="select2 form-select" data-placeholder="Select result">
                                                                            <option value="">Select result</option>
                                                                            <option value="15">First Division/Class</option>
                                                                            <option value="14">Second Division/Class</option>
                                                                            <option value="13">Third Division/Class</option>
                                                                            <option value="11">Grade</option>
                                                                            <option value="12">Appeared</option>
                                                                            <option value="10">Enrolled</option>
                                                                            <option value="9">Awarded</option>
                                                                            <option value="0">Do not mention</option>
                                                                            <option value="8">Pass</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="passing">Year of Passing</label>
                                                                        <select id="passing " class="select2 form-select" data-placeholder="Select passing">
                                                                            <option value="">Select passing</option>
                                                                            <option value="2029">2029</option>
                                                                            <option value="2028">2028</option>
                                                                            <option value="2027">2027</option>
                                                                            <option value="2026">2026</option>
                                                                            <option value="2025">2025</option>
                                                                            <option value="2024">2024</option>
                                                                            <option value="2023">2023</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1990">1990</option>
                                                                            <option value="1989">1989</option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1970">1970</option>
                                                                            <option value="1969">1969</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="duration">Duration (Years)</label>
                                                                        <input type="text" id="duration" class="form-control phone-mask" placeholder="6 Months" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="achievement">Achievement</label>
                                                                        <input type="text" id="achievement" class="form-control phone-mask" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="d-flex align-items-center column-gap-4">
                                                                            <button type="button" class="btn btn-primary">Save</button>
                                                                            <button type="button" class="btn btn-outline-secondary" data-repeater-delete>Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-5">
                                                            <button class="btn btn-outline-success" data-repeater-create>
                                                                <i class="ti ti-plus ti-xs me-2"></i>
                                                                Add another option
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingET2">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionET2" aria-expanded="false" aria-controls="accordionET2">Training Summary</button>
                                    </h2>
                                    <div id="accordionET2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            <div class="row py-5">
                                                <div class="col-lg-8 mx-auto">
                                                    <div class="form-repeater">
                                                        <div data-repeater-list="group-a">
                                                            <div data-repeater-item class="list-gap">
                                                                <!-- Training Information -->
                                                                <div class="row g-6">
                                                                    <h5 class="mb-0">Training</h5>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="group">Training Title</label>
                                                                        <input type="text" id="group" class="form-control phone-mask" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="duration">Institute</label>
                                                                        <input type="text" id="duration" class="form-control phone-mask" placeholder="6 Months" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="passing">Training Year</label>
                                                                        <select id="passing " class="select2 form-select" data-placeholder="Select passing">
                                                                            <option value="">Select passing</option>
                                                                            <option value="2029">2029</option>
                                                                            <option value="2028">2028</option>
                                                                            <option value="2027">2027</option>
                                                                            <option value="2026">2026</option>
                                                                            <option value="2025">2025</option>
                                                                            <option value="2024">2024</option>
                                                                            <option value="2023">2023</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1990">1990</option>
                                                                            <option value="1989">1989</option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1970">1970</option>
                                                                            <option value="1969">1969</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="achievement">Duration </label>
                                                                        <input type="text" id="achievement" class="form-control phone-mask" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="achievement">Location </label>
                                                                        <input type="text" id="achievement" class="form-control phone-mask" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="group">Country</label>
                                                                        <input type="text" id="group" class="form-control phone-mask" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="start_date">Start Date</label>
                                                                        <input type="date" id="start_date" class="form-control" placeholder="2021-06-18" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="end_date">End Date</label>
                                                                        <input type="date" id="end_date" class="form-control" placeholder="2022-01-18" />
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="d-flex align-items-center column-gap-4">
                                                                            <button type="button" class="btn btn-primary">Save</button>
                                                                            <button type="button" class="btn btn-outline-secondary" data-repeater-delete>Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-5">
                                                            <button class="btn btn-outline-success" data-repeater-create>
                                                                <i class="ti ti-plus ti-xs me-2"></i>
                                                                Add another option
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingET3">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionET3" aria-expanded="false" aria-controls="accordionET3">Professional Certification Summary</button>
                                    </h2>
                                    <div id="accordionET3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish cookie caramels muffin.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Employment -->
                    <div class="tab-pane fade" id="navs-pills-justified-employment" role="tabpanel">
                        <div>
                            <div class="accordion mt-4" id="accordionExampleThree">
                                <div class="card accordion-item active">
                                    <h2 class="accordion-header" id="headingE1">
                                        <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionE1" aria-expanded="true" aria-controls="accordionE1">Official Information</button>
                                    </h2>

                                    <div id="accordionE1" class="accordion-collapse collapse show" data-bs-parent="#accordionExampleThree">
                                        <div class="accordion-body">
                                            <div class="row py-5">
                                                <div class="col-lg-8 mx-auto">
                                                    <div class="row g-6">
                                                        <div class="col-md-6">
                                                            <div class="ecommerce-select2-dropdown">
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
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="ecommerce-select2-dropdown">
                                                                <label class="form-label" for="employee">Designation</label>
                                                                <select id="designation" class="select2 form-select" data-placeholder="Select designation">
                                                                    <option value="">Select Designation</option>
                                                                    <option value="Household">Household</option>
                                                                    <option value="Management">Management</option>
                                                                    <option value="Electronics">Electronics</option>
                                                                    <option value="Office">Office</option>
                                                                    <option value="Automotive">Automotive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="ecommerce-select2-dropdown">
                                                                <label class="form-label" for="supervisor">Supervisor</label>
                                                                <select id="supervisor" class="select2 form-select" data-placeholder="Select supervisor">
                                                                    <option value="">Select Designation</option>
                                                                    <option value="Household">Household</option>
                                                                    <option value="Management">Management</option>
                                                                    <option value="Electronics">Electronics</option>
                                                                    <option value="Office">Office</option>
                                                                    <option value="Automotive">Automotive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
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
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="ecommerce-select2-dropdown">
                                                                <label class="form-label" for="sub_department">Sub-Department</label>
                                                                <select id="sub_department" class="select2 form-select" data-placeholder="Select sub department">
                                                                    <option value="">Select Sub Department</option>
                                                                    <option value="Household">Household</option>
                                                                    <option value="Management">Management</option>
                                                                    <option value="Electronics">Electronics</option>
                                                                    <option value="Office">Office</option>
                                                                    <option value="Automotive">Automotive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="ecommerce-select2-dropdown">
                                                                <label class="form-label" for="weekend">Weekend</label>
                                                                <select id="weekend" class="select2 form-select" data-placeholder="Select weekend">
                                                                    <option value="">Select Weekend</option>
                                                                    <option value="Household">Household</option>
                                                                    <option value="Management">Management</option>
                                                                    <option value="Electronics">Electronics</option>
                                                                    <option value="Office">Office</option>
                                                                    <option value="Automotive">Automotive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="joining_date">Joining Date</label>
                                                            <input type="date" id="joining_date" class="form-control" placeholder="2021-06-18" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="confimation_date">Confimation Date</label>
                                                            <input type="date" id="confimation_date" class="form-control" placeholder="2021-06-18" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="ecommerce-select2-dropdown">
                                                                <label class="form-label" for="probation_duration">Probation Duration</label>
                                                                <select id="probation_duration" class="select2 form-select" data-placeholder="Select probation duration">
                                                                    <option value="">Select Probation Duration</option>
                                                                    <option value="Household">Household</option>
                                                                    <option value="Management">Management</option>
                                                                    <option value="Electronics">Electronics</option>
                                                                    <option value="Office">Office</option>
                                                                    <option value="Automotive">Automotive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="probation_period">Probation Period End Date</label>
                                                            <input type="date" id="probation_period" class="form-control" placeholder="2022-01-18" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="ecommerce-select2-dropdown">
                                                                <label class="form-label" for="ot_entitlement">OT Entitlement</label>
                                                                <select id="ot_entitlement" class="select2 form-select" data-placeholder="Select ot entitlement">
                                                                    <option value="">Select OT Entitlement</option>
                                                                    <option value="Household">Household</option>
                                                                    <option value="Management">Management</option>
                                                                    <option value="Electronics">Electronics</option>
                                                                    <option value="Office">Office</option>
                                                                    <option value="Automotive">Automotive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="ecommerce-select2-dropdown">
                                                                <label class="form-label" for="ot_entitlement">Vehicle Entitlement</label>
                                                                <select id="vehicle_entitlement" class="select2 form-select" data-placeholder="Select vehicle_entitlement">
                                                                    <option value="">Select Vehicle Entitlement</option>
                                                                    <option value="Household">Household</option>
                                                                    <option value="Management">Management</option>
                                                                    <option value="Electronics">Electronics</option>
                                                                    <option value="Office">Office</option>
                                                                    <option value="Automotive">Automotive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label" for="salary_range">Salary Range</label>
                                                            <input type="text" id="salary_range" class="form-control phone-mask" placeholder="" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="ecommerce-select2-dropdown">
                                                                <label class="form-label" for="activation_status">Activation Status</label>
                                                                <select id="activation_status" class="select2 form-select" data-placeholder="Select activation status">
                                                                    <option value="">Select Activation Status</option>
                                                                    <option value="Active">Active</option>
                                                                    <option value="Inactive">Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="d-flex align-items-center column-gap-4">
                                                                <button type="button" class="btn btn-primary">Save</button>
                                                                <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingE2">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionE2" aria-expanded="false" aria-controls="accordionE2">Employment History</button>
                                    </h2>

                                    <div id="accordionE2" class="accordion-collapse collapse" aria-labelledby="headingE2" data-bs-parent="#accordionExampleThree">
                                        <div class="accordion-body">
                                            <div class="row py-5">
                                                <div class="col-lg-8 mx-auto">
                                                    <div class="form-repeater">
                                                        <div data-repeater-list="group-a">
                                                            <div data-repeater-item class="list-gap">
                                                                <!-- Experience -->
                                                                <div class="row g-6">
                                                                    <h5 class="mb-0">Add Experience</h5>
                                                                    <div class="col-md-12">
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-home" checked="" />
                                                                            <label class="form-check-label" for="collapsible-address-type-home">Inside Bangladesh</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-office" />
                                                                            <label class="form-check-label" for="collapsible-address-type-office">Outside Bangladesh</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="group">Company Name</label>
                                                                        <input type="text" id="group" class="form-control phone-mask" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="duration">Company Business</label>
                                                                        <input type="text" id="duration" class="form-control phone-mask" placeholder="6 Months" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="achievement">Designation</label>
                                                                        <input type="text" id="achievement" class="form-control phone-mask" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="achievement">Department</label>
                                                                        <input type="text" id="achievement" class="form-control phone-mask" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="start_date">Start Date</label>
                                                                        <input type="date" id="start_date" class="form-control" placeholder="2021-06-18" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="end_date">End Date</label>
                                                                        <input type="date" id="end_date" class="form-control" placeholder="2022-01-18" />
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="form-label" for="address">Responsibilities</label>
                                                                        <textarea name="address" class="form-control" id="address" rows="2" placeholder="1456, Mall Road"></textarea>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="group">Area of Expertise</label>
                                                                        <input type="text" id="group" class="form-control phone-mask" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="group">Stay of Company</label>
                                                                        <input type="text" id="group" class="form-control phone-mask" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="d-flex align-items-center column-gap-4">
                                                                            <button type="button" class="btn btn-primary">Save</button>
                                                                            <button type="button" class="btn btn-outline-secondary" data-repeater-delete>Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-5">
                                                            <button class="btn btn-outline-success" data-repeater-create>
                                                                <i class="ti ti-plus ti-xs me-2"></i>
                                                                Add another option
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingE3">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionE3" aria-expanded="false" aria-controls="accordionE3">Employment History(For Retired Army Person)</button>
                                    </h2>
                                    <div id="accordionE3" class="accordion-collapse collapse" aria-labelledby="headingE3" data-bs-parent="#accordionExampleThree">
                                        <div class="accordion-body">Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes carrot cake. Fruitcake chocolate chupa chups.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Others Information -->
                    <div class="tab-pane fade" id="navs-pills-justified-others" role="tabpanel">
                        <div>
                            <div class="accordion mt-4" id="accordionExampleFour">
                                <div class="card accordion-item active">
                                    <h2 class="accordion-header" id="headingOI1">
                                        <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOI1" aria-expanded="true" aria-controls="accordionOI1">Skill</button>
                                    </h2>

                                    <div id="accordionOI1" class="accordion-collapse collapse show" data-bs-parent="#accordionExampleFour">
                                        <div class="accordion-body">
                                            <div class="row py-5">
                                                <div class="col-lg-8 mx-auto">
                                                    <div class="form-repeater">
                                                        <div data-repeater-list="group-a">
                                                            <div data-repeater-item class="list-gap">
                                                                <!-- Training Information -->
                                                                <div class="row g-6">
                                                                    <h5 class="mb-0">Training</h5>
                                                                    <div class="col-md-12">
                                                                        <label class="form-label" for="skill">Skill</label>
                                                                        <input type="text" id="skill" class="form-control phone-mask" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label class="form-label d-block mb-2" for="title">How did you learn the skill?</label>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                                                                            <label class="form-check-label" for="inlineCheckbox1">Self</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                                                                            <label class="form-check-label" for="inlineCheckbox2">Job</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" />
                                                                            <label class="form-check-label" for="inlineCheckbox3">Educational</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4" />
                                                                            <label class="form-check-label" for="inlineCheckbox4">Professional Training</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5" />
                                                                            <label class="form-check-label" for="inlineCheckbox5">NTVQF</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="d-flex align-items-center column-gap-4">
                                                                            <button type="button" class="btn btn-primary">Save</button>
                                                                            <button type="button" class="btn btn-outline-secondary" data-repeater-delete>Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-5">
                                                            <button class="btn btn-outline-success" data-repeater-create>
                                                                <i class="ti ti-plus ti-xs me-2"></i>
                                                                Add another option
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingOI2">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOI2" aria-expanded="false" aria-controls="accordionOI2">Language Proficiency</button>
                                    </h2>
                                    <div id="accordionOI2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExampleFour">
                                        <div class="accordion-body">
                                            <div class="row py-5">
                                                <div class="col-lg-8 mx-auto">
                                                    <div class="form-repeater">
                                                        <div data-repeater-list="group-a">
                                                            <div data-repeater-item class="list-gap">
                                                                <div class="row g-6">
                                                                    <h5 class="mb-0">Language</h5>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="language">Language</label>
                                                                        <input type="text" id="language" class="form-control" placeholder="" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="ecommerce-select2-dropdown">
                                                                            <label class="form-label" for="reading">Reading</label>
                                                                            <select id="reading" class="select2 form-select" data-placeholder="Select reading">
                                                                                <option value="">Select Reading</option>
                                                                                <option value="High">High</option>
                                                                                <option value="Medium">Medium</option>
                                                                                <option value="Low">Low</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="ecommerce-select2-dropdown">
                                                                            <label class="form-label" for="writing">Writing</label>
                                                                            <select id="writing" class="select2 form-select" data-placeholder="Select writing">
                                                                                <option value="">Select Writing</option>
                                                                                <option value="High">High</option>
                                                                                <option value="Medium">Medium</option>
                                                                                <option value="Low">Low</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="ecommerce-select2-dropdown">
                                                                            <label class="form-label" for="speaking">Speaking</label>
                                                                            <select id="speaking" class="select2 form-select" data-placeholder="Select speaking">
                                                                                <option value="">Select Speaking</option>
                                                                                <option value="High">High</option>
                                                                                <option value="Medium">Medium</option>
                                                                                <option value="Low">Low</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="d-flex align-items-center column-gap-4">
                                                                            <button type="button" class="btn btn-primary">Save</button>
                                                                            <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-5">
                                                            <button class="btn btn-outline-success" data-repeater-create>
                                                                <i class="ti ti-plus ti-xs me-2"></i>
                                                                Add another option
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingOI3">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOI3" aria-expanded="false" aria-controls="accordionOI3">Link Accounts</button>
                                    </h2>
                                    <div id="accordionOI3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExampleFour">
                                        <div class="accordion-body">Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish cookie caramels muffin.</div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingOI4">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOI4" aria-expanded="false" aria-controls="accordionOI4">References</button>
                                    </h2>
                                    <div id="accordionOI4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExampleFour">
                                        <div class="accordion-body">Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish cookie caramels muffin.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accomplishment -->
                    <div class="tab-pane fade" id="navs-pills-justified-photograph" role="tabpanel">
                        <div class="form-content">
                            <div class="row py-5">
                                <div class="col-lg-8 mx-auto">
                                    <div class="profile">
                                        <!-- Profile -->
                                        <div class="row g-6">
                                            <h5 class="mb-3">Profile</h5>
                                            <div class="col-md-12">
                                                <label class="form-label" for="title">Title</label>
                                                <input type="text" id="title" class="form-control" placeholder="" />
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="url">URL</label>
                                                <input type="text" id="url" class="form-control" placeholder="" />
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="description">Description</label>
                                                <textarea name="description" class="form-control" id="description" rows="4" placeholder="1456, Mall Road"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-flex align-items-center column-gap-4">
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Publication / Awards, Honors / Projects / Others -->
                                        <!-- <div class="row g-6">
                                    <h5 class="mb-3">Publication</h5>
                                    <div class="col-md-12">
                                      <label class="form-label" for="title">Title</label>
                                      <input type="text" id="title" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-md-12">
                                      <label class="form-label" for="issue_date">Issued On</label>
                                      <input type="date" id="issue_date" class="form-control" placeholder="2022-01-18" />
                                    </div>
                                    <div class="col-md-12">
                                      <label class="form-label" for="url">URL</label>
                                      <input type="text" id="url" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-md-12">
                                      <label class="form-label" for="description">Description</label>
                                      <textarea name="description" class="form-control" id="description" rows="4" placeholder="1456, Mall Road"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="d-flex align-items-center column-gap-4">
                                        <button type="button" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                      </div>
                                    </div>
                                  </div> -->
                                    </div>

                                    <div class="text-center">
                                        <hr />
                                        <p>Select & add another accomplishment</p>
                                        <div class="demo-inline-spacing">
                                            <button type="button" class="btn btn-outline-primary">Portfolio</button>
                                            <button type="button" class="btn btn-outline-secondary">Publications</button>
                                            <button type="button" class="btn btn-outline-success">Awards / Honors</button>
                                            <button type="button" class="btn btn-outline-danger">Projects</button>
                                            <button type="button" class="btn btn-outline-info">Others</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
