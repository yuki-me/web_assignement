@extends('Admin.AdminLayouts.admininclude')
<link rel="stylesheet" href="{{ asset('contant/custome-style/admin/admincustomer/admincustomer.css') }}">
<script src="{{ asset('contant/script/jquery-3.6.3.js') }}"></script>
<script src="{{ asset('contant/script/jquery-ui.js') }}"></script>

<div class="mr_customer">
    <div class="title">
        <span>Customer</span>
    </div>

    <div class="customer_content">
        {{-- <div class="customer_btn">
            <div class="btn_cusmodal">
                <i class="bi bi-easel2"></i>
                <button type="button" title="Add Product" class="btn-sm btn-primary rounded" onclick="openProductModal()">
                    <i class="bi bi-plus-circle"></i>
                    Add Product
                </button>
            </div>
        </div> --}}

        <div class="table_area">
            <table>
                <thead>
                    <th style="width: 3%; text-align: center"><span>#</span></th>
                    <th style="width: 10%; text-align: center"><span>Id</span></th>
                    <th style="width: 15%; text-align: center"><span>Customer Name</span></th>
                    <th style="width: 5%; text-align: center"><span>Gender</span></th>
                    <th style="width: 10%; text-align: center"><span>Date of Birth</span></th>
                    <th style="width: 10%; text-align: center"><span>Contact</span></th>
                    <th style="width: 40%; text-align: center"><span>Address</span></th>
                    <th style="width: 7%; text-align: center"><span>Action</span></th>
                </thead>
                <tbody id="tblcus">
                </tbody>
            </table>
        </div>
    </div>

</div>

{{-- Modal Customer --}}
<div class="modal fade" id="MyCustomerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CustomerModalTitle">Customer</h5>
                <button type="button" class="btn-close btn-sm" {{-- data-bs-dismiss="modal" aria-label="Close" --}}
                    onclick="closeCustomerModal()"></button>
            </div>
            <div class="modal-body d-flex">
                <form>
                    <div class="mb-3">
                        <label for="Customer Id" class="form-label form-label-sm">Customer Id</label>
                        <input type="text" class="form-control form-control-sm" id="CustomerId" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="LastName" class="form-label form-label-sm">Last Name</label>
                        <input type="text" class="form-control form-control-sm" id="LastName"disabled>
                    </div>
                    <div class="mb-3">
                        <label for="FirstName" class="form-label form-label-sm">First Name</label>
                        <input type="text" class="form-control form-control-sm" id="FirstName"disabled>
                    </div>
                    <div class="mb-3">
                        <label for="Gender" class="form-label form-label-sm">Gender</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm" id="Gender"disabled>
                            <option selected hidden>Choose Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="Date of Birth" class="form-label form-label-sm">Date of Birth</label>
                        <input type="text" class="form-control form-control-sm" id="DOB"disabled>
                    </div>

                    <div class="mb-3">
                        <label for="PhoneNumber" class="form-label form-label-sm">Phone Number</label>
                        <input type="text" class="form-control form-control-sm" id="PhoneNumber"disabled>
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label form-label-sm">Email</label>
                        <input type="text" class="form-control form-control-sm" id="Email"disabled>
                    </div>

                    <div class="mb-3">
                        <label for="Job Title" class="form-label form-label-sm">Job Title</label>
                        <input type="text" class="form-control form-control-sm" id="JobTitle" disabled>
                    </div>
                </form>
                <form>
                    <div class="mb-3">
                        <label for="Country" class="form-label form-label-sm">Country</label>
                        <input type="text" class="form-control form-control-sm" id="Country"disabled>
                    </div>

                    <div class="mb-3">
                        <label for="Province" class="form-label form-label-sm">Province</label>
                        <input type="text" class="form-control form-control-sm" id="Province"disabled>
                    </div>

                    <div class="mb-3">
                        <label for="District" class="form-label form-label-sm">District</label>
                        <input type="text" class="form-control form-control-sm" id="District"disabled>
                    </div>

                    <div class="mb-3">
                        <label for="Communes" class="form-label form-label-sm">Communes</label>
                        <input type="text" class="form-control form-control-sm" id="Communes"disabled>
                    </div>

                    <div class="mb-3">
                        <label for="Village" class="form-label form-label-sm">Village</label>
                        <input type="text" class="form-control form-control-sm" id="Village"disabled>
                    </div>

                    <div class="mb-3">
                        <label for="Street" class="form-label form-label-sm">Street</label>
                        <input type="text" class="form-control form-control-sm" id="Street"disabled>
                    </div>

                    <div class="mb-3">
                        <label for="House" class="form-label form-label-sm">House</label>
                        <input type="text" class="form-control form-control-sm" id="House"disabled>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-sm btn-secondary" {{-- data-bs-dismiss="modal" --}}
                    onclick="closeCustomerModal()" title="Close">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('contant/custome-style/admin/admincustomer/admincustomer.js') }}"></script>
