@extends('Admin.AdminLayouts.admininclude')
<link rel="stylesheet" href="{{ asset('contant/custome-style/admin/admindashboard/admindashboard.css') }}">
<link rel="stylesheet" href="{{ asset('contant/style/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('contant/style/bootstrap_icon.css') }}">
<link rel="stylesheet" href="{{ asset('contant/style/select2/select2.min.css') }}">
<script src="{{ asset('contant/script/bootstrap.js') }}"></script>
<script src="{{ asset('contant/script/jquery-3.6.3.js') }}"></script>
<script src="{{ asset('contant/script/jquery-ui.js') }}"></script>
{{-- <script src="{{ asset('contant/script/jquery.js') }}"></script> --}}
<script src="{{ asset('contant/style/select2/select2.min.js') }}"></script>
<div class="message_content">
    <div class="header_body">
        <div id="btn-refresh" onclick="RefreshBTN()">
            <i class="bi bi-arrow-clockwise"></i>
            <span>Refresh</span>
        </div>
        <div class="btn-prevnext">
            <div id="btn_prev" class="nonum" title="Previous"><i class="bi bi-arrow-left"></i></div>
            <div class="shownum">
                <span class="fromnum">0</span>
                <span>-</span>
                <span class="tonum">0</span>
                <span>of</span>
                <span class="totalnum">0</span>
            </div>
            <div id="btn_next" class="havenum" title="Next"><i class="bi bi-arrow-right"></i></div>
        </div>
    </div>
    <div class="order_body">
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
            <tbody id="tblorder">
                {{-- <tr>
                    <td style="width: 3%; text-align: center"><span>1</span></td>
                    <td style="width: 10%; text-align: start; padding-left: 5px"><span>1</span></td>
                    <td style="width: 20%; text-align: start; padding-left: 5px"><span>1</span></td>
                    <td style="width: 15%; text-align: start; padding-left: 5px"><span>1</span></td>
                    <td style="width: 10%; text-align: start; padding-left: 5px"><span>1</span></td>
                    <td style="width: 10%; text-align: center"><span>1</span></td>
                    <td style="width: 7%; text-align: center"><span onclick="openOrderModal()"><i
                                class="bi bi-lightning-charge"></i></span></td>
                </tr> --}}
            </tbody>
        </table>
    </div>
</div>

{{-- Modal Order --}}
<div class="modal fade" id="MyOrderModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="OrderModalTitle">Orders</h5>
                <button type="button" class="btn-close btn-sm" {{-- data-bs-dismiss="modal" aria-label="Close" --}}
                    onclick="closeOrderModal()"></button>
            </div>
            <div class="modal-body d-flex">
                {{-- <div class="profileAccount d-flex">
                    <div class="profilePic">
                        <img src="../img/logo.jpg" alt="" style="width: 100%; border-radius: 50%">
                    </div>
                    <div class="profileDetails">
                        <div>
                            <form>
                                <div class="row">
                                    <div class="col fields d-flex align-middle">
                                        <label for="Name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="Name" disabled>
                                    </div>
                                    <div class="col fields d-flex align-middle">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="Enail" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col fields d-flex align-middle">
                                        <label for="Orders" class="form-label">Orders</label>
                                        <input type="text" class="form-control" id="Orders" disabled>
                                    </div>
                                    <div class="col fields d-flex align-middle">
                                        <label for="Amount" class="form-label">Amount</label>
                                        <input type="text" class="form-control" id="Amount" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col fields d-flex align-middle">
                                        <label for="JobTitle" class="form-label">JobTitle</label>
                                        <input type="text" class="form-control" id="JobTitle" disabled>
                                    </div>
                                    <div class="col fields d-flex align-middle">
                                        <label for="Country" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="Country" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col fields d-flex align-middle">
                                        <label for="Province" class="form-label">Province</label>
                                        <input type="text" class="form-control" id="Province" disabled>
                                    </div>
                                    <div class="col fields d-flex align-middle">
                                        <label for="District" class="form-label">District</label>
                                        <input type="text" class="form-control" id="District" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col fields d-flex align-middle">
                                        <label for="Commnues" class="form-label">Commnues</label>
                                        <input type="text" class="form-control" id="Commnues" disabled>
                                    </div>
                                    <div class="col fields d-flex align-middle">
                                        <label for="Villages" class="form-label">Villages</label>
                                        <input type="text" class="form-control" id="Villages" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col fields d-flex align-middle">
                                        <label for="Street" class="form-label">Street</label>
                                        <input type="text" class="form-control" id="Street" disabled>
                                    </div>
                                    <div class="col fields d-flex align-middle">
                                        <label for="House" class="form-label">House</label>
                                        <input type="text" class="form-control" id="House" disabled>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Order Id</th>
                        <th>Date</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </thead>
                    <tbody class="tFavorite">
                        <tr>
                            <td>1</td>
                            <td>#0000001</td>
                            <td>Date</td>
                            <td>5</td>
                            <td>$1200</td>
                            <td>$6000</td>
                            <td><label class="label-control-sm" title="View">View</label></td>
                        </tr>
                    </tbody>
                </table> --}}

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
                <button type="button" class="btn-sm btn-success" style="display: none">
                    <i class="bi bi-check2-square"></i>
                    Complete
                </button>
                <button type="button" class="btn-sm btn-primary">
                    <i class="bi bi-truck"></i>
                    Prepare to Delivery
                </button>
                <button type="button" class="btn-sm btn-secondary" {{-- data-bs-dismiss="modal" --}} onclick="closeOrderModal()"
                    title="Close">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('contant/custome-style/admin/admindashboard/admindashboard.js') }}"></script>
