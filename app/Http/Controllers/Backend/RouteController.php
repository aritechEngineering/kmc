<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard.dashboard');
    }

    // HR
    public function hr_employees()
    {
        return view('backend.hr.employees');
    }
    public function hr_employeeadd()
    {
        return view('backend.hr.employee-add');
    }
    public function hr_increment()
    {
        return view('backend.hr.increment');
    }
    public function hr_transfer()
    {
        return view('backend.hr.transfer');
    }
    public function hr_resignation()
    {
        return view('backend.hr.resignation');
    }
    public function hr_promotion()
    {
        return view('backend.hr.promotion');
    }
    public function hr_complaints()
    {
        return view('backend.hr.complaints');
    }
    public function hr_termination()
    {
        return view('backend.hr.termination');
    }
    public function hr_warning()
    {
        return view('backend.hr.disciplinary.warning');
    }
    public function hr_showCause()
    {
        return view('backend.hr.disciplinary.showcause');
    }
    public function hr_advice()
    {
        return view('backend.hr.disciplinary.advice');
    }

    public function hr_salaryDeduction()
    {
        return view('backend.hr.disciplinary.salarydeduction');
    }
    public function hr_suspend()
    {
        return view('backend.hr.disciplinary.suspend');
    }

    

    // Attendance
    public function atten_attendance()
    {
        return view('backend.attendance.attendance');
    }
    public function atten_attendancesheet()
    {
        return view('backend.attendance.attendancesheet');
    }
    public function atten_holiday()
    {
        return view('backend.attendance.holiday');
    }
    public function atten_leave()
    {
        return view('backend.attendance.leave');
    }
    public function atten_rppresent()
    {
        return view('backend.attendance.report.present');
    }
    public function atten_rpabsen()
    {
        return view('backend.attendance.report.absen');
    }
    public function atten_rpleave()
    {
        return view('backend.attendance.report.leave');
    }
    public function atten_rplate()
    {
        return view('backend.attendance.report.late');
    }
    public function atten_rpovertime()
    {
        return view('backend.attendance.report.overtime');
    }


    // Payroll
    public function payroll_employeesalary()
    {
        return view('backend.payroll.employee-salary');
    }
    public function payroll_overtime()
    {
        return view('backend.payroll.payitem.overtime');
    }
    public function payroll_deduction()
    {
        return view('backend.payroll.payitem.deduction');
    }


    // CV
    public function cv_list()
    {
        return view('backend.cv.cv-list');
    }
    public function cv_add()
    {
        return view('backend.cv.cv-add');
    }
    public function cv_details()
    {
        return view('backend.cv.cv-details');
    }
    public function cv_educations()
    {
        return view('backend.cv.educations');
    }
    public function cv_experties()
    {
        return view('backend.cv.experties');
    }
    public function cv_category()
    {
        return view('backend.cv.category');
    }
    public function cv_subcategory()
    {
        return view('backend.cv.sub-category');
    }


    // Task
    public function task_entry()
    {
        return view('backend.task.task-entry');
    }
    public function task_record()
    {
        return view('backend.task.task-record');
    }


    // Vehicle
    public function vehicle_vehicles()
    {
        return view('backend.vehicle.vehicles');
    }
    public function vehicle_vendor()
    {
        return view('backend.vehicle.vendor');
    }
    public function vehicle_ownership()
    {
        return view('backend.vehicle.ownership');
    }
    public function vehicle_requisition()
    {
        return view('backend.vehicle.requisition');
    }
    public function vehicle_maintenance()
    {
        return view('backend.vehicle.maintenance');
    }
    public function vehicle_type()
    {
        return view('backend.vehicle.manage-vehicle.type');
    }
    public function vehicle_brand()
    {
        return view('backend.vehicle.manage-vehicle.brand');
    }
    public function vehicle_document()
    {
        return view('backend.vehicle.manage-vehicle.document');
    }
    public function vehicle_mmaintenance()
    {
        return view('backend.vehicle.manage-vehicle.maintenance');
    }
    public function vehicle_drivers()
    {
        return view('backend.vehicle.manage-driver.drivers');
    }
    public function vehicle_license()
    {
        return view('backend.vehicle.manage-driver.license');
    }
    public function vehicle_fueltype()
    {
        return view('backend.vehicle.fuel.fuel-type');
    }
    public function vehicle_fuelunit()
    {
        return view('backend.vehicle.fuel.fuel-unit');
    }
    public function vehicle_refuelentry()
    {
        return view('backend.vehicle.fuel.refuel-entry');
    }


    // Asset
    public function asset_category()
    {
        return view('backend.asset.product.category');
    }
    public function asset_subcategory()
    {
        return view('backend.asset.product.subcategory');
    }
    public function asset_product_unit()
    {
        return view('backend.asset.product.product-unit');
    }
    public function asset_product_entry()
    {
        return view('backend.asset.product.product-entry');
    }
    public function asset_vendor_type()
    {
        return view('backend.asset.purchase.vendor-type');
    }
    public function asset_vendors()
    {
        return view('backend.asset.purchase.vendors');
    }
    public function asset_purchase_entry()
    {
        return view('backend.asset.purchase.purchase-entry');
    }
    public function asset_invoice_list()
    {
        return view('backend.asset.purchase.invoice-list');
    }


    // Business
    public function busi_eoi()
    {
        return view('backend.business.eoi.eoi');
    }
    public function busi_eioadd()
    {
        return view('backend.business.eoi.eoi-entry');
    }
    public function busi_eioview()
    {
        return view('backend.business.eoi.eoi-view');
    }
    public function busi_proposals()
    {
        return view('backend.business.proposal.proposals');
    }
    public function busi_proposaladd()
    {
        return view('backend.business.proposal.proposal-entry');
    }
    public function busi_proposalview()
    {
        return view('backend.business.proposal.proposel-view');
    }
    public function busi_projects()
    {
        return view('backend.business.projects');
    }
    public function busi_projectview()
    {
        return view('backend.business.view-details');
    }


    // Business
    public function admini_department()
    {
        return view('backend.administration.department');
    }
    public function admini_subdepartment()
    {
        return view('backend.administration.subdepartment');
    }
    public function admini_designation()
    {
        return view('backend.administration.designation');
    }
    public function admini_employeetype()
    {
        return view('backend.administration.employeetype');
    }
    public function admini_religion()
    {
        return view('backend.administration.religion');
    }
    public function admini_bloodgroup()
    {
        return view('backend.administration.bloodgroup');
    }
    public function admini_marital()
    {
        return view('backend.administration.marital');
    }
    public function admini_months()
    {
        return view('backend.administration.months');
    }
    public function admini_shiftentry()
    {
        return view('backend.administration.shiftentry');
    }
    public function admini_terminationtype()
    {
        return view('backend.administration.terminationtype');
    }
    public function admini_leavetype()
    {
        return view('backend.administration.leavetype');
    }
    public function admini_loan()
    {
        return view('backend.administration.loan');
    }
    public function admini_deduction()
    {
        return view('backend.administration.deduction');
    }
    public function admini_goaltype()
    {
        return view('backend.administration.goaltype');
    }
    public function admini_trainingtype()
    {
        return view('backend.administration.trainingtype');
    }
    public function admini_awardtype()
    {
        return view('backend.administration.awardtype');
    }
    public function admini_performance()
    {
        return view('backend.administration.performance');
    }
    public function admini_skill()
    {
        return view('backend.administration.skill');
    }
    public function admini_durationunit()
    {
        return view('backend.administration.durationunit');
    }
    public function admini_country()
    {
        return view('backend.administration.location.country');
    }
    public function admini_state()
    {
        return view('backend.administration.location.state');
    }
    public function admini_district()
    {
        return view('backend.administration.location.district');
    }
    public function admini_area()
    {
        return view('backend.administration.location.area');
    }
}
