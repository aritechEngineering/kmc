@extends('backend.layouts.apps')
@section('backend_title', 'Dashboard - Analytics | KMC - Bootstrap Admin Template')
@section('backend_content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row invoice-add">
            <!-- Invoice Add-->
            <div class="col-lg-9 col-12 mb-lg-0 mb-6">
                <div class="card invoice-preview-card p-sm-12 p-6">
                    <div class="card-body invoice-preview-header rounded">
                        <div class="d-flex flex-wrap flex-column flex-sm-row justify-content-between text-heading">
                            <div class="mb-md-0 mb-6">
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
                                <p class="mb-2">Floor# 7(AA-7), Plot# 7, Bir Uttam AK Khondakar Road,</p>
                                <p class="mb-2">Mohakhali C/A. Dhaka-1212</p>
                                <p class="mb-3">+88-0185-2277412, +88-02-55041065</p>
                            </div>
                            <div class="col-md-5 col-8 pe-0 ps-0 ps-md-2">
                                <dl class="row mb-0">
                                    <dt class="col-sm-5 mb-2 d-md-flex align-items-center justify-content-end">
                                        <span class="h5 text-capitalize mb-0 text-nowrap">Invoice</span>
                                    </dt>
                                    <dd class="col-sm-7">
                                        <div class="input-group input-group-merge disabled">
                                            <span class="input-group-text">Invoice240601235</span>
                                            <input type="text" class="form-control" disabled id="invoiceId" />
                                        </div>
                                    </dd>
                                    <dt class="col-sm-5 mb-2 d-md-flex align-items-center justify-content-end">
                                        <span class="fw-normal">Invoice Issue Date:</span>
                                    </dt>
                                    <dd class="col-sm-7">
                                        <input type="text" class="form-control invoice-date" placeholder="YYYY-MM-DD" />
                                    </dd>
                                    <dt class="col-sm-5 d-md-flex align-items-center justify-content-end">
                                        <span class="fw-normal">Delivery Date:</span>
                                    </dt>
                                    <dd class="col-sm-7 mb-0">
                                        <input type="text" class="form-control due-date" placeholder="YYYY-MM-DD" />
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class="card-body px-0">
                        <div class="row">
                            <div class="col-md-6 col-sm-5 col-12 mb-sm-0 mb-6">
                                <h6>Supplier:</h6>
                                <div class="col-8">
                                    <label class="form-label" for="formtabs-first-name">Supllier Name</label>
                                    <input type="text" id="formtabs-first-name" class="form-control d-flex justify-content-between" placeholder="Korim Motors" />
                                </div>
                                <div class="col-1">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm ms" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 20rem; margin-top: -4rem"><a href="#" class="fs-4 text-end mt-5"></a> search</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Employee Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">SL No.</th>
                                                                <th scope="col">Vendor ID</th>
                                                                <th scope="col">Vendor Name</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">01</th>
                                                                <td>VR152498</td>
                                                                <td>Korim Motos</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-sm btn-info">select</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <select class="form-select mb-4 w-50">
                  <option value="Jordan Stevenson">Jordan Stevenson</option>
                  <option value="Wesley Burland">Wesley Burland</option>
                  <option value="Vladamir Koschek">Vladamir Koschek</option>
                  <option value="Tyne Widmore">Tyne Widmore</option>
                </select> -->
                                <p class="mb-1">Korim Motors Ltd.</p>
                                <p class="mb-1">H-105, R-35, Banani, Dhaka</p>
                                <p class="mb-1">01713549852</p>
                                <p class="mb-0">motos@gmail.com</p>
                            </div>
                            <div class="col-md-6 col-sm-7">
                                <h6>Payment Option:</h6>
                                <table>
                                    <tbody>
                                        <!-- <tr>
                      <td class="pe-4">Total Due:</td>
                      <td>$12,110.55</td>
                    </tr> -->
                                        <tr>
                                            <td class="pe-4">Bank name:</td>
                                            <td>City Bank PLC</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4">Account Number:</td>
                                            <td>351 356 2543985</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4">Branch:</td>
                                            <td>Banani Br.</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4">Routing Number:</td>
                                            <td>1359745</td>
                                        </tr>

                                        <tr>
                                            <td class="pe-4" style="padding-top: 25px">BIN Number:</td>
                                            <td style="padding-top: 25px">1243598723</td>
                                        </tr>

                                        <tr>
                                            <td class="pe-4">TIN Number:</td>
                                            <td>65874123596314</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-0 mb-6" />

                    <div class="card-body pt-0 px-0">
                        <form class="source-item">
                            <div class="mb-4" data-repeater-list="group-a">
                                <div class="repeater-wrapper pt-0 pt-md-9" data-repeater-item>
                                    <div class="d-flex border rounded position-relative pe-0">
                                        <div class="row w-100 p-6">
                                            <div class="col-md-6 col-12 mb-md-0 mb-4">
                                                <p class="h6 repeater-title">Item</p>
                                                <select class="form-select item-details mb-6">
                                                    <option value="App Design">Air Filter</option>
                                                    <option value="App Customization" selected>Engine Oil</option>
                                                    <option value="ABC Template">Seat Cover</option>
                                                    <option value="App Development">Ac Finter</option>
                                                </select>
                                                <textarea class="form-control" rows="2" placeholder="if any note"></textarea>
                                            </div>
                                            <div class="col-md-3 col-12 mb-md-0 mb-4">
                                                <p class="h6 repeater-title">Cost</p>
                                                <input type="text" class="form-control invoice-item-price mb-5" placeholder="" value="1500" min="12" />
                                                <div class="text-heading">
                                                    <div class="mb-1">Discount:</div>
                                                    <span class="discount me-2">0%</span>
                                                    <!-- <span class="tax-1 me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1">0%</span> -->
                                                    <!-- <span class="tax-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2">0%</span> -->
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12 mb-md-0 mb-4">
                                                <p class="h6 repeater-title">Qty</p>
                                                <input type="text" class="form-control invoice-item-qty" placeholder="" value="5" min="1" max="50" />
                                            </div>
                                            <div class="col-md-1 col-12 pe-0 mt-md-2">
                                                <p class="h6 repeater-title">Price</p>
                                                <p class="mb-0 text-heading">7500.00</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                                            <i class="ti ti-x ti-lg cursor-pointer" data-repeater-delete></i>
                                            <div class="dropdown">
                                                <i class="ti ti-settings ti-lg cursor-pointer more-options-dropdown" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"> </i>
                                                <div class="dropdown-menu dropdown-menu-end w-px-300 p-4" aria-labelledby="dropdownMenuButton">
                                                    <div class="row g-3">
                                                        <div class="col-12">
                                                            <label for="discountInput" class="form-label">Discount(%)</label>
                                                            <input type="number" class="form-control" id="discountInput" min="0" max="100" />
                                                        </div>
                                                        <!-- <div class="col-md-6">
                              <label for="taxInput1" class="form-label">Tax 1</label>
                              <select name="tax-1-input" id="taxInput1" class="form-select tax-select">
                                <option value="0%" selected>0%</option>
                                <option value="1%">1%</option>
                                <option value="10%">10%</option>
                                <option value="18%">18%</option>
                                <option value="40%">40%</option>
                              </select>
                            </div> -->
                                                        <!-- <div class="col-md-6">
                              <label for="taxInput2" class="form-label">Tax 2</label>
                              <select name="tax-2-input" id="taxInput2" class="form-select tax-select">
                                <option value="0%" selected>0%</option>
                                <option value="1%">1%</option>
                                <option value="10%">10%</option>
                                <option value="18%">18%</option>
                                <option value="40%">40%</option>
                              </select>
                            </div> -->
                                                    </div>
                                                    <div class="dropdown-divider my-4"></div>
                                                    <button type="button" class="btn btn-label-primary btn-apply-changes">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="button" class="btn btn-sm btn-primary" data-repeater-create><i class="ti ti-plus ti-14px me-1_5"></i>Add Item</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <hr class="my-0" />
                    <div class="card-body px-0">
                        <div class="row row-gap-4">
                            <div class="col-md-6 mb-md-0 mb-4">
                                <div class="d-flex align-items-center mb-4">
                                    <label for="salesperson" class="me-2 fw-medium text-heading">Representative:</label>
                                    <input type="text" class="form-control" id="salesperson" placeholder="Rashedul Islam" />
                                </div>
                                <input type="text" class="form-control" id="invoiceMsg" placeholder="Thanks for your business" />
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <div class="invoice-calculations">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="w-px-100">Subtotal:</span>
                                        <span class="fw-medium text-heading">7,500</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="w-px-100">Discount:</span>
                                        <span class="fw-medium text-heading">00</span>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="w-px-100">Vat (+):</span>
                                        <span class="fw-medium text-heading">10%</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="w-px-100">Tax (-):</span>
                                        <span class="fw-medium text-heading">3%</span>
                                    </div>
                                    <hr />
                                    <div class="d-flex justify-content-between">
                                        <span class="w-px-100">Total Payable:</span>
                                        <span class="fw-medium text-heading">7,275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body px-0">
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <label for="note" class="text-heading mb-1 fw-medium">Note:</label>
                                    <textarea class="form-control" rows="2" id="note" placeholder="Invoice note">It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Invoice Add-->

            <!-- Invoice Actions -->
            <div class="col-lg-3 col-12 invoice-actions">
                <div class="card mb-6">
                    <div class="card-body">
                        <a href="purchase-preview.html" class="btn btn-info d-grid w-100 mb-4">Preview</a>

                        <button type="button" class="btn btn-success d-grid w-100">Save Draft</button>

                        <button class="btn btn-primary d-grid w-100 mt-4" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ti ti-send ti-xs me-2"></i>Send for approval</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- /Invoice Actions -->
        </div>

        <!-- Offcanvas -->
        <!-- Send Invoice Sidebar -->
        <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
            <div class="offcanvas-header mb-6 border-bottom">
                <h5 id="offcanvasRightLabel" class="offcanvas-title">Send Invoice</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body pt-0 flex-grow-1">
                <form>
                    <div class="mb-6">
                        <label for="invoice-from" class="form-label">From</label>
                        <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com" />
                    </div>
                    <div class="mb-6">
                        <label for="invoice-to" class="form-label">To</label>
                        <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com" />
                    </div>
                    <div class="mb-6">
                        <label for="invoice-subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods" />
                    </div>
                    <div class="mb-6">
                        <label for="invoice-message" class="form-label">Message</label>
                        <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">
    Dear Queen Consolidated,
              Thank you for your business, always a pleasure to work with you!
              We have generated a new invoice in the amount of $95.59
              We would appreciate payment of this invoice by 05/11/2021</textarea>
                    </div>
                    <div class="mb-6">
                        <span class="badge bg-label-primary">
                            <i class="ti ti-link ti-xs"></i>
                            <span class="align-middle">Invoice Attached</span>
                        </span>
                    </div>
                    <div class="mb-6 d-flex flex-wrap">
                        <button type="button" class="btn btn-primary me-4" data-bs-dismiss="offcanvas">Send</button>
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Send Invoice Sidebar -->

        <!-- /Offcanvas -->
    </div>
    <!-- / Content -->
@endsection
