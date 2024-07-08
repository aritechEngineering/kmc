<?php

use App\Http\Controllers\Backend\RouteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(RouteController::class)->group(function () {
    Route::get('/', 'dashboard')->name('dashboard');

    // HR
    Route::get('/hr/employees', 'hr_employees')->name('hr_employees');
    Route::get('/hr/employee-add', 'hr_employeeadd')->name('hr_employeeadd');
    Route::get('/hr/increment', 'hr_increment')->name('hr_increment');
    Route::get('/hr/disciplinary/transfer', 'hr_transfer')->name('hr_transfer');
    Route::get('/hr/disciplinary/resignation', 'hr_resignation')->name('hr_resignation');
    Route::get('/hr/disciplinary/promotion', 'hr_promotion')->name('hr_promotion');
    Route::get('/hr/disciplinary/complaints', 'hr_complaints')->name('hr_complaints');
    Route::get('/hr/disciplinary/warning', 'hr_warning')->name('hr_warning');
    Route::get('/hr/disciplinary/termination', 'hr_termination')->name('hr_termination');

    // Attendance
    Route::get('/attendance/attendance', 'atten_attendance')->name('atten_attendance');
    Route::get('/attendance/attendancesheet', 'atten_attendancesheet')->name('atten_attendancesheet');
    Route::get('/attendance/holiday', 'atten_holiday')->name('atten_holiday');
    Route::get('/attendance/leave', 'atten_leave')->name('atten_leave');
    Route::get('/attendance/report/present', 'atten_rppresent')->name('atten_rppresent');
    Route::get('/attendance/report/absen', 'atten_rpabsen')->name('atten_rpabsen');
    Route::get('/attendance/report/leave', 'atten_rpleave')->name('atten_rpleave');
    Route::get('/attendance/report/late', 'atten_rplate')->name('atten_rplate');
    Route::get('/attendance/report/overtime', 'atten_rpovertime')->name('atten_rpovertime');

    // Payroll
    Route::get('/payroll/employeesalary', 'payroll_employeesalary')->name('payroll_employeesalary');
    Route::get('/payroll/payitem/overtime', 'payroll_overtime')->name('payroll_overtime');
    Route::get('/payroll/payitem/deduction', 'payroll_deduction')->name('payroll_deduction');

    // CV
    Route::get('/cv/cv-list', 'cv_list')->name('cv_list');
    Route::get('/cv/educations', 'cv_educations')->name('cv_educations');
    Route::get('/cv/experties', 'cv_experties')->name('cv_experties');
    Route::get('/cv/category', 'cv_category')->name('cv_category');
    Route::get('/cv/sub-category', 'cv_subcategory')->name('cv_subcategory');

    // Task
    Route::get('/task/task-entry', 'task_entry')->name('task_entry');
    Route::get('/task/task-record', 'task_record')->name('task_record');

    // Vehicle
    Route::get('/vehicle/vehicles', 'vehicle_vehicles')->name('vehicle_vehicles');
    Route::get('/vehicle/Vendor', 'vehicle_vendor')->name('vehicle_vendor');
    Route::get('/vehicle/ownership', 'vehicle_ownership')->name('vehicle_ownership');
    Route::get('/vehicle/requisition', 'vehicle_requisition')->name('vehicle_requisition');
    Route::get('/vehicle/maintenance', 'vehicle_maintenance')->name('vehicle_maintenance');
    Route::get('/vehicle/manage-vehicle/type', 'vehicle_type')->name('vehicle_type');
    Route::get('/vehicle/manage-vehicle/brand', 'vehicle_brand')->name('vehicle_brand');
    Route::get('/vehicle/manage-vehicle/document', 'vehicle_document')->name('vehicle_document');
    Route::get('/vehicle/manage-vehicle/maintenance', 'vehicle_mmaintenance')->name('vehicle_mmaintenance');
    Route::get('/vehicle/manage-driver/drivers', 'vehicle_drivers')->name('vehicle_drivers');
    Route::get('/vehicle/manage-driver/license', 'vehicle_license')->name('vehicle_license');

    Route::get('/vehicle/fuel/fuel-type', 'vehicle_fueltype')->name('vehicle_fueltype');
    Route::get('/vehicle/fuel/fuel-unit', 'vehicle_fuelunit')->name('vehicle_fuelunit');
    Route::get('/vehicle/fuel/refuel-entry', 'vehicle_refuelentry')->name('vehicle_refuelentry');

    // Asset
    Route::get('/asset/product/category', 'asset_category')->name('asset_category');
    Route::get('/asset/product/subcategory', 'asset_subcategory')->name('asset_subcategory');
    Route::get('/asset/product/product-unit', 'asset_product_unit')->name('asset_product_unit');
    Route::get('/asset/product/product-entry', 'asset_product_entry')->name('asset_product_entry');

    Route::get('/asset/purchase/vendor-type', 'asset_vendor_type')->name('asset_vendor_type');
    Route::get('/asset/purchase/vendors', 'asset_vendors')->name('asset_vendors');
    Route::get('/asset/purchase/purchase-entry', 'asset_purchase_entry')->name('asset_purchase_entry');
    Route::get('/asset/purchase/invoice-list', 'asset_invoice_list')->name('asset_invoice_list');

    // Business
    Route::get('/business/eio/eio', 'busi_eio')->name('busi_eio');
    Route::get('/business/eio/eio-add', 'busi_eioadd')->name('busi_eioadd');
    Route::get('/business/eio/eio-view', 'busi_eioview')->name('busi_eioview');
    Route::get('/business/proposal/proposals', 'busi_proposals')->name('busi_proposals');
    Route::get('/business/proposal/proposal-add', 'busi_proposaladd')->name('busi_proposaladd');
    Route::get('/business/proposal/proposal-view', 'busi_proposalview')->name('busi_proposalview');
    Route::get('/business/projects', 'busi_projects')->name('busi_projects');
    Route::get('/business/project-view', 'busi_projectview')->name('busi_projectview');

    // Administration
    Route::get('/administration/department', 'admini_department')->name('admini_department');
    Route::get('/administration/subdepartment', 'admini_subdepartment')->name('admini_subdepartment');
    Route::get('/administration/designation', 'admini_designation')->name('admini_designation');
    Route::get('/administration/employeetype', 'admini_employeetype')->name('admini_employeetype');
    Route::get('/administration/religion', 'admini_religion')->name('admini_religion');
    Route::get('/administration/bloodgroup', 'admini_bloodgroup')->name('admini_bloodgroup');
    Route::get('/administration/marital', 'admini_marital')->name('admini_marital');
    Route::get('/administration/months', 'admini_months')->name('admini_months');
    Route::get('/administration/shiftentry', 'admini_shiftentry')->name('admini_shiftentry');
    Route::get('/administration/terminationtype', 'admini_terminationtype')->name('admini_terminationtype');
    Route::get('/administration/leavetype', 'admini_leavetype')->name('admini_leavetype');
    Route::get('/administration/loan', 'admini_loan')->name('admini_loan');
    Route::get('/administration/deduction', 'admini_deduction')->name('admini_deduction');
    Route::get('/administration/goaltype', 'admini_goaltype')->name('admini_goaltype');
    Route::get('/administration/trainingtype', 'admini_trainingtype')->name('admini_trainingtype');
    Route::get('/administration/awardtype', 'admini_awardtype')->name('admini_awardtype');
    Route::get('/administration/performance', 'admini_performance')->name('admini_performance');
    Route::get('/administration/skill', 'admini_skill')->name('admini_skill');
    Route::get('/administration/durationunit', 'admini_durationunit')->name('admini_durationunit');
    Route::get('/administration/location/country', 'admini_country')->name('admini_country');
    Route::get('/administration/location/state', 'admini_state')->name('admini_state');
    Route::get('/administration/location/district', 'admini_district')->name('admini_district');
    Route::get('/administration/location/area', 'admini_area')->name('admini_area');
});
