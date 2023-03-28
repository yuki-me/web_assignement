@extends('Admin.AdminLayouts.admininclude')
<link rel="stylesheet" href="{{ asset('contant/custome-style/admin/admininvoice/admininvoice.css') }}">
<script src="{{ asset('contant/script/jquery-3.6.3.js') }}"></script>
<script src="{{ asset('contant/script/jquery-ui.js') }}"></script>

<div class="mr_invoice">
    <div class="title">
        <span>Invoices</span>
    </div>

    <div class="invoice_content">
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
                    <th style="width: 20%; text-align: center"><span>Customer Name</span></th>
                    <th style="width: 15%; text-align: center"><span>Date</span></th>
                    <th style="width: 10%; text-align: center"><span>Amount</span></th>
                    <th style="width: 10%; text-align: center"><span>Status</span></th>
                    <th style="width: 7%; text-align: center"><span>Action</span></th>
                </thead>
                <tbody id="tblinv">
                </tbody>
            </table>
        </div>
    </div>

</div>

{{-- Modal Invoice --}}
<div class="modal fade" id="MyInvoiceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="InvoiceModalTitle">Invoice</h5>
                <button type="button" class="btn-close btn-sm" {{-- data-bs-dismiss="modal" aria-label="Close" --}}
                    onclick="closeInvoiceModal()"></button>
            </div>
            <div class="modal-body d-flex">
                <form>
                    <div class="mb-3">
                        <label for="Id" class="form-label form-label-sm">Id</label>
                        <input type="text" class="form-control form-control-sm" id="Id" disabled>
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
                        <label for="Date" class="form-label form-label-sm">Date</label>
                        <input type="text" class="form-control form-control-sm" id="Date"disabled>
                    </div>
                </form>
                <form>
                    <div class="mb-3">
                        <label for="Amount" class="form-label form-label-sm">Amount</label>
                        <input type="text" class="form-control form-control-sm" id="Amount"disabled>
                    </div>

                    <div class="mb-3">
                        <label for="Status" class="form-label form-label-sm">Status</label>
                        <input type="text" class="form-control form-control-sm" id="Status"disabled>
                    </div>
                </form>
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </thead>
                    <tbody id="tblitem">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-sm btn-secondary" {{-- data-bs-dismiss="modal" --}} onclick="closeInvoiceModal()"
                    title="Close">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('contant/custome-style/admin/admininvoice/admininvoice.js') }}"></script>
