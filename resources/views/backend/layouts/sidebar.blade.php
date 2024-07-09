<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold">KMC</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item 
         {{ Request::route()->named('dashboard') ? 'active open' : '' }}
        ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                <div class="badge bg-danger rounded-pill ms-auto">7</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="menu-link">
                        <div data-i18n="Analytics Dashboard">Analytics Dashboard</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="HR Dashboard">HR Dashboard</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Attendance Dashboard">Attendance Dashboard</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Payroll Dashboard">Payroll Dashboard</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="CV Dashboard">CV Dashboard</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Task Dashboard">Task Dashboard</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Vehicle Dashboard">Vehicle Dashboard</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Asset Dashboard">Asset Dashboard</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Software Modules -->
        <li class="menu-header small">
            <span class="menu-header-text" data-i18n="Software Modules">Software Modules</span>
        </li>

        <!-- HR Module start -->
        <li class="menu-item
            {{ Request::route()->named('hr_employees') ? 'active open' : '' }}
            {{ Request::route()->named('hr_employeeadd') ? 'active open' : '' }}
            {{ Request::route()->named('hr_increment') ? 'active open' : '' }}
            {{ Request::route()->named('hr_transfer') ? 'active open' : '' }}
            {{ Request::route()->named('hr_resignation') ? 'active open' : '' }}
            {{ Request::route()->named('hr_promotion') ? 'active open' : '' }}
            {{ Request::route()->named('hr_complaints') ? 'active open' : '' }}
            {{ Request::route()->named('hr_warning') ? 'active open' : '' }}
            {{ Request::route()->named('hr_termination') ? 'active open' : '' }}
            ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-map"></i>
                <div data-i18n="HR Module">HR Module</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::route()->named('hr_employees') ? 'active' : '' }}{{ Request::route()->named('hr_employeeadd') ? 'active' : '' }}">
                    <a href="{{ route('hr_employees') }}" class="menu-link">
                        <div data-i18n="Employee">Employee</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('hr_increment') ? 'active' : '' }}">
                    <a href="{{ route('hr_increment') }}" class="menu-link">
                        <div data-i18n="Increment">Increment</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('hr_transfer') ? 'active' : '' }}">
                    <a href="{{ route('hr_transfer') }}" class="menu-link">
                        <div data-i18n="Transfer">Transfer</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('hr_promotion') ? 'active' : '' }}">
                    <a href="{{ route('hr_promotion') }}" class="menu-link">
                        <div data-i18n="Promotion">Promotion</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('hr_resignation') ? 'active' : '' }}">
                    <a href="{{ route('hr_resignation') }}" class="menu-link">
                        <div data-i18n="Resignation">Resignation</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('hr_complaints') ? 'active' : '' }}">
                    <a href="{{ route('hr_complaints') }}" class="menu-link">
                        <div data-i18n="Complaints">Complaints</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('hr_termination') ? 'active' : '' }}">
                    <a href="{{ route('hr_termination') }}" class="menu-link">
                        <div data-i18n="Termination">Termination</div>
                    </a>
                </li>


                <li class="menu-item
                        {{ Request::route()->named('hr_showCause') ? 'active open' : '' }}
                        {{ Request::route()->named('hr_advice') ? 'active open' : '' }}
                        {{ Request::route()->named('hr_salaryDeduction') ? 'active open' : '' }}
                        {{ Request::route()->named('hr_suspend') ? 'active open' : '' }}
                        {{ Request::route()->named('hr_warning') ? 'active open' : '' }}
                        {{-- {{ Request::route()->named('hr_termination') ? 'active open' : '' }} --}}
                    ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Disciplinary">Disciplinary</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::route()->named('hr_showCause') ? 'active' : '' }}">
                            <a href="{{ route('hr_showCause') }}" class="menu-link">
                                <div data-i18n="Show Cause">Show Cause</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('hr_advice') ? 'active' : '' }}">
                            <a href="{{ route('hr_advice') }}" class="menu-link">
                                <div data-i18n="Advice">Advice</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('hr_salaryDeduction') ? 'active' : '' }}">
                            <a href="{{ route('hr_salaryDeduction') }}" class="menu-link">
                                <div data-i18n="salary subtraction">salary subtraction</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('hr_warning') ? 'active' : '' }}">
                            <a href="{{ route('hr_warning') }}" class="menu-link">
                                <div data-i18n="Warning">Warning</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('hr_suspend') ? 'active' : '' }}">
                            <a href="{{ route('hr_suspend') }}" class="menu-link">
                                <div data-i18n="suspend">suspend</div>
                            </a>
                        </li>
                        {{-- <li class="menu-item {{ Request::route()->named('hr_termination') ? 'active' : '' }}">
                            <a href="{{ route('hr_termination') }}" class="menu-link">
                                <div data-i18n="Termination">Termination</div>
                            </a>
                        </li> --}}
                    </ul>
                </li>
            </ul>
        </li>
        <!-- HR Module end -->

        <!-- Attendance Module start -->
        <li class="menu-item 
            {{ Request::route()->named('atten_attendance') ? 'active open' : '' }}
            {{ Request::route()->named('atten_attendancesheet') ? 'active open' : '' }}
            {{ Request::route()->named('atten_holiday') ? 'active open' : '' }}
            {{ Request::route()->named('atten_leave') ? 'active open' : '' }}
            {{ Request::route()->named('atten_rppresent') ? 'active open' : '' }}
            {{ Request::route()->named('atten_rpabsen') ? 'active open' : '' }}
            {{ Request::route()->named('atten_rpleave') ? 'active open' : '' }}
            {{ Request::route()->named('atten_rplate') ? 'active open' : '' }}
            {{ Request::route()->named('atten_rpovertime') ? 'active open' : '' }}
            ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div data-i18n="Attendance Module">Attendance Module</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::route()->named('atten_attendance') ? 'active' : '' }}">
                    <a href="{{ route('atten_attendance') }}" class="menu-link">
                        <div data-i18n="Attendance">Attendance</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('atten_attendancesheet') ? 'active' : '' }}">
                    <a href="{{ route('atten_attendancesheet') }}" class="menu-link">
                        <div data-i18n="Attendance Sheet">Attendance Sheet</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('atten_holiday') ? 'active' : '' }}">
                    <a href="{{ route('atten_holiday') }}" class="menu-link">
                        <div data-i18n="Holiday">Holiday</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('atten_leave') ? 'active' : '' }}">
                    <a href="{{ route('atten_leave') }}" class="menu-link">
                        <div data-i18n="Leave">Leave</div>
                    </a>
                </li>
                <li class="menu-item
                    {{ Request::route()->named('atten_rppresent') ? 'active open' : '' }}
                    {{ Request::route()->named('atten_rpabsen') ? 'active open' : '' }}
                    {{ Request::route()->named('atten_rpleave') ? 'active open' : '' }}
                    {{ Request::route()->named('atten_rplate') ? 'active open' : '' }}
                    {{ Request::route()->named('atten_rpovertime') ? 'active open' : '' }}
                    ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Report">Report</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::route()->named('atten_rppresent') ? 'active' : '' }}">
                            <a href="{{ route('atten_rppresent') }}" class="menu-link">
                                <div data-i18n="Present">Present</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('atten_rpabsen') ? 'active' : '' }}">
                            <a href="{{ route('atten_rpabsen') }}" class="menu-link">
                                <div data-i18n="Absen">Absen</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('atten_rpleave') ? 'active' : '' }}">
                            <a href="{{ route('atten_rpleave') }}" class="menu-link">
                                <div data-i18n="Leave">Leave</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('atten_rplate') ? 'active' : '' }}">
                            <a href="{{ route('atten_rplate') }}" class="menu-link">
                                <div data-i18n="Late">Late</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('atten_rpovertime') ? 'active' : '' }}">
                            <a href="{{ route('atten_rpovertime') }}" class="menu-link">
                                <div data-i18n="Overtime">Overtime</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- Attendance Module end -->

        <!-- Payroll Module start -->
        <li class="menu-item
            {{ Request::route()->named('payroll_employeesalary') ? 'active open' : '' }}    
            {{ Request::route()->named('payroll_overtime') ? 'active open' : '' }}    
            {{ Request::route()->named('payroll_deduction') ? 'active open' : '' }}    
            ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-forms"></i>
                <div data-i18n="Payroll Module">Payroll Module</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::route()->named('payroll_employeesalary') ? 'active' : '' }}">
                    <a href="{{ route('payroll_employeesalary') }}" class="menu-link">
                        <div data-i18n="Employee Salay">Employee Salay</div>
                    </a>
                </li>
                <li class="menu-item 
                    {{ Request::route()->named('payroll_overtime') ? 'active open' : '' }} 
                    {{ Request::route()->named('payroll_deduction') ? 'active open' : '' }} 
                    ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Pay List">Pay List</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::route()->named('payroll_overtime') ? 'active' : '' }}">
                            <a href="{{ route('payroll_overtime') }}" class="menu-link">
                                <div data-i18n="Overtime">Overtime</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('payroll_deduction') ? 'active' : '' }}">
                            <a href="{{ route('payroll_deduction') }}" class="menu-link">
                                <div data-i18n="Deduction">Deduction</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- Payroll Module end -->

        <!-- CV Module start -->
        <li class="menu-item
                {{ Request::route()->named('cv_list') ? 'active open' : '' }}  
                {{ Request::route()->named('cv_educations') ? 'active open' : '' }}  
                {{ Request::route()->named('cv_experties') ? 'active open' : '' }}  
                {{ Request::route()->named('cv_category') ? 'active open' : '' }}  
                {{ Request::route()->named('cv_subcategory') ? 'active open' : '' }}   
            ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-id"></i>
                <div data-i18n="CV Module">CV Module</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::route()->named('cv_list') ? 'active' : '' }}">
                    <a href="{{ route('cv_list') }}" class="menu-link">
                        <div data-i18n="CV Lists">CV Lists</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('cv_educations') ? 'active' : '' }}">
                    <a href="{{ route('cv_educations') }}" class="menu-link">
                        <div data-i18n="Education">Education</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('cv_experties') ? 'active' : '' }}">
                    <a href="{{ route('cv_experties') }}" class="menu-link">
                        <div data-i18n="Experties">Experties</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('cv_category') ? 'active' : '' }}">
                    <a href="{{ route('cv_category') }}" class="menu-link">
                        <div data-i18n="Category">Category</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('cv_subcategory') ? 'active' : '' }}">
                    <a href="{{ route('cv_subcategory') }}" class="menu-link">
                        <div data-i18n="Sub Category">Sub Category</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- CV Module end -->

        <!-- Task Module start -->
        <li class="menu-item
                {{ Request::route()->named('task_entry') ? 'active open' : '' }} 
                {{ Request::route()->named('task_record') ? 'active open' : '' }} 
            ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-chart-pie"></i>
                <div data-i18n="Task Module">Task Module</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::route()->named('task_entry') ? 'active' : '' }}">
                    <a href="{{ route('task_entry') }}" class="menu-link">
                        <div data-i18n="Task Entry">Task Entry</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('task_record') ? 'active' : '' }}">
                    <a href="{{ route('task_record') }}" class="menu-link">
                        <div data-i18n="Task Record">Task Record</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Task Module end -->

        <!-- Vehicle Module start -->
        <li
            class="menu-item
            {{ Request::route()->named('vehicle_vehicles') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_vendor') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_ownership') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_requisition') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_maintenance') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_type') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_brand') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_document') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_mmaintenance') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_drivers') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_license') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_fueltype') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_fuelunit') ? 'active open' : '' }} 
            {{ Request::route()->named('vehicle_refuelentry') ? 'active open' : '' }} 
            ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
                <div data-i18n="Vehicle Module">Vehicle Module</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::route()->named('vehicle_vehicles') ? 'active' : '' }}">
                    <a href="{{ route('vehicle_vehicles') }}" class="menu-link">
                        <div data-i18n="Vehicle">Vehicle</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('vehicle_vendor') ? 'active' : '' }}">
                    <a href="{{ route('vehicle_vendor') }}" class="menu-link">
                        <div data-i18n="Vendor">Vendor</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('vehicle_ownership') ? 'active' : '' }}">
                    <a href="{{ route('vehicle_ownership') }}" class="menu-link">
                        <div data-i18n="Ownership">Ownership</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('vehicle_requisition') ? 'active' : '' }}">
                    <a href="{{ route('vehicle_requisition') }}" class="menu-link">
                        <div data-i18n="Requisition">Requisition</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('vehicle_maintenance') ? 'active' : '' }}">
                    <a href="{{ route('vehicle_maintenance') }}" class="menu-link">
                        <div data-i18n="Maintenance">Maintenance</div>
                    </a>
                </li>
                <li class="menu-item
                    {{ Request::route()->named('vehicle_type') ? 'active open' : '' }} 
                    {{ Request::route()->named('vehicle_brand') ? 'active open' : '' }} 
                    {{ Request::route()->named('vehicle_document') ? 'active open' : '' }} 
                    {{ Request::route()->named('vehicle_mmaintenance') ? 'active open' : '' }} 
                    ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Manage Vehicle">Manage Vehicle</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::route()->named('vehicle_type') ? 'active' : '' }}">
                            <a href="{{ route('vehicle_type') }}" class="menu-link">
                                <div data-i18n="Vehicle Type">Vehicle Type</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('vehicle_brand') ? 'active' : '' }}">
                            <a href="{{ route('vehicle_brand') }}" class="menu-link">
                                <div data-i18n="Vehicle Brand">Vehicle Brand</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('vehicle_document') ? 'active' : '' }}">
                            <a href="{{ route('vehicle_document') }}" class="menu-link">
                                <div data-i18n="Vehicle Document">Vehicle Document</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('vehicle_maintenance') ? 'active' : '' }}">
                            <a href="{{ route('vehicle_mmaintenance') }}" class="menu-link">
                                <div data-i18n="Vehicle Maintenance">Vehicle Maintenance</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item
                    {{ Request::route()->named('vehicle_drivers') ? 'active open' : '' }} 
                    {{ Request::route()->named('vehicle_license') ? 'active open' : '' }}
                    ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Manage Driver">Manage Driver</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::route()->named('vehicle_drivers') ? 'active' : '' }}">
                            <a href="{{ route('vehicle_drivers') }}" class="menu-link">
                                <div data-i18n="Drivers">Drivers</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('vehicle_license') ? 'active' : '' }}">
                            <a href="{{ route('vehicle_license') }}" class="menu-link">
                                <div data-i18n="License">License</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item
                    {{ Request::route()->named('vehicle_fueltype') ? 'active open' : '' }} 
                    {{ Request::route()->named('vehicle_fuelunit') ? 'active open' : '' }} 
                    {{ Request::route()->named('vehicle_refuelentry') ? 'active open' : '' }} 
                    ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Refueling">Refueling</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::route()->named('vehicle_fueltype') ? 'active' : '' }}">
                            <a href="{{ route('vehicle_fueltype') }}" class="menu-link">
                                <div data-i18n="Fuel type">Fuel type</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('vehicle_fuelunit') ? 'active' : '' }}">
                            <a href="{{ route('vehicle_fuelunit') }}" class="menu-link">
                                <div data-i18n="Fuel Unit">Fuel Unit</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('vehicle_refuelentry') ? 'active' : '' }}">
                            <a href="{{ route('vehicle_refuelentry') }}" class="menu-link">
                                <div data-i18n="Refuel Entry">Refuel Entry</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- Vehicle Module end -->

        <!-- Asset Module start -->
        <li class="menu-item
                {{ Request::route()->named('asset_category') ? 'active open' : '' }} 
                {{ Request::route()->named('asset_subcategory') ? 'active open' : '' }} 
                {{ Request::route()->named('asset_product_unit') ? 'active open' : '' }} 
                {{ Request::route()->named('asset_product_entry') ? 'active open' : '' }} 
                {{ Request::route()->named('asset_vendor_type') ? 'active open' : '' }} 
                {{ Request::route()->named('asset_vendors') ? 'active open' : '' }} 
                {{ Request::route()->named('asset_purchase_entry') ? 'active open' : '' }} 
                {{ Request::route()->named('asset_invoice_list') ? 'active open' : '' }} 
            ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-components"></i>
                <div data-i18n="Asset Module">Asset Module</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item
                        {{ Request::route()->named('asset_category') ? 'active open' : '' }}
                        {{ Request::route()->named('asset_subcategory') ? 'active open' : '' }}
                        {{ Request::route()->named('asset_product_unit') ? 'active open' : '' }}
                        {{ Request::route()->named('asset_product_entry') ? 'active open' : '' }}
                    ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Product">Product</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::route()->named('asset_category') ? 'active' : '' }}">
                            <a href="{{ route('asset_category') }}" class="menu-link">
                                <div data-i18n="Category">Category</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('asset_subcategory') ? 'active' : '' }}">
                            <a href="{{ route('asset_subcategory') }}" class="menu-link">
                                <div data-i18n="Sub-Category">Sub-Category</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('asset_product_unit') ? 'active' : '' }}">
                            <a href="{{ route('asset_product_unit') }}" class="menu-link">
                                <div data-i18n="Product unit">Product unit</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('asset_product_entry') ? 'active' : '' }}">
                            <a href="{{ route('asset_product_entry') }}" class="menu-link">
                                <div data-i18n="Product Entry">Product Entry</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item
                        {{ Request::route()->named('asset_vendor_type') ? 'active open' : '' }}
                        {{ Request::route()->named('asset_vendors') ? 'active open' : '' }}
                        {{ Request::route()->named('asset_purchase_entry') ? 'active open' : '' }}
                        {{ Request::route()->named('asset_invoice_list') ? 'active open' : '' }}
                    ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Purchase">Purchase</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::route()->named('asset_vendor_type') ? 'active' : '' }}">
                            <a href="{{ route('asset_vendor_type') }}" class="menu-link">
                                <div data-i18n="Vendor Type">Vendor Type</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('asset_vendors') ? 'active' : '' }}">
                            <a href="{{ route('asset_vendors') }}" class="menu-link">
                                <div data-i18n="Vendors">Vendors</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('asset_purchase_entry') ? 'active' : '' }}">
                            <a href="{{ route('asset_purchase_entry') }}" class="menu-link">
                                <div data-i18n="Purchase Entry">Purchase Entry</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('asset_invoice_list') ? 'active' : '' }}">
                            <a href="{{ route('asset_invoice_list') }}" class="menu-link">
                                <div data-i18n="Invoice List">Invoice List</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- Asset Module end -->

        <!-- Business Module start -->
        <li class="menu-item
                {{ Request::route()->named('busi_eoi') ? 'active open' : '' }}
                {{ Request::route()->named('busi_eoiadd') ? 'active open' : '' }}
                {{ Request::route()->named('busi_eoiview') ? 'active open' : '' }}
                {{ Request::route()->named('busi_proposals') ? 'active open' : '' }}
                {{ Request::route()->named('busi_proposaladd') ? 'active open' : '' }}
                {{ Request::route()->named('busi_proposalview') ? 'active open' : '' }}
                {{ Request::route()->named('busi_projects') ? 'active open' : '' }}
                {{ Request::route()->named('busi_projectview') ? 'active open' : '' }}
            ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                <div data-i18n="Business Module">Business Module</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::route()->named('busi_eoi') ? 'active' : '' }}{{ Request::route()->named('busi_eoiadd') ? 'active' : '' }}{{ Request::route()->named('busi_eoiview') ? 'active' : '' }}">
                    <a href="{{ route('busi_eoi') }}" class="menu-link">
                        <div data-i18n="EOI">EOI</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('busi_proposals') ? 'active' : '' }}{{ Request::route()->named('busi_proposaladd') ? 'active' : '' }}{{ Request::route()->named('busi_proposalview') ? 'active' : '' }}">
                    <a href="{{ route('busi_proposals') }}" class="menu-link">
                        <div data-i18n="Proposals">Proposals</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('busi_projects') ? 'active' : '' }}{{ Request::route()->named('busi_projectview') ? 'active' : '' }}">
                    <a href="{{ route('busi_projects') }}" class="menu-link">
                        <div data-i18n="Projects">Projects</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Business Module end -->

        <!-- Administration Module start -->
        <li
            class="menu-item
                {{ Request::route()->named('admini_department') ? 'active open' : '' }}
                {{ Request::route()->named('admini_subdepartment') ? 'active open' : '' }}
                {{ Request::route()->named('admini_designation') ? 'active open' : '' }}
                {{ Request::route()->named('admini_employeetype') ? 'active open' : '' }}
                {{ Request::route()->named('admini_religion') ? 'active open' : '' }}
                {{ Request::route()->named('admini_bloodgroup') ? 'active open' : '' }}
                {{ Request::route()->named('admini_marital') ? 'active open' : '' }}
                {{ Request::route()->named('admini_months') ? 'active open' : '' }}
                {{ Request::route()->named('admini_shiftentry') ? 'active open' : '' }}
                {{ Request::route()->named('admini_terminationtype') ? 'active open' : '' }}
                {{ Request::route()->named('admini_leavetype') ? 'active open' : '' }}
                {{ Request::route()->named('admini_loan') ? 'active open' : '' }}
                {{ Request::route()->named('admini_deduction') ? 'active open' : '' }}
                {{ Request::route()->named('admini_goaltype') ? 'active open' : '' }}
                {{ Request::route()->named('admini_trainingtype') ? 'active open' : '' }}
                {{ Request::route()->named('admini_awardtype') ? 'active open' : '' }}
                {{ Request::route()->named('admini_performance') ? 'active open' : '' }}
                {{ Request::route()->named('admini_skill') ? 'active open' : '' }}
                {{ Request::route()->named('admini_durationunit') ? 'active open' : '' }}
                {{ Request::route()->named('admini_country') ? 'active open' : '' }}
                {{ Request::route()->named('admini_state') ? 'active open' : '' }}
                {{ Request::route()->named('admini_district') ? 'active open' : '' }}
                {{ Request::route()->named('admini_area') ? 'active open' : '' }}
            ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Configuration">Configuration</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::route()->named('admini_department') ? 'active' : '' }}">
                    <a href="{{ route('admini_department') }}" class="menu-link">
                        <div data-i18n="Department">Department</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_subdepartment') ? 'active' : '' }}">
                    <a href="{{ route('admini_subdepartment') }}" class="menu-link">
                        <div data-i18n="Sub Department">Sub Department</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_designation') ? 'active' : '' }}">
                    <a href="{{ route('admini_designation') }}" class="menu-link">
                        <div data-i18n="Designation">Designation</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_employeetype') ? 'active' : '' }}">
                    <a href="{{ route('admini_employeetype') }}" class="menu-link">
                        <div data-i18n="Employee Type">Employee Type</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_religion') ? 'active' : '' }}">
                    <a href="{{ route('admini_religion') }}" class="menu-link">
                        <div data-i18n="Religion">Religion</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_bloodgroup') ? 'active' : '' }}">
                    <a href="{{ route('admini_bloodgroup') }}" class="menu-link">
                        <div data-i18n="Blood Group">Blood Group</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_marital') ? 'active' : '' }}">
                    <a href="{{ route('admini_marital') }}" class="menu-link">
                        <div data-i18n="Marital">Marital</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_months') ? 'active' : '' }}">
                    <a href="{{ route('admini_months') }}" class="menu-link">
                        <div data-i18n="Month Entry">Month Entry</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_shiftentry') ? 'active' : '' }}">
                    <a href="{{ route('admini_shiftentry') }}" class="menu-link">
                        <div data-i18n="Shift Entry">Shift Entry</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_terminationtype') ? 'active' : '' }}">
                    <a href="{{ route('admini_terminationtype') }}" class="menu-link">
                        <div data-i18n="Termination Type">Termination Type</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_leavetype') ? 'active' : '' }}">
                    <a href="{{ route('admini_leavetype') }}" class="menu-link">
                        <div data-i18n="Leave Type">Leave Type</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_loan') ? 'active' : '' }}">
                    <a href="{{ route('admini_loan') }}" class="menu-link">
                        <div data-i18n="Loan">Loan</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_deduction') ? 'active' : '' }}">
                    <a href="{{ route('admini_deduction') }}" class="menu-link">
                        <div data-i18n="Deduction">Deduction</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_goaltype') ? 'active' : '' }}">
                    <a href="{{ route('admini_goaltype') }}" class="menu-link">
                        <div data-i18n="Goal Type">Goal Type</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_trainingtype') ? 'active' : '' }}">
                    <a href="{{ route('admini_trainingtype') }}" class="menu-link">
                        <div data-i18n="Training Type">Training Type</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_awardtype') ? 'active' : '' }}">
                    <a href="{{ route('admini_awardtype') }}" class="menu-link">
                        <div data-i18n="Award Type">Award Type</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_performance') ? 'active' : '' }}">
                    <a href="{{ route('admini_performance') }}" class="menu-link">
                        <div data-i18n="Performance">Performance</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_skill') ? 'active' : '' }}">
                    <a href="{{ route('admini_skill') }}" class="menu-link">
                        <div data-i18n="Skill">Skill</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::route()->named('admini_durationunit') ? 'active' : '' }}">
                    <a href="{{ route('admini_durationunit') }}" class="menu-link">
                        <div data-i18n="Duration Unit">Duration Unit</div>
                    </a>
                </li>
                <li class="menu-item
                        {{ Request::route()->named('admini_country') ? 'active open' : '' }}
                        {{ Request::route()->named('admini_state') ? 'active open' : '' }}
                        {{ Request::route()->named('admini_district') ? 'active open' : '' }}
                        {{ Request::route()->named('admini_area') ? 'active open' : '' }}
                    ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Location">Location</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::route()->named('admini_country') ? 'active' : '' }}">
                            <a href="{{ route('admini_country') }}" class="menu-link">
                                <div data-i18n="Country">Country</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('admini_state') ? 'active' : '' }}">
                            <a href="{{ route('admini_state') }}" class="menu-link">
                                <div data-i18n="State">State</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('admini_district') ? 'active' : '' }}">
                            <a href="{{ route('admini_district') }}" class="menu-link">
                                <div data-i18n="District">District</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::route()->named('admini_area') ? 'active' : '' }}">
                            <a href="{{ route('admini_area') }}" class="menu-link">
                                <div data-i18n="Area">Area</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- Administration Module end -->
    </ul>
</aside>
