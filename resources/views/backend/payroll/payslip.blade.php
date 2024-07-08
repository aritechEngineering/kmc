@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="app-ecommerce-category">
            <!-- Salary Sheet -->
            <div class="card invoice-preview-card p-sm-12 p-6">
                <div class="card-body invoice-preview-header rounded">
                    <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column">
                        <div class="mb-xl-0 mb-6 text-heading">
                            <div class="d-flex svg-illustration mb-6 gap-2 align-items-center">
                                <div class="app-brand-logo demo">
                                    <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
                                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
                                    </svg>
                                </div>
                                <span class="app-brand-text fw-bold fs-4 ms-50"> KMC </span>
                            </div>
                            <p class="mb-2">Office 149, 450 South Brand Brooklyn</p>
                            <p class="mb-2">San Diego County, CA 91905, USA</p>
                            <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                        </div>
                        <div>
                            <h5 class="mb-6">Payslip #86423</h5>
                            <div class="mb-1 text-heading">
                                <span>Date Issues:</span>
                                <span>April 25, 2021</span>
                            </div>
                            <div class="text-heading">
                                <span>Date Due:</span>
                                <span>May 25, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-6 mb-sm-0 mb-6">
                            <h6 class="mb-1">Dipankar Biswas</h6>
                            <p class="mb-1">Shelby Company Limited</p>
                            <p class="mb-1">Small Heath, B10 0HF, UK</p>
                            <p class="mb-1">718-986-6062</p>
                            <p class="mb-0">peakyFBlinders@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="table-responsive border border-bottom-0 border-top-0 rounded">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <td class="text-nowrap text-heading">Basic Salary</td>
                                        <td>$32.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap text-heading">House Rent Allowance (H.R.A.)</td>
                                        <td>$22.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap text-heading">Conveyance</td>
                                        <td>$34.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap text-heading">Other Allowance</td>
                                        <td>$66.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap text-heading">Total Earnings</td>
                                        <td>$45.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="table-responsive border border-bottom-0 border-top-0 rounded">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <td class="text-nowrap text-heading">Tax Deducted at Source (T.D.S.)</td>
                                        <td>$0</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap text-heading">Provident Fund</td>
                                        <td>$0</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap text-heading">ESI</td>
                                        <td>$0</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap text-heading">Loan</td>
                                        <td>$100</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap text-heading">Total Deductions</td>
                                        <td>$59698</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr class="mt-0 mb-6 mt-5" />
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <span class="fw-medium text-heading">Note:</span>
                            <span>$59698 (Fifty nine thousand six hundred and ninety eight only.)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
